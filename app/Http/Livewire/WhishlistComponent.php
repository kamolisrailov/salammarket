<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
class WhishlistComponent extends Component
{


    public function removeFromWishlist($product_id)
    {
        foreach(Cart::instance('whishlist')->content() as $witem)
        {
            if($witem->id == $product_id)
            {
                Cart::instance('whishlist')->remove($witem->rowId);
                $this->emitTo('whishlist-count-component','refreshComponent');
            }
        }
    }

    public function moveProductFromWishlistToCart($rowId)
    {
        $item =  Cart::instance('whishlist')->get($rowId);
        Cart::instance('whishlist')->remove($rowId);
        Cart::instance('cart')->add($item->id,$item->name,1,$item->price)->associate('App\Models\Product');
        $this->emitTo('whishlist-count-component','refreshComponent');
        $this->emitTo('cart-count-component','refreshComponent');
    }

    public function render()
    {
        return view('livewire.whishlist-component')->layout("layouts.base");
    }
}
