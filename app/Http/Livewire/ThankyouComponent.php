<?php

namespace App\Http\Livewire;
use App\Models\Order;
use Livewire\Component;

class ThankyouComponent extends Component
{

    public $order_id;
    public $email;

    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }




    public function render()
    {
        $order = Order::find($this->order_id);
        $this->email = $order->email;
        return view('livewire.thankyou-component',['email'=>$this->email])->layout("layouts.base");
    }
}
