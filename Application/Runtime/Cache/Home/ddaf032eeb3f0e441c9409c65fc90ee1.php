<<<<<<< f47c721009da3a84504758c1d652d79e31121cd3
<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<title><?php echo (L("_PUBLIC_LOGIN_WYL_MANAGEMENT_SYSTEM_LOGIN_")); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="/OA_template/Public/styles/login.css">
	<script src="/OA_template/Public/scripts/seajs/sea.js"></script>
	<script src="/OA_template/Public/scripts/seajs/config.js"></script>
	<script>
	    var LANG = "<?php echo ($lang); ?>";
		seajs.config({
			vars:{
				lang:"<?php echo ($lang); ?>"
			},
			paths:{
				"css":"/OA_template/Public/styles"
			}
		});
		seajs.use("src/<?php echo MODULE_NAME;?>/<?php echo ACTION_NAME;?>.js");
		var GlobalData = {
			url : "/OA_template/index.php/Home/Public"
		}
	</script>
</head>
<body>
<div class="container">
	<div class="header">
		<div class="top">
			<a class="logo" href="/OA_template/index.php/Home/Public/login">
				<img src="/OA_template/Public/image/<?php echo ($lang); ?>/logo.png" alt="">
			</a>

			<?php if($lang == 'zh-cn'): ?><div class="droplist">
					<div class="label">
						<span class="blue">简体中文</span>
						<i class="icon dropdown-es"></i>
					</div>
					<div class="list box-align-right">
						<ul class="list hover">
							<li><a class="blue block" href="/OA_template/index.php/Home/Public/login/l/zh-tw">繁體中文</a></li>
							<li><a class="blue block" href="/OA_template/index.php/Home/Public/login/l/en-us">English</a></li>
						</ul>				
					</div>
				</div><?php endif; ?>
			<?php if($lang == 'zh-tw'): ?><div class="droplist">
					<div class="label">
						<span class="blue">繁體中文</span>
						<i class="icon dropdown-es"></i>
					</div>
					<div class="list box-align-right">
						<ul class="list hover">
							<li><a class="blue block" href="/OA_template/index.php/Home/Public/login/l/zh-cn">简体中文</a></li>
							<li><a class="blue block" href="/OA_template/index.php/Home/Public/login/l/en-us">English</a></li>
						</ul>				
					</div>
				</div><?php endif; ?>
			<?php if($lang == 'en-us'): ?><div class="droplist">
					<div class="label">
						<span class="blue">English</span>
						<i class="icon dropdown-es"></i>
					</div>
					<div class="list box-align-right">
						<ul class="list hover">
							<li><a class="blue block" href="/OA_template/index.php/Home/Public/login/l/zh-cn">简体中文</a></li>
							<li><a class="blue block" href="/OA_template/index.php/Home/Public/login/l/zh-tw">繁體中文</a></li>
						</ul>				
					</div>
				</div><?php endif; ?>
		</div>
	</div>
	
	<div class="content">
		<div class="main">
			<table id="loginTable" style="width:100%;">
				<tr>
					<td>						
						<div id="advGallery" class="slideBox" style="width: 450px; height: 200px; overflow: hidden;">
							<?php if(empty($arrImg)): ?><img src="/OA_template/Public/image/<?php echo ($lang); ?>/banner_home.png" alt="" />    
							<?php else: $count = count(arrImg);?>
							<ul <?php if(count($arrImg) != 1): ?>class="items"<?php endif; ?> >
							<?php if(is_array($arrImg)): $i = 0; $__LIST__ = $arrImg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; if(empty($data["adimage_url"])): ?><li><img src="<?php echo ($img_path); echo ($data["adimage_name"]); ?>" title="<?php echo ($data["adimage_title"]); ?>" /></li>
								 <?php else: ?>
								    <li><a href="<?php echo ($data["adimage_url"]); ?>" target="_blank"><img src="<?php echo ($img_path); echo ($data["adimage_name"]); ?>" title="<?php echo ($data["adimage_title"]); ?>" /></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
							</ul><?php endif; ?>
						</div>
					</td>
					<td>
						<div class="block-box">
							<div class="block-box-hd">
								<div style="float:right; margin-top:2px;">
                                	<a href="/OA_template/Agent/index.php?s=/SendBooking/index"><span>预约送仓</span></a>
								</div>
								<i class="icon user-m"></i><strong><?php echo (L("_PUBLIC_LOGIN_SIGNIN_")); ?></strong>
							</div>
							<div class="block-box-bd">
								<form name="login" id="loginForm">
									<div class="item">
										<div class="form-group">
											<label for="account" class="control-label"><?php echo (L("_PUBLIC_LOGIN_USERID_")); ?></label>
											<div class="control-wrap">
												<input type="text" name="account" id="account" value="<?php echo ($account); ?>"
                                                       placeholder="<?php echo (L("_PUBLIC_LOGIN_ENTER_USERNAME_")); ?>" />
											</div>
										</div>
									</div>
									<div class="item">
										<div class="form-group">
											<label for="password" class="control-label"><?php echo (L("_PUBLIC_LOGIN_PASSWORD_")); ?></label>
											<div class="control-wrap">
												<input type="password" name="password" id="password" value="" id="" placeholder="<?php echo (L("_PUBLIC_LOGIN_ENTER_PASSWORD_")); ?>" />
											</div>
										</div>
									</div>
									<?php if(C('SHOW_VERIFY') == true): ?><div class="item">
										<div class="form-group">
											<label for="" class="control-label"><?php echo (L("_PUBLIC_LOGIN_CAPTCHA_")); ?></label>
											<div class="control-wrap auto">
												<input type="text" name="verify" value="" id="verify" maxlength="4" style="width:80px;" />
												<img id="verifyImg" src="/OA_template/index.php/Home/Public/verify/" onClick="this.src='/OA_template/index.php/Home/Public/verify/'+new Date().getTime();verify.value=''" title="<?php echo (L("_PUBLIC_LOGIN_REFRESH_")); ?>" width="70px" height="28px" style="cursor:pointer">
												<a href="javascript:document.getElementById('verifyImg').click();"><?php echo (L("_PUBLIC_LOGIN_REFRESH_")); ?></a>
											</div>
										</div>
									</div><?php endif; ?>
									<div class="item">
										<input id="loginBtn" type="submit" class="btn btn-m-es btn-blue" value="<?php echo (L("_PUBLIC_LOGIN_SIGNIN_")); ?>">
									</div>
									<div class="item">
										<?php if(($_SESSION['ERP_LANG']) != "en_US"): ?><a href="/OA_template/index.php/Register/index/" class="btn btn-lra" style="margin-left: 108px;"><?php echo (L("_PUBLIC_REGISTERED_BTN_")); ?></a><?php endif; ?>
										<a href="/OA_template/index.php/Public/forgetPassword"  class="btn btn-lra"><?php echo (L("_PUBLIC_FORGET_PASSWORD_")); ?></a>
									</div>
								</form>
							</div>
						</div>
					</td>
				</tr>
			</table>			
		</div>	
	</div>

	<div class="area footer relative">
		Powered by <?php echo (L("_COMMON_WINIT_")); ?> © 2015 WINIT CORPORATION. All Rights Reserved.
		<div class="login-ebay-logo pull-right"></div>
	</div>
