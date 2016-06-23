<?php
/**
 * Created by PhpStorm.
 * User: Joe
 * Date: 2016/6/7
 * Time: 21:47
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Xiankanren - 简洁、直观、强悍、用户优先的投资服务平台，让创业投资更迅速、简单。">
    <meta name="keywords" content="先看人, 先看脸, 创业, 投资, framework, bootstrap, front-end, frontend, web development">
    <meta name="author" content="Yu Zhou">
    <title>先看人 | 创投服务</title>


    <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">

    <!--Home page using level 1 index css-->
    <link href="<?php echo base_url("assets/css/L1/index.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/L2/home_my_card.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/L1/home_only.css"); ?>" rel="stylesheet">

    <!--Home page Media Player js and css start-->
    <link href="<?php echo base_url("assets/js/player/mediaelementplayer.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/js/player/jquery.js"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/js/player/mediaelement-and-player.min.js"); ?>" rel="stylesheet">
    <!--Home page Media Player js and css end-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<link href="./assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        /* Custom page CSS
  -------------------------------------------------- */
        /* Not required for template or sticky footer method. */

    </style>

</head>

<body style="max-width:1000px;height: 437px;">


<header class="w3-theme w3-top bc-header">


    <div class="bc-flex" style="justify-content: flex-start;">
        <div class="bc-flex bc-top-bar">
            <div class="bc-flex font-xihei bc-top-filter">
            </div>
            <div class="bc-top-title bc-flex">
                <div class="bc-top-half bc-flex font-xihei">
                    <div class="bc-top-title-checked bc-flex">看投资人</div>
                </div>
                <div class="bc-top-half bc-flex font-xihei"
                     onclick="toHref('<?php echo base_url("level_1/home01"); ?>')">
                    <div class="bc-top-title-unchecked bc-flex">看创业者</div>
                </div>
            </div>
            <div class="bc-flex font-xihei bc-top-filter" onclick="toHref('<?php echo base_url("level_2/filter"); ?>')">
                <div class="bc-flex" style="">
                    <img class="bc-top-filter-image" src="<?php echo base_url("assets/images/filter.png"); ?>">
                </div>
                <div class="bc-top-filter-title bc-flex">筛选</div>
            </div>
        </div>
    </div>

</header>

