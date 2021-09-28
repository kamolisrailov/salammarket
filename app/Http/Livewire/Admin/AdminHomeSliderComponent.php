<?php

namespace App\Http\Livewire\Admin;

use App\Models\Homeslider;
use Livewire\Component;

class AdminHomeSliderComponent extends Component
{


    public function deleteSlider($id)
    {
        $category = Homeslider::find($id);
        $category->delete();
        session()->flash('message', 'Homeslider has been deleted successfully!');
    }


    public function render()
    {
        $sliders = Homeslider::all();
        return view('livewire.admin.admin-home-slider-component',['sliders'=>$sliders])->layout('layouts.admin');
    }
}
