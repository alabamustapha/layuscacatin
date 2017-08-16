@extends('layouts.web')


@section('content')



        <div id="heading-breadcrumbs" class="no-mb">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>All Products</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="{{ url("/") }}">Home</a>
                            </li>
                            <li>All products</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>


         <div id="content">
            <div class="container">
                <p class="text-muted lead text-center">Browse all products.</p>

                <div class="row products">

                    <div class="col-md-3 col-sm-4">
                        <div class="product">
                            <div class="image">
                                <a href="#">
                                    <img src="img/product1.jpg" alt="" class="img-responsive image1">
                                </a>
                            </div>
                            <!-- /.image -->
                            <div class="text">
                                <h3><a href="shop-detail.html">Layus Cacatin Antiseptic Cream</a></h3>
                                <p class="price">#3000.00</p>
                                <p class="buttons">
                                    <a href="#" class="btn btn-default">View detail</a>
                                    <a href="#" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </p>
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div>

                    
                    
                </div>
                <!-- /.products -->

                <div class="col-sm-12">

                    <div class="banner">
                        <a href="#">
                            <img src="img/banner2.jpg" alt="" class="img-responsive">
                        </a>
                    </div>

                    <div class="pages">

                        <p class="loadMore">
                            <a href="#" class="btn btn-template-main"><i class="fa fa-chevron-down"></i> Load more</a>
                        </p>

                        <ul class="pagination">
                            <li><a href="#">&laquo;</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /.col-sm-12 -->

            </div>
            <!-- /.container -->
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