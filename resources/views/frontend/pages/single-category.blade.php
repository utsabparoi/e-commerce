@extends('frontend.layouts.front_template')

@section('content')
    <!-- Carousel
        ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="kitchen.html"><img class="first-slide" src="{{ asset('/frontend/images/ba.jpg') }}" alt="First slide"></a>

            </div>
            <div class="item">
                <a href="care.html"> <img class="second-slide " src="{{ asset('/frontend/images/ba1.jpg') }}" alt="Second slide"></a>

            </div>
            <div class="item">
                <a href="hold.html"><img class="third-slide " src="{{ asset('/frontend/images/ba2.jpg') }}" alt="Third slide"></a>

            </div>
        </div>

    </div><!-- /.carousel -->

    <!--content-->
    <div class="kic-top ">
        <div class="container ">
            <div class="kic ">
                <h3>Popular Categories</h3>

            </div>
            @foreach ($popular_categories as $category)
                <div class="col-md-4 kic-top1">
                    <a href="{{ route('single-category', $category->id)}}">
                        <img src="{{ asset($category->image) }}" style="height: 140px !important" class="img-responsive" alt="">
                    </a>
                    <h6 style="font-weight: bold">{{ $category->name }}</h6>
                    <p>{!! $category->details !!}</p>
                </div>
            @endforeach


        </div>
    </div>

    <!--content-->
    <div class="product">
        <div class="container">
            <div class="spec ">
                <h3>Products</h3>
                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div>
            </div>
            <div class=" con-w3l agileinf">
                @foreach ($category_info as $item)
                    <div class="col-md-3 pro-1">
                        <div class="col-m">
                            <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                <img src="{{ asset($item->image) }}" class="img-responsive" alt="">
                            </a>
                            <div class="mid-1">
                                <div class="women">
                                    <h6><a href="single.html">{{ $item->name }}</a>(500 g)</h6>
                                </div>
                                <div class="mid-2">
                                    <p><label>{{ $item->retail_price }}tk</label><em class="item_price">{{ $item->cost_price }}tk</em></p>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="add">
                                    <button class="btn btn-danger my-cart-btn my-cart-b" data-id="24" data-name="Wheat"
                                        data-summary="summary 24" data-price="6.00" data-quantity="1"
                                        data-image="images/of24.png">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    {{-- Product Modal --}}
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body modal-spa">
                        <div class="col-md-5 span-2">
                                    <div class="item">
                                        <img src="images/of24.png" class="img-responsive" alt="">
                                    </div>
                        </div>
                        <div class="col-md-7 span-1 ">
                            <h3>Wheat(500 g)</h3>
                            <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                            <div class="price_single">
                              <span class="reducedfrom "><del>$2.00</del>$1.50</span>

                             <div class="clearfix"></div>
                            </div>
                            <h4 class="quick">Quick Overview:</h4>
                            <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                             <div class="add-to">
                                   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="24" data-name="Wheat" data-summary="summary 24" data-price="1.50" data-quantity="1" data-image="images/of24.png">Add to Cart</button>
                                </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
