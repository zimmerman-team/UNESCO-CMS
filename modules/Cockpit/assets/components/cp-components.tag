<cp-field>

    <div ref="field" data-is="{ 'field-'+opts.type }" bind="{ opts.bind }" cls="{ opts.cls }"></div>

    <script>

        this.on('mount', function() {
            this.parent.update();
        });

        this.on('update', function() {

            this.refs.field.opts.bind = opts.bind;
            this.refs.field.opts.bind = opts.opts || {};

            if (opts.opts) {
                App.$.extend(this.refs.field.opts, opts.opts);
            }

            this.refs.field.update();
        });

    </script>
</cp-field>

<cp-preloader>

    <div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>

    <style media="screen">

        cp-preloader {
            display: block;
            position: relative;
            width: 40px;
            height: 40px;
        }

        cp-preloader[size="large"] {
            width: 80px;
            height: 80px;
        }

        cp-preloader[size="small"] {
            width: 20px;
            height: 20px;
        }

        cp-preloader > div {
            position: absolute;
            width: 100%;
            height: 100%;
            animation: preloader-rotate-elements 8000ms infinite linear;
        }

        cp-preloader div div {
            border-radius: 50%;
            transform: scale(0.1);
            opacity: 0.1;
        }

        cp-preloader div div:nth-child(1) {
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 50%;
            background: #03A9F4;
            animation: preloader-pulse-elements 1000ms infinite ease alternate;
            animation-delay: 0;
        }

        cp-preloader div div:nth-child(2) {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 50%;
            background: #F44336;
            animation: preloader-pulse-elements 1000ms infinite ease alternate;
            animation-delay: 250ms;
        }

        cp-preloader div div:nth-child(3) {
            position: absolute;
            top: 50%;
            left: 0;
            width: 50%;
            height: 50%;
            background: #8BC34A;
            animation: preloader-pulse-elements 1000ms infinite ease alternate;
            animation-delay: 500ms;
        }

        cp-preloader div div:nth-child(4) {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 50%;
            height: 50%;
            background: #FFC107;
            animation: preloader-pulse-elements 1000ms infinite ease alternate;
            animation-delay: 750ms;
        }

        @keyframes preloader-rotate-elements {
            from { transform: rotate(-180deg); }
            to { transform: rotate(180deg); }
        }

        @keyframes preloader-pulse-elements {
            from {
                top: -50%;
                left: -50%;
                transform: scale(1.0);
                opacity: 0;
            }

            to {
                transform: scale(0.2);
                opacity: 0.8;
            }
        }

    </style>

</cp-preloader>

<cp-preloader-fullscreen>

    <style>

        cp-preloader-fullscreen {
            position: fixed;
            display: flex;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.5);
            z-index: 1000000000000000;
        }
    </style>

    <cp-preloader></cp-preloader>

</cp-preloader-fullscreen>
