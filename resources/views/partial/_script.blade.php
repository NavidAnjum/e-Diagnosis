<script src={{asset('assets/js/core/jquery.min.js')}} type="text/javascript"></script>
<script src={{asset('assets/js/core/popper.min.js')}} type="text/javascript"></script>
<script src={{asset('assets/js/core/bootstrap-material-design.min.js')}} type="text/javascript"></script>
<script src={{asset('/assets/js/plugins/moment.min.js')}}></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src={{asset('assets/js/plugins/bootstrap-datetimepicker.js')}} type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src={{asset('assets/js/plugins/nouislider.min.js')}} type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src={{asset('assets/js/material-kit.js?v=2.0.7')}} type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        //init DateTimePickers
        materialKit.initFormExtendedDatetimepickers();

        // Sliders Init
        materialKit.initSliders();
    });


    function scrollToDownload() {
        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }

    $(document).ready(function() {
        $('#datatable-buttons').DataTable( {
            initComplete: function () {
                this.api().columns().every( function () {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .appendTo( $(column.footer()).empty() )
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                        } );

                    column.data().unique().sort().each( function ( d, j ) {
                        select.append( '<option value="'+d+'">'+d+'</option>' )
                    } );
                } );
            }
        } );
    } )






    const increment = document.getElementsByClassName('increment');

    for (let i = 0; i < increment.length; i++) {
        increment[i].addEventListener('click', function(){

           let quantity= parseInt(document.getElementById(""+i).innerHTML)+1;

            document.getElementById(""+i).innerHTML = ""+quantity;
            document.getElementById("quantity"+i).value = ""+quantity;
        })
    }

    const decrement = document.getElementsByClassName('decrement');

    for (let i = 0; i < decrement.length; i++) {
        decrement[i].addEventListener('click', function(){

            let quantity= parseInt(document.getElementById(""+i).innerHTML)-1;
            if(quantity<0)
            {
                quantity=0;
            }
            document.getElementById(""+i).innerHTML = ""+quantity;
            document.getElementById("quantity"+i).value = ""+quantity;

        })
    }






    $('#shopping-cart').click(function () {
        document.getElementById("shoppingCart").style.display="block";

        let _token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ route('cart_items') }}",
            type: "GET",
            data: {
                _token: _token
            },
            success: function(data) {
                document.getElementById("shoppingCart").innerHTML=data;
            }
        });
    });

    $(document).on('click','#shopping-cart-hide' ,function()
    {
        document.getElementById("shoppingCart").style.display = "none";

    });


  const add_to_cart_button=document.getElementsByClassName('add-to-cart-buy-now-btn');

    for (let i=0;i<add_to_cart_button.length;i++) {
         add_to_cart_button[i].addEventListener('click', function (event) {
         event.preventDefault();
             let name = document.getElementById("name"+i).value
             let price =  document.getElementById("price"+i).value;
             let type =  document.getElementById("type"+i).value;
             let quantity =  document.getElementById("quantity"+i).value;
             let brand = (document.getElementById("brand"+i))? document.getElementById("brand"+i).value : '';
             let generic = (document.getElementById("generic"+i))? document.getElementById("generic"+i).value : '';
             let dose = (document.getElementById("dose"+i))? document.getElementById("dose"+i).value : '';
             let size = (document.getElementById("size"+i))? document.getElementById("size"+i).value : '';
             let userid=(document.getElementById("user_id"))? document.getElementById("user_id").value : '';
            // let userid=1;
             if(userid==="")
             {
                 alert("Please Login First!")
             }
             else{
                let _token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ route('cart') }}",
                    type: "POST",
                    data: {
                        name: name,
                        brand: brand,
                        price: price,
                        generic: generic,
                        type: type,
                        dose: dose,
                        quantity: quantity,
                        user_id:userid,
                        _token: _token
                    },
                    success: function(data) {
                       alert("Added to cart")
                    }
                });
             }

        })
    }

    //const placeOrderButton=document.getElementById('placeOrderButton');


</script>
