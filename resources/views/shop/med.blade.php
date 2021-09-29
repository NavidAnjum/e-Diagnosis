
{{--<div class="center col-md-3 product-box">--}}
{{--    <div class="product-border-box xs-shadow white-bg transition product-box-562cc4b26f757310e7080000">--}}
{{--        <div class="details-btn-top-left">--}}
{{--            <a class="btn bg-primary details-btn font-bold light-padding" data-toggle="modal" data-target="#productModal" data-product-id="562cc4b26f757310e7080000">--}}
{{--                Details--}}
{{--            </a>--}}
{{--        </div>--}}

{{--        <br>--}}
{{--        <span class="text-md">--}}
{{--    <a class="details-btn clickable" data-toggle="modal" data-target="#productModal" data-product-id="562cc4b26f757310e7080000">--}}
{{--      Antacid max--}}
{{--    </a>--}}
{{--  </span>--}}
{{--        <br>--}}
{{--        <div class="center">--}}
{{--            (Tablet)--}}
{{--        </div>--}}
{{--        30 mg/tablet--}}
{{--        <div class="text-md light-margin-bottom">MRP ৳ 20 (per pata)</div>--}}
{{--        <div class="center">--}}
{{--    <span class="margin-horizontal cartController-change-btns">--}}
{{--      <span class="center">--}}
{{--  <a onclick="updateCartItem('562cc4b26f757310e7080000', '-1', 'products', 'general')" class="product-cartController-count-change-btn btn btn-clear">--}}
{{--    <i class="fa fa-minus light-padding-horizontal"></i>--}}
{{--  </a>--}}
{{--  &nbsp;--}}
{{--  <span class="product-cartController-count-562cc4b26f757310e7080000 product-cartController-count-text context-general">0</span> (pata)--}}
{{--  &nbsp;--}}
{{--  <a onclick="updateCartItem('562cc4b26f757310e7080000', '+1', 'products', 'general')" class="product-cartController-count-change-btn btn btn-clear">--}}
{{--    <i class="fa fa-plus light-padding-horizontal"></i>--}}
{{--  </a>--}}
{{--</span>--}}

{{--    </span>--}}
{{--        </div>--}}

{{--    </div>--}}

{{--</div>--}}



<table class="table table-bordered" id="datatable-buttons" style="background-color: #ececec">
    <thead>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Generic</th>
        <th>Type</th>
        <th>Pieces per pata </th>
        <th>Dose</th>

        <th>Quantity</th>
        <th></th>


    </tr>

    </thead>



    <?php $text=0;?>

@foreach($medicine as $med)

     <tr>
            <td> {{$med->name_of_medicine}} </td>
            <td> {{$med->brand}} </td>
            <td> {{$med->price}} </td>
            <td> {{$med->generic}} </td>
            <td> {{$med->type}} </td>
            <td> {{$med->dose}} </td>
            <td>

                <span class="decrement"><i class="fa fa-minus light-padding-horizontal" ></i>
                </span>
                <span id="{!! $text !!}">0</span>
                <span class="increment">
                    <i class="fa fa-plus light-padding-horizontal" ></i>
                </span>


            </td>

            <td>
{{--                <form id="cart_form{!! $text !!}" class="cart_form" action="{{ route('cart') }}" method="POST">--}}
                    <form id="cart_form{!! $text !!}" class="cart_form">
                    @csrf
                        <input type="hidden" id="name{!! $text !!}" name="name{!! $text !!}" value="{{$med->name_of_medicine}}">
                        <input type="hidden" id="brand{!! $text !!}" name="brand{!! $text !!}" value="{{$med->brand}}">
                        <input type="hidden" id="price{!! $text !!}" name="price{!! $text !!}" value="{{$med->price}}">
                        <input type="hidden" id="generic{!! $text !!}" name="generic{!! $text !!}" value="{{$med->generic}}">
                        <input type="hidden" id="type{!! $text !!}" name="type{!! $text !!}" value="{{$med->type}}">
                        <input type="hidden" id="dose{!! $text !!}" name="dose{!! $text !!}" value="{{$med->dose}}">
                        <input type="hidden" id="quantity{!! $text !!}" name="quantity{!! $text !!}" value="0">
                        <button class="add-to-cart-buy-now-btn  pdp-button pdp-button_type_text pdp-button_theme_orange pdp-button_size_xl">
    {{--                        <button class="add-to-cart-buy-now-btn  pdp-button pdp-button_type_text pdp-button_theme_orange pdp-button_size_xl">--}}

                            <span class="pdp-button-text"><span class="" data-spm-anchor-id="a2a0e.pdp.0.i4.349441a8veoAgs">Add to Cart</span>
                        </span>
                        </button>
                   </form>


            </td>
        </tr>
        <?php $text=$text+1;;?>
    @endforeach

</table>

