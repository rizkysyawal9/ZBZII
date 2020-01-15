<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- css files -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/all.css">
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/style.css"> 
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/menu.css"> 
   <link rel="stylesheet" href="{{asset('/frontend')}}/css/nice-select.css">

    <!-- jquery plugins here -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- jquery plugins here-->
    <script src="{{asset('/frontend')}}/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="{{asset('/frontend')}}/js/popper.min.js"></script>
    <!-- bootstra js -->
    <script src="{{asset('/frontend')}}/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="{{asset('/frontend')}}/js/jquery.magnific-popup.js"></script>
    <!-- swiper j -->
    <script src="{{asset('/frontend')}}/js/swiper.min.js"></script>
    <!-- swiper j -->
    <script src="{{asset('/frontend')}}/js/mixitup.min.js"></script>
    <!-- particle -->
    <script src="{{asset('/frontend')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('/frontend')}}/js/jquery.nice-select.min.js"></script>
    <!-- slick js-->
    <script src="{{asset('/frontend')}}/js/slick.min.js"></script>
    <script src="{{asset('/frontend')}}/js/jquery.counterup.min.js"></script>
    <script src="{{asset('/frontend')}}/js/waypoints.min.js"></script>
    <script src="{{asset('/frontend')}}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{asset('/frontend')}}/js/jquery.form.js"></script>
    <script src="{{asset('/frontend')}}/js/jquery.validate.min.js"></script>
    <script src="{{asset('/frontend')}}/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="{{asset('/frontend')}}/js/custom.js"></script>

    <title>Zeen by Zi | @yield('title', '') </title>
    <link rel="icon" href="{{asset('/frontend')}}/img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
</head>
<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center hero">
                <div class="col-lg-11">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/"> <img src="{{asset('frontend')}}/img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i id="menu-icon" class="ti-menu"></i></span>
                        </button>
                        
                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/Daily">Daily Wear</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/Party">Party Dress</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/Casual">Casual</a>
                                </li>                                
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">
                            <div class="dropdown cart">
                                <a class="dropdown-toggle" href="/cart">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                            <a class="ti-search" id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    @yield('breadcrumb')

    @yield('banner')

    @yield('content')

    @yield('extra-js')

<!-- more about us start here -->
<div class="blog-section">
    <div class="container">
        <h1 class="text-center">More About Us</h1>
        <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Et sed accusantium maxime dolore cum provident itaque ea, a architecto alias quod reiciendis ex ullam id,
        soluta deleniti eaque neque perferendis.</p>

        <div class="blog-posts">
            <div class="blog-post" id="blog1">
                <a href="#"><img src="img/more-about-us.jpg" alt="blog image"></a>
                <a href="#"><h2 class="blog-title">Self Manufactured</h2></a>
                <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
            </div>
            <div class="blog-post" id="blog2">
                <a href="#"><img src="img/more-about-us.jpg" alt="blog image"></a>
                <a href="#"><h2 class="blog-title">Premium Quality</h2></a>
                <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
            </div>
            <div class="blog-post" id="blog3">
                <a href="#"><img src="img/more-about-us.jpg" alt="blog image"></a>
                <a href="#"><h2 class="blog-title">Elegant Style</h2></a>
                <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
            </div>
        </div> <!-- end blog-posts -->
    </div> <!-- end container -->
</div> <!-- end blog-section -->


    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Category</h4>
                        <ul class="list-unstyled">
                            <li><a href="/DailyWear">Daily Wear</a></li>
                            <li><a href="/PartyDress">Party Dress</a></li>
                            <li><a href="/Casual">Casual</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Company</h4>
                        <ul class="list-unstyled">
                            <li><a href="">About</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <h4>Address</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">200, Green block, NewYork</a></li>
                            <li><a href="#">+10 456 267 1678</a></li>
                            <li><span>contact89@winter.com</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

</body>
</html>