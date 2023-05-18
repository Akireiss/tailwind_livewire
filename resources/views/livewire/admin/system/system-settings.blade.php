<div>
<div class="pt-16 ">
    @if(session()->has('message'))
    <div class="bg-green-400 border-1-4 border-green-500 text-white p-4" role="alert">
        <p>{{ session('message') }}</p>
    </div>
    @endif


    <div class="flex flex-col justify-center text-center space-x-0 space-y-0 md:flex-row md:space-x-1 md:space-y-4">
        <div class="flex flex-col text-left space-y-0 md:w-3/5 md:space-y-6">

            <div class="flex flex-row justify-between overflow-x-auto ">
                <h3 class="text-left text-3xl text-black">
                    Rules And Regulations
                </h3>
                <a href="{{ url('admin/violations/create') }}" class="float-left text-black bg-green-400 px-4 border hover:bg-green-500  py-1.5 shadow-sm" type="submit">Add</a>

            </div>

            <div class="overflow-x-auto">
                <div class="max-w-screen max-h-screen flex items-left justify-center font-sans overflow-hidden">
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
                        {{-- {!! $regulations->links() !!} --}}
                    </div>
                </div>

            </div>

        </div>
        </div>
</div>
</div>
