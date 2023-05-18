@extends('user.main.index')
@section('content')
<div class="container p-30 ">


    <div class="mt-20 items-center">
        @if($errors->any())
        <div class="alert alert-warning">
        @foreach ($errors->all() as $error )
        <div>{{ $error }}</div>
        @endforeach
        </div>

        @endif
    </div>
    <main class="bg-white-500 max-w-full mx-auto p-5 md:my-48   rounded-lg shadow-2xl">
        <form action="{{ url('user/reports/create') }}" method="POST" enctype="multipart/form-data" class="w-full max-w-full mx-auto my-auto">
           @csrf
            <h2 class="text-left text-black text-2xl mt-1 mb-2">
                Student To Reports Info
            </h2>
            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/2 px-3 md:mb-0">

                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid- first-name">
                        Name
                    </label>

                    <select name="students_id" class=" block w-full bg-gray-200 text-gray-700 border focus:outline-none
                        border-b-2 border-red-400 rounded py-3 px-4 mb-3 leading-tight focus:bg-white" id="grid-first-name" type="text">
                        <option>Select</option>
                        @foreach ($students as $student )
                        <option value="{{ $student->id }}">{{ $student->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="w-full md:w-1/2 px-3">
                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid last-name">
                        Violation
                    </label>
                    <div class="relative">
                        <select name="regulation_id"
                            class=" appearance-none block  w-full bg-gray-200 border border-gray-200 text-gray- 700 py-3 px-4 pr-8 rounded
                            leading-tight focus:outline-none focus:bg-white focus:border-gray- 500"
                            id="grid-state">
                            <option>Select</option>
                            @foreach ($regulations as $regulation )
                            <option value="{{ $regulation->id }}">{{ $regulation->name }}</option>
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
            </div>


            <div class="flex flex-wrap -mx-3 mb-2">

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid- city">
                        Image <code>*Evidence</code>
                    </label>
                    <input multiple name="images[]"
                        class=" block w-full bg-gray-200 text-gray-700 border border-gray- 200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-city" type="file">
                </div>



                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid- state">
                        Description
                    </label>
                    <div class="relative">
                        <textarea
                            class=" block w-full bg-gray-200 text-gray-700 border border-gray- 200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-city" type="text" name="description"> </textarea>
                    </div>
                </div>
            </div>

{{-- __________________________________________________________________________________________________________________________ --}}

            <h2 class="text-left text-black text-2xl mt-5">
                Reporters Info
            </h2>
            <div class="flex flex-wrap -mx-3 mb-2 mt-2">


                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">

                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid- city">
                        Reporters Name
                    </label>
                    <input name="name" value=""
                        class=" block w-full bg-gray-200 text-gray-700 border border-gray- 200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-city" type="text">
                </div>




                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid- state">
                        Contact Details
                    </label>
                    <div class="relative">
                        <input
                            class=" block w-full bg-gray-200 text-gray-700 border border-gray- 200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-city" type="text" name="contact_details">
                    </div>
                </div>
                </div>

            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid- city">
                        Grade
                    </label>
                    <input name="grade"
                        class=" block w-full bg-gray-200 text-gray-700 border border-gray- 200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-city" type="text">
                </div>

                <div class="w-full px-3 md:mb-0 mt-4">
                     <button type="submit" class="float-end inline-block text-black bg-green-500 no-underline
             hover:text-gray-800 hover:text-underline py-2 px-4  font-bold rounded-sm lg:mt-0 shadow opacity-75
             focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">Submit</button>
                </div>

            </div>


        </form>
    </main>
</div>

@endsection
