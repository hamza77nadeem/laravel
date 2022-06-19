
<!DOCTYPE HTML>

<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width,initial-scale=1">

<meta name="keywords" content="">

<meta name="description" content="">

<title>CarForYou - Responsive Car Dealer HTML5 Template</title>

<!--Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}" type="text/css"> -->

<!--Custome Style -->

<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="{{url('assets/css/style.css')}}" type="text/css">
<link rel="stylesheet" href="{{url('assets/css/custom.css')}}" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="{{url('assets/css/owl.carousel.css')}}" type="text/css">
<link rel="stylesheet" href="{{url('assets/css/owl.transitions.css')}}" type="text/css">
<!--slick-slider -->
<link href="{{url('assets/css/slick.css')}}" rel="stylesheet">
<!--bootstrap-slider -->
<link href="{{url('assets/css/bootstrap-slider.min.css')}}" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="{{url('assets/css/fontawesome.min.css')}}" rel="stylesheet">

<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="{{url('assets/switcher/css/switcher.css')}}" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{url('assets/switcher/css/red.css')}}" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="{{url('assets/switcher/css/orange.css')}}" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{url('assets/switcher/css/blue.css')}}" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{url('assets/switcher/css/pink.css')}}" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{url('assets/switcher/css/green.css')}}" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{url('assets/switcher/css/purple.css')}}" title="purple" media="all" />
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url('assets/images/favicon-icon/apple-touch-icon-144-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url('assets/images/favicon-icon/apple-touch-icon-114-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url('assets/images/favicon-icon/apple-touch-icon-72-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" href="{{url('assets/images/favicon-icon/apple-touch-icon-57-precomposed.png')}}">
<link rel="shortcut icon" href="{{url('assets/images/favicon-icon/favicon.png')}}">
<!-- Google-Font-->
<link href="{{url('https://fonts.googleapis.com/css?family=Lato:300,400,700,900')}}" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<!--[if lt IE 9]>

<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]--> 
<!-- <style>
  #index1 > section:nth-child(8) > div > div.row > nav > div.hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between > div:nth-child(2){
    display:none;
  } -->
</style>
</head>

<body id="index1">



<!-- Start Switcher -->

<div class="switcher-wrapper">	

    <div class="demo_changer">

        <div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>

        <div class="form_holder">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="predefined_styles">

                        <div class="skin-theme-switcher">

                            <h4>Color</h4>

                            <a href="#" data-switchcolor="red" class="styleswitch" style="background-color:#de302f;"> </a>

                            <a href="#" data-switchcolor="orange" class="styleswitch" style="background-color:#f76d2b;"> </a>

                            <a href="#" data-switchcolor="blue" class="styleswitch" style="background-color:#228dcb;"> </a>

                            <a href="#" data-switchcolor="pink" class="styleswitch" style="background-color:#FF2761;"> </a>

                            <a href="#" data-switchcolor="green" class="styleswitch" style="background-color:#2dcc70;"> </a>

                            <a href="#" data-switchcolor="purple" class="styleswitch" style="background-color:#6054c2;"> </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- /Switcher -->  

        

