<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
   <title>Freedom</title>
   
  <meta name="description" content="shadowsocks, shadowsocksR, VPN, GFW, Freedom, youtube, facebook, twitter, surge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
  <link rel="stylesheet" href="../theme/freedom/css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="../theme/freedom/css/animate.css" type="text/css">
  <link rel="stylesheet" href="../theme/freedom/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../theme/freedom/css/font.css" type="text/css">
  <link rel="stylesheet" href="../theme/freedom/css/landing.css" type="text/css">
  <link rel="stylesheet" href="../theme/freedom/css/app.css" type="text/css">
  <link rel="shortcut icon" href="../theme/freedom/images/favicon.ico">
  
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body>
  	
  <!-- header -->
  <header id="header" class="navbar navbar-fixed-top bg-white box-shadow b-b b-light affix-top" data-spy="affix" data-offset-top="1">
    <div class="container">
      <div class="navbar-header">        
        <a href="../index.php" class="navbar-brand"><img src="../theme/freedom/images/logo.png" class="m-r-sm"><span class="text-muted">Freedom</span></a>
        <button class="btn btn-link visible-xs" type="button" data-toggle="collapse" data-target=".navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active">
            <a href="../index.php">网站首页</a>
          </li>
          <li>
            <a href="../services.php">客户端下载</a>
          </li>		  
          <li>
            <a href="../help.php">使用教程</a>
          </li>
          <li>
          	<a href="../tos.php">服务条款</a>
          </li>
          <li>
          	<a href="../code.php">邀请码</a>
          </li>
          </li>
		    <li>
            <div class="m-t-sm"> <a href="../auth/login.php" class="btn btn-warning btn-sm m-l">会员登录</a><a href="../auth/register.php" class="btn btn-sm btn-success m-l"><strong>用户注册</strong></a>  </div>
          </li>
		   <li>
		      <br>
		   </li>
        </ul>
      </div>
    </div>
  </header>
         
  <!-- / header -->

<section id="content">
	  <div class="bg-dark lt">
      <div class="container">
        <div class="m-b-lg m-t-lg">
          <h3 class="m-b-none">配置教程</h3>
          <small class="text-muted">图文并茂shadowsocks影梭设置配置教程</small>
        </div>
      </div>
    </div>
    <div class="bg-white b-b b-light">
      <div class="container">      
        <ul class="breadcrumb no-border bg-empty m-b-none m-l-n-sm">
          <li><a href="../index.php">首页</a></li>
		  <li><a href="../help.php">配置教程</a></li>
          <li class="active">proxifier配置教程</li>
        </ul>
      </div>
    </div>

		<div class="container m-t-lg m-b-lg">
			<div class="row">
        <div class="col-sm-12 text-center">
          <div class="blog-post">		              	
            <div class="post-item">
            	<div class="post-media">
            		<section class="panel bg-primary dk m-b-none">
                  <div class="carousel auto slide panel-body" id="c-fade">      
                        <div class="item active text-center">
                     <span class="h1">Proxifier实现影梭为外服游戏加速教程</span>                       
                      </div>                    
                  </div> 
                </section>
            	</div>
              <div class="caption wrapper-lg">                
                  <h2 class="post-title">一、首先要安装好「影梭」客户端. </h2>                
				  <div class="post-sum"><p>    
                <a href="../downloads/ShadowsocksR-win-3.8.3e.7z" class="btn btn-primary m-t m-b">Shadowsocks-R版本地下载</a>  <a href="../downloads/ss-qt5-v2.7.0-win32.7z" class="btn btn-primary m-t m-b">Shadowsocks-Qt5本地下载</a></p>
             <div class="line line-lg"></div>
			 
			 
			 <h2 class="post-title">二、Proxifier. </h2>
			   <div class="post-sum"><p>    
        安装设置好，在打开的界面，依次点击「菜单栏」--&gt;&gt;「配置文件」--&gt;&gt;「代理服务器」<br>
添加 &gt;&gt; 地址填写「127.0.0.1」 &gt;&gt; 端口默认填写「1080」 &gt;&gt; 协议选择 socks版本5 &gt;&gt; 一路「确定」。如图：<br><br>	  

<img src="../theme/freedom/images/0060lm7Tgw1f634foui2wj30m80fzt9z.jpg" class="img-full"></p><br>  
			    <div class="line line-lg"></div>
				
				
			  <h2 class="post-title">三、代理规则设置. </h2>
			   <div class="post-sum"><p>    
               1、打开 配置文件 &gt;&gt; 代理规则2<br><br>
