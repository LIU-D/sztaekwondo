<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/sztaekwondo/Public/Home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/sztaekwondo/Public/Home/css/form.css" rel="stylesheet" type="text/css" media="all" />
<!--<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>-->
<script type="text/javascript" src="/sztaekwondo/Public/Home/js/jquery1.min.js"></script>
<!-- start menu -->
<link href="/sztaekwondo/Public/Home/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/sztaekwondo/Public/Home/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--start slider -->
    <link rel="stylesheet" href="/sztaekwondo/Public/Home/css/fwslider.css" media="all">
    <script src="/sztaekwondo/Public/Home/js/jquery-ui.min.js"></script>
    <script src="/sztaekwondo/Public/Home/js/css3-mediaqueries.js"></script>
    <script src="/sztaekwondo/Public/Home/js/fwslider.js"></script>
<!--end slider -->
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
					<li><a href="<?php echo U('Admin/index/index');?>">管理员登陆</a></li>
					<!--<li><a href="register.html">Sign Up</a></li>-->
				</ul>
			</div>
			<div class="clear"></div>
 		</div>
	</div>
	<div class="header-bottom">
	    <div class="wrap">
			<div class="header-bottom-left">
				<div class="logo">
					<a href=""><img src="/sztaekwondo/Public/Home/images/logo.png" alt=""/></a>
				</div>
				<div class="menu">
	            <ul class="megamenu skyblue">
                 <!--导航-->
			    <li class="active grid"><a href="<?php echo U('Index/index');?>">首页</a></li>
				<li><a class="color6" href="<?php echo U('Index/showList');?>">资讯</a></li>
                <li><a class="color6" href="<?php echo U('Index/about');?>">关于我们</a></li>
			</ul>
			</div>
		</div>
	   <div class="header-bottom-right">
         <div class="search">	  
				<input type="text" name="s" class="textbox" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="Subscribe" id="submit" name="submit">
				<div id="response"> </div>
		 </div>


    </div>
     <div class="clear"></div>
     </div>
	</div>
     <!--轮播图-->
  <!-- start slider -->
    <div id="fwslider">
        <div class="slider_container">
            <!--<div class="slide"> -->
                <!--&lt;!&ndash; Slide image &ndash;&gt;-->
                    <!--<img src="/sztaekwondo/Public/Home/images/slider/wall5.jpg" alt=""/>-->
                <!--&lt;!&ndash; /Slide image &ndash;&gt;-->
                <!--&lt;!&ndash; Texts container &ndash;&gt;-->
                <!--<div class="slide_content">-->
                    <!--<div class="slide_content_wrap">-->
                        <!--&lt;!&ndash; Text title &ndash;&gt;-->
                        <!--<h4 class="title">Aluminium Club</h4>-->
                        <!--&lt;!&ndash; /Text title &ndash;&gt;-->
                        <!---->
                        <!--&lt;!&ndash; Text description &ndash;&gt;-->
                        <!--<p class="description">Experiance ray ban</p>-->
                        <!--&lt;!&ndash; /Text description &ndash;&gt;-->
                    <!--</div>-->
                <!--</div>-->
                 <!--&lt;!&ndash; /Texts container &ndash;&gt;-->
            <!--</div>-->

            <!-- /Duplicate to create more slides -->
			<?php if(is_array($slide_list)): foreach($slide_list as $key=>$v): ?><div class="slide">
					<img src="/sztaekwondo<?php echo ($v["img_logo"]); ?>" alt=""/>
					<div class="slide_content">
						<div class="slide_content_wrap">
							<h4 class="title"><?php echo ($v["img_title"]); ?></h4>
							<p class="description">Taekondo</p>
						</div>
					</div>
				</div><?php endforeach; endif; ?>

            <!--/slide -->

            <!--&lt;!&ndash; /Duplicate to create more slides &ndash;&gt;-->
            <!--<div class="slide">-->
                <!--<img src="/sztaekwondo/Public/Home/images/slider/wall3.jpg" alt=""/>-->
                <!--<div class="slide_content">-->
                    <!--<div class="slide_content_wrap">-->
                        <!--<h4 class="title">consectetuer adipiscing </h4>-->
                        <!--<p class="description">diam nonummy nibh euismod</p>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
            <!--&lt;!&ndash;/slide &ndash;&gt;-->
            <!--&lt;!&ndash; /Duplicate to create more slides &ndash;&gt;-->
            <!--<div class="slide">-->
                <!--<img src="/sztaekwondo/Public/Home/images/slider/wall4.jpg" alt=""/>-->
                <!--<div class="slide_content">-->
                    <!--<div class="slide_content_wrap">-->
                        <!--<h4 class="title">consectetuer adipiscing </h4>-->
                        <!--<p class="description">diam nonummy nibh euismod</p>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
            <!--&lt;!&ndash;/slide &ndash;&gt;-->
            <!--&lt;!&ndash; /Duplicate to create more slides &ndash;&gt;-->
            <!--<div class="slide">-->
                <!--<img src="/sztaekwondo/Public/Home/images/slider/wall1.jpg" alt=""/>-->
                <!--<div class="slide_content">-->
                    <!--<div class="slide_content_wrap">-->
                        <!--<h4 class="title">consectetuer adipiscing </h4>-->
                        <!--<p class="description">diam nonummy nibh euismod</p>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
            <!--&lt;!&ndash;/slide &ndash;&gt;-->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
    <!--/slider -->
