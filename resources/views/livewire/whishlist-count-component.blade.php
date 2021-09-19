<div class="wrap-icon-section wishlist">
    <a href="#" class="link-direction">
        <i class="fa fa-heart" aria-hidden="true"></i>
        <div class="left-info">
            @if (Cart::instance('whishlist')->count()>0)
            <span class="index">{{Cart::instance('whishlist')->count()}} item</span>
            @endif
            <span class="title">Wishlist</span>
        </div>
    </a>
</div>