<!--Header-->
@yield('content');
<header>

  <div class="default-header">

    <div class="container">

      <div class="row">

        <div class="col-sm-3 col-md-2">

          <div class="logo"> <a href="index.html"><img src="{{url('assets/images/logo.png')}}" alt="image"/></a> </div>

        </div>

        <div class="col-sm-9 col-md-10">

          <div class="header_info">

            <div class="header_widgets">

              <div class="circle_icon"> <i class="fa-solid fa-envelope"></i> </div>

              <p class="uppercase_text">For Support Mail us : </p>

              <a href="mailto:info@example.com">ranahamzanadeem77@gmail.com</a> </div>

            <div class="header_widgets">

              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>

              <p class="uppercase_text">Service Helpline Call Us: </p>

              <a href="tel:61-1234-5678-09">+92 311 6422179</a> </div>

            <div class="social-follow">

              <ul>

                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

              </ul>

            </div>

            <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-bs-toggle="modal" data-bs-dismiss="modal">Login / Register</a> </div>

          </div>

        </div>

      </div>

    </div>

  </div>

  

 <!-- Navigation -->

 <nav id="navigation_bar" class="navbar navbar-expand-lg">
    <div class="container">
	<div class="row header-row desktop">
      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fa fa-bars"></i> </button>
      </div>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav">
          
              <li><a href="{{url('home2')}}">Home Page </a></li>
              
            
          <li><a href="{{url('about-us')}}">About Us</a></li>
          
              <li><a href="{{url('listing-grid')}}">Grid Style</a></li>
              
            
          
         
          
              <li><a href="{{url('blog-detail')}}">Blog Detail</a></li>
            
        </ul>
      </div>
	  <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown dropdown-toggle"> <a href="#" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> Post vehicle<i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                
                <li><a class="dropdown-item" href="{{url('my-vehicles')}}">My Vehicles</a></li>
                <li><a class="dropdown-item" href="{{url('add-product')}}">Post a Vehicle</a></li>
               
              </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="#" method="get" id="header-search-form">
            <input type="text" placeholder="Search..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
	  </div>
	  
	   <!-- mobile-view -->
	  <div class="row header-row mobile">
	<div class="col-10 col-md-8 right">
      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fa fa-bars"></i> </button>
      </div>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav">
          <li class="dropdown"><a href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
          	 <ul class="dropdown-menu">
              <li><a href="index.html">Home Page 1</a></li>
              <li><a href="index-2.html">Home Page 2</a></li>
			  <li><a href="index-3.html">Home Page 3</a></li>
            </ul>
          </li>
          <li><a href="about-us.html">About Us</a></li>
          <li class="dropdown"><a href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Inventory</a>
            <ul class="dropdown-menu">
              <li><a href="listing-grid.html">Grid Style</a></li>
              <li><a href="listing-classic.html">Classic Style</a></li>
              <li><a href="listing-detail.html">Detail Page Style 1</a></li>
              <li><a href="listing-detail-2.html">Detail Page Style 2</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Dealers</a>
            <ul class="dropdown-menu">
              <li><a href="dealers-list.html">List View</a></li>
              <li><a href="dealers-profile.html">Detail Page</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
            <ul class="dropdown-menu">
              <li><a href="services.html">Services</a></li>
              <li><a href="contact-us.html">Contact Us</a></li>
              <li><a href="compare.html">Compare Vehicles</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="404.html">404 Error</a></li>
              <li><a href="coming-soon.html">Coming Soon</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">News</a>
            <ul class="dropdown-menu">
              <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
              <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
              <li><a href="blog-detail.html">Blog Detail</a></li>
            </ul>
          </li>
        </ul>
      </div>
	  <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown dropdown-toggle"> <a href="#" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> Jhon Anderson <i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="profile-settings.html">Profile Settings</a></li>
                <li><a class="dropdown-item" href="my-vehicles.html">My Vehicles</a></li>
                <li><a class="dropdown-item" href="post-vehicle.html">Post a Vehicle</a></li>
                <li><a class="dropdown-item" href="#">Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="#" method="get" id="header-search-form">
            <input type="text" placeholder="Search..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
	  </div>
	  
	  <div class="col-2 col-md-4 right">
		<div class="user_login mobile">
          <ul>
            <li class="dropdown"> <a href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
                <li><a href="profile-settings.html">Profile Settings</a></li>
                <li><a href="my-vehicles.html">My Vehicles</a></li>
                <li><a href="post-vehicle.html">Post a Vehicle</a></li>
                <li><a href="#">Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
	  </div>
	  
	  </div>
	  <!-- mobile-view -->
	  
	  
    </div>
  </nav>

  <!-- Navigation end --> 

  

</header>
@yield('content');
<!-- /Header --> 



<!-- Banners -->

<section id="banner" class="banner-section">

  <div class="container">

    <div class="div_zindex">

      <div class="row">

	  <div class="col-md-7"></div>

        <div class="col-md-5">

          <div class="banner_content">

            <h1>Find the right car for you.</h1>

            <p>We have more than a thousand cars for you to choose. </p>

            <a href="#" class="btn">Read More <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>

        </div>

      </div>

    </div>

  </div>

