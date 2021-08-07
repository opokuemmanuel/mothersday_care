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



    <link href="{{ asset('./assets1/css/style1.css') }}" rel="stylesheet">
    <link href="{{ asset('./assets1/css/responsive.css') }}" rel="stylesheet">

    <link href="{{ asset('./assets1/floating-wpp.css') }}" rel="stylesheet">

    <script src="{{ asset('./assets1/floating-wpp.js') }}" ></script>

    <script src="{{ asset('./assets1/jquery-3.3.1.min.js') }}" ></script>

    <link rel="stylesheet" href="./assets1/floating-wpp.css">
    <script type="text/javascript" src="./assets1/floating-wpp.js"></script>



{{--    <script type="text/javascript" src="floating-wpp.js"></script>--}}
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


    <![endif]-->



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
                                <option value="0">All Categories</option>
                                <option value="1">Category 01</option>
                                <option value="1">Category 02</option>
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
                        <!-- Wishlist -->
                    {{--                        <div>--}}
                    {{--                            <a href="#">--}}
                    {{--                                <i class="fa fa-heart-o"></i>--}}
                    {{--                                <span>Your Wishlist</span>--}}
                    {{--                                <div class="qty">2</div>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    <!-- /Wishlist -->

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

<div class="single-product-area" style="color: black">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="product-images">
                                <div class="product-main-img">
                                    <img src="./assets/img/babybottle.jpg" alt="" height="400" width="400">
                                </div>

                                <div class="product-gallery">
                                    <img src="./assets/img/babybottle.jpg" alt="">
                                    <img src="./assets/img/babybottle.jpg" alt="">
                                    <img src="./assets/img/babybottle.jpg" alt="">
                                    <img src="./assets/img/babybottle.jpg" alt="">

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="product-inner">
                                <h2 class="product-name">Sony Smart TV - 2015</h2>
                                <div class="product-inner-price">
                                    <ins>$700.00</ins>
                                </div>

                                <form action="" class="cart">
                                    <div class="quantity">
                                        <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                    </div>
                                </form>

                                <div class="product-inner-category" >
                                    <p>Category:<a href="" >Summer</a> </p>
                                </div>

                                <div role="tabpanel">
                                    <ul class="product-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <h2>Product Description</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.</p>

                                            <p>Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="profile">
                                            <h2>Reviews</h2>
                                            <div class="submit-review">
                                                <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                <div class="rating-chooser">
                                                    <p>Your rating</p>

                                                    <div class="rating-wrap-post">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                <p><input type="submit" value="Submit"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><br>
                <div class="related-products-wrapper">
                    <h2 class="related-products-title">Related Products</h2>
                </div>

                <!-- Products tab & slick -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="./assets/img/babyfood.jpg" alt=""  height="200" width="200">
                                    <div class="product-label">

                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00</h4>
                                </div>

                            </div>
                            <!-- /product -->
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="./assets/img/babyfood.jpg" alt=""  height="200" width="200">
                                    <div class="product-label">

                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category" style="color: black">Category</p>
                                    <h3 class="product-name"><a href="#" style="color: black">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00</h4>
                                </div>

                            </div>
                            <!-- /product -->
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="./assets/img/babyfood.jpg" alt=""  height="200" width="200">
                                    <div class="product-label">

                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category" style="color: black">Category</p>
                                    <h3 class="product-name"><a href="#" style="color: black">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00</h4>
                                </div>

                            </div>
                            <!-- /product -->
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="./assets/img/babyfood.jpg" alt=""  height="200" width="200">
                                    <div class="product-label">

                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category" style="color: black">Category</p>
                                    <h3 class="product-name"><a href="#" style="color: black">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00</h4>
                                </div>

                            </div>
                            <!-- /product -->
                        </div>


                    </div>

                </div>
                <!-- /Products tab & slick -->


                <!-- Products tab & slick -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="./assets/img/babyfood.jpg" alt=""  height="200" width="200">
                                    <div class="product-label">

                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category" style="color: black">Category</p>
                                    <h3 class="product-name"><a href="#" style="color: black">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00</h4>
                                </div>

                            </div>
                            <!-- /product -->
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="./assets/img/babyfood.jpg" alt=""  height="200" width="200">
                                    <div class="product-label">

                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category" style="color: black">Category</p>
                                    <h3 class="product-name"><a href="#" style="color: black">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00</h4>
                                </div>

                            </div>
                            <!-- /product -->
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="./assets/img/babyfood.jpg" alt=""  height="200" width="200">
                                    <div class="product-label">

                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category" style="color: black">Category</p>
                                    <h3 class="product-name"><a href="#" style="color: black">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00</h4>
                                </div>

                            </div>
                            <!-- /product -->
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="./assets/img/babyfood.jpg" alt=""  height="200" width="200">
                                    <div class="product-label">

                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category" style="color: black">Category</p>
                                    <h3 class="product-name"><a href="#" style="color: black">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00</h4>
                                </div>

                            </div>
                            <!-- /product -->
                        </div>


                    </div>

                </div>
                <!-- /Products tab & slick -->
{{--                whatsapp floating button--}}

            </div>


        </div>
    </div>
    <a href="https://wa.me/+233278574286"><div id="myButton"></div></a>
</div>



<footer id="footer" class="navbar-bottom">
    <!-- bottom footer -->
    <div id="bottom-footer" class="section">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12 text-center">
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
</footer>
<!-- /FOOTER -->

<script src="{{ asset('./assets/js/bootstrap.min.js') }}" ></script>
<script src="{{ asset('./assets/js/slick.min.js') }}" ></script>
<script src="{{ asset('./assets/js/nouislider.min.js') }}" ></script>
<script src="{{ asset('./assets/js/jquery.zoom.min.js') }}" ></script>
<script src="{{ asset('./assets/js/main.js') }}" ></script>

<!-- jQuery sticky menu -->
<script src="js/owl.carousel.min.js"></script>
<script src="{{ asset('./assets1/js/owl.carousel.min.js') }}" ></script>
<script src="{{ asset('./assets1/js/jquery.sticky.js') }}" ></script>
<script src="{{ asset('./assets1/js/jquery.easing.1.3.min.js') }}" ></script>
<script src="{{ asset('./assets1/js/main.js') }}" ></script>

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


