<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Electro - HTML Ecommerce Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

    <link href="{{ asset('./assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('./assets/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('./assets/css/nouislider.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('./assets/css/responsive.css') }}" rel="stylesheet">

    <script src="assets/css/style.css"></script>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>

    <link href="{{ asset('./assets1/floating-wpp.css') }}" rel="stylesheet">

    <script src="{{ asset('./assets1/floating-wpp.js') }}" ></script>

    <script src="{{ asset('./assets1/jquery-3.3.1.min.js') }}" ></script>

    <link rel="stylesheet" href="./assets1/floating-wpp.css">
    <script type="text/javascript" src="./assets1/floating-wpp.js"></script>

    <script src="{{ asset('./assets/js/bootstrap.min.js') }}" ></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


    <![endif]-->

    <script>
        /* Demo Scripts for Bootstrap Carousel and Animate.css article
*/
        (function( $ ) {

            //Function to animate slider captions
            function doAnimations( elems ) {
                //Cache the animationend event in a variable
                var animEndEv = 'webkitAnimationEnd animationend';

                elems.each(function () {
                    var $this = $(this),
                        $animationType = $this.data('animation');
                    $this.addClass($animationType).one(animEndEv, function () {
                        $this.removeClass($animationType);
                    });
                });
            }

            //Variables on page load
            var $myCarousel = $('#carousel-example-generic'),
                $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

            //Initialize carousel
            $myCarousel.carousel();

            //Animate captions in first slide on page load
            doAnimations($firstAnimatingElems);

            //Pause carousel
            // $myCarousel.carousel('pause');


            //Other slides to be animated on carousel slide event
            $myCarousel.on('slide.bs.carousel', function (e) {
                var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
                doAnimations($animatingElems);
            });

        })(jQuery);


    </script>

    <style>
        .main-container {
            padding: 10px 15px;
        }
        .skyblue {
            background-color: #ffffff;
            background-image:url( {{  asset("/assets/img/mother3.jpg") }} );
            background-size:100% 100%;
        }
        .deepskyblue {
            background-color: #ffffff;
            background-image:url( {{  asset("/assets/img/mother4.jpg") }} );
            background-size:100% 100%;
        }
        .darkerskyblue {
            background-color: #ffffff;
            background-image: url( {{  asset("/assets/img/mother3.jpg") }} );
            background-size:100% 100%;
        }
        .carousel-indicators {
            bottom: 0;
        }
        .carousel-control.right,
        .carousel-control.left {
            background-image: none;
        }
        .carousel .item {
            min-height: 350px;
            height: 100%;
            width:100%;
        }
        .carousel-caption h3,
        .carousel .icon-container,
        .carousel-caption button {
            background-color: transparent;
        }
        .carousel-caption h3 {
            padding: .5em;
        }
        .carousel .icon-container {
            display: inline-block;
            font-size: 25px;
            line-height: 25px;
            padding: 1em;
            text-align: center;
            border-radius: 50%;
        }
        .carousel-caption button {
            border-color: transparent;
            margin-top: 1em;
        }

        /* Animation delays */
        .carousel-caption h3:first-child {
            animation-delay: 1s;
        }
        .carousel-caption h3:nth-child(2) {
            animation-delay: 2s;
        }
        .carousel-caption button {
            animation-delay: 3s;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 30px;
            font-weight: bold;
        }

        .p {
            padding-top: 125px;
            text-align: center;
        }

        .p a {
            text-decoration: underline;
        }

    </style>

</head>
<body>
<!-- HEADER -->
<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
            </ul>
{{--            <ul class="header-links pull-right">--}}
{{--                <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>--}}
{{--                <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>--}}
{{--            </ul>--}}
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="#" class="logo">
                            <img src="./img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form>

                            <select class="input-select">
                                @foreach($pro as $prod)
                                <option>{{$prod->category_name}}</option>
                                @endforeach
                            </select>

                            <input class="input" placeholder="Search here">
                            <button class="search-btn">Search</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">


                        <!-- Cart -->
                        <div class="dropdown">

                            <div class="cart-dropdown">
                                <div class="cart-list">
                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="./img/product01.png" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
                                        </div>
                                        <button class="delete"><i class="fa fa-close"></i></button>
                                    </div>

                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="./img/product02.png" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                                        </div>
                                        <button class="delete"><i class="fa fa-close"></i></button>
                                    </div>
                                </div>
                                <div class="cart-summary">
                                    <small>3 Item(s) selected</small>
                                    <h5>SUBTOTAL: $2940.00</h5>
                                </div>
                                <div class="cart-btns">
                                    <a href="#">View Cart</a>
                                    <a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">All Products</a></li>
                <li><a href="#">Categories</a></li>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->