</section>

<!-- /Banners --> 



<!-- Filter-Form -->

<section id="filter_form" class="gray-bg">

  <div class="container">

    <h3>Find Your Dream Car <span>(Easy search from here)</span></h3>

    

      <form action="#" method="get">

	  <div class="row">

        <div class="form-group col-md-3 col-sm-6 black_input">

          <div class="select">

            <select class="form-control">

              <option value="">Select Location </option>

              <option value="">Gujranwala </option>

              <option value="">Lahore </option>

            </select>

          </div>

        </div>

        <div class="form-group col-md-3 col-sm-6 black_input">

          <div class="select">

            <select class="form-control">

              <option>Select Brand</option>

              <option>Honda</option>

              <option>Suzuki</option>

              

              <option>Toyota</option>

            </select>

          </div>

        </div>

        <div class="form-group col-md-3 col-sm-6 black_input">

          <div class="select">

            <select class="form-control">

              <option>Select Model</option>

              <option>Series 1</option>

              <option>Series 2</option>

              <option>Series 3</option>

            </select>

          </div>

        </div>

        <div class="form-group col-md-3 col-sm-6 black_input">

          <div class="select">

            <select class="form-control">

              <option>Year of Model </option>

              <option>2016</option>

              <option>2015</option>

              <option>2014</option>

            </select>

          </div>

        </div>

        <div class="form-group col-md-6 col-sm-6 black_input">

          <label class="form-label">Price Range (Rs)</label>

          <input id="price_range" type="text" class="span2" value="" data-slider-min="50" data-slider-max="6000" data-slider-step="5" data-slider-value="[1000,5000]"/>

        </div>

        <div class="form-group col-md-3 col-sm-6 black_input">

          <div class="select">

            <select class="form-control">

              <option>Type of Car </option>

              <option>New Car</option>

              <option>Used Car</option>

            </select>

          </div>

        </div>

        <div class="form-group col-md-3 col-sm-6">

          <button type="submit" class="btn btn-block search"><i class="fa fa-search" aria-hidden="true"></i> Search Car </button>

        </div>

		</div>

      </form>

    

  </div>

</section>

<!-- /Filter-Form --> 



<!-- About -->

<section class="about-us-section section-padding">

  <div class="container">

    <div class="section-header text-center">

      <h2>Welcome <span>to CarForYou</span></h2>

      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>

    </div>

    <div class="row">

      <div class="col-lg-6 col-sm-6">

        <div class="looking-car">

          <div class="looking-cat-image"> <img src="{{url('assets/images/looking-used-car.png')}}" alt="Image" /> </div>

          <div class="looking-car-content">

            <h3>Looking <span>Used Car?</span></h3>

            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>

            <a href="" class="btn">View Listing<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a> </div>

        </div>

      </div>

      <div class="col-lg-6 col-sm-6">

        <div class="looking-car">

          <div class="looking-cat-image"> <img src="{{url('assets/images/looking-new-car.png')}}" alt="Image" /> </div>

          <div class="looking-car-content">

            <h3>Looking <span>New Car?</span></h3>

            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>

            <a href="" class="btn">View Listing<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a> </div>

        </div>

      </div>

    </div>

  </div>

</section>

<!-- /About --> 



<!-- Resent Cat-->



<!-- /Resent Cat --> 



<!-- Fun Facts-->

<section class="fun-facts-section">

  <div class="container div_zindex">

    <div class="row">

      <div class="col-lg-3 col-xs-6 col-sm-3">

        <div class="fun-facts-m">

          <div class="cell">

            <h2><i class="fa fa-calendar" aria-hidden="true"></i>40+</h2>

            <p>Years In Business</p>

          </div>

        </div>

      </div>

      <div class="col-lg-3 col-xs-6 col-sm-3">

        <div class="fun-facts-m">

          <div class="cell">

            <h2><i class="fa fa-car" aria-hidden="true"></i>1200+</h2>

            <p>New Cars For Sale</p>

          </div>

        </div>

      </div>

      <div class="col-lg-3 col-xs-6 col-sm-3">

        <div class="fun-facts-m">

          <div class="cell">

            <h2><i class="fa fa-car" aria-hidden="true"></i>1000+</h2>

            <p>Used Cars For Sale</p>

          </div>

        </div>

      </div>

      <div class="col-lg-3 col-xs-6 col-sm-3">

        <div class="fun-facts-m">

          <div class="cell">

            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>600+</h2>

            <p>Satisfied Customers</p>

          </div>

        </div>

      </div>

    </div>

  </div>

  <!-- Dark Overlay-->

  <div class="dark-overlay"></div>