<img src="../theme/freedom/images/0060lm7Tgw1f634fp2a43j3095066q3c.jpg" class="img-full"><br><br>
2、添加代理规则名称自定义（根据自己喜好设置） 如图所示；<br>
<br>
3、添加需要代理的应用程序，以GTA5 VPN演示，在应用程序里面加入GTA5的程序<br>【gta5.exe;gtavlauncher.exe;subprocess.exe】，其他游戏步骤相同。可以通过【浏览】按钮选择需要代理的程序；<br><br>

4、添加「影梭」客户端里面的本地代理端口，默认一般是1080；<br><br>

5、选择动作：Proxy SOCKS5 127.0.0.1（这个动作选项是步骤1设置完成后会出现的）。<br><br>
		
<img src="../theme/freedom/images/0060lm7Tgw1f634fpvykbj30ln0ep780.jpg" class="img-full"><br> <br> 
然后再一路确定保存，登录游戏看看？是否已经OK拉？</p><br><br>		  
			   <div class="line line-lg"></div>

			   
                <div class="text-muted">
                  <i class="fa fa-mail-reply-all icon-muted"></i><a href="../help.php" class="m-r-sm">其他教程</a>
                  <i class="fa fa-home icon-muted"></i><a href="../index.php" class="m-r-sm">极客首页</a>
                  <i class="fa fa-user icon-muted"></i><a href="../auth/login.php" class="m-r-sm">会员中心</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div></div></div></section>
<footer id="footer">
  	<div class="bg-primary text-center">
      <div class="container wrapper">
        <div class="m-t-xl m-b">
          马上点击下方开始您的稳定高速上网体验.
          <a href="../auth/login.php" class="btn btn-lg btn-dark b-white bg-empty m-sm">登陆使用</a>
          <a href="../auth/register.php" class="btn btn-lg btn-warning b-white bg-empty m-sm">注册账户</a>
        </div>
      </div>
      <i class="fa fa-caret-down fa-4x text-primary m-b-n-lg block"></i>
	</div>
  
	<div class="bg-dark dker wrapper">
		<div class="container text-center m-t-lg">
			<div class="row m-t-xl m-b-xl">
				<div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
					<i class="fa fa-bullhorn fa-3x icon-muted"></i>
					<h5 class="text-uc m-b m-t-lg">免责声明</h5>
					<p class="text-sm">使用 <a href="../index.php" title="Freedom">[Freedom]</a> 请遵守当地法律 <br>
						Freedom不承担因使用本站服务所发生的任何责任.
             	</p>
				</div>
				<div class="col-sm-4" data-ride="animated" data-animation="fadeInUp" data-delay="600">
					<i class="fa fa-ticket fa-3x icon-muted"></i>
					<h5 class="text-uc m-b m-t-lg">工单服务</h5>
					<p class="text-sm"><a href="../auth/login.php">在线工单技术支持,最快回复</a><br>在使用本站服务过程中有任何问题欢迎提交工单.</p>
				</div>
				<div class="col-sm-4" data-ride="animated" data-animation="fadeInRight" data-delay="900">
					<i class="fa fa-desktop fa-3x icon-muted"></i>
					<h5 class="text-uc m-b m-t-lg">远程支持</h5>
					<p class="text-sm"></p><div class="follow-us">在线客服QQ： ******** <br>邮箱：********#qq.com(联系时请将#改为@)<p></p>
				</div>
			</div>
			<br>
			<div class="m-t-xl m-b-xl">
				<p> 
            <a href="proxifier.php#content" data-jump="true" class="btn btn-icon btn-rounded btn-dark b-dark bg-empty m-sm text-muted"><i class="fa fa-angle-up"></i></a>
          	</p>
			</div>
			<div class="m-t-xl m-b-xl">
				<p> 
            Powered By<a href="../staff.php" class="b-dark bg-empty m-sm text-muted">Shadowsocks & SS-panel-V2</a>
          	</p>
			</div>
		</div>
	</div>
</footer>
  <script src="../theme/freedom/js/jquery.min.js"></script>
  <script src="../theme/freedom/js/bootstrap.js"></script>
  <script src="../theme/freedom/js/app.js"></script>
  </body>
</html>
