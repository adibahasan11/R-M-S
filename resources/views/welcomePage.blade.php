<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

        <title>No. 32 Boutique Cafe</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />

        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/flexslider.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/pricing.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
        
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datetimepicker.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <script src="{{asset('frontend/js/jquery-1.11.2.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/jquery.flexslider.min.js')}}"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                 animation: "slide",
                 controlsContainer: ".flexslider-container"
                });
            });
        </script>

        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
                var mapCanvas = document.getElementById('map-canvas');
                var mapOptions = {
                    center: new google.maps.LatLng(24.909439, 91.833800),
                    zoom: 16,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions)

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(24.909439, 91.833800),
                    title:"No. 32 Boutique Cafe"
                });

                // To add the marker to the map, call setMap();
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>


    </head>
    <body data-spy="scroll" data-target="#template-navbar">

        <!--== 4. Navigation ==-->
        <nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img id="logo" src="{{asset('frontend/images/MainLogo.png')}}" class="logo img-responsive">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="Food-fair-toggle">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about">about</a></li>
                        <li><a href="#have-a-look">Our Dishes</a></li>
                        <li><a href="#pricing">pricing</a></li>
                        <li><a href="#breakfast">bread</a></li>
                        <li><a href="#reserve">reservation</a></li>
                        <li><a href="#contact">contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.row -->
        </nav>

        <!--== 5. Header ==-->
        <section id="header-slider" class="owl-carousel">
            <div class="item">
            <img src="{{asset('frontend/images/chicken-steak.jpg')}}" class="img-responsive section-icon" style="width: 767px; height: 479px;">
                <div class="container">
                    <div class="header-content">
                        <h4 class="header-title">BEST FOOD</h4>
                        <p class="header-sub-title">create your own slogan</p>
                    </div> <!-- /.header-content -->
                </div>
            </div>
            <div class="item">
            <img src="{{asset('frontend/images/pic2.2.png')}}" class="img-responsive section-icon hidden-sm" style="width: 767px;">
                <div class="container">
                    <div class="header-content">
                        <h3 class="header-title">BEST SNACKS</h3>
                        <p class="header-sub-title">create your own slogan</p>
                    </div> <!-- /.header-content -->
                </div>
            </div>
            <div class="item">
            <img src="{{asset('frontend/images/drink.jpg')}}" class="img-responsive section-icon hidden-sm" style="width: 767px;">
                <div class="container">
                    <div class="header-content ">
                        <h3 class="header-title">BEST DRINKS</h3>
                        <p class="header-sub-title">create your own slogan</p>
                    </div> <!-- /.header-content -->
                </div>
            </div>
        </section>

        <!--== 6. About us ==-->
        <section id="about" class="about">
            
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <!--<div class="hidden-xs col-sm-6 section-bg about-bg dis-table-cell">-->
                        <img src="{{asset('frontend/images/outdoor2.png')}}" style= "height: 550px; width: 830px">
                        <!--</div>-->
                        <div class="col-xs-12 col-sm-6 dis-table-cell">
                            <div class="section-content">
                                <h2 class="section-content-title">About us</h2>
                                <p class="section-content-para">
                                    Astronomy compels the soul to look upward, and leads us from this world to another.  Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.
                                </p>
                                <p class="section-content-para">
                                    beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.  Where ignorance lurks, so too do the frontiers of discovery and imagination.
                                </p>
                            </div> <!-- /.section-content -->
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#about -->
        <br><br>
        
        <!--== 14. Have a look to our dishes ==-->
            

        <section id="have-a-look" class="have-a-look hidden-xs">
            <div id="w">
                <div class="pricing-filter">
                    <div class="pricing-filter-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="section-header">
                                        <h2 class="pricing-title">We Serve Only The Best!</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{asset('frontend/images/icons/food_color.png')}}">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">

                        <div class="menu-gallery" style="width: 50%; float:left;">
                            <div class="flexslider-container">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <img src="{{asset('frontend/images/pic3.png')}}"  style="height: 567px;"/>
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend/images/pic4.png')}}"  style="height: 567px;"/>
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend/images/menu-gallery/menu6.jpg')}}"  style="height: 567px;"/>
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend/images/menu-gallery/menu7.jpg')}}"  style="height: 567px;"/>
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend/images/menu-gallery/menu8.jpg')}}"  style="height: 567px;"/>
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend/images/menu-gallery/menu9.jpg')}}"  style="height: 567px;"/>
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend/images/menu-gallery/menu10.jpg')}}"  style="height: 567px;"/>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="gallery-heading hidden-xs" style="width: 50%; float:right; background-color: #B677D4; height: 567px;">
                            <h3 class="section-title">Have A Look To Our Dishes</h3>
                        </div>
                        

                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div> <!-- /.wrapper -->
        </section>
        
        <br><br>

        <!--==  7. Afordable Pricing  ==-->
        <section id="pricing" class="pricing">
            <div id="w">
                <div class="pricing-filter">
                    <div class="pricing-filter-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="section-header">
                                        <h2 class="pricing-title">Affordable Pricing</h2>
                                        <ul id="filter-list" class="clearfix">
                                            <li class="filter" data-filter="all">All</li>
                                            @foreach($categories as $category)
                                                <li class="filter" data-filter=".{{ $category->slug }}">{{ $category->cat_name }} <span class="badge">{{ $category->items->count() }}</span></li>
                                            @endforeach
                                        </ul><!-- @end #filter-list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">  
                        <div class="col-md-10 col-md-offset-1">
                            <ul id="menu-pricing" class="menu-price">
                            <span>
                                @foreach($items as $item)
                                <li class="item {{ $item->slug }}">
                                <a href="#">
                                    <img src="{{ asset('uploads/item/'.$item->image) }}" class="img-responsive" alt="Item" style="height: 300px; width: 300px;" >
                                    <div class="menu-desc text-center">
                                            <span>
                                                <h3>{{ $item->name }}</h3>
                                                {{ $item->description }}
                                            </span>
                                    </div>
                                </a>
                                <h2 class="white">MYR {{ $item->price }}</h2>
                                </li>
                                @endforeach 
                            </span>
                            </ul>

                            <!-- <div class="text-center">
                                    <a id="loadPricingContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>
                            </div> -->

                        </div>   
                    </div>
                </div>

            </div> 
        </section>

       
        <!--== 8. Great Place to enjoy ==-->
        <section id="great-place-to-enjoy" class="great-place-to-enjoy">
            <!--<img class="img-responsive section-icon hidden-sm hidden-xs" src="{{asset('frontend/images/icons/food_color.png')}}">-->
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-12" style="background-color: #B677D4;">
                            <h2 class="section-title">Great Place to enjoy</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell ">
                        <div class="menu-gallery" style="width: 100%; float:right;">
                            <div class="flexslider-container">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <img src="{{asset('frontend/images/indoor3.png')}}"  style="height: 510px;"/>
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend/images/indoor4.png')}}"  style="height: 510px;"/>
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend/images/indoor1.png')}}"  style="height: 510px;"/>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#great-place-to-enjoy -->
        <br><br>

        <!--== 10. Our Breakfast Menu-->
        <section id="breakfast" class="breakfast">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="hidden-xs col-sm-6 section-bg about-bg dis-table-cell">
                        <img src="{{asset('frontend/images/pic1.1.png')}}" style = "height: 600px; width: 850px">
                        </div>
                        <div class="col-xs-12 col-sm-6 dis-table-cell">
                            <div class="section-content">
                                <h2 class="section-content-title">Have Refreshing Breakfast!</h2>
                                
                            </div> <!-- /.section-content -->
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#about -->
        
        <br><br>

        <br><br>
        <!--== 15. Reserve A Table! ==-->
        <section id="reserve" class="reserve">
            
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Reserve A Table !</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">
                        <img src="{{asset('frontend/images/indoor-final.png')}}" style= "height: 522px; width: 657px" />
                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#reserve -->

        <section class="reservation">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{asset('frontend/images/icons/reserve_color.png')}}">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class=" section-content">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <form class="reservation-form" method="post" action="/reserve">
                                @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="name" id="name" required="required" placeholder="  &#xf007;  Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control reserve-form empty iconified" id="email" required="required" placeholder="  &#xf1d8;  e-mail">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="tel" class="form-control reserve-form empty iconified" name="phone" id="phone" required="required" placeholder="  &#xf095;  Phone">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="date_and_time" id="datetimepicker" required="required" placeholder="&#xf017;  Date and Time">
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <textarea type="text" name="message" class="form-control reserve-form empty iconified" id="message" rows="3" required="required" placeholder="  &#xf086;  We're listening"></textarea>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <button type="submit" id="submit" name="submit" class="btn btn-reservation">
                                                <span><i class="fa fa-check-circle-o"></i></span>
                                                Make a reservation
                                            </button>
                                        </div>
                                            
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-2 hidden-sm hidden-xs"></div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="opening-time" style="background-color: #B677D4;">
                                    <h3 class="opening-time-title">Hours</h3>
                                    <div class="launch">
                                        <h4>Breakfast</h4>
                                        <p>Mon to Fri: 7:30 AM - 10:30 AM</p>
                                    </div>
                                    <!--<p>Mon:	7:30 am – 10:00 pm</p>
                                    <p>Tue:	7:30 am – 10:00 pm</p>
                                    <p>Wed:	7:30 am – 10:00 pm</p>
                                    <p>Thu:	7:30 am – 10:00 pm</p>
                                    <p>Fri:	7:30 am – 10:00 pm</p>
                                    <p>Sat:	7:30 am – 10:00 pm</p>
                                    <p>Sun:	7:30 am – 10:00 pm</p>-->
                                    <div class="launch">
                                        <h4>Lunch</h4>
                                        <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                                    </div>
                                    <div class="dinner">
                                        <h4>Dinner</h4>
                                        <p>Mon to Sat: 6:00 PM - 10:00 PM</p>
                                        <p>Sun: 5:30 PM - 10:00 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact">
            <div class="container-fluid color-bg">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 dis-table-cell">
                        <h2 class="section-title">Contact With us</h2>
                    </div>
                    <div class="col-xs-6 col-sm-6 dis-table-cell">
                        <div class="section-content">
                            <p>C-G-32, Barrington Square Apartment, Jalan golden Hill, Cameron Golden Hill, 39000 Tanah Rata, Pahang, Malaysia</p>
                            <p>+60107162526</p>
                            <p>example@mail.com </p>
                        </div>
                    </div>
                </div>
                <div class="social-media">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <ul class="center-block">
                                <li><a href="https://www.facebook.com/No.32BoutiqueCafe/?ref=page_internal" class="fb"></a></li>
                                <li><a href="#" class="twit"></a></li>
                                <li><a href="#" class="g-plus"></a></li>
                                <li><a href="#" class="link"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container-fluid">
            <div class="row">
                <div id="map-canvas"></div>
            </div>
        </div>



        <section class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                        <div class="row">
                             <form class="contact-form" method="post" action="/contact">
                                
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input  name="name" type="text" class="form-control" id="name" required="required" placeholder="  Name">
                                    </div>
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" id="email" required="required" placeholder="  Email">
                                    </div>
                                    <div class="form-group">
                                        <input name="subject" type="text" class="form-control" id="subject" required="required" placeholder="  Subject">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <textarea name="message" type="text" class="form-control" id="message" rows="7" required="required" placeholder="  Message"></textarea>
                                </div>

                                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                    <div class="text-center">
                                        <button type="submit" id="submit" name="submit" class="btn btn-send" style="background-color: #B677D4;">Send </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright, 2021 <a href="#">No. 32 Boutique Cafe</a> Theme by <a href="http://themewagon.com/"  target="_blank">ThemeWagon</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/jquery.mixitup.min.js')}}" ></script>
        <script src="{{asset('frontend/js/wow.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.validate.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/jquery.hoverdir.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/jQuery.scrollSpeed.js')}}"></script>
        <script src="{{ asset('frontend/js/script.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script type="text/javascript">
            $('#datetimepicker').datetimepicker({
                format: "dd MM yyyy - HH:11 P",
                showMeridian: true,
                autoclose: true,
                todayBtn: true
            });
        </script>
        {!! Toastr::message() !!}
    </body>
</html>