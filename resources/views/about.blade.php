@extends('layouts.web')

@section('content')



        <div id="heading-breadcrumbs" class="no-mb">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>About us</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="{{ url("/") }}">Home</a>
                            </li>
                            <li>About</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>


        <div id="content">
            <div class="container">

                <section>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="heading">
                                <h2>About Layus Investment Company Limited</h2>
                            </div>

                            <p class="lead">Layus Investment Company limited was established and incorporated in 1997 as the manufacturer of pharmaceutical products as core producer of household products with trade name “CACATIN” .The business has the potential to grow and compete favourably with multinational companies of today.
In view of the manufacturing nature of the business which involves the transformation of raw materials into various finished goods .The finished goods is then marketed by the company marketing crews to the middle men such as distributors scattered over the west and northern part of Nigeria and Uganda in north Africa, retailers and also to the final consumer via the sales promotion teams. At the moment effort is being made to penetrate into other West Africa countries.
</p>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="panel-group accordion" id="accordionThree">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

                                                <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse3a">

                                                    Mission

                                                </a>

                                            </h4>
                                    </div>
                                    <div id="collapse3a" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="img/mission.jpg" alt="" class="img-responsive">
                                                </div>
                                                <div class="col-md-8">
                                                    <p>As the Sole own drugs and cosmetic establishment we have consistently met the desires, needs and expectations of end and professional users (cosmetic and drugs) with high-quality cosmetic products and services for more than 10 years. We build and maintain partner relationships with our consumers as well as all other stakeholders based on trust and reciprocity. We strive for a pleasant working environment and do our best to contribute to the welfare or our local, as well as, the broader community. Our socially responsible stance is reflected by our support for a number of sports, cultural, educational and humanitarian organisations and projects. Being aware of our environmental responsibility, we take particular care to preserve the natural world by continuously striving to improve the environmental aspects of our business operations and with rational use of energy, raw materials and other natural resources.
“Cacatin” is a synonym for an effective, natural, trustworthy user- and environment-friendly brand.</p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

                                                <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse3b">

                                                    Vision

                                                </a>

                                            </h4>
                                    </div>
                                    <div id="collapse3b" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="img/vision.jpg" alt="" class="img-responsive">
                                                </div>
                                                <div class="col-md-8">
                                                        <p>By ceaselessly developing high-quality, natural, innovative cosmetic products and drugs     friendly to the user and environment we aim to:
                                                                <ul>
                                                                    <li>take over the leading market position in the segment of cosmetic care products on the Nigeria market and other markets in West African and beyond</li><li>to become the first choice of end users as well as professional users</li>
                                                                <li>increase our market share and corporate reputation in our other existing markets, and</li>
                                                                <li>to break into new markets within and beyond.</li>
                                                                </ul>
                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

                                                <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse3c">

                                                    Values

                                                </a>

                                            </h4>
                                    </div>
                                    <div id="collapse3c" class="panel-collapse collapse">
                                        <div class="panel-body">

                                        <div class="row">
                                                <div class="col-md-4">
                                                    <img src="img/values.jpeg" alt="" class="img-responsive">
                                                </div>
                                                <div class="col-md-8">
                                                        <p>Our business operation is guided by the following values:
                                                    <ul>
                                                        <li>SKIN CARE AND BEAUTY</li>
                                                        <li>HONESTY AND TRUST</li>
                                                        <li>QUALITY</li>
                                                        <li>FOCUS ON THE USER</li>
                                                        <li>KNOW-HOW AND INNOVATION</li>
                                                        <li>SOCIAL RESPONSIBILITY</li>
                                                        <li>TRADITION</li>
                                                    </ul>
                                                </p>
                                                </div>
                                            </div>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="video">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <!-- <iframe class="embed-responsive-item" src="//www.youtube.com/embed/upZJpGrppJA"></iframe> -->
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                 <section class="bar background-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h2>Meet our team</h2>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="team-member" data-animate="fadeInUp">
                                <div class="image">
                                    
                                    <img src="img/ceo.jpg" alt="" class="img-responsive img-circle">
                                    
                                </div>
                                <h3>Yusuf Olatunji</h3>
                                <p class="role">Chief Executive Officer</p>
                                <div class="social">
                                    <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                </div>
                                
                            </div>
                            <!-- /.team-member -->
                        </div>
                        <div class="col-md-3 col-sm-3" data-animate="fadeInUp">
                            <div class="team-member">
                                <div class="image">
                                    <img src="img/portfolio-6.jpg" alt="" class="img-responsive img-circle">
                                </div>
                                <h3>Operation manager</h3>
                                <p class="role">Operation manager</p>

                                <div class="social">
                                    <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                </div>
                                
                            </div>
                            <!-- /.team-member -->
                        </div>
                        <div class="col-md-3 col-sm-3" data-animate="fadeInUp">
                            <div class="team-member">
                                <div class="image">
                                    <img src="img/portfolio-6.jpg" alt="" class="img-responsive img-circle">
                                </div>
                                <h3><a href="team-member.html">Production manager</a></h3>
                                <p class="role">Production manager</p>
                                <div class="social">
                                    <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                </div>
                                
                            </div>
                            <!-- /.team-member -->
                        </div>
                        <div class="col-md-3 col-sm-3" data-animate="fadeInUp">
                            <div class="team-member">
                                <div class="image">
                                    <img src="img/social-media-manager.jpeg" alt="" class="img-responsive img-circle">
                                </div>
                                <h3><a href="#">Seun Adeleke</a></h3>
                                <p class="role">Social Media Manager</p>
                                <div class="social">
                                    <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>
                            <!-- /.team-member -->
                        </div>
                    </div>
                    <!-- /.row -->

                  
                </div>
                <!-- /.container -->
            </section>
              
            </div>
            <!-- /#contact.container -->

            <section class="bar background-pentagon no-mb">
                <div class="container">
                    <div class="row showcase">
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="icon"><i class="fa fa-align-justify"></i>
                                </div>
                                <h4><span class="counter">4</span><br>

        Products</h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="icon"><i class="fa fa-users"></i>
                                </div>
                                <h4><span class="counter">100</span>+<br>

        Distributors</h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="icon"><i class="fa fa-copy"></i>
                                </div>
                                <h4><span class="counter">100,000</span>+<br>

        Products sold</h4>
                            </div>
                        </div>
                        <!-- <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <div class="icon"><i class="fa fa-font"></i>
                                </div>
                                <h4><span class="counter">923</span><br> 

        Magazines and Brochures</h4>
                            </div>
                        </div> -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /.bar -->

           

           
            <section class="bar background-pentagon no-mb">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading text-center">
                                <h2>Testimonials</h2>
                            </div>

                            <p class="lead">We have worked with many clients and we always like to hear they come out from the cooperation happy and satisfied. Have a look what our clients said about us.</p>


                            <!-- *** TESTIMONIALS CAROUSEL *** -->

                            @include('layouts.partials.testimonials')

                            <!-- *** TESTIMONIALS CAROUSEL END *** -->
                        </div>

                    </div>
                </div>
            </section>
            <!-- /.bar -->


        </div>
        <!-- /#content -->


        <!-- *** GET IT *** -->

        <div id="get-it">
            <div class="container">
                <div class="col-md-8 col-sm-12">
                    <h3>Check out a distibutor near you!</h3>
                </div>
                <div class="col-md-4 col-sm-12">
                    <a href="{{ url('distributors')}}" class="btn btn-template-transparent-primary">View Distributors list</a>
                </div>
            </div>
        </div>


        <!-- *** GET IT END *** -->

@endsection