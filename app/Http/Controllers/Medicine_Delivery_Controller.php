<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Medicine_Delivery_Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $price=0;
        $med_name="";
        $med_brand="";
            $med_price="";
            $med_dose="";
            $med_quantity="";
      $user_id=Auth::id();
      $user=User::find($user_id);
      $user_name=$user->name;
      $user_email=$user->email;
      $user_phone=$user->phone_number;

      $carts=$user->cart;
     // dd($carts);
        for ($i=0;$i<count($carts);$i++)
        {
            $price = $price+$carts[$i]->price;
            $med_name=$med_name.'?fa?'.$carts[$i]->name;
            $med_brand=$med_brand.'?fa?'.$carts[$i]->brand;
            $med_price=$med_price.'?fa?'.$carts[$i]->price;
            $med_dose=$med_dose.'?fa?'.$carts[$i]->dose;
            $med_quantity=$med_quantity.'?fa?'.$carts[$i]->quantity;
        }


       $address="Address Line : ".$user->address_line;
       $address=$address.",  "."Thana : ".$user->thana;
       $address=$address.",  "."City : ".$user->city;
       $address=$address.",  "."District : ".$user->district;


        return view('cart.medicine_order_confirmation',["address"=>$address,
            "price"=>$price,
            "user_name"=>$user_name,
            "user_email"=>$user_email,
            "user_phone"=>$user_phone,
            "med_name"=>$med_name,
            "med_brand"=>$med_brand,
            "med_price"=>$med_price,
            "med_dose"=>$med_dose,
            "med_quantity"=>$med_quantity,
            "carts"=>$carts

        ]);
    }

}
