<!DOCTYPE html>
    <html lang={{ config('app.locale') }}>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA_Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href={{asset('css/app.css')}}>
            <title> {{config('app.name', 'LSAPP')}} </title>
        </head>
        <body>
            @include('inc.navbar')
            <div class="container">
                @include('inc.messages')
                @yield('content')
            </div>
        </body>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
</html>