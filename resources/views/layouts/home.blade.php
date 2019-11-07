<!-- Stored in resources/views/layouts/app.blade.php -->

<html>

    <head>
        @yield('head')
    </head>

    <body id="page-top">


        <header class="masthead">
            @yield('header')
        </header>

         <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            @yield('nav')
        </nav>



        <main>
            @yield('main')
        </main>



        <footer class="bg-light py-5">
            @yield('footer')
        </footer>


    </body>
</html>
