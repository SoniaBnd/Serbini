<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WooCommerce;

class OrderController extends Controller
{
    public function product1($myId){

        $product = WooCommerce::find('products/'.$myId);
        return view('products.show', [
            'data' => $product,
           // 'order_id' => $order
        ]);
    }
}