<!-- Begin page content -->
<!-- container -->
<div class="font-xihei home-container bc-flex">
    <div class="home-background">

        <div class="home-row1 bc-flex">
            <div class="home-row1-slide-button-div"><img
                    src="<?php echo base_url('assets/images/home_left.png'); ?>" width="auto"
                    height="18px"/>
            </div>

            <div id="tag-cover-div" class="tag-cover-div bc-flex home-tag-position">
                <div class="inner-tag-HTML bubble-five">
                    <div class="tag-inner-content bc-flex">

                        <div class="tag-inner-option bc-flex">
                            <div class="tag-inner-split bc-flex">
                                <div class="tag-inner-split">
                                    <div class="tag-inner-split-vertical bubble-four bc-flex">
                                        <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                class="option-font">金融</font>
                                        </div>
                                    </div>
                                    <div class="tag-inner-split-vertical bubble-four bc-flex">
                                        <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                class="option-font">人工智能</font></div>
                                    </div>
                                    <div class="tag-inner-split-vertical bubble-four bc-flex">
                                        <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                class="option-font">旅游</font>
                                        </div>
                                    </div>
                                </div>
                                <div class="tag-inner-split">
                                    <div class="tag-inner-split-vertical bubble-four bc-flex">
                                        <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                class="option-font">A
                                                轮</font></div>
                                    </div>
                                    <div class="tag-inner-split-vertical bubble-four bc-flex">
                                        <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                class="option-font">教育</font>
                                        </div>
                                    </div>
                                    <div class="tag-inner-split-vertical bubble-four bc-flex">
                                        <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                class="option-font">娱乐</font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tag-inner-split bc-flex">
                                <div class="tag-inner-split">
                                    <div class="tag-inner-split-vertical bubble-four bc-flex">
                                        <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                class="option-font">自定义</font></div>
                                    </div>
                                    <div class="tag-inner-split-vertical bubble-four bc-flex">
                                        <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                class="option-font">医疗健康</font></div>
                                    </div>
                                    <div class="tag-inner-split-vertical bubble-four bc-flex">
                                        <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                class="option-font">房产</font>
                                        </div>
                                    </div>
                                </div>
                                <div class="tag-inner-split">
                                    <div class="tag-inner-split-vertical bubble-four bc-flex">
                                        <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                class="option-font">电商</font>
                                        </div>
                                    </div>
                                    <div class="tag-inner-split-vertical bubble-four bc-flex">
                                        <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                class="option-font">金融</font>
                                        </div>
                                    </div>
                                    <div class="tag-inner-split-vertical bubble-four bc-flex">
                                        <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                class="option-font">社交</font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tag-inner-cancel bc-flex" onclick="showContact('tag-cover-div','card-cover-div')">
                            <img src="<?php echo base_url('assets/images/cancel_tag.png'); ?>" height="18px"
                                 width="auto"/>
                        </div>

                    </div>


                </div>
            </div>


            <div id="card-cover-div" class="card-cover-div talkbubble">
                
                <div class="home-card-HTML" id="home-card-HTML">

                    <div class="home-card-row2 bc-flex">
                        <div class="home-card-row2-content">

                            <div class="home-card-row2-col1 bc-flex">
                                <div class="bc-flex">
                                    <img src="<?php echo base_url('assets/images/default_person1.png'); ?>" width="auto"
                                         height="55px"/>
                                </div>
                            </div>

                            <div class="home-card-row2-col2">
                                <div class="home-card-row2-col2-row1">
                                    <div class="home-card-row2-col2-row1-name">牛肉哥</div>
                                    <div class="home-card-row2-col2-row1-role">创始人</div>
                                </div>
                                <div class="home-card-row2-col2-row2">
                                    <div>先看人网络科技有限公司</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="home-card-row3">
                        <div class="home-card-row3-content bc-flex">
                            <div class="home-card-row3-content-dis">
                                <div class="contact-info-cho"><font>医疗健康</font><font class="slashcolor">
                                        &nbsp;/&nbsp;</font></div>
                                <div class="contact-info-cho"><font>Pre-A 轮</font><font class="slashcolor">
                                        &nbsp;/&nbsp;</font></div>
                                <div class="contact-info-cho"><font>一起创业</font><font class="slashcolor">
                                        &nbsp;/&nbsp;</font></div>
                                <div class="contact-info-cho"><font>O2O</font></div>
                            </div>
                            <div onclick="showContact('','tag-cover-div')">
                                <img class="home-card-row3-content-more"
                                     src="<?php echo base_url('assets/images/me_more.png'); ?>"/>
                            </div>
                        </div>
                    </div>

                    <div class="home-card-row4">
                        <div class="home-card-row4-content bc-flex">
                            <div class="home-card-row4-content-dis" style="float:left;">让投资人先看到你的脸，让创业者看到你的脸
                            </div>
                        </div>
                    </div>

                    <div class="home-card-row5 bc-flex">
                        <!--                        <img class="home-card-row5-video-image"-->
                        <!--                             src="-->
                        <?php //echo base_url('assets/images/home_default_video.jpg'); ?><!--"/>-->

                        <div class="home-card-row5-video-image">
                            <video class="home-card-row5-video" height="98%" width="100%"
                                   id="player1" controls="controls" preload="auto">
                                <source src="<?php echo base_url('../../xkr-video/bp.MOV'); ?>" type="video/mp4">
                            </video>

                        </div>
                    </div>

                </div>


                <div class="contact-info-HTML cardbubble" id="contact-info-HTML">

                    <div class="contact-info-row1 bc-flex">
                        <div class="contact-info-row1-content">
                            <div class="contact-info-row1-col1 bc-flex">
                                <div class="bc-flex">
                                    <img src="<?php echo base_url('assets/images/default_person1.png'); ?>" width="auto"
                                         height="55px"/>
                                </div>
                            </div>

                            <div class="contact-info-row1-col2">
                                <div class="contact-info-row1-col2-row1">
                                    <div class="contact-info-row1-col2-row1-name">牛肉哥</div>
                                    <div class="contact-info-row1-col2-row1-role">创始人</div>
                                </div>
                                <div class="contact-info-row1-col2-row2">
                                    <div>先看人网络科技有限公司</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="contact-info-row2">
                        <div class="contact-info-row2-content">
                            <div class="contact-info-row2-content-dis bc-flex">
                                <div class="contact-info-cho"><font>医疗健康</font><font class="slashcolor">
                                        &nbsp;/&nbsp;</font></div>
                                <div class="contact-info-cho"><font>Pre-A 轮</font><font class="slashcolor">
                                        &nbsp;/&nbsp;</font></div>
                                <div class="contact-info-cho"><font>一起创业</font><font class="slashcolor">
                                        &nbsp;/&nbsp;</font></div>
                                <div class="contact-info-cho"><font>O2O</font></div>
                            </div>
                        </div>
                    </div>


                    <div class="contact-info-row bc-flex contact-info-firstline">
                        <div class="contact-info-pic"><img class="contact-pic"
                                                           src="<?php echo base_url('assets/images/contact_phone.png'); ?>"/>
                        </div>
                        <div class="line-left-margin font-margin-top">
                            <div class="contact-info-nation">+86</div>
                            <div class="contact-font contact-font-num">13003030999</div>
                        </div>
                    </div>

                    <div class="contact-info-row bc-flex contact-mar">
                        <div class="contact-info-pic"><img class="contact-pic"
                                                           src="<?php echo base_url('assets/images/contact_wechat.png'); ?>"/>
                        </div>
                        <div class="line-left-margin"><font class="contact-font">niurouge299</font></div>
                    </div>

                    <div class="contact-info-row bc-flex contact-mar">
                        <div class="contact-info-pic"><img class="contact-pic"
                                                           src="<?php echo base_url('assets/images/contact_email.png'); ?>"/>
                        </div>
                        <div class="line-left-margin"><font class="contact-font">xingmingxingming@business.com</font>
                        </div>
                    </div>

                </div>


                <div class="contact-pay-HTML cardbubble" id="contact-pay-HTML">
                    <div class="contact-pay-blank"></div>
                    <div class="contact-pay-row1 bc-flex">
                        <div>确定获取
                            <div class="user-name">泽宇</div>
                            的联系方式吗?
                        </div>
                    </div>
                    <div class="contact-pay-row2 bc-flex">
                        <div class="contact-pay-row2-col1 bc-flex" onclick="toHomePage()">取消</div>
                        <div class="contact-pay-row2-col2 bc-flex" onclick="toCardPage()">确定</div>
                    </div>
                    <div class="contact-pay-blank"></div>
                </div>

            </div>


            <div class="home-row1-slide-button-div"><img
                    src="<?php echo base_url('assets/images/home_right.png'); ?>" width="auto"
                    height="18px"/>
            </div>
        </div>

        <div class="home-row2 bc-flex">
            <div class="bc-contact-pay-row2-content bc-flex">

                <div class="bc-contact-pay-row2-col1 bubble bc-flex" onclick="showingDetail()">
                    <div class="bubble-insert">
                        <div class="bubble-insert-row1 bc-flex">
                            <image class="bubble-insert-pic" id="contact-pic"
                                   src="<?php echo base_url('assets/images/contact01.png'); ?>"/>
                            <div class="bc-contact-pay-row2-tit" id="bc-contact-pay-row2-tit-contact" color="#898a8a">
                                联系
                            </div>
                        </div>
                        <div class="bubble-insert-row2 bc-flex">
                            <div color="#898a8a"><font id="contactnum">3768</font><font>人</font></div>
                        </div>
                    </div>
                </div>

                <div class="bc-contact-pay-row2-col2 bubble bc-flex" onclick="storeaddone()">
                    <div class="bubble-insert">
                        <div class="bubble-insert-row1 bc-flex">
                            <image class="bubble-insert-pic" id="bubble-insert-pic"
                                   src="<?php echo base_url('assets/images/collect01.png'); ?>"/>
                            <div class="bc-contact-pay-row2-tit" color="#ce1442">收藏</div>
                        </div>
                        <div class="bubble-insert-row2 bc-flex" color="#898a8a"><font
                                id="collectNum">9990</font><font>人</font></div>
                    </div>
                </div>

                <div class="bc-contact-pay-row2-col3 bubble bc-flex"
                     onclick="toHref('<?php echo base_url("level_2/comment"); ?>')">
                    <div class="bubble-insert">
                        <div class="bubble-insert-row1 bc-flex">
                            <image class="bubble-insert-pic"
                                   src="<?php echo base_url('assets/images/comment01.png'); ?>"/>
                            <div class="bc-contact-pay-row2-tit" color="#898a8a">留言</div>
                        </div>
                        <div class="bubble-insert-row2 bc-flex">
                            <div color="#898a8a"><font id="commentNum">23</font><font>条</font></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>


