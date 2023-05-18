
<div>

    <div class="pt-20">
        @if(session()->has('message'))
        <div class="bg-green-400 border-1-4 border-green-500 text-white p-4" role="alert">
            <p>{{ session('message') }}</p>
        </div>
        @endif

        <div class="flex flex-col justify-center text-center space-x-0 space-y-0 md:flex-row md:space-x-1 ">



            <div class="flex flex-col text-left space-y-0 md:w-2/5 md:space-y-6">

                <div class="max-w-xl shadow-xl rounded-lg bg-gray-50 space-y-8 p-14 ">
                    <h3 class="text-left mt-6 text-2xl">
                        Update Account
                    </h3>
                    <div class="mb-6 pt-3 rounded bg-gray-100">
                        <label for="email" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Email</label>
                        <input type="email" name="email" class="bg-gray-100 rounded w-full text-gray-500 focus:outline-none
border-b-2 border-gray-400 px-3" value="{{auth()->user()->name}}">
                    </div>

                    <div class="mb-6 pt-3 rounded bg-gray-100">
                        <label for="email" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Password</label>
                        <input type="password" name="email" class="bg-gray-100 rounded w-full text-gray-500 focus:outline-none
border-b-2 border-gray-400 px-3"  value=".......">
                    </div>
                    <div class="mt-6  float-end ">
                        <button class="py-2 px-4 bg-green-400 text-center hover:bg-green-500 shadow-xl">
                            Update
                        </button>
                    </div>

                </div>
            </div>
            {{-- _______________________________________ --}}





            <div class="flex flex-col text-left align-center md:w-3/5">

                <div class="max-w-full  shadow-xl rounded-lg bg-gray-50 space-y-0 px-16 py-12 md:space-y-2  ">

                    <form wire:submit.prevent="register">
                    <h3 class="text-left mt-6 text-2xl">
                        Create Account
                    </h3>

                    <div class="flex flex-col  text-left md:flex-row md:space-x-12 max-w-full">
                    <div class="mb-6 pt-3 rounded bg-gray-100 md:w-1/2">
                        <label for="name" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Name</label>
                        <input wire:model="name" type="text" name="name" class=" bg-gray-100 rounded w-full text-gray-500 focus:outline-none border-b-2 border-gray-400 px-3 @error('name') is-invalid @enderror">
@error('name')
<p class="text-red-500 text-xsp-1">{{ $message }}</p>
@enderror
                    </div>

                    <div class="mb-6 pt-3 rounded bg-gray-100 md:w-1/2">
                        <label for="email" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Email</label>
                        <input wire:model="email" type="email" name="email" class="bg-gray-100 rounded w-full text-gray-500 focus:outline-none
border-b-2 border-gray-400 px-3 @error('email') is-invalid @enderror">

@error('email')
<p class="text-red-500 text-xsp-1">{{ $message }}</p>
@enderror
                    </div>
                    </div>

                    <div class="flex flex-col  text-left md:flex-row md:space-x-12 max-w-full">

                    <div class="mb-6 pt-3 rounded bg-gray-100 md:w-1/2">
                        <label for="password" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Password</label>
                        <input wire:model="password" type="password" name="password" class="bg-gray-100 rounded w-full text-gray-500 focus:outline-none
border-b-2 border-gray-400 px-3 @error('password') is-invalid @enderror">
@error('password')
<p class="text-red-500 text-xsp-1">{{ $message }}</p>
@enderror
                    </div>

                    <div class="mb-6 pt-3 rounded bg-gray-100 md:w-1/2">
                        <label for="password_confirmation" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Repeat Password</label>
                        <input wire:model="password_confirmation" type="password" name="password_confirmation" class="bg-gray-100 rounded w-full text-gray-500 focus:outline-none
border-b-2 border-gray-400 px-3 @error('password_confirmation') is-invalid @enderror">
@error('password_confirmation')
<p class="text-red-500 text-xsp-1">{{ $message }}</p>
@enderror
                    </div>

                </div>

                <div class="mb-6 pt-3 rounded bg-gray-100 max-w-full">
                    <label for="email" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Role</label>
                    <select wire:model="role_as" name="role_as" class="bg-gray-100 rounded w-full text-gray-500 focus:outline-none
border-b-2 border-gray-400 px-3 @error('role_as') is-invalid @enderror">
                  <option value="0">User</option>
                  <option value="1">Admin</option>
                    </select>
                    @error('role_as')
<p class="text-red-500 text-xsp-1">{{ $message }}</p>
@enderror
                </div>


                    <div class="float-end ">
                        <button wire:click.prevent="register" class="py-2 px-4 bg-green-400 text-center hover:bg-green-500 shadow-xl">
                            Create
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

</div>
<div class="mt-6">


{{-- Add Academic Year | For Every year it will be back to 0 --}}
<div class="mb-3 flex-justify-between items-center">
    <div class="w-1/3">
    <input wire:model="search" type="text" class="form-input w-full" placeholder="Search" >
    </div>


<select name="" id="" class="form-select" wire:model="perPage" >
    <option value="1">10</option>
    <option value="2">25</option>
    <option value="3">50</option>
</select>
</div>
</div>

<table class="min-w-full table-auto">
    <thead>
        <tr>
            <th class="px-4 py-2 cursor-pointer" wire:click="sortBy('name')">Name</th>
            <th class="px-4 py-2 cursor-pointer" wire:click="sortBy('email')">Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($accounts as $account )
            <tr>
                <td class="border px-4 py-2">{{ $account->name }}</td>
                <td class="border px-4 py-2">{{ $account->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-3">
    {{ $accounts->links() }}
</div>
