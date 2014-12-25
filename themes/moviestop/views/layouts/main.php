<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movie Stop</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo Yii::app()->theme->baseUrl;?>/css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/style.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl;?>/color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1>Movie Stop</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#intro">Home</a></li>
        <li><a href="#recent">Recent Movies</a></li>
		<li><a href="#upcoming">Upcoming Movie</a></li>
		<li><a href="#contact">Contact</a></li>
       
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<?php echo $content; ?>
	

	

	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Get in touch</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
        <div class="col-lg-8">
            <div class="boxed-grey">
                
            </div>
        </div>
		
		<div class="col-lg-4">
			<div class="widget-contact">
				<h5>Movie Stop</h5>
				
				<address>
				  <strong>Movie Stop</strong><br>
                                    Nepal<br>
				  <abbr title="Phone">P:</abbr> 981XXXXXXX
				</address>

				<address>
				  <strong>Email</strong><br>
				  <a href="mailto:#">contact@moviestop.com</a>
				</address>	
				<address>
				  <strong>We're on social networks</strong><br>
                       	<ul class="company-social">
                            <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>	
				</address>					
			
			</div>	
		</div>
    </div>	

		</div>
	</section>
	<!-- /Section: contact -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p>&copy;Copyright 2014 - Movie Stop. All rights reserved.</p>
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.easing.min.js"></script>	
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.scrollTo.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo Yii::app()->theme->baseUrl;?>/js/custom.js"></script>

</body>

</html>
