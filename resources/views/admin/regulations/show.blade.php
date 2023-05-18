@extends('inc.admin.index')
@section('content')



<div class="w-60 mt-10 shadow flex items-center justify-start font-sans overflow-hidden">
    <div class="w-60 lg-w-full">
        <div class=" bg-white shadow-md rounded p-3 uppercase text-center">
            Edit Violations
        </div>
    </div>
</div>

<div class="w-full">
    <div class="flex justify-end">
        <a href="{{ url('admin/violations') }}"
            class=" bg-green-400 px-4 border hover:bg-green-500 text-black py-1.5 shadow-sm"
            type="submit">Back</a>
    </div>

    <main class="bg-white-500 max-w-full  p-5 md:my-12  rounded-lg shadow-2xl">

        <form class="w-full max-w-full mx-auto my-auto" 
        action="{{ url('admin/violations/' .$violations->id) }}" method="POST">
        @csrf
        @method('PUT')


            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/2 px-3 md:mb-0">
                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid- first-name">
                        Violation
                    </label>
                    <input name="regulation_name" class=" block w-full bg-gray-200 text-gray-700 border focus:outline-none
    border-b-2 border-red-400 rounded py-3 px-4 mb-3 leading-tight  focus:bg-white" id="grid-first-name"
     type="text" value="{{ $violations->regulation_name }}">
                          @error('regulation_name')
                        <p class="text-red-500 text-xsp-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-full md:w-1/2 px-3">
                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid last-name">
                        Category
                    </label>
                    <div class="relative">
                        <select name="categories_id"
                            class="appearance-none block  w-full bg-gray-200 border border-gray-200 text-gray- 700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray- 500"
                            id="grid-state">
                            @foreach ($category as $categories )
                            <option value="{{ $categories->id }}" {{ $categories->id == $violations->categories_id ? 'selected' : '' }}> 
                                {{ $categories->category }}</option>
                            @endforeach
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray- 700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20
                20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343
                8z" />
                            </svg>
                        </div>
                    </div>
                </div>
                @error('categories_id')
                <p class="text-red-500 text-xsp-1">{{ $message }}</p>
            @enderror
            </div>
            <div class="flex flex-wrap -mx-3 mb-4">

                <div class="w-full px-3">
                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid- password">
                        Desciption
                    </label>

                    <div class="relative">
                        <textarea name="description"
                            class=" appearance-none block  w-full bg-gray-200 border border-gray-200 text-gray- 700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray- 500"
                            id="grid-state">{{ $violations->description }}
                        </textarea>

                    </div>
                    @error('description')
                    <p class="text-red-500 text-xsp-1">{{ $message }}</p>
                @enderror
                </div>


                <div class="w-full px-3 md:mb-0 mt-4">
                    <button type="submit"
                        class="float-end inline-block text-black bg-green-500 no-underline
         hover:text-gray-800 hover:text-underline py-2 px-4  font-bold rounded-sm lg:mt-0 shadow opacity-75
         focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">Submit</button>
                </div>
            </div>
        </form>
    </main>
</div>
@endsection
