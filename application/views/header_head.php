<?php 

ob_start();
@error_reporting(E_ALL);
@ini_set("display_errors","1");

mb_internal_encoding("UTF-8");
mb_language("tr");
mb_substitute_character(197);

@set_time_limit(0);

?>
<!DOCTYPE html>
<html>
<head>
<meta name="description" content="Furniture and Product Design" />
<title>Lisa Hampton</title>
<meta http-equiv="X-UA-Compatible" content="IE=8" /><meta property="og:title" content="Lisa Hampton" />
<meta property="og:site_name" content="Lisa Hampton" />
<meta property="og:image" content="" />
<meta name="viewport" content="width=1050, maximum-scale=1.0" />
<link rel="canonical" href="http://lisa.hoopss.com/" /> 
<link rel="image_src" href="" />

<meta content="text/html; charset=UTF-8" itemprop="charset" />
<link rel="shortcut icon" href="<?php echo $baseUrl; ?>favicon.ico" itemprop="favicon" />
<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>css/lisa.css" itemprop="stylesheet" />

<!-- Jquery -->
<script type="text/javascript" src="<?php echo $baseUrl; ?>javascript/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl; ?>javascript/jquery.form.min.js"></script>

<!-- JQuery Carousel -->
<script type="text/javascript" src="<?php echo $baseUrl; ?>kutuphane/jquery_carousel/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl; ?>kutuphane/jquery_carousel/jcarousel.connected-carousels.js"></script>
<link rel="stylesheet" href="<?php echo $baseUrl; ?>kutuphane/jquery_carousel/jcarousel.connected-carousels.css" type="text/css" />

<!-- Fancybox -->
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="<?php echo $baseUrl; ?>kutuphane/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo $baseUrl; ?>kutuphane/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo $baseUrl; ?>kutuphane/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="<?php echo $baseUrl; ?>kutuphane/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo $baseUrl; ?>kutuphane/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php echo $baseUrl; ?>kutuphane/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="<?php echo $baseUrl; ?>kutuphane/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo $baseUrl; ?>kutuphane/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<!-- Mosaic Effect -->
<script type="text/javascript" src="<?php echo $baseUrl; ?>kutuphane/mosaic/js/mosaic.1.0.1.min.js"></script>
<link rel="stylesheet" href="<?php echo $baseUrl; ?>kutuphane/mosaic/css/mosaic.css" type="text/css" />
<script type="text/javascript">  
	$(document).ready(function($){
		
		$('.circle').mosaic({
			opacity		:	0.8			//Opacity for overlay (0-1)
		});

		$('.fade').mosaic({
			opacity: 0.8
		});
		
		$('.bar').mosaic({
			animation	:	'slide'		//fade or slide
		});

		$('.bar2').mosaic({
			animation	:	'slide'		//fade or slide
		});

		$('.bar3').mosaic({
			animation	:	'slide',	//fade or slide
			anchor_y	:	'top'		//Vertical anchor position
		});
		
		$('.cover').mosaic({
			animation	:	'slide',	//fade or slide
			hover_x		:	'400px'		//Horizontal position on hover
		});

		$('.cover2').mosaic({
			animation	:	'slide',	//fade or slide
			anchor_y	:	'top',		//Vertical anchor position
			hover_y		:	'80px'		//Vertical position on hover
		});

		$('.cover3').mosaic({
			animation	:	'slide',	//fade or slide
			hover_x		:	'400px',	//Horizontal position on hover
			hover_y		:	'300px'		//Vertical position on hover
		});
	});
</script>

<!-- Global Variables -->
<script>
<?php 
echo "window.baseUrls = '".$baseUrl."';\n";

?>

</script>
<script type="text/javascript" src="<?php echo $baseUrl; ?>javascript/head.js"></script>
</head>

<body>


