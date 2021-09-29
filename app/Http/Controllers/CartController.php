<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\healthbeauty;
use App\Models\other;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Doctrine\Common\Cache\Psr6\get;
use function GuzzleHttp\Promise\all;

class CartController extends Controller
{
    /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function index()
    {

        return view('cart.cart_save');

    }

    public function cart_items()
    {
        if (Auth::user())
        {
            $user_id=Auth::id();
            $carts=DB::table('carts')->where('user_id', '=', $user_id)->get();

            return view('cart.cart')->with('carts',$carts);
        }
        else
        {
            return view('cart.cart');
        }


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check())
        {
          $cart = Cart::create($request->all());
//            $cart = new Cart();
//            $cart->name=$request->name;
//            $cart->brand=$request->brand;
//            $cart->price=$request->price;
//            $cart->generic=$request->generic;
//            $cart->type=$request->type;
//            $cart->dose=$request->dose;
//            $cart->quantity=$request->quantity;
//            $cart->userid=$request->userid;
//            $cart->save();

            return response()->json($cart);
        }
        else
        {
            echo "Please login first";
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

}
