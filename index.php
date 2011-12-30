<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BYU ACM Homepage</title>
<!-- sliderman.js -->
<script type="text/javascript" src="slider/js/sliderman.1.3.6.js"></script>
<link rel="stylesheet" type="text/css" href="slider/css/sliderman.css" />
<!-- /sliderman.js -->

</head>

<body>
<div id="container">
<?php include("header/header.php") ?>
<?php include("slider/slider.php") ?>
<div id="content">
	<div id="content-left">
		<div id="info">
        	<? include("info/info.php") ?>
        </div>
        
        <div id="sponsors">
        	<h2> Our Sponsors </h2>
        	<? include("slider/sponsor-slider.php") ?>
        </div>
	</div>
    <div id="content-right">
    	<div id="facebook">
					<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
					<fb:like-box href="http://www.facebook.com/BYUACM" width="273" show_faces="true" stream="true" header="true"></fb:like-box>
		</div>
    </div>
</div>
<div id="footer">
	<?php include("footer/footer.php") ?>
</div>
</div>
</body>
</html>