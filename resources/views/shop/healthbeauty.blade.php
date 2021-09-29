
<table class="table table-bordered" id="datatable-buttons" style="background-color: #ececec">
    <thead>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Generic</th>
        <th>type</th>
        <th>Quantity</th>

        <th></th>
    </tr>

    </thead>


    <?php $text=0;;?>

    @foreach($healthbeauty as $healthbeauty)
        <tr>
            <td> {{$healthbeauty->name}} </td>
            <td> {{$healthbeauty->price}} </td>
            <td> {{$healthbeauty->generic}} </td>
            <td> {{$healthbeauty->type}} </td>
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
                    <input type="hidden" id="name{!! $text !!}" name="name{!! $text !!}" value="{{$healthbeauty->name}}">
                    <input type="hidden" id="price{!! $text !!}" name="price{!! $text !!}" value="{{$healthbeauty->price}}">
                    <input type="hidden" id="generic{!! $text !!}" name="generic{!! $text !!}" value="{{$healthbeauty->generic}}">
                    <input type="hidden" id="type{!! $text !!}" name="type{!! $text !!}" value="{{$healthbeauty->type}}">
                    <input type="hidden" id="quantity{!! $text !!}" name="quantity{!! $text !!}" value="0">
                    <button class="add-to-cart-buy-now-btn  pdp-button pdp-button_type_text pdp-button_theme_orange pdp-button_size_xl">
                    <span class="pdp-button-text"><span class="" data-spm-anchor-id="a2a0e.pdp.0.i4.349441a8veoAgs">Add to Cart</span>
                    </span>
                    </button>
                </form>
            </td>
        </tr>
        <?php $text=$text+1;;?>
    @endforeach

</table>
