<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title') | Implementos deportivos</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="_token" content="{!! csrf_token() !!}" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    </head>
    <body style="background: #80808066;">
        @yield('content')

        @yield('scripts')
    </body>
</html>
