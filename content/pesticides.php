<?php
session_start();
require_once('../admin/core/Database.php');
$db = Database::getInstance();
$con = $db->getConnection();
if(isset($_REQUEST['lang']) && !empty($_REQUEST['lang'])){
   $_SESSION['lang'] = $_REQUEST['lang'];

   if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_REQUEST['lang']){
    echo "<script type='text/javascript'> window.location.reload(); </script>";
   }
}
// Include Language file
if(isset($_SESSION['lang'])){
    include "../lang/".$_SESSION['lang'].".php";
} else{
    include "../lang/en.php";
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
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" property="" />
<!-- font-awesome icons -->
<link rel="stylesheet" href="../css/font-awesome.min.css" />
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
							<li class="active"><a href="../index.php" data-hover="<?= _HOME ?>"><?= _HOME ?></a></li>
							<li><a href="../index.php#about" data-hover="<?= _ABOUT_US ?>"><?= _ABOUT_US ?></a></li>
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
		</div>
    <br/>
    <h1 style="color:white;font-size: 50px; text-shadow: 3px 4px 2px black;" class="mx-auto d-block text-center"><?= _PESTICIDES ?></h1>
	</div>
<!-- //banner -->
<!-- services -->
<div class="services">
  <div class="container">
    <p class="w3ls_para"><?= _PESTICIDES ?></p>
      <div class="card">
        <?php
          $pesticides = "";
          if(isset($_SESSION['lang'])){
              if ($_SESSION['lang'] == "en") {
                  $pesticides = "SELECT * FROM pesticides_en";
              } else {
                  $pesticides = "SELECT * FROM pesticides_te";
              }
          } else{
              $pesticides = "SELECT * FROM pesticides_en";
          }
          $result = $con->query($pesticides);
          if ($result && $result->num_rows > 0) {
              $i = 0;
              foreach ($result as $crop) {
                  $i++;
                  echo "<div class='col-md-3 w3_agileits_stats_grid'>";
                    echo "<div style='background-color:#5a575757' class='agileits_w3layouts_stats_grid'>";
                    echo "<img class='img-responsive' src=../posts/". $crop['file'] ." /><br/><br/>";
                      echo "<h3 style='color:green'>". $crop['pesticidename'] ."</h3><br/>";
                      echo "<h5 style='color:black'>". $crop['pesticidetype'] ."</h5><br/>";
                      echo "<h6 style='color:green'>" . _PRICE . "</h6>";
                      echo "<h3 style='color:black'>". $crop['pesticideprice'] ."</h3><br/>";
                      echo "<h6 style='color:green'>" . _COMMENTS . "</h6>";
                      echo "<h5 style='line-height: 1.6;'>". strip_tags($crop['comments']) . "</h5";
                    echo "</div>";
                  echo "</div>";
                  if ($i%4 == 0) {
                      echo "<div class='clearfix'></div><br/>";
                  }
              }
          }
         ?>
      </div>
  </div>
</div>
<!-- //services -->

<?php include '../components/footer.php'; ?>
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
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
	<script src="../js/bootstrap.js"></script>
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
