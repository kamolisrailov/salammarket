<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\HomeCategory;
use App\Models\Homeslider;
use App\Models\Product;
use App\Models\Sale;
use Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {


        $sliders = Homeslider::where('status',1)->get();
        $last_products = Product::orderBy('created_at','DESC')->get()->take(8);
        $category = HomeCategory::find(1);
        $cats = explode(',', $category->sel_categories);
        $categories = Category::whereIn('id',$cats)->get();
        $no_of_products = $category->no_of_products;
        $sproducts = Product::where('sale_price','>',0)->inRandomOrder()->get()->take(8);
        $sale = Sale::find(1);

        if(Auth::check())
        {
            Cart::instance('cart')->restore(Auth::user()->email);
            Cart::instance('whishlist')->restore(Auth::user()->email);
        }
        return view('livewire.home-component',
        [
            'sliders'=>$sliders,
            'last_products'=>$last_products,
            'categories'=>$categories,
            'no_of_products'=>$no_of_products,
            'sproducts'=>$sproducts,
            'sale' => $sale
        ])->layout('layouts.base');
    }
}
