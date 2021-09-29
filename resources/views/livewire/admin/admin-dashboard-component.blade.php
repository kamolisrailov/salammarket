{{-- <div class="content">
    <style>
        .content {
          padding-top: 40px;
          padding-bottom: 40px;
        }
        .icon-stat {
            display: block;
            overflow: hidden;
            position: relative;
            padding: 15px;
            margin-bottom: 1em;
            background-color: #fff;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        .icon-stat-label {
            display: block;
            color: #999;
            font-size: 13px;
        }
        .icon-stat-value {
            display: block;
            font-size: 28px;
            font-weight: 600;
        }
        .icon-stat-visual {
            position: relative;
            top: 22px;
            display: inline-block;
            width: 32px;
            height: 32px;
            border-radius: 4px;
            text-align: center;
            font-size: 16px;
            line-height: 30px;
        }
        .bg-primary {
            color: #fff;
            background: #d74b4b;
        }
        .bg-secondary {
            color: #fff;
            background: #6685a4;
        }

        .icon-stat-footer {
            padding: 10px 0 0;
            margin-top: 10px;
            color: #aaa;
            font-size: 12px;
            border-top: 1px solid #eee;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="icon-stat">
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Total Revenue</span>
                    <span class="icon-stat-value">${{$totalRevenue}}</span>
                  </div>
                  <div class="col-xs-4 text-center">
                    <i class="fa fa-dollar icon-stat-visual bg-primary"></i>
                  </div>
                </div>
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o"></i> Updated Now
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="icon-stat">
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Total Sales</span>
                    <span class="icon-stat-value">{{$totalSales}}</span>
                  </div>
                  <div class="col-xs-4 text-center">
                    <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
                  </div>
                </div>
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o"></i> Updated Now
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="icon-stat">
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Today Revenue</span>
                    <span class="icon-stat-value">${{$todayRevenue}}</span>
                  </div>
                  <div class="col-xs-4 text-center">
                    <i class="fa fa-dollar icon-stat-visual bg-primary"></i>
                  </div>
                </div>
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o"></i> Updated Now
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="icon-stat">
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Today Sales</span>
                    <span class="icon-stat-value">{{$todaySales}}</span>
                  </div>
                  <div class="col-xs-4 text-center">
                    <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
                  </div>
                </div>
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o"></i> Updated Now
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Latest Order
                    </div>
                    <div class="panel-body">
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
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)

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
                                            <a href="{{route('admin.orderdetails',['order_id'=>$order->id])}}" class="btn btn-info btn-sm">Details</a>
                                            {{-- <a href="#" onclick="confirm('Delete this Category?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{$category->id}})" style="margin-left: 10px;"><i  class="fa fa-times fa-2x text-danger"></i></a> --}}
                                        </td>
{{--
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div>
    </div>
</div> --}}

<div class="row">
        <h1 class="page-header">Главная</h1>
</div>
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-money fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">${{$totalRevenue}}</div>
                        <div>Общий доход</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">Подробнее</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{$totalSales}}</div>
                        <div>Общие Продажи</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">Подробнее</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">${{$todayRevenue}}</div>
                        <div>Доход Сегодня</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">Подробнее</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{$todaySales}}</div>
                        <div>Продажи Сегодня</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">Подробнее</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>





    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Последние заказы
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Total</th>
                                    <th>First Name</th>
                                    <th>Mobile</th>
                                    <th>Status</th>
                                    <th>Order Date</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)

                                        <td>{{$order->id}}</td>

                                        <td>${{$order->total}}</td>
                                        <td>{{$order->firstname}}</td>
                                        <td>{{$order->mobile}}</td>
                                        <td>{{$order->status}}</td>
                                        <td>{{$order->created_at}}</td>
                                        <td>
                                            <a href="{{route('admin.orderdetails',['order_id'=>$order->id])}}" class="btn btn-info btn-sm">Details</a>
                                            {{-- <a href="#" onclick="confirm('Delete this Category?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{$category->id}})" style="margin-left: 10px;"><i  class="fa fa-times fa-2x text-danger"></i></a> --}}
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
        {{-- <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Bordered Table
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive table-bordered">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div> --}}
        <!-- /.col-lg-6 -->
    </div>

















