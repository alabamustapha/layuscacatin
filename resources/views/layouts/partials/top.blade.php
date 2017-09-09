  <!-- *** TOP ***  -->
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            <p class="hidden-sm hidden-xs">Contact us on 08023157695, 08050212528 or info@layuscacatin.com</p>
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                <a href="https://www.facebook.com/Lcacatin" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="https://twitter.com/lcacatin" class="external twitter" data-animate-hover="pulse" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="" class="external linkedin" data-animate-hover="pulse"><i class="fa fa-linkedin"></i></a>
                                <a href="mailto:info@layuscacatin.com" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                <a href="mailto:info@layuscacatin.com" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                    
                            </div>

                            @if (Auth::guest())
                                <div class="login hidden-sm hidden-xs">
                                <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span></a>
                                <a href=" {{ url("register") }}"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Sign up</span></a>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

            <!-- *** TOP END *** -->