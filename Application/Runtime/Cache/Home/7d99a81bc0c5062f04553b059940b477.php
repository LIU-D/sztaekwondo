<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Article</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/taiquandao/Public/Home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- <link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'> -->
<script type="text/javascript" src="js/jquery1.min.js"></script>
<!-- start menu -->
<link href="/taiquandao/Public/Home/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="/taiquandao/Public/Home/js/jquery.easydropdown.js"></script>
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
<div class="header-bottom">
    <div class="wrap">
        <div class="header-bottom-left">
            <div class="logo">
                <a href="index.html"><img src="/taiquandao/Public/Home/images/logo.png" alt=""/></a>
            </div>
            <div class="menu">
                <ul class="megamenu skyblue">
                    <!--导航-->
                    <li class="active grid"><a href="index.html">首页</a></li>
                    <li><a class="color6" href="showList.html">资讯</a></li>
                    <li><a class="color6" href="about.html">关于我们</a></li>
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
    <div class="login">
     <div class="wrap">
	    <ul class="breadcrumb breadcrumb__t"><a class="home" href="#">Home</a>  / Article</ul>








         <!--文章内容-->
        <div class="article_title">
            <h5 class="m_6" align="center"><p>文章标题</p></h5>
            <h3 class="m_6" align="center">
                <span>发布时间：</span><span>2018-6-6</span>&nbsp;&nbsp;
                <span>作者：</span><span>匿名</span>
            </h3>
            <div class="article_content">
                十几年前，马云声称可将支付宝随时献给国家。

                我们可以看出，即使像支付宝、微信这样的顶级头部公司仍然在政策之下如履薄冰。这无疑给成千上万的创业公司带来一点警示：再大的金融梦想也有高悬的政策天花板。

                ——编者按

                前几天，央行发布一重要通知：

                宣布将支付机构客户备付金集中交存比例逐步提高至100%。

                而这则消息，与支付宝、微信这样的支付巨头休戚相关。



                想要知道这则消息有多重要，邦哥先来科普一下，什么是支付机构客户备付金：

                这个本质上是客户充值后未进行交易的资金，也就是沉淀在支付机构账户内的资金。

                客户在使用第三方支付平台消费转账过程中，由于存在结算周期的时间差，会在备付金账户内沉淀出一定规模的资金。这部分资金的利息收入归第三方支付机构所有，但只能进行银行存款、基金购买，不能进行放贷等投资。

                根据人民银行的要求，支付机构把客户备付金存管在商业银行的专户内。但因为客户备付金是以支付机构的名义存放在银行的，对银行来说是一笔非常可观的存款。为了争取备付金的存放，银行向支付机构支付利息。

                不要小看这个支付备付金，它产生的利息收益是支付、微信这样的支付机构舍不得放弃的肥肉。

                这块肥肉有多肥？中国基金报做过统计，有些小的支付机构备付金的日均沉淀量就可以达到30亿到50亿，那么一年在银行获得的利息就能有一个亿以上。而大型支付机构利息收入可以达到百亿元。

                而支付宝和财付通两家支付巨头沉淀的客户备付金规模合计约万亿元左右，占全部支付机构备付金总量的90%以上。

                也就是说，支付宝财付通两家一年的利息收入保守也有100亿以上！



                支付宝、微信付款方式大变

                还有一个消息更让支付宝与微信难受。

                6月30日起，央行要求第三方支付机构必须断开与银行直连，接入合法清算组织，网联或银联。

                简而言之，以前是支付宝/微信—银行账户，现在是支付宝/微信—银联—银行账户。以前它们避免了跟银联打交道，资金成本比现在低得多，因为刷卡结算的手续费大头都去了银联，这也是为啥正规pos机比山寨pos机费率高的原因。

                等于网联平台是央行强加给第三方支付的一个中介机构。有人说，网络时代是“去中介化”的，但由于“去中介”的同时完成了“去监管”，所以政府不会答应。网联就是这样诞生的。

                是的，付款流程发生了巨变，支付宝上用银行卡付款消费后，交易类型变成了：网联协议支付。



                从今往后，你在淘宝上买一件666元的梅西球衣，通过支付宝，用绑定的工行卡付款。流程变成了这样：

                1、支付宝收到你付款请求，自动向网联发起协议支付；

                2、网联将交易信息保存数据库，再将请求转发给工行；

                3、工行在你的账户扣掉666元，告诉网联已扣款成功；

                4、网联再告诉支付宝并传输，支付已成功，交易完成。
                十几年前，马云声称可将支付宝随时献给国家。

                我们可以看出，即使像支付宝、微信这样的顶级头部公司仍然在政策之下如履薄冰。这无疑给成千上万的创业公司带来一点警示：再大的金融梦想也有高悬的政策天花板。

                ——编者按

                前几天，央行发布一重要通知：

                宣布将支付机构客户备付金集中交存比例逐步提高至100%。

                而这则消息，与支付宝、微信这样的支付巨头休戚相关。



                想要知道这则消息有多重要，邦哥先来科普一下，什么是支付机构客户备付金：

                这个本质上是客户充值后未进行交易的资金，也就是沉淀在支付机构账户内的资金。

                客户在使用第三方支付平台消费转账过程中，由于存在结算周期的时间差，会在备付金账户内沉淀出一定规模的资金。这部分资金的利息收入归第三方支付机构所有，但只能进行银行存款、基金购买，不能进行放贷等投资。

                根据人民银行的要求，支付机构把客户备付金存管在商业银行的专户内。但因为客户备付金是以支付机构的名义存放在银行的，对银行来说是一笔非常可观的存款。为了争取备付金的存放，银行向支付机构支付利息。

                不要小看这个支付备付金，它产生的利息收益是支付、微信这样的支付机构舍不得放弃的肥肉。

                这块肥肉有多肥？中国基金报做过统计，有些小的支付机构备付金的日均沉淀量就可以达到30亿到50亿，那么一年在银行获得的利息就能有一个亿以上。而大型支付机构利息收入可以达到百亿元。

                而支付宝和财付通两家支付巨头沉淀的客户备付金规模合计约万亿元左右，占全部支付机构备付金总量的90%以上。

                也就是说，支付宝财付通两家一年的利息收入保守也有100亿以上！



                支付宝、微信付款方式大变

                还有一个消息更让支付宝与微信难受。

                6月30日起，央行要求第三方支付机构必须断开与银行直连，接入合法清算组织，网联或银联。

                简而言之，以前是支付宝/微信—银行账户，现在是支付宝/微信—银联—银行账户。以前它们避免了跟银联打交道，资金成本比现在低得多，因为刷卡结算的手续费大头都去了银联，这也是为啥正规pos机比山寨pos机费率高的原因。

                等于网联平台是央行强加给第三方支付的一个中介机构。有人说，网络时代是“去中介化”的，但由于“去中介”的同时完成了“去监管”，所以政府不会答应。网联就是这样诞生的。

                是的，付款流程发生了巨变，支付宝上用银行卡付款消费后，交易类型变成了：网联协议支付。



                从今往后，你在淘宝上买一件666元的梅西球衣，通过支付宝，用绑定的工行卡付款。流程变成了这样：

                1、支付宝收到你付款请求，自动向网联发起协议支付；

                2、网联将交易信息保存数据库，再将请求转发给工行；

                3、工行在你的账户扣掉666元，告诉网联已扣款成功；

                4、网联再告诉支付宝并传输，支付已成功，交易完成。
            </div>

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
				      <h3>Facebook</h3>
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
						<h3>From Twitter</h3>
				       <div class="recent-tweet">
							<div class="recent-tweet-icon">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<p>Ds which don't look even slightly believable. If you are <a href="#">going to use nibh euismod</a> tincidunt ut laoreet adipisicing</p>
							</div>
							<div class="clear"> </div>
					   </div>
					   <div class="recent-tweet">
							<div class="recent-tweet-icon">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<p>Ds which don't look even slightly believable. If you are <a href="#">going to use nibh euismod</a> tincidunt ut laoreet adipisicing</p>
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
				    <h3>Information</h3>
						<ul class="f-list1">
						    <li><a href="#">Duis autem vel eum iriure </a></li>
				            <li><a href="#">anteposuerit litterarum formas </a></li>
				            <li><a href="#">Tduis dolore te feugait nulla</a></li>
				             <li><a href="#">Duis autem vel eum iriure </a></li>
				            <li><a href="#">anteposuerit litterarum formas </a></li>
				            <li><a href="#">Tduis dolore te feugait nulla</a></li>
			         	</ul>
 				 </div>
				 <div class="col_1_of_f_2 span_1_of_f_2">
				   <h3>Contact us</h3>
						<div class="company_address">
					                <p>500 Lorem Ipsum Dolor Sit,</p>
							   		<p>22-56-2-9 Sit Amet, Lorem,</p>
							   		<p>USA</p>
					   		<p>Phone:(00) 222 666 444</p>
					   		<p>Fax: (000) 000 00 00 0</p>
					 	 	<p>Email: <span>mail[at]leoshop.com</span></p>
					   		
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
			        <p>Copyright &copy; 2014.Company name All rights reserved.<a href='http://www.5imoban.net' title='静态网页模板'>我爱模板网</a></p>
		        </div>
				<div class="f-list2">
				<ul>
					<li class="active"><a href="about.html">About Us</a></li> |
					<li><a href="delivery.html">Delivery & Returns</a></li> |
					<li><a href="delivery.html">Terms & Conditions</a></li> |
					<li><a href="contact.html">Contact Us</a></li> 
				</ul>
				</div>
				<div class="clear"></div>
		      </div>
			</div>
		</div>
</body>
</html>