</section>

<!-- /Fun Facts--> 



<!--Featured Car-->

<section class="section-padding">

  <div class="container">

    <div class="section-header text-center">

      <h2>Featured  Cars <span>Special Offers</span></h2>

      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>

    </div>

    <div class="row">
    @foreach($student as $item)
      <div class="col-list-3">

        <div class="featured-car-list">
        
          <div class="featured-car-img"> <a href="{{ url('get-id/'.$item->id) }}"><img src="{{ asset('uploads/students/'.$item->upload1) }}"  width="400px" height="200px" alt="Image"></a>

            <div class="label_icon">{{$item->car}}</div>

            <div class="compare_item">

              <div class="checkbox">

                <input  type="checkbox" id="compare">

                <label for="compare">Compare</label>

              </div>

            </div>
          
          </div>

          <div class="featured-car-content">

            <h6><a href="#">{{$item->vehicle_title}}</a></h6>

            <div class="price_info">

              <p class="featured-price">{{$item->price}}</p>

              <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>

            </div>

            <ul>

              <li><i class="fa fa-road" aria-hidden="true"></i>{{$item->km}}</li>

              <li><i class="fa fa-tachometer" aria-hidden="true"></i>{{$item->mileage_highway}}</li>

              <li><i class="fa fa-calendar" aria-hidden="true"></i>{{$item->model}}</li>

              <li><i class="fa fa-car" aria-hidden="true"></i>{{$item->fuel_tank}}</li>

              <li><i class="fa fa-user" aria-hidden="true"></i>{{$item->seating_capacity}}</li>

              <li><i class="fa fa-superpowers" aria-hidden="true"></i>143 kW</li>

            </ul>

          </div>

        </div>

      </div>
      @endforeach
     
      <!-- <div class="row">
      <div class="col-xl-4">
      {!! $student->links() !!}
</div>
      </div> -->
      <!-- <div class="col-list-3">

        <div class="featured-car-list">

          <div class="featured-car-img"> <a href=""><img src="assets/images/featured-img-02.jpg" class="img-fluid" alt="Image"></a>

            <div class="label_icon">Used</div>

            <div class="compare_item">

              <div class="checkbox">

                <input type="checkbox" id="compare2">

                <label for="compare2">Compare</label>

              </div>

            </div>

          </div>

          <div class="featured-car-content">

            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof</a></h6>

            <div class="price_info">

              <p class="featured-price">$90,000</p>

              <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>

            </div>

            <ul>

              <li><i class="fa fa-road" aria-hidden="true"></i>0,000 km</li>

              <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>

              <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>

              <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>

              <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>

              <li><i class="fa fa-superpowers" aria-hidden="true"></i>143 kW</li>

            </ul>

          </div>

        </div>

      </div>

      <div class="col-list-3">

        <div class="featured-car-list">

          <div class="featured-car-img"> <a href=""><img src="assets/images/featured-img-03.jpg" class="img-fluid" alt="Image"></a>

            <div class="label_icon">Used</div>

            <div class="compare_item">

              <div class="checkbox">

                <input type="checkbox" id="compare3">

                <label for="compare3">Compare</label>

              </div>

            </div>

          </div>

          <div class="featured-car-content">

            <h6><a href="#">BMW 535i</a></h6>

            <div class="price_info">

              <p class="featured-price">$90,000</p>

              <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>

            </div>

            <ul>

              <li><i class="fa fa-road" aria-hidden="true"></i>0,000 km</li>

              <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>

              <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>

              <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>

              <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>

              <li><i class="fa fa-superpowers" aria-hidden="true"></i>143 kW</li>

            </ul>

          </div>

        </div>

      </div>

    </div>

  </div> -->
  
