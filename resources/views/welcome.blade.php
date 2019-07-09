<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">


            <div class="content" style="border-right:1px solid #000">
                <div class="title m-b-md">
                    DEMO
                </div>

                <div class="links">
                    <a href="/generator" target="_blank">代码生成器DEMO</a>
                    <a href="{{ route('doc.index') }}" target="_blank">文档Demo</a>
                    <a href="{{ route('doc.apidoc') }}" target="_blank">api文档Demo</a>
                </div>
            </div>
            <div class="content">
                <div class="title m-b-md">
                    GitHub
                </div>

                <div class="links">
                    <a href="https://github.com/foryoufeng/laravel-generator" target="_blank">laravel-generator</a>
                    <a href="https://github.com/foryoufeng/laravel-doc" target="_blank">laravel-doc</a>
                </div>
            </div>
        </div>
    </body>
</html>
