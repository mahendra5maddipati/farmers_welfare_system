<?php
session_start();
// Set Language variable.
if(isset($_REQUEST['lang']) && !empty($_REQUEST['lang'])){
   $_SESSION['lang'] = $_REQUEST['lang'];

   if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_REQUEST['lang']){
    echo "<script type='text/javascript'> window.location.reload(); </script>";
   }
}
// Include Language file.
if(isset($_SESSION['lang'])){
    include "lang/".$_SESSION['lang'].".php";
} else{
    include "lang/en.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?= _TITLE ?></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Farmland Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- /javascript->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- font-awesome icons external file-->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<script>
function changeLang(){
    document.getElementById('form_lang').submit();
}
</script>
</head>

<body>
<!-- banner -->
	<div class="banner">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="wthree_logo">
						<h1><a class="navbar-brand" href="index.html"><span><?= _TITLE_KEY ?></span><?= _TITLE_VALUE ?></a></h1>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling. -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav link-effect-5" id="link-effect-5">
							<li class="active"><a href="index.html" data-hover="<?= _HOME ?>"><?= _HOME ?></a></li>
							<li><a href="#about" data-hover="<?= _ABOUT_US ?>"><?= _ABOUT_US ?></a></li>
							<li><a href="queries.php" data-hover="<?= _QUERIES ?>"><?= _QUERIES ?></a></li>
							<li><a href="mail.php" data-hover="<?= _CONTACT_US ?>"><?= _CONTACT_US ?></a></li>
              <li><a href="#" data-hover="<?= _LANGUAGE ?>"><?= _LANGUAGE ?></a><form method='get' action='' id='form_lang' >
                 <select class="form-control" name='lang' onchange='changeLang();' >
                 <option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?> >English</option>
                 <option value='te' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'te'){ echo "selected"; } ?> >Telugu</option>
                </select>
              </form></li>
						</ul>
					</nav>
				</div>
			</nav>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="banner_info">
								<h3><?= _CONTENT1 ?></h3>
							</div>
						</li>
						<li>
							<div class="banner_info">
							  <h3><?= _CONTENT2 ?></h3>
							</div>
						</li>
						<li>
							<div class="banner_info">
								<h3><?= _CONTENT3 ?></h3>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
			<!-- //flexSlider -->
		</div>
	</div>
<!-- //banner -->

<!-- banner-bottom -->
	<div id="about" class="banner-bottom">
		<div class="container">
			<div class="col-md-6 w3layouts_banner_bottom_left">
				<img src="images/1.jpg" alt=" " class="img-responsive" />
			</div>
			<div class="col-md-6 w3layouts_banner_bottom_right">
				<h4><?= _ABOUT_US ?></h4>
				<h3><?= _WELCOME ?></h3>
				<p><?= _PARA1 ?></p>
				<div class="w3_more">
					<a href="#" class="link link--yaku" data-toggle="modal" data-target="#myModal">
						<?= _READ_MORE ?>
					</a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- //banner-bottom -->

<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<?= _TITLE ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<img src="images/banner.jpg" alt=" " class="img-responsive" />
						<p><?= _CONTENT_MODAL ?></i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- about -->
	<div class="about">
		<div class="container">
			<h2><?= _SECTION1 ?></h2>
			<div class="w3l_about_pos">
				<img src="images/1.png" alt=" " class="img-responsive" />
			</div>
		</div>
	</div>