</section>
<div class="pagination">
  {{ $student->links() }}
</div><br>
<!-- /Featured Car--> 



<!--Trending Car-->

<section class="section-padding gray-bg">

  <div class="container">

    <div class="section-header text-center">

      <h2>Trending <span>Cars of the Year</span></h2>

      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>

    </div>

    <div class="row">

      <div class="col-lg-12">

        <div id="trending_slider">

          <div class="trending-car-m">

            <div class="trending-car-img"> <img src="{{url('assets/images/trending-car-img-1.jpg')}}" alt="Image" class="img-fluid" /> </div>

            <div class="trending-hover">

              <h4><a href="#">Car Name</a></h4>

            </div>

          </div>

          <div class="trending-car-m">

            <div class="trending-car-img"> <img src="{{url('assets/images/trending-car-img-2.jpg')}}" alt="Image" class="img-fluid" /> </div>

            <div class="trending-hover">

              <h4><a href="#">Car Name</a></h4>

            </div>

          </div>

          <div class="trending-car-m">

            <div class="trending-car-img"> <img src="{{url('assets/images/trending-car-img-3.jpg')}}" alt="Image" class="img-fluid" /> </div>

            <div class="trending-hover">

              <h4><a href="#">Car Name</a></h4>

            </div>

          </div>

          <div class="trending-car-m">

            <div class="trending-car-img"> <img src="{{url('assets/images/trending-car-img-1.jpg')}}" alt="Image" class="img-fluid" /> </div>

            <div class="trending-hover">

              <h4><a href="#">Car Name</a></h4>

            </div>

          </div>

          <div class="trending-car-m">

            <div class="trending-car-img"> <img src="{{url('assets/images/trending-car-img-2.jpg')}}" alt="Image" class="img-fluid" /> </div>

            <div class="trending-hover">

              <h4><a href="#">Car Name</a></h4>

            </div>

          </div>

          <div class="trending-car-m">

            <div class="trending-car-img"> <img src="{{url('assets/images/trending-car-img-3.jpg')}}" alt="Image" class="img-fluid" /> </div>

            <div class="trending-hover">

              <h4><a href="#">Car Name</a></h4>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>

<!-- /Trending Car--> 



<!--Testimonial -->

<section class="section-padding testimonial-section parallex-bg">

  <div class="container div_zindex">

    <div class="section-header white-text text-center">

      <h2>Our Satisfied <span>Customers</span></h2>

      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>

    </div>

    <div class="row">

      <div id="testimonial-slider">

        <div class="testimonial-m">

          <div class="testimonial-img"> <img src="{{url('assets/images/testimonial-img-1.jpg')}}" alt="images" /> </div>

          <div class="testimonial-content">

            <div class="testimonial-heading">

              <h5>Donald Brooks</h5>

              <span class="client-designation">CEO of xzy company</span> </div>

            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>

          </div>

        </div>

        <div class="testimonial-m">

          <div class="testimonial-img"> <img src="{{url('assets/images/testimonial-img-2.jpg')}}" alt="images" /> </div>

          <div class="testimonial-content">

            <div class="testimonial-heading">

              <h5>Enzo Giovanotelli</h5>

              <span class="client-designation">CEO of xzy company</span> </div>

            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>

          </div>

        </div>

        <div class="testimonial-m">

          <div class="testimonial-img"> <img src="{{url('assets/images/testimonial-img-2.jpg')}}" alt="images" /> </div>

          <div class="testimonial-content">

            <div class="testimonial-heading">

              <h5>Donald Brooks</h5>

              <span class="client-designation">CEO of xzy company</span> </div>

            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>

          </div>

        </div>

        <div class="testimonial-m">

          <div class="testimonial-img"> <img src="{{url('assets/images/testimonial-img-1.jpg')}}" alt="images" /> </div>

          <div class="testimonial-content">

            <div class="testimonial-heading">

              <h5>Enzo Giovanotelli</h5>

              <span class="client-designation">CEO of xzy company</span> </div>

            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>

          </div>

        </div>

        <div class="testimonial-m">

          <div class="testimonial-img"> <img src="{{url('assets/images/testimonial-img-2.jpg')}}" alt="images" /> </div>

          <div class="testimonial-content">

            <div class="testimonial-heading">

              <h5>Donald Brooks</h5>

              <span class="client-designation">CEO of xzy company</span> </div>

            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>

          </div>

        </div>

        <div class="testimonial-m">

          <div class="testimonial-img"> <img src="{{url('assets/images/testimonial-img-3.jpg')}}" alt="images" /> </div>

          <div class="testimonial-content">

            <div class="testimonial-heading">

              <h5>Enzo Giovanotelli</h5>

              <span class="client-designation">CEO of xzy company</span> </div>

            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>

          </div>

        </div>

      </div>

    </div>

  </div>

  <!-- Dark Overlay-->

  <div class="dark-overlay"></div>

