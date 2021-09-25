<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0;">
    <div class="row">
        <div class=" panel-heading">
        <div class="col-md-6">
            <h2>Create Order</h2>
        </div>
        </div>
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">

                    {{-- <div class="col-md-6">
                        <a href="{{route('admin.addproduct')}}" class="btn btn-success pull-right">Add New </a>
                    </div> --}}
                    <div class="col-md-12">
                    <div class="search center-section">
                        <div class="wrap-search-form">
                            <form id="form-search-top" name="form-search-top">
                                <input type="text" name="search" value="" placeholder="Поиск по артикулу..." wire:model="svalue">
                                <button form="form-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Artikul</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Stock</th>
                                <th>Price</th>
                                <th>Sale Price</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->SKU}}</td>
                                    <td><img src="{{asset('assets/images/products')}}/{{$product->image}}" width="60"/></td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->stock_status}}</td>
                                    <td>{{$product->regular_price}}</td>
                                    <td>{{$product->sale_price}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{$product->created_at}}</td>
                                    <td></td>
                                    <td>
                                        <a href="#" wire:click.prevent="addproduct({{$product->id}}, '{{$product->SKU}}', '{{$product->name}}', {{$product->regular_price}})"><i  class="fa  fa-caret-square-o-down fa-2x"></i></a>
                                        {{-- <a href="#" onclick="confirm('Delete this Product?') || event.stopImmediatePropagation()" wire:click.prevent="deleteProduct({{$product->id}})" style="margin-left: 10px;"><i  class="fa fa-times fa-2x text-danger"></i></a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$products->links()}}
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class=" panel-heading">
        <div class="col-md-6">
            <h2>Added Products to Order</h2>
        </div>
        </div>
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                    <div class="col-md-6">
                        <a href="#" class="btn btn-warning pull-right" wire:click.event="destroyAll">Delete All </a>
                    </div>

            </div>
        </div>

                <div class="panel-body">
                    @if(Session::has('order_add_message'))
                        <div class="alert alert-success" role="alert">{{Session::get('order_add_message')}}</div>
                    @endif
                    @if(Cart::instance('order')->count()>0)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Artikul</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Stock</th>
                                <th>Price</th>
                                <th>Sale Price</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach (Cart::instance('order')->content() as $item)
                                <tr>
                                    <td>{{$item->model->id}}</td>
                                    <td>{{$item->model->SKU}}</td>
                                    <td><img src="{{asset('assets/images/products')}}/{{$item->model->image}}" width="60"/></td>
                                    <td>{{$item->model->name}}</td>
                                    <td>{{$item->model->stock_status}}</td>
                                    <td>{{$item->model->regular_price}}</td>
                                    <td>{{$item->model->sale_price}}</td>
                                    <td>{{$item->model->category->name}}</td>
                                    <td>{{$item->model->created_at}}</td>
                                    <td></td>
                                    <td>
                                        {{-- <a href="{{route('admin.editproduct',['product_id'=>$product->id])}}"><i  class="fa fa-edit fa-2x"></i></a> --}}
                                        <a href="#" onclick="confirm('Delete this Product?') || event.stopImmediatePropagation()" wire:click.event="destroy('{{$item->rowId}}')" style="margin-left: 10px;"><i  class="fa fa-times fa-2x text-danger"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{$products->links()}} --}}
                </div>
                @else
                <p>Order is empty</p>
                @endif
            </div>
        </div>
    </div>


    </div>
</div>

