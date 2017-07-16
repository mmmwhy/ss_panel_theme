<?php
require_once '../lib/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $site_name;  ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <link rel="stylesheet" href="../theme/freedom/css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="../theme/freedom/css/animate.css" type="text/css">
  <link rel="stylesheet" href="../theme/freedom/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../theme/freedom/css/font.css" type="text/css">
    <link rel="stylesheet" href="../theme/freedom/css/app.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-page">
<div class="login-box">

  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xxl">
      <a class="navbar-brand block" href="../index.php">Freedom</a>
      <section class="panel panel-default bg-white m-t-lg">
        <header class="panel-heading text-center">
          <strong>会员登陆</strong>
        </header>
        
		 <div class="panel-body wrapper-lg">			
          <div class="form-group has-feedback">
            <label class="control-label">Email</label>
            <input id="email" name="Email" placeholder="邮箱" class="form-control input-lg" type="text">
            <span  class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>		  		 		  
          <div class="form-group has-feedback">
            <label class="control-label">Password</label>
            <input id="passwd" name="Password" placeholder="密码" class="form-control input-lg" type="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
		  
                    <div class="checkbox icheck">
                        <label>
                            <input id="remember_me" value="week" type="checkbox"> 记住我
                        </label>
                    </div>	  
		  
		  
          <a href="../user/resetpwd.php" class="pull-right m-t-xs"><small>忘记密码?</small></a>          
            <button id="login" type="submit" class="btn btn-primary btn-block btn-flat">登录</button>    
		   <div class="line line-dashed"></div>
		   <div id="msg-success" class="alert alert-info alert-dismissable" style="display: none;">
            <button type="button" class="close" id="ok-close" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-info"></i> 登录成功!</h4>
            <p id="msg-success-p"></p>
        </div>
				 
          <div id="msg-error" class="alert alert-warning alert-dismissable" style="display: none;"> 		
            <button type="button" class="close" id="error-close" aria-hidden="true">×</button>   
           <h4><i class="icon fa fa-times"></i> 出错了!</h4>
		   <p id="msg-error-p"></p>
        </div>

          <p class="text-muted text-center"><small>没有账号?</small></p>
          <a href="register.php" class="btn btn-default btn-block">马上注册新账号</a>
         </div>
      </section>
    </div>
  </section>
   
	 
  <footer id="footer">
    <div class="text-center padder">
      <p>
        <small>使用本站服务请遵守当地法律<br>© <a href="../index.php">Freedom</a></small>
      </p>
    </div>
  </footer>		
<!-- jQuery 2.1.3 -->
<script src="../asset/js/jQuery.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="../asset/js/bootstrap.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="../asset/js/icheck.min.js" type="text/javascript"></script>


<script>

    $(document).ready(function(){
        function login(){
            $.ajax({
                type:"POST",
                url:"_login.php",
                dataType:"json",
                data:{
                    email: $("#email").val(),
                    passwd: $("#passwd").val(),
                    remember_me: $("#remember_me").val()
                },
                success:function(data){
                    if(data.ok){
                        $("#msg-error").hide(100);
                        $("#msg-success").show(100);
                        $("#msg-success-p").html(data.msg);
                        window.setTimeout("location.href='index.php'", 2000);
                    }else{
                        $("#msg-error").hide(10);
                        $("#msg-error").show(100);
                        $("#msg-error-p").html(data.msg);
                    }
                },
                error:function(jqXHR){
                    $("#msg-error").hide(10);
                    $("#msg-error").show(100);
                    $("#msg-error-p").html("发生错误："+jqXHR.status);
                    // 在控制台输出错误信息
                    console.log(removeHTMLTag(jqXHR.responseText));
                }
            });
        }
        $("html").keydown(function(event){
            if(event.keyCode==13){
                login();
            }
        });
        $("#login").click(function(){
            login();
        });
         $("#ok-close").click(function(){
            $("#msg-success").hide(100);
        });
        $("#error-close").click(function(){
            $("#msg-error").hide(100);
        });
    })
</script>
<script type="text/javascript">
            // 过滤HTML标签以及&nbsp 来自：http://www.cnblogs.com/liszt/archive/2011/08/16/2140007.html
            function removeHTMLTag(str) {
                    str = str.replace(/<\/?[^>]*>/g,''); //去除HTML tag
                    str = str.replace(/[ | ]*\n/g,'\n'); //去除行尾空白
                    str = str.replace(/\n[\s| | ]*\r/g,'\n'); //去除多余空行
                    str = str.replace(/&nbsp;/ig,'');//去掉&nbsp;
                    return str;
            }
</script>
</body>
</html>
