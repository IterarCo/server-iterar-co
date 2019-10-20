<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('pages\shared\head');

    <body>
        @include('pages\page-admin\page-admin-login\admin-login')
    </body>

</html>