</section>

<!-- /Testimonial--> 



<!--Blog -->

<section class="section-padding">

  <div class="container">

    <div class="section-header text-center">

      <h2>Latest Updates In<span> Automobile Industry</span></h2>

      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>

    </div>

    <div class="row">

      <div class="col-md-4 col-sm-4">

        <article class="blog-list">

          <div class="blog-info-box"> 

          	<div class="share_article">

            	<p><i class="fa fa-share-alt" aria-hidden="true"></i></p>

                <ul>

                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                </ul>

            </div>

            <a href="#"><img src="{{url('assets/images/blog_img1.jpg')}}" class="img-fluid" alt="image"></a>

            <ul>

              <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>Latest Cars</a></li>

              <li><i class="fa fa-calendar" aria-hidden="true"></i>15 Nov 2016</li>

              <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>10 Comments</a></li>

            </ul>

          </div>

          <div class="blog-content">

            <h5><a href="#">But I must explain to you how all this mistaken idea.</a></h5>

            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because</p>

            <a href="#" class="btn-link">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>

        </article>

      </div>

      <div class="col-md-4 col-sm-4">

        <article class="blog-list">

          <div class="blog-info-box"> 

          <div class="share_article">

            	<p><i class="fa fa-share-alt" aria-hidden="true"></i></p>

                <ul>

                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                </ul>

            </div>

            <a href="#"><img src="{{url('assets/images/blog_img2.jpg')}}" class="img-fluid" alt="image"></a>

            <ul>

              <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>Latest Cars</a></li>

              <li><i class="fa fa-calendar" aria-hidden="true"></i>10 Nov 2016</li>

              <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>21 Comments</a></li>

            </ul>

          </div>

          <div class="blog-content">

            <h5><a href="#">On the other hand, we denounce with righteous indignation.</a></h5>

            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because</p>

            <a href="#" class="btn-link">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>

        </article>

      </div>

      <div class="col-md-4 col-sm-4">

        <article class="blog-list">

          <div class="blog-info-box"> 

          <div class="share_article">

            	<p><i class="fa fa-share-alt" aria-hidden="true"></i></p>

                <ul>

                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                </ul>

            </div>

            <a href="#"><img src="assets/images/blog_img3.jpg" class="img-fluid" alt="image"></a>

            <ul>

              <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>Latest Cars</a></li>

              <li><i class="fa fa-calendar" aria-hidden="true"></i>05 Nov 2016</li>

              <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>18 Comments</a></li>

            </ul>

          </div>

          <div class="blog-content">

            <h5><a href="#">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a></h5>

            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because</p>

            <a href="#" class="btn-link">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>

        </article>

      </div>

    </div>

  </div>

</section>

<!-- /Blog--> 



<!--Brands-->

