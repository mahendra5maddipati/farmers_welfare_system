<?php
session_start();
// Set Language variable
if(isset($_REQUEST['lang']) && !empty($_REQUEST['lang'])){
   $_SESSION['lang'] = $_REQUEST['lang'];

   if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_REQUEST['lang']){
    echo "<script type='text/javascript'> window.location.reload(); </script>";
   }
}
// Include Language file
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
<!-- //js -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- font-awesome icons -->
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
	<div class="banner1">
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
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav link-effect-5" id="link-effect-5">
							<li><a href="index.html" data-hover="<?= _HOME ?>"><?= _HOME ?></a></li>
							<li><a href="#about" data-hover="<?= _ABOUT_US ?>"><?= _ABOUT_US ?></a></li>
							<li><a href="queries.php" data-hover="<?= _QUERIES ?>"><?= _QUERIES ?></a></li>
							<li class="active"><a href="mail.php" data-hover="<?= _CONTACT_US ?>"><?= _CONTACT_US ?></a></li>
              <li><a href="#" data-hover="<?= _LANGUAGE ?>"><?= _LANGUAGE ?></a><form method='get' action='' id='form_lang' >
                 <select class="form-control" name='lang' onchange='changeLang();' >
                 <option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?> >English</option>
                 <option value='te' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'te'){ echo "selected"; } ?> >Telugu</option>
                </select>
              </form></li>
						</ul>
            <div class="w3_social_icons">
							<ul class="w3layouts_social">
								<li><a href="#" class="w3l_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3l_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3l_instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</nav>
				</div>
			</nav>
		</div>
	</div>
<!-- //banner -->
<div class="mail">
  <div class="container">
    <p class="w3ls_para"><?= _TITLE ?></p>
    <h3 class="agileits_head"><?= _CONTACT_US ?></h3>

    <div class="w3_agile_mail_grids">
      <form action="#" method="post">
        <div class="col-md-6 w3_agile_mail_grid">
          <span class="input input--ichiro">
            <input class="input__field input__field--ichiro" type="text" id="input-25" placeholder=" " required="" />
            <label class="input__label input__label--ichiro" for="input-25">
              <span class="input__label-content input__label-content--ichiro">Your Name</span>
            </label>
          </span>
          <span class="input input--ichiro">
            <input class="input__field input__field--ichiro" type="email" id="input-26" placeholder=" " required="" />
            <label class="input__label input__label--ichiro" for="input-26">
              <span class="input__label-content input__label-content--ichiro">Your Email</span>
            </label>
          </span>
          <span class="input input--ichiro">
            <input class="input__field input__field--ichiro" type="text" id="input-27" placeholder=" " required="" />
            <label class="input__label input__label--ichiro" for="input-27">
              <span class="input__label-content input__label-content--ichiro">Your Phone Number</span>
            </label>
          </span>
          <input type="submit" value="Submit">
        </div>
        <div class="col-md-6 w3_agile_mail_grid">
          <textarea name="Message" placeholder="Your message here..." required=""></textarea>
        </div>
        <div class="clearfix"> </div>
      </form>
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
