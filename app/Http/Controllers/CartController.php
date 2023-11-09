<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class CartController extends Controller
{
    public function count(Request $request){

//  dd($request);
                     
    $request->session()->push('arr', $request->input('item'));
    $values = array_count_values($request->session()->get('arr'));
    $request->session()->put('items_count', count($values));
    return redirect()->route('catalog');       
    }//

    public function show(Request $request){
    
    $products = DB::table('products')->get()->toArray();
    $values = array_count_values($request->session()->get('arr'));
    return view('show_cart', ['values' => $values, 'products' => $products]);
        
    }//

    public function del(Request $request){
    $values = $request->session()->get('arr');
    foreach($values as $key=>$value){
    if ($value == $request->input('del'))
    unset($values[$key]);
    }
    $request->session()->put('arr', $values);
    $products = DB::table('products')->get()->toArray();
    $values = array_count_values($request->session()->get('arr'));
    $request->session()->put('items_count', count($values));   
    return view('show_cart', ['values' => $values, 'products' => $products]);
    }

    public function order(Request $request){
    return view('order');            
    }

    public function order_finish(Request $request){
        
        $order = new Order();
        $order->tel = $request->input('phone');
        $order->name = $request->input('name');
        $order->street = $request->input('street');
        $order->house = $request->input('house');
        $order->appart = $request->input('apart');
        $order->city = $request->input('city');
        $order->index = $request->input('postel');
        $day = $request->input('date');
        $time = $request->input('time');

        $date = $day." ".$time;
        $products = DB::table('products')->get()->toArray();
        $items = $request->session()->get('arr');
        $values = array_count_values($request->session()->get('arr'));
        $json = json_encode($values);
        $totalprice = 0;
        foreach ($products as $prd){
            foreach ($items as $item){
            if ($item == $prd->id)
            $totalprice += $prd->price;
            }            
        }
        $order->totalprice = $totalprice;
        $order->order = $json;
        $order->day = $day;
        $order->time = $time;
        $order->save();
        $request->session()->flush();
        return view('end', ['number_order' => $order->id, 'date' => $date, 'total_price' => $totalprice]);            
        }
            
}


