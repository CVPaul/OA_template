<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
	<title>兴义市法院</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no" />
<<<<<<< f47c721009da3a84504758c1d652d79e31121cd3
	<link rel="stylesheet" href="/OA_template/Public/styles/base.css">
	<link href="/OA_template/Public/css/slide/style.css" rel="stylesheet" type="text/css" />
	<!-- css -->
	<link href="/OA_template/Public/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/OA_template/Public/css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="/OA_template/Public/css/style.css" rel="stylesheet" />

	<script src="/OA_template/Public/js/jquery.min.js" type="text/javascript"></script>
	<script>window.jQuery || document.write('<script src="/OA_template/Public/js/jquery-2.1.1.min.js"><\/script>')</script>
	<script src="/OA_template/Public/js/jquery.slidizle.js"></script>
=======
	<link rel="stylesheet" href="/oa_template/OA_template/Public/styles/base.css">
	<link href="/oa_template/OA_template/Public/css/slide/style.css" rel="stylesheet" type="text/css" />
	<!-- css -->
	<link href="/oa_template/OA_template/Public/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/oa_template/OA_template/Public/css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="/oa_template/OA_template/Public/css/style.css" rel="stylesheet" />

	<script src="/oa_template/OA_template/Public/js/jquery.min.js" type="text/javascript"></script>
	<script>window.jQuery || document.write('<script src="/oa_template/OA_template/Public/js/jquery-2.1.1.min.js"><\/script>')</script>
	<script src="/oa_template/OA_template/Public/js/jquery.slidizle.js"></script>
>>>>>>> modified by xsp, added login
</head>
<body>
<div class="container">

	

<div class="header">
	<div class="top">
		<div class="area">
			<a class="logo" href="/oa_template/OA_template/index.php/Index/index">
				<img src="/oa_template/OA_template/Public/image/logo.png" alt="">
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
	<div class="container">
		<!-- progressbar -->
		<section id="progressbar-slider" class="sample slider--animated" data-slidizle data-slidizle-loop="true" data-slidizle-timeout="3000" data-slidizle-pause-on-hover="true">

			<ul class="slider-content" data-slidizle-content>
		
				<li data-slidizle-slide-id="slide1" class="slider-item" style="background-image:url('/oa_template/OA_template/Public/image/slide/01.jpg')">
				</li>

				<li data-slidizle-slide-id="slide2" data-slidizle-timeout="1000" class="slider-item" style="background-image:url('/oa_template/OA_template/Public/image/slide/02.jpg')">
				</li>

				<li data-slidizle-slide-id="slide3" class="slider-item" style="background-image:url('/oa_template/OA_template/Public/image/slide/03.jpg')">
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
				<li class="slider-navigation-item" data-slidizle-slide-id="slide2" style="background-image:url('/oa_template/OA_template/Public/image/slide/02.jpg')">
				</li>
				<li class="slider-navigation-item" data-slidizle-slide-id="slide1" style="background-image:url('/oa_template/OA_template/Public/image/slide/01.jpg')">
				</li>
				<li class="slider-navigation-item" data-slidizle-slide-id="slide3" style="background-image:url('/oa_template/OA_template/Public/image/slide/03.jpg')">
				</li>
			</ul>

			<div class="slidizle-loading">
			</div>

		</section>
	
		<div id="new_notice" class="new_notice">
			<div class="Journalism">
				<h4>最新资讯</h4>
				<ul>
					<li><a href="#">Duis aute irure dolor in reprehenderit.</a><span>December 15, 2015</span></li>
					<li><a href="#">Praesent vitae eros eget.</a><span>December 20, 2015</span></li>
					<li><a href="#">rutrum sed sem quis venenatis.</a><span>December 25, 2015</span></li>
					<li><a href="#">eros eget tellus tristique bibendum.</a><span>December 28, 2015</span></li>
					<li><a href="#">excepturi sint occaecati.</a><span>January 3, 2016</span></li>
				</ul>
			</div>
<<<<<<< f47c721009da3a84504758c1d652d79e31121cd3
			<div class="Notice">
=======
			<div class="Journalism">
>>>>>>> modified by xsp, added login
				<h4>重要通知</h4>
				<ul>
					<li><a href="#">Duis aute irure dolor in reprehenderit.</a><span>December 15, 2015</span></li>
					<li><a href="#">Praesent vitae eros eget.</a><span>December 20, 2015</span></li>
					<li><a href="#">rutrum sed sem quis venenatis.</a><span>December 25, 2015</span></li>
					<li><a href="#">eros eget tellus tristique bibendum.</a><span>December 28, 2015</span></li>
					<li><a href="#">excepturi sint occaecati.</a><span>January 3, 2016</span></li>
				</ul>
			</div>
		</div>
		<div id="department" class="department">
			<div class="skill-home"> <div class="skill-home-solid clearfix"> 
			<div class="col-md-3 text-center">
			<span class="icons c1"><i class="fa fa-trophy"></i></span> <div class="box-area">
<<<<<<< f47c721009da3a84504758c1d652d79e31121cd3
			<h3>人力资源部</h3> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p></div>
			</div>
			<div class="col-md-3 text-center"> 
			<span class="icons c2"><i class="fa fa-picture-o"></i></span> <div class="box-area">
			<h3>财务部</h3> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p></div>
			</div>
			<div class="col-md-3 text-center"> 
			<span class="icons c3"><i class="fa fa-desktop"></i></span> <div class="box-area">
			<h3>技术部</h3> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p></div>
			</div>
			<div class="col-md-3 text-center"> 
			<span class="icons c4"><i class="fa fa-globe"></i></span> <div class="box-area">
			<h3>宣传部</h3> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
			</div></div>
			</div></div>
		</div>
	</div>
=======
			<h3>Web Development</h3> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p></div>
			</div>
			<div class="col-md-3 text-center"> 
			<span class="icons c2"><i class="fa fa-picture-o"></i></span> <div class="box-area">
			<h3>UI Design</h3> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p></div>
			</div>
			<div class="col-md-3 text-center"> 
			<span class="icons c3"><i class="fa fa-desktop"></i></span> <div class="box-area">
			<h3>Interaction</h3> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p></div>
			</div>
			<div class="col-md-3 text-center"> 
			<span class="icons c4"><i class="fa fa-globe"></i></span> <div class="box-area">
			<h3>User Experiance</h3> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
			</div></div>
			</div></div>
		</div>
</div>
>>>>>>> modified by xsp, added login


		
	<footer>
	<div class="footer_frame">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">联系我们</h5>
					<address>
					<strong>Abovecompany Inc</strong><br>
					JC Main Road, Near Silnile tower<br>
					 Pin-21542 NewYork US.</address>
					<p>
						<i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
						<i class="icon-envelope-alt"></i> email@domainname.com
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">快速链接</h5>
					<ul class="link-list">
						<li><a href="#">Latest Events</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">关注我们</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">合作伙伴</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<p style="text-align:center">
		Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a>
	</p>
	</footer>
</div>
</body>
</html>