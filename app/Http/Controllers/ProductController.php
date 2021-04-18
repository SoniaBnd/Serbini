<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WooCommerce;
use Order;
 
class ProductController extends Controller  
{
    public function product($myId){

        $product = WooCommerce::find('products/'.$myId);

        $data = [
            'payment_method'       => 'bacs',
            'payment_method_title' => 'Direct Bank Transfer',
            'set_paid'             => true,
            'billing'              => [
                'first_name' => 'John',
                'last_name'  => 'Doe',
                'address_1'  => '969 Market',
                'address_2'  => '',
                'city'       => 'San Francisco',
                'state'      => 'CA',
                'postcode'   => '94103',
                'country'    => 'US',
                'email'      => 'john.doe@example.com',
                'phone'      => '(555) 555-5555',
            ],
            'shipping'             => [
                'first_name' => 'John',
                'last_name'  => 'Doe',
                'address_1'  => '969 Market',
                'address_2'  => '',
                'city'       => 'San Francisco',
                'state'      => 'CA',
                'postcode'   => '94103',
                'country'    => 'US',
            ],
            'line_items'           => [
                [
                    'product_id' => $myId,
                    'quantity'   => 2,
                ],
              /*  [
                    'product_id'   => 127,
                    'variation_id' => 23,
                    'quantity'     => 1,
                ],*/
            ],
        ];
        
        $order = Order::create($data);
     
        return view('products.show', [
            'data' => $product,
            'order_id' => $order
        ]);
    
    }   
    
}
