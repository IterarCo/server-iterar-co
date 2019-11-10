<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
            @yield('head')
    </head>

    <body>

        <div class="flex-center position-ref full-height">

            <header>
                @yield('header')
            </header>

            <main>
                @yield('main')
            </main>

            <footer>
                @yield('footer')
            </footer>

        </div>

    </body>
</html>
