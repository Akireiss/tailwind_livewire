@extends('inc.admin.index')
@section('content')

<div class=" mt-14 flex flex-row justify-between ">
    <h3 class="text-left text-3xl text-black">
        Student Cases
    </h3>
    <a href="{{ url('admin/violations/create') }}" class="float-left text-black bg-green-400 px-4 border hover:bg-green-500  py-1.5 shadow-sm" type="submit">Add</a>

</div>
<div class=" mx-auto mt-6 ">
    <div class="overflow-x-auto">
        <div class="max-w-screen max-h-screen flex items-center justify-center font-sans overflow-hidden">
            <div class="w-full lg-w-full">
                <div class="bg-white shadow-md rounded my-7 ">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Student Name</th>
                                <th class="py-3 px-6 text-left">Violation</th>
                                <th class="py-3 px-6 text-left">Reported Name</th>
                                <th class="py-3 px-6 text-left">Date</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray text-sm font-light">
                        @forelse ($reports as $report )
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-2 text-left whitespace-nowrap">
                                    {{ $report->students->name }}
                                </td>
                                <td class="py-3 px-7 text-left whitespace-nowrap">
                                    {{ $report->regulations->name }}
                                </td>

                                <td class="py-3 px-7 text-left whitespace-nowrap">
                                        @foreach ($report->reporting_parties as $parties )
                                            {{ $parties->name}}
                                        @endforeach

                                </td>
                                <td class="py-3 px-7 text-left whitespace-nowrap">
                                    {{ $report->created_at}}
                                </td>
        <td class="flex">
            <a href=""class="mt-2 mx-2 px-3 py-1 flex text-sm bg-green-400 hover:bg-green-500 text-center
                rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">Edit</a>


                                </td>
                            </tr>

                            @empty
                            <td class="py-3 px-7 text-left whitespace-nowrap">
No Such Reports Exists
                            </td>
                            @endforelse
                        </tbody>
                    </table>

                </div>

            </div>
        </div>

    </div>
</div>
</div>

@endsection