<section class="brand-section gray-bg">

  <div class="container">

    <div class="brand-hadding">

      <h5>Popular Brands</h5>

    </div>

    <div class="brand-logo-list">

      <div id="popular_brands">

        <div><a href="#" style="margin-left: 20px;padding-left: 20px;"><img src="{{url('assets/images/honda-logo.png')}}" class="img-fluid" alt="image"></a></div>

        <div><a href="#" style="margin-left: 20px; padding-left: 20px;"><img src="{{url('assets/images/suzuki.png')}}" class="img-fluid" alt="image"></a></div>

        <div><a href="#" style="margin-left: 20px;padding-left: 20px;"><img src="{{url('assets/images/toyota-logo.png')}}" class="img-fluid" alt="image"></a></div>

        

      </div>

    </div>

  </div>

</section>

<!-- /Brands--> 



<!--Footer -->

<footer>

  <div class="footer-top">

    <div class="container">

      <div class="row">

        <div class="col-md-3 col-sm-6">

          <h6>Top Categores</h6>

          <ul>

            <li><a href="#">Crossovers</a></li>

            <li><a href="#">Hybrids</a></li>

            <li><a href="#">Hybrid Cars</a></li>

            <li><a href="#">Hybrid SUVs</a></li>

            <li><a href="#">Concept Vehicles</a></li>

          </ul>

        </div>

        <div class="col-md-3 col-sm-6">

          <h6>About Us</h6>

          <ul>

            <li><a href="#">Privacy</a></li>

            <li><a href="#">Hybrid Cars</a></li>

            <li><a href="#">Cookies</a></li>

            <li><a href="#">Trademarks</a></li>

            <li><a href="#">Terms of use</a></li>

          </ul>

        </div>

        <div class="col-md-3 col-sm-6">

          <h6>Useful Links</h6>

          <ul>

            <li><a href="#">Our Partners</a></li>

            <li><a href="#">Careers</a></li>

            <li><a href="#">Sitemap</a></li>

            <li><a href="#">Investors</a></li>

            <li><a href="#">Request a Quote</a></li>

          </ul>

        </div>

        <div class="col-md-3 col-sm-6">

          <h6>Subscribe Newsletter</h6>

          <div class="newsletter-form">

            <form action="#">

              <div class="form-group">

                <input type="email" class="form-control newsletter-input" required placeholder="Enter Email Address" />

              </div>

              <button type="submit" class="btn btn-block">Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>

            </form>

            <p class="subscribed-text">*We send great deals and latest auto news to our subscribed users every week.</p>

          </div>

        </div>

      </div>

    </div>

  </div>

  <div class="footer-bottom">

    <div class="container">

      <div class="row">

        

        <div class="col-md-6">

          <p class="copy-right">Copyright &copy; 2022 CarForYou. All Rights Reserved</p>

        </div>

		<div class="col-md-6 text-right">

          <div class="footer_widget">

            <p>Download Our APP:</p>

            <ul>

              <li><a href="#"><i class="fa fa-android" aria-hidden="true"></i></a></li>

              <li><a href="#"><i class="fa fa-apple" aria-hidden="true"></i></a></li>

            </ul>

          </div>

          <div class="footer_widget">

            <p>Connect with Us:</p>

            <ul>

              <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>

              <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>

              <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>

              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

            </ul>

          </div>

        </div>

      </div>

    </div>

  </div>

</footer>

<!-- /Footer--> 



<!--Back to top-->

<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>

<!--/Back to top--> 



<!--Login-Form -->

<div class="modal fade" id="loginform">

  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h3 class="modal-title">Login</h3>

      </div>

      <div class="modal-body">

        

          <div class="login_wrap">

		  <div class="row">

            <div class="col-md-6 col-sm-6">

              <form action="#" method="get">

                <div class="form-group">

                  <input type="text" class="form-control" placeholder="Username or Email address*">

                </div>

                <div class="form-group">

                  <input type="password" class="form-control" placeholder="Password*">

                </div>

                <div class="form-group checkbox">

                  <input type="checkbox" id="remember">

                  <label for="remember">Remember Me</label>

                </div>

                <div class="form-group">

                  <input type="submit" value="Login" class="btn btn-block">

                </div>

              </form>

            </div>

            <div class="col-md-6 col-sm-6">

              <h6 class="gray_text">Login the Quick Way</h6>

              <a href="#" class="btn btn-block facebook-btn"><i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook</a> <a href="#" class="btn btn-block twitter-btn"><i class="fa fa-twitter-square" aria-hidden="true"></i> Login with Twitter</a> <a href="#" class="btn btn-block googleplus-btn"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Login with Google+</a> </div>

            <div class="mid_divider"></div>

          </div>

        </div>

      </div>

      <div class="modal-footer text-center">

        <p>Don't have an account? <a href="#signupform" data-bs-toggle="modal" data-bs-dismiss="modal">Signup Here</a></p>

        <p><a href="#forgotpassword" data-bs-toggle="modal" data-bs-dismiss="modal">Forgot Password ?</a></p>

      </div>

    </div>

  </div>

