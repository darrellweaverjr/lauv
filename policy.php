<?php
require_once dirname(__FILE__).'/nes/Dynamix/API.php';
if(isset($_GET['debug'])){
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
}

$template_name = 'policy';
require dirname(__FILE__).'/_creds.php';
require dirname(__FILE__).'/_dynamix.php';
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title data-xid="title"><?= $profile->xid("title") ?></title>

	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="628">
	<meta property="og:title" content="Lauv">
	<meta property="og:description" content="Join the Lauv Fan List for Tour News, Music Drops, and Special Announcements!">
	<meta property="og:url" content="https://awal.com">
	<!-- <meta property="og:image" content="https://storage.googleapis.com/dlvec-bucket/pride-og-image.jpg"> -->
	<meta property="og:type" content="video">
	<meta property="og:video:url" content="https://www.youtube.com/embed/_cmORZMgv6I">
	<meta property="og:video:secure_url" content="https://www.youtube.com/embed/_cmORZMgv6I">
	<meta property="og:video:type" content="application/x-shockwave-flash">
	<meta property="og:video:width" content="1280">
	<meta property="og:video:height" content="720">

	<link rel="shortcut icon" type="image/x-icon" href="https://storage.googleapis.com/awal-bucket/favicon.ico">
	<link rel="stylesheet" id="bs-css" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.typekit.net/fwf0rjb.css">
	<link rel="stylesheet" href="css/foundation.css">
	<link rel="stylesheet" href="css/app.css">
	<style type="text/css" data-xid="custom-css"><?= $profile->xid("custom-css") ?></style>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KPK39GQ');</script>
	<!-- End Google Tag Manager -->
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KPK39GQ"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
  <section class="contesttop">
		<div class="hero-header">
			<div class="row extremepadding">
				<div class="small-12 medium-12 large-8 col-md-offset-2 columns" data-xid="logo"><!-- Modify the URL to the logo file -->
					<?= $profile->xid("logo") ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="small-12 medium-12 large-8 col-md-offset-2 columns formcontent">
				<div class="fam-form">
					<div class="rules" data-xid="rules">
						<?= $profile->xid("rules") ?>
					</div>
				</div>
			</div>
    </div>
  </section>

	<section class="footer" id="footer">
		<div class="footer-content" data-xid="footer-content"><!-- Replace the 'href' value, and the inner HTML link text -->
			<?= $profile->xid("footer-content") ?>
		</div>
	</section>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="js/vendor/what-input.js"></script>
	<script src="js/vendor/foundation.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/additional-methods.js"></script>
	<script src="js/app.js"></script>
</body>
</html>
