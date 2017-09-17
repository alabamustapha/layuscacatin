  <!-- *** TOP ***  -->
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            <p class="hidden-sm hidden-xs">Contact us on 08023157695, 08050212528 or info@layuscacatin.com</p>
                            <p class="hidden-md hidden-lg">
                             <a href="{{ linkToRoute('cart') }}"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;<span class="badge">{{ Cart::count() }} Items</span></a><br>   
                             <i class="fa fa-phone"></i>08050212528
                            
                            </p>
                            
                                
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                <a href="https://www.facebook.com/Lcacatin" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/lcacatin/" class="external instagram" data-animate-hover="pulse"><i class="fa fa-instagram"></i></a>
                                <a href="https://twitter.com/lcacatin" class="external twitter" data-animate-hover="pulse" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/layus-investment-limited-a55010148/" class="external linkedin" data-animate-hover="pulse"><i class="fa fa-linkedin" target="_blank"></i></a>
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