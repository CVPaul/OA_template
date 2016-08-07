<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
	<title>兴义市法院</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no" />
	<link rel="stylesheet" href="/OA_template/Public/styles/base.css">
</head>
<body>
<div class="container">

	

<div class="header">
	<div class="top">
		<div class="area">
			<a class="logo" href="/OA_template/index.php/Index/index">
				<img src="/OA_template/Public/image/logo.png" alt="">
			</a>
		</div>
	</div>	


		<div class="nav">
			<div class="area">
				<!-- 头部菜单 -->
				<?php echo R('Public/menu');?>
			</div>
		</div>
	</div>


<meta charset="UTF-8">
<link href="/OA_template/Public/css/slide/style.css" rel="stylesheet" type="text/css" />
<meta charset="UTF-8">
<link href="css/style.css" rel="stylesheet" type="text/css" />
<div class="container">
	<!-- progressbar -->
	<section id="progressbar-slider" class="sample slider--animated" data-slidizle data-slidizle-loop="true" data-slidizle-timeout="3000" data-slidizle-pause-on-hover="true">

		<ul class="slider-content" data-slidizle-content>
	
			<li data-slidizle-slide-id="slide1" class="slider-item" style="background-image:url('/OA_template/Public/image/slide/01.jpg')">
			</li>

			<li data-slidizle-slide-id="slide2" data-slidizle-timeout="1000" class="slider-item" style="background-image:url('/OA_template/Public/image/slide/02.jpg')">
			</li>

			<li data-slidizle-slide-id="slide3" class="slider-item" style="background-image:url('/OA_template/Public/image/slide/03.jpg')">
			</li>

		</ul>

		

		<header>
			<h2>介绍</h2>
			<h3>这张图片的简单介绍</h3>
		</header>

		<div class="slider-next" data-slidizle-next>
			<i class="fa fa-arrow-right"></i>
		</div>
		<div class="slider-previous" data-slidizle-previous>
			<i class="fa fa-arrow-left"></i>
		</div>

		<div class="slider-progressbar"></div>

		<ul class="slider-navigation" data-slidizle-navigation>
			<li class="slider-navigation-item" data-slidizle-slide-id="slide2" style="background-image:url('/OA_template/Public/image/slide/02.jpg')">
			</li>
			<li class="slider-navigation-item" data-slidizle-slide-id="slide1" style="background-image:url('/OA_template/Public/image/slide/01.jpg')">
			</li>
			<li class="slider-navigation-item" data-slidizle-slide-id="slide3" style="background-image:url('/OA_template/Public/image/slide/03.jpg')">
			</li>
		</ul>

		<div class="slidizle-loading">
		</div>

	</section>
</div>

<script src="http://libs.useso.com/js/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
<script>window.jQuery || document.write('<script src="js/jquery-2.1.1.min.js"><\/script>')</script>
<script src="js/jquery.slidizle.js"></script>

<script>

	jQuery(function($) {

		// setup slidizle
		$('[data-slidizle]').slidizle({
			beforeChange : function(api) {
				console.log('previous', api.getPreviousSlide().index());
				console.log('current', api.getCurrentSlide().index());
				console.log('next', api.getNextSlide().index());
				console.log('previous active', api.getPreviousActiveSlide().index());
			}
		});

	});

</script>
<!-- script to manage slider (normally not in html like this...) -->
<script>
	jQuery(function($) {

		var $slider = $('#progressbar-slider');
		// $slider.slidizle();
		var $progressbar = $slider.find('.slider-progressbar');
			api = $slider.data('slidizle_api');

		$slider.bind('slidizle.change', function(e, api) {
			console.log('change');
			$progressbar.stop().css('width', 0);
		});
		$slider.bind('slidizle.pause', function(e, api) {
			$progressbar.stop();
			console.log('timer pause', api.getCurrentTimeout(), api.getTotalTimeout(), api.getRemainingTimeout());
		});
		$slider.bind('slidizle.play slidizle.resume slidizle.change', function(e, api) {
			console.log('timer start', api.getCurrentTimeout(), api.getTotalTimeout(), api.getRemainingTimeout());

			// do nothing is is hover
			if (api.isHover()) return;

			// manage progressbar :
			$progressbar.animate({
				width : '100%'
			}, api.getRemainingTimeout());
		});
		// $slider.bind('slidizle.timerStop', function(e, api) {
		// 	$progressbar.css('width',0);
		// 	console.log('timer stop', api.getCurrentTimeout(), api.getTotalTimeout(), api.getRemainingTimeout());
		// });
	});
</script>
<div id="<?php echo MODULE_NAME;?>" class="main"> 
	<div id="new_notice" class="new_notice">
		<div class="Journalism">
			最新新闻
		</div>
		<div class="Important_notice">
			重要通知
		</div>
	</div>
	<div id="department" class="department">
		<div>部门</div>
		<ul>
			<li>部门1</li>
			<li>部门2</li>
			<li>部门3</li>
			<li>部门4</li>
		</ul>
	</div>
</div>


		
	<div class="common">
		<div class="contact_us">
			联系我们
		</div>
		<div class="fast_link">
			快速链接
		</div>
		<div class="we_focus_on">
			关注我们
		</div>
	</div>	
	<div class="area footer">
		Powered by © 2015 WINIT CORPORATION. All Rights Reserved.
	</div>
</div>
</body>
</html>