<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;


class AdminViewOrderComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-view-order-component')->layout('layouts.base');
    }
}
