<html>

<!-- Mirrored from www.nicolette.ro/sapphire-html/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Oct 2016 08:31:06 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.css') }}">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700' rel='stylesheet' type='text/css'/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:200,300,400,600,700' rel='stylesheet' type='text/css'/>
	<link href="{{ asset('css/font-awesome.min.css')}}" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!--script type="text/javascript" src="https://getfirebug.com/firebug-lite-debug.js"></script-->	
	<title>my blog</title>
</head>
<body>
    <div class="page-container">
        <div class="header">
			<nav class="navbar container">
		
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
                <a href="{{ route('blog.index') }}" class="navbar-brand">
					<img src="img/logo.png" alt="Sapphire">Eshikhon Blog
				</a>
			  </div>
  
                 <div class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav">
                      <li class="active"><a href="{{ route('blog.index') }}">Home</a></li>
                      <li><a href="{{ route('contact') }}" class="ajax_right">Contact</a></li>
                      <li><a href="{{ route('about') }}" class="ajax_right">About</a></li>
                    </ul>
					
                  </div><!-- /.navbar-collapse -->
			</nav>		
        </div>
        

        @yield('content')

        <div class="footer black">
            <div class="container">
                <!-- div class="arrow"><b class="caret"></b></div -->
                <div class="row">
                    <div class="col-md-3">
                        <div>
                        <h3>Information</h3>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div>
                        <h3>Customer Service</h3>
                            <ul>
                                <li><a href="contact.html" class="ajax_right">Contact Us</a></li>
                                <li><a href="#">Returns</a></li>
                            </ul>	
                          </div>
                    </div>	
    
                    <div class="col-md-3 twitter">
                        <div class="row">
                            <h3>Follow us</h3>
                            <script type="text/javascript" src="js/twitterFetcher_v9_min.js"></script>
                            <ul id="twitter_update_list"><li class="col-md-2">Twitter feed loading</li></ul>			
                            <script>twitterFetcher.fetch('256524641194098690', 'twitter_update_list', 2, true, true, false);</script> 
                        </div>				
                    </div>	
    
                    
                    <div class="col-md-3 social">
                        <div class="copy">Copyright &copy; nicole_89</div>
                        <ul class="social-network">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>	
            </div>
        </div>

    </div>

    <!-- script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write("<script src='js/jquery-1.10.2.min.js'><\/script>")</script -->
    <script type="text/javascript" src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/sapphire.js') }}"></script>
</body>
    
    <!-- Mirrored from www.nicolette.ro/sapphire-html/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Oct 2016 08:31:19 GMT -->
</html>
    