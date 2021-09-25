<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class AdminCreateOrderComponent extends Component
{

    public $svalue;

    public function mount()
    {
        $this->svalue = "";
    }

    use WithPagination;


    public function addproduct($product_id, $SKU, $product_name, $product_price) {
        Cart::instance('order')->add($product_id,$product_name,1,$product_price, ['sku'=>$SKU])->associate('App\Models\Product');
        session()->flash('message', 'Item added in Order');
        //return redirect()->route('product.cart');
    }


    public function destroy($rowId){
        Cart::instance('order')->remove($rowId);
        //$this->emitTo('cart-count-component','refreshComponent');
        session()->flash('order_add_message', 'Item has been removed');
    }


    public function destroyAll() {
        Cart::instance('order')->destroy();
        //$this->emitTo('cart-count-component','refreshComponent');
        session()->flash('order_add_message', 'Order has been cleared');
    }


    public function render()
    {
        //echo ($this->svalue);
        if($this->svalue !="")
        {
            $products = Product::where('SKU','like','%'. $this->svalue . '%')->paginate(10);
        }
        else
        {
            $products = Product::paginate(10);
        }

        return view('livewire.admin.admin-create-order-component',['products'=>$products])->layout('layouts.base');
    }
}
