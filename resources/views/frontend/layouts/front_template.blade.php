<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>Big store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template| Home :: w3layouts
    </title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:title" content="Vide" />
    <meta name="keywords"
        content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{ asset('/frontend/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="{{ asset('/frontend/css/style.css') }}" rel='stylesheet' type='text/css' />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <!-- js -->
    <script src="{{ asset('/frontend/js/jquery-1.11.1.min.js') }}"></script>
    <!-- //js -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{ asset('/frontend/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/frontend/js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <link href="{{ asset('/frontend/css/font-awesome.css') }}" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
    <!--- start-rate---->
    <script src="{{ asset('/frontend/js/jstarbox.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/frontend/css/jstarbox.css') }}" type="text/css" media="screen"
        charset="utf-8" />
    <script type="text/javascript">
        jQuery(function() {
            jQuery('.starbox').each(function() {
                var starbox = jQuery(this);
                starbox.starbox({
                    average: starbox.attr('data-start-value'),
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass(
                        'clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr(
                        'data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                }).bind('starbox-value-changed', function(event, value) {
                    if (starbox.hasClass('random')) {
                        var val = Math.random();
                        starbox.next().text(' ' + val);
                        return val;
                    }
                })
            });
        });
    </script>
    <!---//End-rate---->

</head>

<body>
    <a href="offer.html"><img src="{{ asset('/frontend/images/download.png') }}" class="img-head" alt=""></a>
    <div class="header">

        <div class="container">
            <div class="logo">
                <h1><a href="{{ url('/') }}"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h1>
            </div>
            <div class="head-t">
                <ul class="card">
                    <li><a href="wishlist.html"><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
                    @if (Auth::guest())
                        <li><a href="{{ route('register-users.create') }}"><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
                    @else
                        <li>
                            <a href="{{ route('logout') }}"><i class="fa fa-user" aria-hidden="true"></i>
                                {{ __('Sign out') }}
                            </a>
                        </li>
                    @endif

                    <li><a href="{{ route('registerForm') }}"><i class="fa fa-arrow-right"
                                aria-hidden="true"></i>Register</a></li>
                    <li><a href="about.html"><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
                </ul>
            </div>
            <div class="nav-top">
                <nav class="navbar navbar-default">

                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                            data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>


                    </div>
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav ">
                            <li class=" active"><a href="{{ url('/') }}" class="hyper "><span>Home</span></a></li>

                            <li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Category<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
                                        @foreach ($categories as $category)
                                            <div class="col-sm-3">
                                                <ul class="multi-column-dropdown">
                                                    <li><a href="{{ route('single-category', $category->id)}}"><i class="fa fa-angle-right" aria-hidden="true"></i>{{ $category->name }}</a></li>
                                                </ul>
                                            </div>
                                            @endforeach
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
                            <li><a href="#" class="hyper"><span>Contact Us</span></a></li>
                            <li><a href="{{ route('aboutUs') }}" class="hyper"><span>About Us</span></a></li>

                        </ul>
                    </div>
                </nav>
                <div class="cart">

                    <span class="fa fa-shopping-cart my-cart-icon"><span
                            class="badge badge-notify my-cart-badge"></span></span>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
    <div data-vide-bg="video/video">
        <div class="container">
            <div class="banner-info">
                <h3>It is a long established fact that a reader will be distracted by
                    the readable </h3>
                <div class="search-form">
                    <form action="#" method="post">
                        <input id="search_data" type="text" placeholder="Search..." name="Search...">
                        <input type="submit" value=" ">
                        <input id="search_value" type="hidden" value="">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="content-top ">
        <div class="container ">
            <div class="spec ">
                <h3>Special Offers</h3>
                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div>
            </div>
            <div class="tab-head ">
                <nav class="nav-sidebar">
                    <ul class="nav tabs ">
                        @foreach ($categories as $category)
                            <li><a href="{{ route('single-category', $category->id)}}" data-toggle="tab"> {!! $category->name !!}</a></li>
                        @endforeach
                    </ul>
                </nav>
                <div class=" tab-content tab-content-t ">
                    <div class="tab-pane active text-style" id="tab1">
                        <div class=" con-w3l">
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="images/of.png" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.html">Moong</a>(1 kg)</h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price">$1.50</em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1"
                                                data-name="Moong" data-summary="summary 1" data-price="1.50"
                                                data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal2" class="offer-img">
                                        <img src="images/of1.png" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.html">Sunflower Oil</a>(5 kg)</h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$10.00</label><em class="item_price">$9.00</em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="2"
                                                data-name="Sunflower Oil" data-summary="summary 2" data-price="9.00"
                                                data-quantity="1" data-image="images/of1.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal3" class="offer-img">
                                        <img src="images/of2.png" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.html">Kabuli Chana</a>(1 kg)</h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$3.00</label><em class="item_price">$2.00</em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3"
                                                data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00"
                                                data-quantity="1" data-image="images/of2.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal4" class="offer-img">
                                        <img src="images/of3.png" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.html">Soya Chunks</a>(1 kg)</h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$4.00</label><em class="item_price">$3.50</em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="4"
                                                data-name="Soya Chunks" data-summary="summary 4" data-price="3.50"
                                                data-quantity="1" data-image="images/of3.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="tab-pane  text-style" id="tab2">
                        <div class=" con-w3l">
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
                                        <img src="images/of4.png" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.html">Lays</a>(100 g)</h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$1.00</label><em class="item_price">$0.70</em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="5"
                                                data-name="Lays" data-summary="summary 5" data-price="0.70"
                                                data-quantity="1" data-image="images/of4.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal6" class="offer-img">
                                        <img src="images/of5.png" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.html">Kurkure</a>(100 g)</h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$1.00</label><em class="item_price">$0.70</em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="6"
                                                data-name="Kurkure" data-summary="summary 6" data-price="0.70"
                                                data-quantity="1" data-image="images/of5.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal7" class="offer-img">
                                        <img src="images/of6.png" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.html">Popcorn</a>(250 g)</h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price">$1.00</em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="7"
                                                data-name="Popcorn" data-summary="summary 7" data-price="1.00"
                                                data-quantity="1" data-image="images/of6.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal8" class="offer-img">
                                        <img src="images/of7.png" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.html">Nuts</a>(250 g)</h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$4.00</label><em class="item_price">$3.50</em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="8"
                                                data-name="Nuts" data-summary="summary 8" data-price="3.50"
                                                data-quantity="1" data-image="images/of7.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="tab-pane  text-style" id="tab3">
                        <div class=" con-w3l">
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal9" class="offer-img">
                                        <img src="images/of8.png" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.html">Banana</a>(6 pcs)</h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price">$1.50</em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="9"
                                                data-name="Banana" data-summary="summary 9" data-price="1.50"
                                                data-quantity="1" data-image="images/of8.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal10" class="offer-img">
                                        <img src="images/of9.png" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.html">Onion</a>(1 kg)</h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$1.00</label><em class="item_price">$0.70</em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="10"
                                                data-name="Onion" data-summary="summary 10" data-price="0.70"
                                                data-quantity="1" data-image="images/of9.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal11" class="offer-img">
                                        <img src="images/of10.png" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.html"> Bitter Gourd</a>(1 kg)</h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price">$1.00</em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="11"
                                                data-name="Bitter Gourd" data-summary="summary 11" data-price="1.00"
                                                data-quantity="1" data-image="images/of10.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal12" class="offer-img">
                                        <img src="images/of11.png" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.html">Apples</a>(1 kg)</h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$4.00</label><em class="item_price">$3.50</em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="12"
                                                data-name="Apples" data-summary="summary 12" data-price="3.50"
                                                data-quantity="1" data-image="images/of11.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="tab-pane text-style" id="tab4">
                        <div class=" con-w3l">
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal13" class="offer-img">
                                        <img src="images/of12.png" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.html">Honey</a>(500 g)</h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$7.00</label><em class="item_price">$6.00</em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="13"
                                                data-name="Honey" data-summary="summary 13" data-price="6.00"
                                                data-quantity="1" data-image="images/of12.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m ">
                                    <a href="#" data-toggle="modal" data-target="#myModal14" class="offer-img">
                                        <img src="images/of13.png" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.html">Chocos</a>(250 g)</h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$5.00</label><em class="item_price">$4.50</em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="14"
                                                data-name="Chocos" data-summary="summary 14" data-price="4.50"
                                                data-quantity="1" data-image="images/of13.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m ">
                                    <a href="#" data-toggle="modal" data-target="#myModal15" class="offer-img">
                                        <img src="images/of14.png" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.html">Oats</a>(1 kg)</h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$4.00</label><em class="item_price">$3.50</em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="15"
                                                data-name="Oats" data-summary="summary 15" data-price="3.50"
                                                data-quantity="1" data-image="images/of14.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal16" class="offer-img">
                                        <img src="images/of15.png" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.html">Bread</a>(500 g)</h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$1.00</label><em class="item_price">$0.80</em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="16"
                                                data-name="Bread" data-summary="summary 16" data-price="0.80"
                                                data-quantity="1" data-image="images/of15.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @yield("content")


    <!--footer-->
    <div class="footer">
        <div class="container">
            <div class="col-md-3 footer-grid">
                <h3>About Us</h3>
                <p>Nam libero tempore, cum soluta nobis est eligendi
                    optio cumque nihil impedit quo minus id quod maxime
                    placeat facere possimus.</p>
            </div>
            <div class="col-md-3 footer-grid ">
                <h3>Menu</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="kitchen.html">Category</a></li>
                    <li><a href="care.html">About Us</a></li>
                    <li><a href="hold.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid ">
                <h3>Customer Services</h3>
                <ul>
                    <li><a href="shipping.html">Shipping</a></li>
                    <li><a href="terms.html">Terms & Conditions</a></li>
                    <li><a href="faqs.html">Faqs</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="offer.html">Online Shopping</a></li>

                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h3>My Account</h3>
                <ul>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>

                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="footer-bottom">
                <h2><a href="{{ url('/') }}"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a>
                </h2>
                <p class="fo-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris</p>
                <ul class="social-fo">
                    <li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                </ul>
                <div class=" address">
                    <div class="col-md-4 fo-grid1">
                        <p><i class="fa fa-home" aria-hidden="true"></i>12K Street , 45 Building Road Canada.</p>
                    </div>
                    <div class="col-md-4 fo-grid1">
                        <p><i class="fa fa-phone" aria-hidden="true"></i>+1234 758 839 , +1273 748 730</p>
                    </div>
                    <div class="col-md-4 fo-grid1">
                        <p><a href="mailto:info@example.com"><i class="fa fa-envelope-o"
                                    aria-hidden="true"></i>info@example1.com</a></p>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
            <div class="copy-right">
                <p> Copyright &copy; {{ date('Y') }} Big store. All Rights Reserved | Design by <a href="https://github.com/utsabparoi">
                       <strong>P a r o i</strong></a></p>
            </div>
        </div>
    </div>
    <!-- //footer-->

    @yield('page_specific_js')

    <!-- smooth scrolling -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
                };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">
        </span></a>
    <!-- //smooth scrolling -->
    <!-- for bootstrap working -->
    <script src="{{ asset('/frontend/js/bootstrap.js') }}"></script>
    <!-- //for bootstrap working -->
    <script type='text/javascript' src="{{ asset('/frontend/js/jquery.mycart.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('ul li a').click(function() {
                var menu_title = $(this).find('span').text();
                localStorage.setItem('active_menu', menu_title);
            });

            //$('.my-product-quantity').on('change', function() {
            $(document).on('change', ".my-product-quantity", function() {
                var pid = $(this).data('id');
                var quantity = $(this).val();

                $.ajax({
                    type: 'POST',
                    url: "#",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "product_id": pid,
                        "quantity": quantity
                    },
                    success: function(data) {
                        console.log(data);
                    }
                });
            });

            $(document).on('click', '.remove-all', function() {
                $(".my-product-remove").click();
            });

            $(document).on('click', ".my-product-remove", function() {
                var pid = $(this).data('id');

                $.ajax({
                    type: 'POST',
                    url: "#",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "product_id": pid,
                    },
                    success: function(data) {
                        console.log(data);
                    }
                });
            });


            $(document).on('click', ".proceed-to-checkout", function() {
                window.location.href = "#"
            })

        });

        $(window).on("load", function() {
            var active_menu = localStorage.getItem('active_menu');
            $('ul li').removeClass('active');
            $('ul li a').each(function(index) {
                //console.log($(this).find('span').text());
                if ($(this).find('span').text() == active_menu) {
                    $(this).parent().addClass('active');
                }
            })

        });



        $(function() {

            var goToCartIcon = function($addTocartBtn) {
                var $cartIcon = $(".my-cart-icon");
                var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>')
                    .css({
                        "position": "fixed",
                        "z-index": "999"
                    });
                $addTocartBtn.prepend($image);
                var position = $cartIcon.position();
                $image.animate({
                    top: position.top,
                    left: position.left
                }, 500, "linear", function() {
                    $image.remove();
                });
            }

            $('.my-cart-btn').myCart({
                classCartIcon: 'my-cart-icon',
                classCartBadge: 'my-cart-badge',
                affixCartIcon: true,
                checkoutCart: function(products) {
                    $.each(products, function() {
                        console.log(this);
                    });
                },
                clickOnAddToCart: function($addTocart) {
                    goToCartIcon($addTocart);
                },
                getDiscountPrice: function(products) {
                    var total = 0;
                    $.each(products, function() {
                        total += this.quantity * this.price;
                    });
                    return total * 1;
                }
            });

        });
    </script>

</body>

</html>
