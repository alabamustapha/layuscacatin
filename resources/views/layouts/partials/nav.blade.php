
<!-- *** NAVBAR *** -->

<div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">

        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="#">
                    <img src="img/layus.png" alt="Layus" class="hidden-xs hidden-sm">
                    <img src="img/layus.png" alt="Layus" class="visible-xs visible-sm"><span class="sr-only">Layus Investment company</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ activeRoute('home') }}">
                        <a href="{{ linkToRoute('home') }}">Home</a>
                    </li>
                    <li class="{{ activeRoute('about-us') }}">
                        <a href="{{ linkToRoute('about-us') }}">About</a>
                    </li>
                    <li class="dropdown use-yamm yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-md-offset-1 col-sm-6">
                                            <img src="img/products.jpg" class="img-responsive hidden-xs" alt="">
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Categories</h5>
                                            <ul>
                                                <li><a href="{{ url('products') }}">All</a>
                                                <li><a href="{{ url('products?cat=herbal-mixture') }}">Herbal Mixture</a>
                                                </li>
                                                <li><a href="{{ url('products?cat=antiseptic') }}">Antiseptic</a>
                                                </li>
                                                <li><a href="{{ url('products?cat=hair-food') }}">Hair Food</a>
                                                </li>
                                                <li><a href="{{ url('products?cat=cream') }}">Cream</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ activeRoute('distributors') }}">
                        <a href="{{ linkToRoute('distributors') }}">Distributors</a>
                    </li>
                    <li class="">
                        <a>Blog</a>
                    </li>
                    <li class="{{ activeRoute('contact-us') }}">
                        <a href="{{ linkToRoute('contact-us') }}">Contact</a>
                    </li>
                    @if (Auth::guest())
                    <li>
                        <a>Sign in</a>
                    </li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Account <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            
                            <li><a href="{{ url(Auth::user()->role) }}">Dashboard</a></li>

                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>


                        </ul>
                    </li>
                    @endif
                </ul>


            </div>
            <!--/.nav-collapse -->

        </div>


    </div>
    <!-- /#navbar -->

</div>

<!-- *** NAVBAR END *** -->