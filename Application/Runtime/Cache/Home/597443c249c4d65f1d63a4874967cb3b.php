<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="/taiquandao/Public/Home/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- <link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'> -->
    <script type="text/javascript" src="/taiquandao/Public/Home/js/jquery1.min.js"></script>
    <!-- start menu -->
    <link href="/taiquandao/Public/Home/css/megamenu.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="/taiquandao/Public/Home/js/megamenu.js"></script>
    <script>$(document).ready(function () {
      $(".megamenu").megamenu();
    });</script>
    <!-- dropdown -->
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
                    <li class="active grid"><a href="<?php echo U('Index/index');?>">首页</a></li>
				    <li><a class="color6" href="<?php echo U('Index/showList');?>">资讯</a></li>
                    <li><a class="color6" href="<?php echo U('Index/about');?>">关于我们</a></li>
                </ul>
            </div>
        </div>
        <div class="header-bottom-right">
            <div class="search">
                <input type="text" name="s" class="textbox" value="Search" onFocus="this.value = '';"
                       onBlur="if (this.value == '') {this.value = 'Search';}">
                <input type="submit" value="Subscribe" id="submit" name="submit">
                <div id="response"></div>
            </div>


        </div>
        <div class="clear"></div>
    </div>
</div>
<!--↑导航-->
<div class="login">
    <div class="wrap">
        <ul class="breadcrumb breadcrumb__t"><a class="home" href="#">Home</a> / List</ul>
        <div class="section group">
            <!--文章列表-->
            <div class="article_list  ">
                <h4 class="title">New Articles</h4>
                <ul>
                    <?php if(is_array($article_list)): foreach($article_list as $key=>$a): ?><li>
                        <p><a href="<?php echo U('Index/article');?>?id=<?php echo ($a["article_id"]); ?>"><?php echo ($a["article_title"]); ?></a></p>
                    </li><?php endforeach; endif; ?>

                </ul>


                <div class="clear"></div>
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
                            <h3>Facebook</h3>
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
                            <h3>From Twitter</h3>
                            <div class="recent-tweet">
                                <div class="recent-tweet-icon">
                                    <span> </span>
                                </div>
                                <div class="recent-tweet-info">
                                    <p>Ds which don't look even slightly believable. If you are <a href="#">going to use
                                        nibh euismod</a> tincidunt ut laoreet adipisicing</p>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="recent-tweet">
                                <div class="recent-tweet-icon">
                                    <span> </span>
                                </div>
                                <div class="recent-tweet-info">
                                    <p>Ds which don't look even slightly believable. If you are <a href="#">going to use
                                        nibh euismod</a> tincidunt ut laoreet adipisicing</p>
                                </div>
                                <div class="clear"></div>
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
                                    <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Google"><a
                                            href="#" target="_blank"> </a></span></li>
                                    <li><span class="simptip-position-bottom simptip-movable"
                                              data-tooltip="Linked in"><a href="#" target="_blank"> </a> </span></li>
                                    <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Rss"><a
                                            href="#" target="_blank"> </a></span></li>
                                    <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Facebook"><a
                                            href="#" target="_blank"> </a></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="wrap">
                <div class="copy">
                    <p>Copyright &copy; 2014.Company name All rights reserved.<a href='http://www.5imoban.net'
                                                                                 title='静态网页模板'>我爱模板网</a></p>
                </div>
                <div class="f-list2">
                    <ul>
                        <li class="active"><a href="about.html">About Us</a></li>
                        |
                        <li><a href="delivery.html">Delivery & Returns</a></li>
                        |
                        <li><a href="delivery.html">Terms & Conditions</a></li>
                        |
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</body>
</html>