@extends('main')
@section('title','| Doctor Vai')

@section('style')

@endsection
@section('content')

    <div class="container">
         <div class="row m-auto " >
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Medicine Name</h5>
                        <p class="card-text">You can search by medicine name.</p>
                        <a href="{{url('medicine_name')}}" class="btn btn-primary">Search</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Brand Name</h5>
                        <p class="card-text">You can search by brand name.</p>
                        <a href="{{url('medicine_name')}}" class="btn btn-primary">Search</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Company Name</h5>
                        <p class="card-text">You can search by company name.</p>
                        <a href="{{url('medicine_name')}}" class="btn btn-primary">Search</a>
                    </div>
                </div>
            </div>

        </div>

    </div>



@endsection

@section('script')


@endsection
