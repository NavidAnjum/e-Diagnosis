@extends('main')
@section('title','| Doctor Vai')

@section('style')
    <style>
        .brand
        {
            color: black;
            text-align: right;
        }
    </style>
    @endsection
@section('content')

    <div class="page-header header-filter clear-filter" data-parallax="true"
         style="background-image: url({{asset('assets/img/doc/doctor-bg.jpg')}}); ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand">
                        <h1>সুস্থ আছেন তো?</h1>
                        <h3>বাংলাদেশের চিকিৎসা সেক্টরের একটি অনলাইন গাইডলাইন।</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <!-- 	            end nav tabs -->
        <div class="section section-white">
            <div class="container">
                <!--                 nav pills -->
                <div id="navigation-pills">
                    <div class="title text-center">
                        <h3>Search</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="text-center">
                                <ul class="nav nav-pills nav-pills-icons text-center custom-margin20" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#hospital-1" role="tab" data-toggle="tab">
                                            <i class="material-icons">local_hospital</i>
                                            Hospital
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ route('show_medicine') }}">
                                            <i class="material-icons">medication</i>
                                            Medicine
                                        </a>


                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#doctor-1" role="tab" data-toggle="tab">
                                            <i class="material-icons">medical_services</i>
                                            Doctor
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#clinic-1" role="tab" data-toggle="tab">
                                            <i class="material-icons">hotel</i>
                                            Clinic
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#pharmacies-1" role="tab" data-toggle="tab">
                                            <i class="material-icons">local_pharmacy</i>
                                            Pharmacies
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#blood-1" role="tab" data-toggle="tab">
                                            <i class="material-icons">bloodtype</i>
                                            Blood Bank
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content tab-space">
                                    <div class="tab-pane " id="medicine-1">
                                        Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                                        <br><br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                    </div>
                                    <div class="tab-pane" id="doctor-1">
                                        Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                                        <br><br>Dynamically innovate resource-leveling customer service for state of the art customer service.
                                    </div>
                                    <div class="tab-pane" id="clinic-1">
                                        Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                                        <br><br>Dynamically innovate resource-leveling customer service for state of the art customer service.
                                    </div>
                                    <div class="tab-pane" id="pharmacies-1">
                                        Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                                        <br><br>Dynamically innovate resource-leveling customer service for state of the art customer service.
                                    </div>
                                    <div class="tab-pane" id="blood-1">
                                        Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                                        <br><br>Dynamically innovate resource-leveling customer service for state of the art customer service.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--                 end nav pills -->
            </div>
        </div>
    </div>


    <!-- Classic Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link">Nice Button</button>
                    <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    @endsection

@section('script')

    @endsection
