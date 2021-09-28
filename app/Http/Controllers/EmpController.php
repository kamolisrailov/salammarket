<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use PDF;
class EmpController extends Controller
{
    public function getAllOrders()
    {
        if (Cart::instance('order')->content()->count()>0)
        {
            $orders = Cart::instance('order')->content();
            return view('orders',compact('orders'));
        }
    }

    public function downloadPDF()
    {
        $orders = Cart::instance('order')->content();
        $pdf = PDF::loadView('orders',compact('orders'));
        return $pdf->download('orders.pdf');
    }
}
