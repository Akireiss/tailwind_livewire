@extends('inc.admin.index')
@section('content')


<div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-24">
    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
      <div class="rounded-t mb-0 px-4 py-3 border-0">
        <div class="flex flex-wrap items-center">
          <div class="relative w-full px-4 max-w-full flex-grow flex-1">
            <h3 class="font-semibold text-base text-blueGray-700">Product List</h3>
          </div>
          <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
            <a href="{{'create'}}" class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">Add</a>
          </div>
        </div>
      </div>

      <div class="block w-full overflow-x-auto">
        <table class="items-center bg-transparent w-full border-collapse ">
          <thead>
            <tr>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Product Name
                          </th>
            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Description
                          </th>
             <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                       Price
                          </th>
            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Image
                          </th>

                          <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Manage
                              </th>



            </tr>
          </thead>
@foreach ($categories as $category)
          <tbody>
            <tr>
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700">
              {{ $category->product_name}}  </td>

              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                {{ $category->description}}
              </td>

              <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                {{ $category->price}}
              </td>

              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                <img class="h-16 w-28" src="{{asset('uploads/category/'. $category->image)}}">
              </td>


              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">

                <a href="{{ url('admin/category/'.$category->id.'/show') }}"  class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3
                    py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">Edit</a>



                <form action="admin/category/{{$category->id}}" method="POST" class="flex flex-col">
                    {{-- override the method POST for Put(which is for update method) --}}
                      @method('delete')
                      @csrf
                      <button type="submit" class="bg-red-500 hover:bg-red-700 mt-2 text-white py-1.5 font-bold shadow-sm w-full"
                      type="submit">Delete</button>
                </form>
                @endforeach</td>

            </tr>
          </tbody>

        </table>
      </div>
    </div>
  </div>







@endsection
