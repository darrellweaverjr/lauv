<?php
require_once dirname(__FILE__).'/nes/Dynamix/API.php';
if(isset($_GET['debug'])){
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
}

$template_name = 'thank-you';
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

	<?= $profile->xid("head") ?>

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
	})(window,document,'script','dataLayer','<?= $profile->xid("gtm") ?>');</script>
	<!-- End Google Tag Manager -->
</head>

<body>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $profile->xid("gtm") ?>"
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

		<div class="body-pattern">
			<div class="row">
				<div class="small-12 medium-12 large-8 col-md-offset-2 columns formcontent">
					<div class="rainbow-bg">
						<div class="fam-form">

	            <div class="formContent">
	              <h3 class="header2" data-xid="header2">
									<?= $profile->xid("header2") ?>
	              </h3>
	            </div>
							<div class="formblock">

	              <div class="service-container">

	                 <div class="service">
	                     <a data-xid="apple-music-link" class="img-btn redirect" href="https://music.apple.com/us/artist/982612996?uo=4&amp;app=music&amp;at=1010lpyZ&amp;ct=LFV_83d8003f186e77e39c08fbdf7fa86a6b" data-player="applemusic" data-servicetype="play" data-apptype="manual">
												 <?= $profile->xid("apple-music-link") ?>
	                     </a>
	                 </div>
	                 <div class="service">
	                     <a data-xid="spotify-music-link" class="img-btn redirect" href="https://open.spotify.com/artist/5JZ7CnR6gTvEMKX4g70Amv" data-uri="spotify:artist:5JZ7CnR6gTvEMKX4g70Amv" data-player="spotify" data-servicetype="play" data-apptype="manual">
												 <?= $profile->xid("spotify-music-link") ?>
	                     </a>
	                 </div>
	                 <div class="service">
	                     <a data-xid="itunes-music-link" class="img-btn redirect" href="https://itunes.apple.com/us/artist/1354803196?uo=4&amp;app=itunes&amp;at=1010lpyZ&amp;ct=LFV_83d8003f186e77e39c08fbdf7fa86a6b" data-player="itunes" data-servicetype="download" data-apptype="manual">
												 <?= $profile->xid("itunes-music-link") ?>
	                     </a>
	                 </div>
	                 <div class="service">
	                     <a data-xid="amazon-music-link" class="img-btn redirect" href="https://music.amazon.com/artists/B00CN49HZU?ref=dm_sh_865c-2082-dmcp-c1b3-dcda7&amp;musicTerritory=US&amp;marketplaceId=ATVPDKIKX0DER" data-player="amazonmusic" data-servicetype="play" data-apptype="manual">
												 <?= $profile->xid("amazon-music-link") ?>
	                     </a>
	                 </div>
	                 <div class="service">
	                     <a data-xid="youtube-music-link" class="img-btn redirect" href="https://music.youtube.com/channel/UCWjoDY2SXJ5dvcdunWI6mjQ" data-player="youtubemusic" data-servicetype="play" data-apptype="manual">
												 <?= $profile->xid("youtube-music-link") ?>
	                     </a>
	                 </div>
	                 <div class="service">
	                     <a data-xid="tidal-music-link" class="img-btn redirect" href="https://tidal.com/browse/artist/4898953" data-player="tidal" data-servicetype="play" data-apptype="manual">
												 <?= $profile->xid("tidal-music-link") ?>
	                     </a>
	                 </div>
	                 <div class="service">
	                     <a data-xid="pandora-music-link" class="img-btn redirect" href="https://www.pandora.com/artist/lauv/AR2J3gdxqXvfbww?part=lf&amp;corr=83d8003f186e77e39c08fbdf7fa86a6b" data-player="pandora" data-servicetype="play" data-apptype="manual">
												 <?= $profile->xid("pandora-music-link") ?>
	                     </a>
	                 </div>
	                 <div class="service">
	                     <a data-xid="deezer-music-link" class="img-btn redirect" href="http://www.deezer.com/artist/4677655?app_id=140685" data-player="deezer" data-servicetype="play" data-apptype="manual">
												 <?= $profile->xid("deezer-music-link") ?>
	                     </a>
	                 </div>
	                 <div class="service">
	                     <a data-xid="napster-music-link" class="img-btn redirect" href="https://us.napster.com/artist/lauv" data-player="napster" data-servicetype="play" data-apptype="manual">
												 <?= $profile->xid("napster-music-link") ?>
	                     </a>
	                 </div>
	                 <!--Last option should be 'i dont know'-->

	              </div>

	            </div>

						</div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="small-12 medium-12 large-8 col-md-offset-2 columns formcontent">
          <div class="video-sect" data-xid="logo">
            <div class="video-container" data-xid="youtube">
							<?= $profile->xid("youtube") ?>
            </div>
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
