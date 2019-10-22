<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


    {{-- --------------------------------------------------------
    ---- --------------- PAGE HEAD COMPONENT ---------------- ---
    --------------------------------------------------------- --}}
        @include('pages.shared.heads.default-head');
    {{-- ---------------------------------------------------- --}}


    <body>
        <div class="flex-center position-ref full-height">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">

                <div class="title" style="font-size: 34px;">
                    Iterar | Entrepreneurship Learning Patform
                </div>

                <br>
                <br>

                <div class="links">
                    <a href="">ITERAR</a>
                    <a href="">INNOVAR</a>
                    <a href="">DISEÑAR</a>
                    <a href="">ADMINISTAR</a>
                    <a href="">COMERCIALIZAR</a>
                    <a href="">LEGAL</a>
                    <a href="">FINANZAS</a>
                </div>
            </div>
        </div>
    </body>
</html>
