{{-- @dd(auth()->user()->name) --}}
{{-- @include('', ['title' => 'Rules And Regulations']) --}}
@extends('inc.admin.index')
@section('content')
<div class="mt-14 flex flex-row justify-between overflow-x-auto ">
    <h3 class="text-left text-3xl text-black">
        Rules And Regulations
    </h3>
    <a href="{{ url('admin/violations/create') }}" class="float-left text-black bg-green-400 px-4 border hover:bg-green-500  py-1.5 shadow-sm" type="submit">Add</a>

</div>
@if(session('message'))
<div class="mt-10 shadow flex items-center justify-start font-sans overflow-hidden">

        <div class=" bg-white shadow-md rounded p-3 uppercase text-center">
        {{session('message')}}
    </div>
</div>
@endif

    <div class="overflow-x-auto">
        <div class="max-w-screen max-h-screen flex items-center justify-center font-sans overflow-hidden">
            <div class="w-full lg-w-full">
                <div class="bg-white shadow-md rounded my-7 ">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Violation</th>
                                <th class="py-3 px-6 text-left">Status</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray text-sm font-light">

                            @forelse ($regulations as $regulation)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-2 text-left whitespace-nowrap">
                                     {{ $regulation->name }}
                                </td>


                                <td class="py-3 px-7 text-left whitespace-nowrap">

                                </td>

        <td class="flex">
            <a href="{{ url('admin/regulations/'.$regulation->id) }}"class="mt-2 mx-2 px-3 py-1 flex text-sm bg-green-400 hover:bg-green-500 text-center
                rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">Edit</a>


                                </td>
                            </tr>
                            @empty
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                No data found
                            </td>
                            @endforelse
                        </tbody>
                    </table>

                </div>
                {!! $regulations->links() !!}
            </div>
        </div>

    </div>
</div>

{{-- {{ $students->links() }} --}}




@endsection



{{-- @foreach ($headers as $header)
<th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
wire:click="sortBy('{{ strtolower($header) }}')" style="cursor: pointer " ></th>
@endforeach
{{ $header }}
@if($sortBy === strtolower($header))
@if ($sortDirection === 'asc')
<i class="bx bx-up-arrow-alt"></i>
@else
<i class="bx bx-down-arrow-alt"></i> --}}