<div class="container main-container">

    <div id="carousel-example-generic" class="carousel slide" data-interval="7000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="item active deepskyblue">

                <div class="carousel-caption">
                    <h3 data-animation="animated bounceInLeft">
                        Welcome
                    </h3>
                    <h3 data-animation="animated bounceInRight">
                        Davis mothercare
                    </h3>
{{--                    <button class="btn btn-primary btn-lg" data-animation="animated zoomInUp">Button</button>--}}
                </div>
            </div> <!-- /.item -->

            <!-- Second slide -->
            <div class="item skyblue">
                <div class="carousel-caption">
                    <h3 class="icon-container" data-animation="animated bounceInDown">
                        <span class="glyphicon glyphicon-heart"></span>
                    </h3>
                    <h3 data-animation="animated bounceInUp">
                        Davis mothercare
                    </h3>
{{--                    <button class="btn btn-primary btn-lg" data-animation="animated zoomInRight">Button</button>--}}
                </div>
            </div><!-- /.item -->

            <!-- Third slide -->
            <div class="item darkerskyblue">
                <div class="carousel-caption">
                    <h3 class="icon-container" data-animation="animated zoomInLeft">
                        <span class="glyphicon glyphicon-glass"></span>
                    </h3>
                    <h3 data-animation="animated flipInX">
                        Davis mothercare
                    </h3>
{{--                    <button class="btn btn-primary btn-lg" data-animation="animated lightSpeedIn">Button</button>--}}
                </div>
            </div><!-- /.item -->

        </div><!-- /.carousel-inner -->

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><!-- /.carousel -->

</div><!-- /.container -->

<!-- SECTION -->
<div class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row text-center">
            <h4>SELECT CATEGORY</h4><br>
            <!-- shop -->
            @foreach($pro as $prodd)
            <div class="col-md-3 col-xs-6">
                <div class="text-center">
                    <div class="shop-img">
                        <img src="{{ asset('/core/public/post/'. $prodd->image) }}" alt="" height="200" width="200">
                    </div><br>
                    <h4><a href="#" class="cta-btn">{{$prodd->category_name}} <i class="fa fa-arrow-circle-right"></i></a></h4>
                </div>
            </div>
           @endforeach
            <!-- /shop -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->


<div class="section">
    <!-- container -->
    <div class="container text-center">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">New Products</h3>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    @foreach($pros as $prod)
                    <div class="col-md-3 col-xs-6">
                        <div class="product">
                            <div class="product-img">
                                <div class="product-label">
                                    <span class="new">NEW</span>
                                </div>
                                <img src="{{ asset('/core/public/post/'. $prod->image1) }}" alt=""  height="200" width="200">
                                <div class="product-label">
                                </div>
                            </div>
                            <div class="product-body">
                                <p class="product-category">{{$prod->category_name}}</p>
                                <h3 class="product-name"><a href="#">{{$prod->product_name}}</a></h3>
                                <h4 class="product-price">&#8373;{{$prod->price}}</h4>
                            </div>

                        </div>
                        <!-- /product -->
                    </div>
                    @endforeach

                </div>

            </div>
            <!-- /Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->


<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container text-center">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">All Products</h3>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    @foreach($pros as $prod)
                        <div class="col-md-3 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <div class="product-label">
                                        <span class="new">NEW</span>
                                    </div>
                                    <img src="{{ asset('/core/public/post/'. $prod->image1) }}" alt=""  height="200" width="200">
                                    <div class="product-label">
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">{{$prod->category_name}}</p>
                                    <h3 class="product-name"><a href="#">{{$prod->product_name}}</a></h3>
                                    <h4 class="product-price">&#8373;{{$prod->price}}</h4>
                                </div>

                            </div>
                            <!-- /product -->
                        </div>
                    @endforeach

                </div>

            </div>
            <!-- /Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->




<!-- FOOTER -->
<footer id="footer">
    <!-- top footer -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">About Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                        <ul class="footer-links">
                            <li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Categories</h3>
                        <ul class="footer-links">
                            <li><a href="#">Hot deals</a></li>
                            <li><a href="#">Laptops</a></li>
                            <li><a href="#">Smartphones</a></li>
                            <li><a href="#">Cameras</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>
                    </div>
                </div>

                <div class="clearfix visible-xs"></div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Information</h3>
                        <ul class="footer-links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Orders and Returns</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Service</h3>
                        <ul class="footer-links">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">View Cart</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /top footer -->

    <!-- bottom footer -->
    <div id="bottom-footer" class="section">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="footer-payments">
                        <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                        <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                    </ul>
                    <span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

    </div>
    <!-- /bottom footer -->
    <a href="https://wa.me/+233278574286" class="fixed-bottom"><div id="myButton"></div></a>

</footer>
<!-- /FOOTER -->
{{--<script src="{{ asset('./assets/js/jquery.min.js') }}" ></script>--}}

<script src="{{ asset('./assets/js/slick.min.js') }}" ></script>
<script src="{{ asset('./assets/js/nouislider.min.js') }}" ></script>
{{--<script src="{{ asset('./assets/js/jquery.zoom.min.js') }}" ></script>--}}
<script src="{{ asset('./assets/js/main.js') }}" ></script>

<script type="text/javascript">
    $(function () {
        $('#myButton').floatingWhatsApp({
            phone: '5491133359850',
            // popupMessage: 'Hello, Kindly contact on whatsapp',
            // showPopup: true,
            // showOnIE: false,
            headerTitle: 'Welcome!',
            headerColor: 'green',
            {{--buttonImage: '<img src="{{ asset('./assets1/whatsapp.png') }}" alt="">'--}}
        });
    });
</script>


</body>
</html>

