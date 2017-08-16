@extends('layouts.web')

@section('content')

@include('layouts.partials.home_slider')

        <section class="bar background-white">
            <div class="container">
                <div class="col-md-12">


                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-info"></i>
                                </div>
                                <h3>About</h3>
                                <p>Layus Investment Company limited was established and incorporated in 1997 as the manufacturer of pharmaceutical products as core producer of household products with trade name “CACATIN”</p>
                                <p class="read-more"><a href="{{ url('about-us') }}" class="btn btn-template-main">Continue reading</a>
                                    </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                                <h3>Vision</h3>
                                <p>take over the leading market position in the segment of cosmetic care products on the Nigeria market and other markets in West African and beyond - to become the first choice of end users as well as professional users</p>
                                <p class="read-more"><a href="{{ url('about-us') }}" class="btn btn-template-main">Continue reading</a>
                                    </p>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <h3>Mission</h3>
                                <p>We strive for a pleasant working environment and do our best to contribute to the welfare or our local, as well as, the broader community.Our socially responsible stance is reflected by our support for a number of ...</p>
                                <p class="read-more"><a href="{{ url('about-us') }}" class="btn btn-template-main">Continue reading</a>
                                    </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="bar background-pentagon no-mb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h2>Testimonials</h2>
                        </div>

                        <p class="lead">We have sold our products to many buyers and we always like to hear they are happy and satisfied. Have a look what our clients said about us.</p>


                        @include('layouts.partials.testimonials')
                    </div>

                </div>
            </div>
        </section>
        <!-- /.bar -->

        <section class="bar background-image-fixed-2 no-mb color-white text-center">
            <div class="dark-mask"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="icon icon-lg"><i class="fa fa-file-code-o"></i>
                        </div>
                        <h3 class="text-uppercase">Do you want to try our products?</h3>
                        <p class="lead">We have distibutors and resellers accross and outside Nigeria</p>
                        <p class="text-center">
                            <a href="#" class="btn btn-template-transparent-black btn-lg">Check for nearby seller</a>
                        </p>
                    </div>

                </div>
            </div>
        </section>


        <!-- *** GET IT *** -->

        <div id="get-it">
            <div class="container">
                <div class="col-md-8 col-sm-12">
                    <h3>You can be a distibutor!</h3>
                </div>
                <div class="col-md-4 col-sm-12">
                    <a href="{{ url('contact-us')}}" class="btn btn-template-transparent-primary">Contact us now</a>
                </div>
            </div>
        </div>


        <!-- *** GET IT END *** -->

@endsection