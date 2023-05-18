<?php

namespace App\Http\Livewire\Admin\UserManage;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class Settings extends Component
{
    use WithPagination;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $role_as  = '1';

//from another table
    public $perPage = '';
    public $sortField = 'name';
    public $sortAsc = true;
    public $search = '';


    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|confirmed',
        'role_as' => 'required|boolean'
    ];

    public function register()
    {
        $validatedData = $this->validate();

        $user = $this->createUser($validatedData);
        $this->reset();
        session()->flash('message', 'Registration Succesfull');
    }

    protected function createUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_as' => $data['role_as'] == 1 ? true : false,
        ]);
    }

    //For the table

    public function render()
    {
        $accounts = User::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate($this->perPage);
             return view('livewire.admin.user-manage.index', [
            'accounts' => $accounts
        ])
            ->extends('inc.admin.index')
            ->section('content');
    }

    public function sortBy($field)
    {
        if ($this->sortField === $search) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortField = $field;
            $this->sortAsc = true;
        }
    }
}
