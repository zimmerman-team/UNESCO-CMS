<?php

$this->module("cockpit")->extend([

    'listAssets' => function($options = []) {

        $assets = $this->app->storage->find('cockpit/assets', $options)->toArray();
        $total  = (!isset($options['skip']) && !isset($options['limit']))
                   ? count($assets)
                   : $this->app->storage->count('cockpit/assets', ($options['filter'] ?? null));

        $this->app->trigger('cockpit.assets.list', [$assets]);

        return compact('assets', 'total');
    },

    'addAssets' => function($files) use($app) {

        $files      = isset($files[0]) ? $files : [$files];
        $finfo      = finfo_open(FILEINFO_MIME_TYPE);
        $assets     = [];
        $created    = time();

        foreach ($files as &$file) {

            // clean filename
            $name = basename($file);

            // clean filename
            $clean = uniqid().preg_replace('/[^a-zA-Z0-9-_\.]/','', str_replace(' ', '-', $name));
            $path  = '/'.date('Y/m/d').'/'.$clean;

            $asset = [
                'path' => $path,
                'title' => $name,
                'mime' => finfo_file($finfo, $file),
                'description' => '',
                'tags' => [],
                'size' => filesize($file),
                'image' => preg_match('/\.(jpg|jpeg|png|gif|svg)$/i', $file) ? true:false,
                'video' => preg_match('/\.(mp4|mov|ogv|webv|wmv|flv|avi)$/i', $file) ? true:false,
                'audio' => preg_match('/\.(mp3|weba|ogg|wav|flac)$/i', $file) ? true:false,
                'archive' => preg_match('/\.(zip|rar|7zip|gz|tar)$/i', $file) ? true:false,
                'document' => preg_match('/\.(txt|htm|html|pdf|md)$/i', $file) ? true:false,
                'code' => preg_match('/\.(htm|html|php|css|less|js|json|md|markdown|yaml|xml|htaccess)$/i', $file) ? true:false,
                'created' => $created,
                'modified' => $created,
                '_by' => $this->app->module('cockpit')->getUser('_id')
            ];

            if (!$asset['mime']) {
                $asset['mime'] = 'unknown';
            }

            if ($asset['image'] && !preg_match('/\.svg$/i', $file)) {

                $info = getimagesize($file);
                $asset['width']  = $info[0];
                $asset['height'] = $info[1];
                $asset['colors'] = [];

                if ($asset['width'] && $asset['height']) {

                    try {
                        $asset['colors'] = \ColorThief\ColorThief::getPalette($file, 5, ceil(($asset['width'] * $asset['height']) / 10000));
                    } catch (\Exception $e) {
                        $asset['colors'] = [];
                    }

                    foreach($asset['colors'] as &$color) {
                        $color = sprintf("#%02x%02x%02x", $color[0], $color[1], $color[2]);
                    }
                }
            }

            // move file
            $stream = fopen($file, 'r+');
            $this->app->filestorage->writeStream("assets://{$path}", $stream);
            fclose($stream);

            $assets[] = $asset;
        }

        if (count($assets)) {
            $this->app->trigger('cockpit.assets.save', [$assets]);
            $this->app->storage->insert('cockpit/assets', $assets);
        }

        return $assets;
    },

    'uploadAssets' => function($param = 'files') {

        $files     = $_FILES[$param] ?? [];
        $uploaded  = [];
        $failed    = [];
        $_files    = [];
        $assets    = [];

        if (isset($files['name']) && is_array($files['name'])) {

            for ($i = 0; $i < count($files['name']); $i++) {

                $_file  = $this->app->path('#tmp:').'/'.$files['name'][$i];

                if (!$files['error'][$i] && move_uploaded_file($files['tmp_name'][$i], $_file)) {

                    $_files[]   = $_file;
                    $uploaded[] = $files['name'][$i];

                } else {
                    $failed[] = $files['name'][$i];
                }
            }
        }

        if (count($_files)) {

            $assets = $this->addAssets($_files);

            foreach ($_files as $file) {
                unlink($file);
            }
        }

        return ['uploaded' => $uploaded, 'failed' => $failed, 'assets' => $assets];
    },

    'removeAssets' => function($assets) {

        $assets = isset($assets[0]) ? $assets : [$assets];

        foreach($assets as &$asset) {

            if (!isset($asset['_id'])) continue;

            if (!isset($asset['path'])) {
                $asset = $this->app->storage->findOne('cockpit/assets', ['_id' => $asset['_id']]);
            }

            if (!$asset) continue;

            $this->app->storage->remove('cockpit/assets', ['_id' => $asset['_id']]);
            $this->app->filestorage->delete('assets://'.trim($asset['path'], '/'));
        }

        $this->app->trigger('cockpit.assets.remove', [$assets]);

        return $assets;
    },

    'updateAssets' => function($assets) {

        $assets = isset($assets[0]) ? $assets : [$assets];

        foreach ($assets as &$asset) {

            $_asset = $this->app->storage->findOne("cockpit/assets", ['_id' => $asset['_id']]);

            if (!$_asset) continue;

            $asset['modified'] = time();
            $asset['_by'] = $this->app->module('cockpit')->getUser('_id');

            $this->app->storage->save("cockpit/assets", $asset);

        }

        return $assets;
    }
]);
