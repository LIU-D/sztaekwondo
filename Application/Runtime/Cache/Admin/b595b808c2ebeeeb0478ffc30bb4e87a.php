<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/sztaekwondo/Public/Home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- <link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'> -->
<script type="text/javascript" src="/sztaekwondo/Public/Home/js/jquery1.min.js"></script>
<!-- start menu -->
<link href="/sztaekwondo/Public/Home/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/sztaekwondo/Public/Home/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- dropdown -->
<script src="/sztaekwondo/Public/Home/js/jquery.easydropdown.js"></script>
</head>
<body>
<div class="header-top">
    <div class="wrap">
        <div class="header-top-left">
            <div class="box">
                <select tabindex="4" class="dropdown">
                    <option value="" class="label" value="">Language :</option>
                    <option value="1">English</option>
                    <option value="2">French</option>
                    <option value="3">German</option>
                </select>
            </div>

            <div class="clear"></div>
        </div>
        <div class="cssmenu">
            <ul>
                <li><a href="login.html">管理员登陆</a></li>
                <!--<li><a href="register.html">Sign Up</a></li>-->
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>

        <div class="login">
          	<div class="wrap">
				<div class="col_1_of_login span_1_of_login">
				<div class="login-title">
	           		<h4 class="title">管理员登陆</h4>
					<div id="loginbox" class="loginbox">
						<form action="<?php echo U('check');?>" method="post" name="login" id="login-form">
						  <fieldset class="input">
						    <p id="login-form-username">
						      <label for="modlgn_username">用户名</label>
						      <input id="modlgn_username" type="text" name="username" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <p id="login-form-password">
						      <label for="modlgn_passwd">密码</label>
						      <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <div class="remember">
							    <p id="login-form-remember">
                                  <label for="modlgn_username">验证码</label>
                                  <input id="modlgn_verify" type="text" name="code" class="inputbox" size="18" autocomplete="off">
							   </p>
								<img src="<?php echo U('verify');?>" style="margin: 30px auto;" onclick="change(this)" />
							    <input type="submit" name="" class="button" value="Login"><div class="clear"></div>
							 </div>
						  </fieldset>
						 </form>
					</div>
			    </div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
     <div class="footer">
		<div class="footer-middle">
			<div class="wrap">
			 <div class="section group example">
			  <div class="col_1_of_f_1 span_1_of_f_1">
				 <div class="section group example">
				   <div class="col_1_of_f_2 span_1_of_f_2">
				      <h3>山庄跆拳道，欢迎您</h3>
                            <script>(function (d, s, id) {
                              var js, fjs = d.getElementsByTagName(s)[0];
                              if (d.getElementById(id)) return;
                              js = d.createElement(s);
                              js.id = id;
                              js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                              fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                            <div class="like_box">
                                <div class="fb-like-box" data-href="http://www.xwcms.net" data-colorscheme="light"
                                     data-show-faces="true" data-header="true" data-stream="false"
                                     data-show-border="true"></div>
                            </div>
                        </div>
                        <div class="col_1_of_f_2 span_1_of_f_2">
                           <h3>跆拳道微博</h3>
				       <div class="recent-tweet">
							<div class="recent-tweet-icon">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<p>如果你想了解更多关于山庄跆拳道社团的各类动态，请点击<a href="https://weibo.com/">山庄跆拳道微博</a> 山庄跆拳道欢迎您</p>
							</div>
							<div class="clear"> </div>
					   </div>
					   <div class="recent-tweet">
							<div class="recent-tweet-icon">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<p>如果你想了解更多关于山庄跆拳道社团的各类动态，请点击<a href="https://weibo.com/">山庄跆拳道微博</a> 山庄跆拳道欢迎您</p>
							</div>
							<div class="clear"> </div>
					  </div>
				</div>
				<div class="clear"></div>
		      </div>
 			 </div>
			 <div class="col_1_of_f_1 span_1_of_f_1">
			   <div class="section group example">
				 <div class="col_1_of_f_2 span_1_of_f_2">
				    <h3>友情链接</h3>
						<ul class="f-list1">
						    <li><a href="http://www.chntkd.org.cn/">中国跆拳道协会</a></li>
				            <li><a href="http://www.chntkd.org.cn/">河北跆拳道协会</a></li>
				            <li><a href="http://www.chntkd.org.cn/">山东跆拳道协会</a></li>
				             <li><a href="http://www.chntkd.org.cn/">北京跆拳道协会</a></li>
				            <li><a href="http://www.chntkd.org.cn/">天津跆拳道协会</a></li>
				            <li><a href="http://www.chntkd.org.cn/">跆拳道协会</a></li>
			         	</ul>
 				 </div>
				 <div class="col_1_of_f_2 span_1_of_f_2">
				   <h3>联系我们</h3>
						<div class="company_address">
					                <p>河北省承德市</p>
							   		<p>承德市，双桥区，河北民族师范学院</p>
							   		<p>中国</p>
					   		<p>Phone:(0014) 222 666 444</p>
					   		<p>Fax: (0314) 000 00 00 0</p>
					 	 	<p>Email: <span>shanzhuangtaiquandao@nicai.com</span></p>
					   		
					   </div>
					   <div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="Google"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Linked in"><a href="#" target="_blank"> </a> </span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Rss"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Facebook"><a href="#" target="_blank"> </a></span></li>
						    </ul>
					   </div>
				</div>
				<div class="clear"></div>
		    </div>
		   </div>
		  <div class="clear"></div>
		    </div>
		  </div>
		</div>
		<div class="footer-bottom">
			<div class="wrap">
	             <div class="copy">
			        <p>Copyright &copy; 2018.洋²艳鼎旭 All rights reserved.<a href='http://www.hbun.net' title='HOME'>HBUN</a></p>
		         </div>
				<div class="f-list2">
				 <ul>
					<li class="active"><a href="<?php echo U('Index/about');?>">关于我们</a></li> |
					<li><a href="<?php echo U('Index/about');?>">Delivery & Returns</a></li> |
					<li><a href="<?php echo U('Index/about');?>">Terms & Conditions</a></li> |
					<li><a href="<?php echo U('Index/about');?>">联系我们</a></li> 
                    </ul>
			  </div>
				<div class="clear"></div>
		      </div>
			</div>
		</div>
</body>
<script type="text/javascript">
    function change(obj){
        // obj.src = "index.php/Admin/Index/verify/"+Math.random();
        obj.src = "verify/"+Math.random();
    }
</script>
</html>