</div>
<div style='display:none;'>
<!--  量子统计代码  -->
<script type="text/javascript" src="http://js.tongji.linezing.com/3342963/tongji.js"></script>
</div>
</body>
=======
<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Website:login page</title>
		<meta name="keywords" content="login" />
		<meta name="description" content="for all users" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="/oa_template/OA_template/Public/login/css/reset.css">
        <link rel="stylesheet" href="/oa_template/OA_template/Public/login/css/supersized.css">
        <link rel="stylesheet" href="/oa_template/OA_template/Public/login/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="page-container">
            <h1>登录</h1>
			{% if failed %}
				<strong>登录失败!</strong>请确认用户名和密码或<a href='/signup'>注册</a>成为新用户.
			{% endif %}
            <form action="/login" method="post">
                <input type="text" name="username" class="username" placeholder="用户名">
                <input type="password" name="password" class="password" placeholder="密码">
                <button type="submit">提交</button>
                <div class="error"><span>+</span></div>
            </form>
			<button onclick="javascript:window.location.href='signup'" type="submit">注册</button>
			<button onclick="javascript:window.location.href='forgot'" type="submit">忘记密码</button>
            <!--div class="connect">
                <p>Or connect with:</p>
                <p>
                    <a class="facebook" href=""></a>
                    <a class="twitter" href=""></a>
                </p>
            </div-->
        </div>
		
        <!-- Javascript -->
        <script src="/oa_template/OA_template/Public/login/js/jquery-1.8.2.min.js"></script>
        <script src="/oa_template/OA_template/Public/login/js/supersized.3.2.7.min.js"></script>
        <script src="/oa_template/OA_template/Public/login/js/supersized-init.js"></script>
        <script src="/oa_template/OA_template/Public/login/js/scripts.js"></script>

    </body>
>>>>>>> modified by xsp, added login

</html>