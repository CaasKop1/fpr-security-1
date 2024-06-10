<!DOCTYPE html>
<html lang="en" class="theme-light">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <x-bulma/>
        <title>FooBarCrud</title>
        <style>
            html, body {
                height: 100%;
            }
            .page-wrapper {
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }
            .content {
                flex: 1;
            }
        </style>
    </head>
    <body>
        <div class="page-wrapper">
            <x-nav.bar/>
            <div class="content">
                {{ $slot }}
            </div>
            <x-footer/>
        </div>
    </body>
</html>
