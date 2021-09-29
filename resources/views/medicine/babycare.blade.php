@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('BabyCare') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                                <form method="POST" action="{{ route('babycare') }}">

                                    @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="brand" class="col-md-4 col-form-label text-md-right">Brand</label>

                                    <div class="col-md-6">
                                        <input id="brand" type="text" class="form-control" name="brand" value="" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">

                                <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>

                                    <div class="col-md-6">
                                        <input id="price" type="text" class="form-control" name="price" value="" required autofocus>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="type" class="col-md-4 col-form-label text-md-right">Type</label>

                                    <div class="col-md-6">
                                        <input id="type" type="text" class="form-control" name="type" value="" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Quantity" class="col-md-4 col-form-label text-md-right">Quantity</label>

                                    <div class="col-md-6">
                                        <input id="quantity" type="text" class="form-control" name="quantity" value="" required autofocus>
                                    </div>
                                </div>



                                    <div class="form-group row">
                                        <label for="size" class="col-md-4 col-form-label text-md-right">Size</label>

                                        <div class="col-md-6">
                                            <input id="size" type="text" class="form-control" name="size" value="" required autofocus>
                                        </div>
                                    </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-4 offset-md-6">
                                        <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
                                  </div>
                                </div>


                            </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