<div class="main">
	<div class="wrap">
		<div class="section group">
		  <div class="cont span_2_of_3">
              <!--图片展示栏-->
		  	<h2 class="head">图片展示</h2>
			<div class="top-box">
			 <!--<div class="col_1_of_3 span_1_of_3"> -->
			   <!--<a href="single.html">-->
				<!--<div class="inner_content clearfix">-->
					<!--<div class="product_image">-->
						<!--<img src="/sztaekwondo/Public/Home/images/showbox/box1.jpg" alt=""/>-->
					<!--</div>-->
                    <!--<div class="sale-box"><span class="on_sale title_shop">左测试</span></div>-->
                    <!--<div class="price">-->
					   <!--<div class="cart-left">-->
							<!--<p class="title">一只白熊</p>-->
							<!--<div class="price1">-->
							  <!--<span class="actual">2018-3-13</span>-->
							<!--</div>-->
						<!--</div>-->
						<!--&lt;!&ndash;<div class="cart-right"> </div>&ndash;&gt;-->
						<!--<div class="clear"></div>-->
					 <!--</div>				-->
                   <!--</div>-->
                 <!--</a>-->
				<!--</div>-->
			   <!--<div class="col_1_of_3 span_1_of_3">-->
			   	 <!--<a href="single.html">-->
					<!--<div class="inner_content clearfix">-->
					<!--<div class="product_image">-->
						<!--<img src="/sztaekwondo/Public/Home/images/showbox/box2.jpg" alt=""/>-->
					<!--</div>-->
                    <!--<div class="price">-->
					   <!--<div class="cart-left">-->
							<!--<p class="title">另一只白熊</p>-->
							<!--<div class="price1">-->
							  <!--<span class="actual">2017-12-22</span>-->
							<!--</div>-->
						<!--</div>-->
						<!--&lt;!&ndash;<div class="cart-right"> </div>&ndash;&gt;-->
						<!--<div class="clear"></div>-->
					 <!--</div>				-->
                   <!--</div>-->
                   <!--</a>-->
				<!--</div>-->
				<?php if(is_array($showbox_list)): foreach($showbox_list as $key=>$v): ?><div class="col_1_of_3 span_1_of_3">
							<div class="inner_content clearfix">
								<div class="product_image">
									<img src="/sztaekwondo<?php echo ($v["img_logo"]); ?>" alt=""/>
								</div>
								<!--<div class="sale-box1"><span class="on_sale title_shop"></span></div>-->
								<div class="price">
									<div class="cart-left">
										<p class="title"><?php echo ($v["img_title"]); ?></p>
										<div class="price1">
											<!--<span class="reducedfrom">$66.00</span>-->
											<span class="actual"><?php echo ($v["pubtime"]); ?></span>
										</div>
									</div>
									<!--<div class="cart-right"> </div>-->
									<div class="clear"></div>
								</div>
							</div>
					</div><?php endforeach; endif; ?>
				<div class="clear"></div>
			</div>


              <div class="top-border"> </div>
              <div class="sidebar-bottom">
				<?php if(is_array($article_list)): foreach($article_list as $key=>$a): ?><!--标题-->
					<a href="<?php echo U('Index/article');?>?id=<?php echo ($a["article_id"]); ?>">
						<h2 class="m_1"><?php echo ($a["article_title"]); ?></h2>
					</a>

                  <!--内容-->
                  <p class="m_text"><?php echo ($a["article_summary"]); ?></p>
				  <hr><?php endforeach; endif; ?>
              </div>
				<div class="clear"></div>
			</div>			 						 			    
		  </div>





			<div class="rsidebar span_1_of_left">
				<div class="top-border"> </div>
				 <div class="border">
	             <link href="/sztaekwondo/Public/Home/css/default.css" rel="stylesheet" type="text/css" media="all" />
	             <link href="/sztaekwondo/Public/Home/css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
				  <script src="/sztaekwondo/Public/Home/js/jquery.nivo.slider.js"></script>
				    <script type="text/javascript">
				    $(window).load(function() {
				        $('#slider').nivoSlider();
				    });
				    </script>
		    <div class="slider-wrapper theme-default">
              <div id="slider" class="nivoSlider">
				  <?php if(is_array($member_list)): foreach($member_list as $key=>$v): ?><img src="/sztaekwondo<?php echo ($v["img_logo"]); ?>"  alt="" /><?php endforeach; endif; ?>
                <!--<img src="/sztaekwondo/Public/Home/images/t-img1.jpg"  alt="" />-->
               	<!--<img src="/sztaekwondo/Public/Home/images/t-img2.jpg"  alt="" />-->
                <!--<img src="/sztaekwondo/Public/Home/images/t-img3.jpg"  alt="" />-->
                  <!--<img src="/sztaekwondo/Public/Home/images/t-img3.jpg"  alt="" />-->
                  <!--<img src="/sztaekwondo/Public/Home/images/t-img3.jpg"  alt="" />-->
              </div>
             </div>
              <div class="btn"><a href="<?php echo U('Index/about');?>">About us</a></div>
             </div>
           <div class="top-border"> </div>
			<div class="sidebar-bottom">
			    <h2 class="m_1">Information<br> Signup</h2>
			    <p class="m_text">a website about taekwondo</p>
			    <div class="subscribe">
					 <form>
					    <input name="userName" type="text" class="textbox">
					    <input type="submit" value="Subscribe">
					 </form>
	  			</div>
			</div>
	    </div>
	   <div class="clear"></div>
	</div>
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
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<div class="like_box">	
							<div class="fb-like-box" data-href="http://www.xwcms.net" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
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
</html>