<footer class="footer">
    <div class="container">
        <div class="icon-footer bc-flex font-xihei" style="">
            <div class="icon-footer-div" onclick="toHref('<?php echo base_url("level_1/home"); ?>')">
                <div class="icon-footer-row1 bc-flex">
                    <img class="icon-footer-image" src="<?php echo base_url("assets/images/home02.png"); ?>"></i>
                </div>
                <div class="icon-footer-row2">首页</div>
            </div>
            <div class="icon-footer-div" onclick="toHref('<?php echo base_url("level_1/search"); ?>')">
                <div class="icon-footer-row1 bc-flex">
                    <img class="icon-footer-image" src="<?php echo base_url("assets/images/search01.png"); ?>"></i>
                </div>
                <div class="icon-footer-row2">搜索</div>
            </div>
            <div class="icon-footer-div" onclick="toHref('<?php echo base_url("level_1/people"); ?>')">
                <div class="icon-footer-row1 bc-flex">
                    <img class="icon-footer-image" src="<?php echo base_url("assets/images/people01.png"); ?>"></i>
                </div>
                <div class="icon-footer-row2">我的人</div>
            </div>
            <div class="icon-footer-div" onclick="toHref('<?php echo base_url("level_1/me"); ?>')">
                <div class="icon-footer-row1 bc-flex">
                    <img class="icon-footer-image" src="<?php echo base_url("assets/images/me01.png"); ?>"></i>
                </div>
                <div class="icon-footer-row2">我</div>
            </div>
        </div>

    </div>
