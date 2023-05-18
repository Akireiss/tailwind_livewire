@extends('inc.admin.index')
@section('content')


<!-- component -->
<div class=" px-96 h-100  bg-gray-100 flex items-center justify-center">
    <div class="container max-w-screen-lg mx-auto">
        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
          <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
            <div class="text-gray-600">
              <p class="font-medium text-lg">Edit Details</p>
            </div>

            <form action="{{ url('admin/category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

            <div class="lg:col-span-5">
              <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                <div class="md:col-span-5">
                  <label for="producty_name">Product Name</label>
  <input type="text" name="product_name" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$category->product_name}}" />
                </div>

                <div class="md:col-span-5">
                  <label for="description">Description</label>
   <input type="text" name="description" id="description" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$category->description}}"/>
                </div>


        <div class="md:col-span-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-2" for="product_image">Product Image</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none
                dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file" name="image">
                <img class="mt-2 h-16 w-28" src="{{asset('uploads/category/'. $category->image)}}">
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-300 mb-1" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
            </div>


                <div class="md:col-span-5">
                  <label for="price">Price</label>
                  <input type="text" name="price" id="price" class="h-10 border mb-2 rounded px-4 w-full bg-gray-50" value="{{$category->price}}" placeholder="" />
                </div>
                  </div>
                </div>

                <div class="md:col-span-5 text-right">
                  <div class="inline-flex items-end">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Submit</button>
                  </div>
                </div>
            </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
