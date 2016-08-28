<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Password recover page</title>
		<meta name="keywords" content="forgot" />
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
            <h1>找回密码</h1>
			<p>忘记密码了？点击“提交”接受密码恢复按钮</p>
			{% if not_found %}
				<strong>查找失败!</strong>没有找到该用户名.
			{% endif %} 
			<form action= "/forgot" method="post">
				<input type="text" value="{{ username }}" name="username" class="username" placeholder="用户名"/>
				<button type="submit">提交</button>
				<div class="error"><span>+</span></div>
			</form>
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

</html>