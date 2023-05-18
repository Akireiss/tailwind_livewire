@include('inc.includes.header')
@include('user.navbar')
<main class="bg-white-500 max-w-sm mx-auto p-4 md:my-52 my-20 rounded-lg shadow-2xl">
    <section>
        <h3 class="font-bold text-2xl text-center mb-10 mt-6">Login</h3>
        {{-- <p class="text-gray-600 pt-2 text-center">Welcome Please Input Your Cread</p> --}}
        <section class="mt-10">
            <form method="POST" action="{{ route('login') }}" class="flex flex-col">
                @csrf


                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="email" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Email</label>
                    <input type="email" name="email"
  class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none
   border-b-2 border-gray-400 px-3"
                        placeholder="example@gmail.com">
                        @error('email')
                        <p class="text-red-500 text-xsp-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-3 pt-3 rounded bg-gray-200">
                    <label for="password" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Password</label>
                    <input type="password" name="password"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-2 border-gray-400 px-3">
                    @error('password')
                        <p class="text-red-500 text-xsp-1">{{ $message }}</p>
                    @enderror
                </div>

             <a href="{{ url('/register') }}" class="text-black text-xsp-4 mb-2">Don't have an account?<span class="underline text-blue-500 text-xsp-4"> Register</span></a>
             <a href="{{ url('verify') }}" class="text-black text-xsp-4 mb-3">Forget Password?<span class="underline text-blue-500 text-xsp-4"> Recover</span></a>
                <button type="submit" class="bg-black  hover:bg-green-600 text-white py-1.5 font-bold shadow-sm"
                    type="submit">Login</button>
            </form>
        </section>
        </div>
</main>
@include('inc.includes.footer')
