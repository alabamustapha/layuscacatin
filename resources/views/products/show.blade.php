@extends('layouts.web')

@section('content')


<div id="heading-breadcrumbs" class="no-mb">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>{{ $product->title }}</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="{{ url("/products") }}">Products</a>
                            </li>
                            <li>{{ $product->SKU }}</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>


 <div id="content">
            <div class="container">

                <div class="row">

                    <!-- *** LEFT COLUMN ***
		    _________________________________________________________ -->

                    <div class="col-md-9">

                        <!-- <p class="lead">Built purse maids cease her ham new seven among and. Pulled coming wooded tended it answer remain me be. So landlord by we unlocked sensible it. Fat cannot use denied excuse son law. Wisdom happen suffer common the appear ham beauty
                            her had. Or belonging zealously existence as by resources.
                        </p>
                        <p class="goToDescription"><a href="#details" class="scroll-to text-uppercase">Scroll to product details, material & care and sizing</a>
                        </p> -->

                        <div class="row" id="productMain">
                            <div class="col-sm-6">
                                <div id="mainImage">
                                    <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="" class="img-responsive">
                                </div>

                                <!-- <div class="ribbon sale">
                                    <div class="theribbon">SALE</div>
                                    <div class="ribbon-background"></div>
                                </div> -->
                                <!-- /.ribbon -->

                                <div class="ribbon new">
                                    <div class="theribbon">{{ strtoupper($product->status) }}</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                            </div>
                            <div class="col-sm-6">
                                <div class="box">

                                    <form action="{{ route('add_to_cart', ['id' => $product->id]) }}" method="POST">
                                    {{ csrf_field() }}
                                        <!-- <div class="sizes">

                                            <h3>Available sizes</h3>

                                            <label for="size_s">
                                                <a href="#">S</a>
                                                <input type="radio" id="size_s" name="size" value="s" class="size-input">
                                            </label>
                                            <label for="size_m">
                                                <a href="#">M</a>
                                                <input type="radio" id="size_m" name="size" value="m" class="size-input">
                                            </label>
                                            <label for="size_l">
                                                <a href="#">L</a>
                                                <input type="radio" id="size_l" name="size" value="l" class="size-input">
                                            </label>

                                        </div>-->


                                        <p class="price">$124.00</p>
                                        
                                            
                                        
                                        <p class="text-center">
                                            <input class="form-control" style="display:inline-block; max-width: 80px;" type="number" name="qty" min="1">
                                            <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                            <!-- <button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i>
                                            </button> -->
                                        </p>

                                    </form>
                                </div>

                                <!-- <div class="row" id="thumbs">
                                    <div class="col-xs-4">
                                        <a href="img/detailbig1.jpg" class="thumb">
                                            <img src="img/detailsquare.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="img/detailbig2.jpg" class="thumb">
                                            <img src="img/detailsquare2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="img/detailbig3.jpg" class="thumb">
                                            <img src="img/detailsquare3.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div> -->
                            </div>

                        </div>


                        <div class="box" id="details">
                            <p>
                                <h4>Product details</h4>
                                {{ $product->description }}
                                <!-- <p>White lace top, woven, has a round neck, short sleeves, has knitted lining attached</p>
                                <h4>Material & care</h4>
                                <ul>
                                    <li>Polyester</li>
                                    <li>Machine wash</li>
                                </ul>
                                <h4>Size & Fit</h4>
                                <ul>
                                    <li>Regular fit</li>
                                    <li>The model (height 5'8" and chest 33") is wearing a size S</li>
                                </ul>

                                <blockquote>
                                    <p><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em>
                                    </p>
                                </blockquote> -->
                        </div>

                        <div class="box social" id="product-social">
                            <h4>Show it to your friends</h4>
                            <p>
                                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>

                 

                       

                    </div>
                    <!-- /.col-md-9 -->


                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN *** -->

                    <div class="col-sm-3">

                        <!-- *** MENUS AND FILTERS *** -->
                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Categories</h3>
                            </div>

                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked category-menu">
                                    <li>
                                        <a href="{{ url('products') }}">All <span class="badge pull-right">10</span></a>
                                        <ul>
                                             	<li><a href="{{ url('products') }}">Herbal Mixture</a>
                                                </li>
                                                <li><a href="{{ url('products') . '?cat=antiseptic' }}">Antiseptic</a>
                                                </li>
                                                <li><a href="{{ url('products') }}">Hair Food</a>
                                                </li>
                                                <li><a href="{{ url('products') }}">Cream</a>
                                                </li>
                                        </ul>
                                    </li>

                                </ul>

                            </div>
                        </div>

                      
                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

@endsection