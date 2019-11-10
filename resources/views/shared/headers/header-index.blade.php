
    @if (Route::has('login'))

            <div class="top-right links" style="z-index:100">

                @auth
                    <a href="{{ url('/home') }}">Home</a>
                    <a href="{{ url('/logout') }}">Logout</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif

                @endauth

            </div>

        @endif

