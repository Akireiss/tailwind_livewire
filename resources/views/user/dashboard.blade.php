@include('layouts.header')
<main class="bg-white-500 max-w-sm mx-auto p-4 md:my-52 my-20 rounded-lg shadow-2xl">
    <section>
        <h2 class="font-bold text-2xl text-center mb-10 mt-6">Report Student</h2>
        {{-- <p class="text-gray-600 pt-2 text-center">Welcome Please Input Your Cread</p> --}}
        <section class="mt-10">
            <form method="POST" action="{{ route('login') }}" class="flex flex-col">
                @csrf


                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="name" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Name</label>
                    <input type="name" name="name"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-2 border-gray-400 px-3">
                        @error('email')
                        <p class="text-red-500 text-xsp-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-3 pt-3 rounded bg-gray-200">
                    <label for="password" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Violation</label>
                    <select name="violation"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-2 border-gray-400 px-3">
                    <option selected>Select A Violation</option>
                    <option value="">2</option></select>

                    @error('password')
                        <p class="text-red-500 text-xsp-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white py-1.5 font-bold shadow-sm">Report</button>
            </form>


        </section>
        </div>
</main>
@include('layouts.footer')