<!-- //about -->
<!-- services-bottom -->
	<div class="services-bottom">
		<div class="container">
			<p class="w3ls_para"><?= _TITLE ?></p>
			<h3 class="agileits_head agileits_head_w3"><?= _EXPLORE ?></h3>
			<div class="w3l_services_bottom_grids">
				<div class="col-md-3 w3l_services_bottom_grid">
					<a href="content/crops.php">
            <div class="w3ls_services_bottom_grid hvr-rectangle-out">
  						<i class="fa fa-leaf" aria-hidden="true"></i>
  					</div>
  					<h4><?= _CROPS ?></h4>
          </a>
				</div>
				<div class="col-md-3 w3l_services_bottom_grid">
					<a href="content/marketprices.php">
            <div class="w3ls_services_bottom_grid hvr-rectangle-out">
  						<i class="fa fa-rss" aria-hidden="true"></i>
  					</div>
  					<h4><?= _MARKET_PRICES ?></h4>
          </a>
				</div>
				<div class="col-md-3 w3l_services_bottom_grid">
          <a href="content/seeds.php">
  					<div class="w3ls_services_bottom_grid hvr-rectangle-out">
  						<i class="glyphicon glyphicon-grain" aria-hidden="true"></i>
  					</div>
  					<h4><?= _SEEDS ?></h4>
          </a>
				</div>
				<div class="col-md-3 w3l_services_bottom_grid">
          <a href="content/pesticides.php">
  					<div class="w3ls_services_bottom_grid hvr-rectangle-out">
  						<i class="glyphicon glyphicon-remove-circle" aria-hidden="true"></i>
  					</div>
  					<h4><?= _PESTICIDES ?></h4>
          </a>
				</div>
				<div class="clearfix"> </div>
			</div>
      <div class="w3l_services_bottom_grids">
				<div class="col-md-3 w3l_services_bottom_grid">
          <a href="content/fertilizers.php">
  					<div class="w3ls_services_bottom_grid hvr-rectangle-out">
  						<i class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></i>
  					</div>
  					<h4><?= _FERTILIZERS ?></h4>
          </a>
				</div>
				<div class="col-md-3 w3l_services_bottom_grid">
          <a href="content/soilfertility.php">
  					<div class="w3ls_services_bottom_grid hvr-rectangle-out">
  						<i class="fa fa-fw fa-globe" aria-hidden="true"></i>
  					</div>
  					<h4><?= _SOIL_FERTILITY ?></h4>
          </a>
				</div>
				<div class="col-md-3 w3l_services_bottom_grid">
          <a href="content/areas.php">
  					<div class="w3ls_services_bottom_grid hvr-rectangle-out">
  						<i class="fa fa-fw fa-book" aria-hidden="true"></i>
  					</div>
  					<h4><?= _AREAS ?></h4>
          </a>
				</div>
				<div class="col-md-3 w3l_services_bottom_grid">
          <a href="content/weather.php">
  					<div class="w3ls_services_bottom_grid hvr-rectangle-out">
  						<i class="glyphicon glyphicon-cloud" aria-hidden="true"></i>
  					</div>
  					<h4><?= _WEATHER ?></h4>
          </a>
				</div>
				<div class="clearfix"> </div>
			</div>
      <div class="w3l_services_bottom_grids">
				<div class="col-md-3 w3l_services_bottom_grid">
          <a href="content/schemes.php">
  					<div class="w3ls_services_bottom_grid hvr-rectangle-out">
  						<i class="fa fa-fw fa-suitcase" aria-hidden="true"></i>
  					</div>
  					<h4><?= _SCHEMES ?></h4>
          </a>
				</div>
				<div class="col-md-3 w3l_services_bottom_grid">
          <a href="content/funds.php">
  					<div class="w3ls_services_bottom_grid hvr-rectangle-out">
  						<i class="fa fa-fw fa-suitcase" aria-hidden="true"></i>
  					</div>
  					<h4><?= _FUNDS ?></h4>
          </a>
				</div>
				<div class="col-md-3 w3l_services_bottom_grid">
          <a href="content/loans.php">
  					<div class="w3ls_services_bottom_grid hvr-rectangle-out">
  						<i class="fa fa-fw fa-suitcase" aria-hidden="true"></i>
  					</div>
  					<h4><?= _LOANS ?></h4>
          </a>
				</div>
				<div class="col-md-3 w3l_services_bottom_grid">
          <a href="content/equipments.php">
  					<div class="w3ls_services_bottom_grid hvr-rectangle-out">
  						<i class="fa fa-fw fa-cogs" aria-hidden="true"></i>
  					</div>
  					<h4><?= _EQUIPMENTS ?></h4>
          </a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services-bottom -->
<?php include 'components/footer.php'; ?>
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
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

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
