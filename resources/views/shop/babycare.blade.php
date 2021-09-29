
<table class="table table-bordered" id="datatable-buttons" style="background-color: #ececec">
    <thead>
    <tr>
        <th>Name</th>
        <th>Brand</th>
        <th>Price</th>
        <th>Type</th>
        <th>Size</th>
        <th>Quantity</th>
        <th></th>

    </tr>

    </thead>


    <?php $text=0;;?>

    @foreach($babycare as $baby)



        <tr>
            <td> {{$baby->name}}


            </td>
            <td> {{$baby->brand}} </td>
            <td> {{$baby->price}} </td>
            <td> {{$baby->type}} </td>
            <td> {{$baby->size}} </td>
            <td>


               <span class="decrement"><i class="fa fa-minus light-padding-horizontal" ></i>
                </span>
                <span id="{!! $text !!}">0</span>
                <span class="increment">
                    <i class="fa fa-plus light-padding-horizontal" ></i>
                </span>


            </td>
            <td>

                <form id="cart_form{!! $text !!}" class="cart_form">
                    @csrf
                <input type="hidden" id="name{!! $text !!}" name="name{!! $text !!}"  value="{{$baby->name}}">
                <input type="hidden" id="brand{!! $text !!}" name="brand{!! $text !!}" value="{{$baby->brand}}">
                <input type="hidden" id="price{!! $text !!}" name="price{!! $text !!}" value="{{$baby->price}}">
                <input type="hidden" id="type{!! $text !!}" name="type{!! $text !!}" value="{{$baby->type}}">
                <input type="hidden" id="size{!! $text !!}" name="size{!! $text !!}" value="{{$baby->size}}">
                <input type="hidden" id="quantity{!! $text !!}" name="quantity{!! $text !!}" value="0">
                <button class="cartbutton{!! $text !!} add-to-cart-buy-now-btn  pdp-button pdp-button_type_text pdp-button_theme_orange pdp-button_size_xl">
                    <span class="pdp-button-text"><span class="" data-spm-anchor-id="a2a0e.pdp.0.i4.349441a8veoAgs">Add to Cart</span>
                    </span>
                </button>
                </form>
            </td>

        </tr>
        <?php $text=$text+1;;?>
    @endforeach

</table>
