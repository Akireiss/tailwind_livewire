@include('inc.includes.header')
@include('user.navbar')
<main class="bg-white-300 max-w-sm mx-auto md:my-52 p-4 my-20 rounded-lg shadow-2xl">
    <section>
        <h3 class="font-bold text-2xl text-center">Sign Up</h3>
        {{-- <p class="text-gray-600 pt-2 text-center">Create Account</p> --}}
        <section class="mt-10">
            <form action="{{ route('register') }}"" method="POST" class="flex flex-col">
                {{-- for website safety --}}
                @csrf
                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="name"
                        class="block text-grey-700 text-sm font-bold mb-2 ml-3">{{ __('Name') }}</label>
                    <input type="text" name="name"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-2 border-gray-400 px-3"
                        required value="{{ old('name') }}" required autocomplete="name">
                    @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="email"
                        class="block text-grey-700 text-sm font-bold mb-2 ml-3">{{ __('Email') }}</label>
                    <input type="email" name="email"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-2 border-gray-400 px-3"
                        value="{{ old('email') }}"required autocomplete="name">
                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="password"
                        class="block text-grey-700 text-sm font-bold mb-2 ml-3">{{ __('Password') }}</label>
                    <input type="password" name="password"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-2 border-gray-400 px-3"
                        required autocomplete="new-password">
                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="password_confirmation"
                        class="block text-grey-700 text-sm font-bold mb-2 ml-3">{{ __('Confirm Password') }}</label>
                    <input type="password" name="password_confirmation"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-2 border-gray-400 px-3">
                    @error('password_confimation')
                        <p class="text-red-500 text-xs mt-2" required autocomplete="new-password">{{ $message }}</p>
                    @enderror
                </div>
                <a href="{{ url('/login') }}" class="text-black text-xsp-4 mb-3">Already have an account?<span
                        class="underline text-blue-500 text-xsp-4"> Login</span></a>

                <button class="bg-green-500 hover:bg-green-600 text-white py-1.5 font-bold shadow-sm"
                    type="submit">Register</button>
            </form>


        </section>

    </section>



    @include('inc.includes.footer')
