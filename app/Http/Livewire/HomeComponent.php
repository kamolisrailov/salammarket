<?php

namespace App\Http\Livewire;

use App\Models\Homeslider;
use App\Models\Product;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {


        $sliders = Homeslider::where('status',1)->get();
        $last_products = Product::orderBy('created_at','DESC')->get()->take(8);

        return view('livewire.home-component',['sliders'=>$sliders, 'last_products'=>$last_products])->layout('layouts.base');
    }
}
