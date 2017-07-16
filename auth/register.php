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
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body>
<section id="content" class="m-t-lg wrapper-md animated fadeInDown">
    <div class="container aside-xxl">
      <a class="navbar-brand block" href="../index.php">Freedom</a>
      <section class="panel panel-default m-t-lg bg-white">
        <header class="panel-heading text-center">
          <strong>注册会员</strong>
        </header>
		        <div class="panel-body wrapper-lg">


          <div class="form-group">
            <label class="control-label">Nick Name</label>
            <input id="name" placeholder="昵称" class="form-control input-lg" type="text">
          </div>          
          <div class="form-group">
            <label class="control-label">Email</label>
            <input id="email" placeholder="邮箱" class="form-control input-lg" type="text">
          </div>
                    <div class="form-group">
            <label class="control-label">Password</label>
            <input id="passwd" placeholder="密码(至少8位)" class="form-control input-lg" type="password">
          </div>
          <div class="form-group">
            <label class="control-label">Confirm Password</label>
            <input id="repasswd" placeholder="确认密码" class="form-control input-lg" type="password">
          </div>
          <div class="form-group">
            <label class="control-label">Confirm Password</label>
            <input type="text" id="code" class="form-control" placeholder="邀请码"/>
          </div>

          	  
          <div class="checkbox">
            <label>
              <p>注册即代表同意<a href="../tos.php">服务条款</a>，以及保证所录入信息的真实性，如有不实信息会导致账号被删除。</p>
            </label>
          </div>
            <div class="form-group has-feedback">
                <button type="submit" id="reg" class="btn btn-primary btn-block btn-flat">同意服务条款并提交注册</button>
            </div>	  
          <div class="line line-dashed"></div>
		  
		  <div id="msg-success" class="alert alert-info alert-dismissable" style="display: none;">
            <button type="button" class="close" id="ok-close" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> 成功!</h4>
            <p id="msg-success-p"></p>
        </div>

        <div id="msg-error" class="alert alert-warning alert-dismissable" style="display: none;">
            <button type="button" class="close" id="error-close" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-times"></i> 出错了!</h4>
            <p id="msg-error-p"></p>
        </div>

		
		
          <p class="text-muted text-center"><small>已经注册过了?</small></p>
          <a href="login.php" class="btn btn-default btn-block">返回登录</a>
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
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
        // $("#msg-error").hide(100);
        // $("#msg-success").hide(100);

    });
</script>
<script>
    $(document).ready(function(){
         function register(){
            $.ajax({
                type:"POST",
                url:"_reg.php",
                dataType:"json",
                data:{
                    email: $("#email").val(),
                    name: $("#name").val(),
                    passwd: $("#passwd").val(),
                    repasswd: $("#repasswd").val(),
                    code: $("#code").val(),
                    agree: $("#agree").val()
                },
                success:function(data){
                    if(data.ok){
                        $("#msg-error").hide(10);
                        $("#msg-success").show(100);
                        $("#msg-success-p").html(data.msg);
                        window.setTimeout("location.href='login.php'", 2000);
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
                register();
            }
        });
        $("#reg").click(function(){
            register();
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
