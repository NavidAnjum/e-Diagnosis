@extends('main')
@section('title','| Doctor Vai')

@section('style')
    <style>
        #results {
            display: flex;
            flex-wrap: wrap;
        }
        .results:hover {
            box-shadow: 0px 1px 10px 0px gray !important;
            -webkit-box-shadow: 0px 1px 10px 0px gray !important;
            -moz-box-shadow: 0px 1px 10px 0px gray !important;
        }
        .results {
            width: 22%;
            border: 0;
            margin-bottom: 30px;
            margin-top: 30px;
            border-radius: 6px;
            color: rgba(0, 0, 0, 0.87);
            background: #ffffff;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
            margin-left: 3%;
            padding: 1%;
        }
        @media only screen and (max-width: 800px) {

            .results {
                width: 44%;
                border: 0;
                margin-bottom: 30px;
                margin-top: 30px;
                border-radius: 6px;
                font-size: 15px;
                color: rgba(0, 0, 0, 0.87);
                background: #ffffff;
                box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
                margin-left: 6%;
                padding: 1%;
                overflow: auto;
            }
        }
        .results .header
        {
            font-size: 17px;
            font-weight: bold;
        }

    </style>
@endsection
@section('content')

    <div class="container">
            <div class="form-group customfa">
                <i class="fa fa-search" aria-hidden="true"></i>
                <input type="text" class="form-control" id="filter"  placeholder="Search by Medicine Name / Brand Name / Category Name etc">
            </div>


        <div id="results">
            @foreach ($meds as $med)
                <div class="results">
                        <p class="header">{{$med->name}}</p>
                        <p>{{$med->brand_name}}</p>
                        <p>{{$med->dosage_form}}</p>
                        <p>{{$med->company}}</p>
                </div>

            @endforeach
                <div class="d-flex justify-content-center">
                    {!! $meds->links() !!}
                </div>
        </div>

    </div>




@endsection

@section('script')



    <script !src="">
        $("#filter").keyup(function() {
            // Retrieve the input field text and reset the count to zero
            var filter = $(this).val(),
                count = 0;
            // Loop through the comment list
            $('#results div').each(function() {
                // If the list item does not contain the text phrase fade it out
                if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                    $(this).hide();
                    // Show the list item if the phrase matches and increase the count by 1
                } else if(count<12){
                    $(this).show();
                    count++;
                }

            });

        });



    </script>
@endsection