</div>

<!--/Login-Form --> 



<!--Register-Form -->

<div class="modal fade" id="signupform">

  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h3 class="modal-title">Sign Up</h3>

      </div>

      <div class="modal-body">

        

          <div class="signup_wrap">

		  <div class="row">

            <div class="col-md-6 col-sm-6">

              <form action="#" method="get">

                <div class="form-group">

                  <input type="text" class="form-control" placeholder="Full Name">

                </div>

                <div class="form-group">

                  <input type="email" class="form-control" placeholder="Email Address">

                </div>

                <div class="form-group">

                  <input type="password" class="form-control" placeholder="Password">

                </div>

                <div class="form-group">

                  <input type="password" class="form-control" placeholder="Confirm Password">

                </div>

                <div class="form-group checkbox">

                  <input type="checkbox" id="terms_agree">

                  <label for="terms_agree">I Agree with <a href="#">Terms and Conditions</a></label>

                </div>

                <div class="form-group">

                  <input type="submit" value="Sign Up" class="btn btn-block">

                </div>

              </form>

            </div>

            <div class="col-md-6 col-sm-6">

              <h6 class="gray_text">Login the Quick Way</h6>

              <a href="#" class="btn btn-block facebook-btn"><i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook</a> <a href="#" class="btn btn-block twitter-btn"><i class="fa fa-twitter-square" aria-hidden="true"></i> Login with Twitter</a> <a href="#" class="btn btn-block googleplus-btn"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Login with Google+</a> </div>

            <div class="mid_divider"></div>

          </div>

        </div>

      </div>

      <div class="modal-footer text-center">

        <p>Already got an account? <a href="#loginform" data-bs-toggle="modal" data-bs-dismiss="modal">Login Here</a></p>

      </div>

    </div>

  </div>

</div>

<!--/Register-Form --> 



<!--Forgot-password-Form -->

<div class="modal fade" id="forgotpassword">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">



        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h3 class="modal-title">Password Recovery</h3>

      </div>

      <div class="modal-body">

        <div class="row">

          <div class="forgotpassword_wrap">

            <div class="col-md-12">

              <form action="#" method="get">

                <div class="form-group">

                  <input type="email" class="form-control" placeholder="Your Email address*">

                </div>

                <div class="form-group">

                  <input type="submit" value="Reset My Password" class="btn btn-block">

                </div>

              </form>

              <div class="text-center">

                <p class="gray_text">For security reasons we don't store your password. Your password will be reset and a new one will be send.</p>

                <p><a href="#loginform" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back to Login</a></p>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<!--/Forgot-password-Form --> 



<!-- Scripts --> 

<script src="{{url('assets/js/jquery.min.js')}}"></script>
<script src="{{url('assets/js/bootstrap.min.js')}}"></script> 
<script src="{{url('assets/js/interface.js')}}"></script> 
<script src="{{url('assets/js/31f5977fdc.js')}}"></script> 
<!--Switcher-->
<script src="{{url('assets/switcher/js/switcher.js')}}"></script>
<!--bootstrap-slider-JS--> 
<script src="{{url('assets/js/bootstrap-slider.min.js')}}"></script> 
<!--Slider-JS--> 
<script src="{{url('assets/js/slick.min.js')}}"></script> 
<script src="{{url('assets/js/owl.carousel.min.js')}}"></script>



</body>

</html>