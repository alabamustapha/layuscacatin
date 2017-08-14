@extends('layouts.web')

@section('content')



        <div id="heading-breadcrumbs" class="no-mb">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Contact</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li>Contact</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.315995927257!2d3.277675914326972!3d6.607600024014177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b905fc11faddf%3A0xb4bc0d12559ae4b0!2sMosan+Rd%2C+Ipaja%2C+Lagos!5e0!3m2!1sen!2sng!4v1502629442437" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- <div id="map" class="with-border">

            </div>
 -->
        </section>

        <div id="content">
            <div class="container" id="contact">

                <section>
                    <div class="row">
                        <div class="col-md-8">

                            <div class="heading">
                                <h2>We are here to help you</h2>
                            </div>

                            <p class="lead">Are you curious about something? Do you have some kind of problem with our products? Kindly fill the form below and we will get back to you.</p>
                            <p>Please feel free to contact us, our customer service center is working for you 24/7.</p>

                            <div class="heading">
                                <h3>Contact form</h3>
                                @if(session('message'))
                                    <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            {{ session('message') }}
                        </div>
                                @endif
                            </div>

                            <form action="{{ url("contact-us") }}" method="post">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Name *</label>
                                            <input type="text" class="form-control" id="name" placeholder="what can we call you?" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="tel" class="form-control" id="phone" placeholder="a phone number we can call" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email *</label>
                                            <input type="text" class="form-control" id="email" placeholder="your email address" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="subject">Subject *</label>
                                            <input type="text" class="form-control" id="subject" placeholder="subject" name="subject" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Message *</label>
                                            <textarea id="message" class="form-control" placeholder="write to us" name="message" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-template-main"><i class="fa fa-envelope-o"></i> Send message</button>

                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>
                        </div>

                        <div class="col-md-4">


                            <h3 class="text-uppercase">Address</h3>

                            <p><strong>CA 24</strong>
                                <br>FEDERAL LOW COST HOUSING ESTATE
                                <br>MOSAN, IPAJA
                                <br>Lagos, <strong>Nigeria</strong>
                                <br>
                            </p>

                            <h3 class="text-uppercase">Call center</h3>

                            <p>
                            <storng><i class="fa fa-phone"></i>Tel: 08023157695, 08050212528</strong> <br>

                            <i class="fa fa-envelope"></i>&nbsp;mail: <a href="mailto:info@layuscacatin.com" title="Send mail">info@layuscacatin.com</a>
                            </p>



                            <h3 class="text-uppercase">Connect with us</h3>
                            <div class="social">
                                <a href="https://www.facebook.com/Lcacatin" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="https://twitter.com/lcacatin" class="external twitter" data-animate-hover="pulse" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="" class="external linkedin" data-animate-hover="pulse"><i class="fa fa-linkedin"></i></a>
                                <a href="mailto:info@layuscacatin.com" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </div>


                        </div>

                    </div>


                </section>

            </div>
            <!-- /#contact.container -->
        </div>


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