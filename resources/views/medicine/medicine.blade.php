@extends('main')
@section('title','| Doctor Vai')
@section('style')

@endsection

@section('content')

            <div class="container-fluid">
                <div class="row" id="full_page">
                 <input type="hidden" name="user_id" id="user_id" value="{{ isset($user_id)?$user_id:"" }}">
                    <div class="col-md-3 medicine-sidebar hidden-xs padding-horizontal home-categories-sidebar no-margin">
                            @include('shop/sidebar')
                    </div>
                    <div class="col-md-9 medicine-sidebar medicine-main-flex col-xs-12 light-padding-top">
                        @if(isset($medicine))

                            @include('shop/med')

                        @endif

                        @if(isset($babycare ))

                            @include('shop/babycare')

                         @endif

                        @if(isset($feminine))

                            @include('shop/feminine')

                            @endif

                            @if(isset($wel))

                                @include('shop/wel')

                            @endif

                            @if(isset($healthbeauty))

                                @include('shop/healthbeauty')

                            @endif

                        @if(isset($other_items))
                            @include('shop/other_items')
                            @endif

                    </div>


                </div>

            </div>

     <div>

 </div>


@endsection

@section('script')

@endsection
