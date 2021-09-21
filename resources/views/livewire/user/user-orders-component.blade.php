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
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                    <div class="col-md-6">
                        My Orders
                    </div>
                    <div class="col-md-6">
                        {{-- <a href="{{route('admin.addcategory')}}" class="btn btn-success pull-right">Add New </a> --}}
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
                                <th>Subtotal</th>
                                <th>Discount</th>
                                <th>Tax</th>
                                <th>Total</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Zipcode</th>
                                <th>Status</th>
                                <th>Order Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>${{$order->subtotal}}</td>
                                    <td>${{$order->discount}}</td>
                                    <td>${{$order->tax}}</td>
                                    <td>${{$order->total}}</td>
                                    <td>{{$order->firstname}}</td>
                                    <td>{{$order->lastname}}</td>
                                    <td>{{$order->mobile}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->zipcode}}</td>
                                    <td>{{$order->status}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td>
                                        <a href="{{route('user.orderdetails',['order_id'=>$order->id])}}" class="btn btn-info btn-sm">Details</a>
                                        {{-- <a href="#" onclick="confirm('Delete this Category?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{$category->id}})" style="margin-left: 10px;"><i  class="fa fa-times fa-2x text-danger"></i></a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$orders->links()}}
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
