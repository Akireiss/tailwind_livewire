<?php

namespace App\Http\Livewire\Admin\System;

use App\Models\Regulations;
use Livewire\Component;

class SystemSettings extends Component
{
    public function render()
    {
        $regulations = Regulations::all();
        return view('livewire.admin.system.system-settings', [
            'regulations' =>$regulations
        ])
                            ->extends('inc.admin.index')
                            ->section('content');
    }
}
