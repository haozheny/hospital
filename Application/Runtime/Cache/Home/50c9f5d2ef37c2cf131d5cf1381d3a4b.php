<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>登陆</title>
    <!--(必需)css-bootstrap-->
    <link rel="stylesheet" href="/Hospital/Public/libs/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <!--css-this-->
    <link rel="stylesheet" href="/Hospital/Public/libs/css/Home/Login/login.css">
</head>
<body>
    <p>BBC医院挂号系统</p>

    <form id="login_container">
        <br>
        <h3>登陆账号</h3>
        <br>
        <div id="username">
            用户名<input  class="text_frame_input" class="username" type="text">
        </div>
        <br>
        <div id="password">
            密 码 <input class="text_frame_input" class="password" type="text">
        </div>
        <br>
        <div id="login_submit">
            <input id="login_submit_input" type="submit" value="登陆">
        </div>
        <div>
            <a href="#">没有账号？请点击此处注册</a>
        </div>
    </form>


<div id="bg_test" style="height: 100px;width: 100%;"></div>

</body>
<!--(必需)js-jquery-->
<script src="/Hospital/Public/libs/js/jquery-2.2.4.min.js"></script>
<!--(必需)js-bootstrap-->
<script src="/Hospital/Public/libs/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

</html>