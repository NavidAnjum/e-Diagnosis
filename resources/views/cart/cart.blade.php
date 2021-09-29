
    <div class="shoppingCart expanded empty responsive" data-reactid=".1fgxbmysjzy.3.0.1">
        <div class="header" data-reactid=".1fgxbmysjzy.3.0.1.0">
            Cart Items<span id="shopping-cart-hide" style="margin-top: 15px;">
                <button class="btn btn-danger btn-sm" style="text-align: center;">X</button></span>
        </div>
    </div>

    @if(isset($carts))
        @for($i=0;$i<count($carts);$i++)
    <div class="scroll_of_items" id="scroll_of_items">
        <div class="panel panel-default" style="border: 1px solid;  background-color: #34e3b3;">
            <div class="product_items_list card">

                    <div class="product_name">
                        {{$carts[$i]->name}}
                    </div>

                    <div class="product_price">
                        {{$carts[$i]->price}}
                    </div>

                    <div class="product_items_list_quantity">
                        {{$carts[$i]->quantity}}
                    </div>

                    <div class="product_remove col-sm-3" onclick="remove_product_from_cart()" alt="164">
                        <button class="btn btn-danger btn-sm m-auto" >X</button>
                    </div>

            </div>
        </div>

        @endfor
        @endif

        <form id="place_order_form" name="place_order_form">
            <div class="shoppingtCartActionButtons">
                <a href="{{ url('/medicine_order_confirmation') }}" class="btn btn-xs btn-info pull-center">Place Order</a>
            </div>
        </form>
    </div>