</footer>

<script>
    window.onload = function () {
        if (parseInt(document.getElementById('commentNum').innerHTML) > 10000) {
            document.getElementById('commentNum').innerHTML = '10000+';
        }
    }

    function toHref(url) {
        window.location.href = url;
    }
    //隐藏前面 显示后面
    function showContact(ctOne, ctTwo) {
        document.getElementById(ctTwo).style.visibility = "visible";
        document.getElementById(ctOne).style.visibility = "hidden";
    }

    var tag = 0;
    function storeaddone() {
        if (tag == 0) {
            tag = 1;
            document.getElementById('bubble-insert-pic').setAttribute('src', '<?php echo base_url('assets/images/collect02.png'); ?>');
            if (parseInt(document.getElementById('collectNum').innerHTML) + 1 > 10000) {
                document.getElementById('collectNum').innerHTML = '10000+';
            } else {
                document.getElementById('collectNum').innerHTML = parseInt(document.getElementById('collectNum').innerHTML) + 1;
            }

        }
        else {
            tag = 0;
            document.getElementById('bubble-insert-pic').setAttribute('src', '<?php echo base_url('assets/images/collect01.png'); ?>');
        }
    }

    var home = 0;    //------------------0表示页面可见,1表示页面不可见
    var card = 1;
    var pay = 1;
    function showingDetail() {
        if (home == 0) {
            //在home页面，点击联系按钮，出现确认联系页面
            home = 1;
            pay = 0;
            card = 1;
            document.getElementById('contact-info-HTML').style.visibility = "hidden";
            document.getElementById('home-card-HTML').style.visibility = "hidden";
            document.getElementById('contact-pay-HTML').style.visibility = "visible";
        } else if (pay == 0) {
            //在确认联系页面，点击联系按钮，出现home页面
            pay = 1;
            card = 1;
            home = 0;
            document.getElementById('contact-info-HTML').style.visibility = "hidden";
            document.getElementById('contact-pay-HTML').style.visibility = "hidden";
            document.getElementById('home-card-HTML').style.visibility = "visible";
        } else if (card == 0) {
            //在信息卡片页面，点击联系按钮，出现home页面
            card = 1;
            home = 0;
            pay = 1;
            document.getElementById('contact-pay-HTML').style.visibility = "hidden";
            document.getElementById('contact-info-HTML').style.visibility = "hidden";
            document.getElementById('home-card-HTML').style.visibility = "visible";
        }
    }

    function toHomePage() {
        document.getElementById('contact-pay-HTML').style.visibility = "hidden";
        document.getElementById('home-card-HTML').style.visibility = "visible";
        document.getElementById('contact-info-HTML').style.visibility = "hidden";
    }

    function toCardPage() {
        document.getElementById('contact-pay-HTML').style.visibility = "hidden";
        document.getElementById('contact-info-HTML').style.visibility = "visible";
        document.getElementById('home-card-HTML').style.visibility = "hidden";
        document.getElementById('contact-pic').setAttribute('src', '<?php echo base_url('assets/images/contact02.png'); ?>');
        document.getElementById('bc-contact-pay-row2-tit-contact').style.color = '#ce1442';
        if (parseInt(document.getElementById('contactnum').innerHTML) + 1 > 10000) {
            document.getElementById('contactnum').innerHTML = '10000+';
        } else {
            document.getElementById('contactnum').innerHTML = parseInt(document.getElementById('contactnum').innerHTML) + 1;
        }
    }


</script>

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="<?php echo base_url("assets/js/vendor/jquery.min.js"); ?>"><\/script>')
</script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo base_url("assets/js/ie10-viewport-bug-workaround.js"); ?>"></script>
</body>


</html>