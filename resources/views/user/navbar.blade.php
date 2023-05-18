
<nav id="header" class="fixed w-full top-0 text-white">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2 ">
        <div class="flex items-center">
            <a class="toggleColour text-green-500 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                <!--Icon from: http://www.potlabicons.com/ -->
                CZCMNHS
            </a>
        </div>
        <div class="block lg:hidden pr-4">
            <button id="nav-toggle"
                class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:mt-0  lg:bg-transparent py-3  text-black lg:p-0 z-20"
            id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                <li
                    class="mr-3 {{ (request()->is('/'))  ? 'inline-block text-white bg-green-500 no-underline hover:text-gray-800 hover:text-underline py-0 px-2  font-bold rounded-full
   lg:mt-0 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out' : '' }}">
                    <a href="{{ url('/') }}" class="inline-block py-2 px-4 text-black no-underline">
                        Home
                    </a>
                </li>

                <li
                class="mr-3 {{ (request()->is('user/report'))  ? 'inline-block text-white bg-green-500 no-underline hover:text-gray-800 hover:text-underline py-0 px-2  font-bold rounded-full
lg:mt-0 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out' : '' }}">
                <a href="{{ url('user/report') }}" class="inline-block py-2 px-4 text-black no-underline">
                    Report
                </a>
            </li>


                @guest
                @if (Route::has('login'))
                <li class="mr-3 {{ (request()->is('login'))  ? 'inline-block text-white bg-green-500 no-underline hover:text-gray-800 hover:text-underline py-0 px-2 font-bold rounded-full
lg:mt-0 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out' : '' }}">
                    <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                        href="{{ route('login') }}">Login</a>
                </li>
                @endif
                @if (Route::has('register'))
                <li
                class="mr-3 {{ (request()->is('register'))  ? 'inline-block text-white bg-green-500 no-underline hover:text-gray-800 hover:text-underline py-0 px-2 font-bold rounded-full
lg:mt-0 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out' : '' }}">
                    <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                        href="{{ route('register') }}">Sign Up</a>
                </li>
                @endif

                @else
                <li class="nav-item dropdown mr-3">
                    <a id="navbarDropdown"
                        class="nav-link dropdown-toggle inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4 "
                        href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>



                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        <a class="dropdown-item" href="/account" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
             Acocount Settings
           </a>




                    </div>
                </li>
                @endguest

            </ul>

        </div>
    </div>
    {{--
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" /> --}}
</nav>
