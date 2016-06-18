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
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Xiankanren - 简洁、直观、强悍、用户优先的投资服务平台，让创业投资更迅速、简单。">
    <meta name="keywords" content="先看人, 先看脸, 创业, 投资, framework, bootstrap, front-end, frontend, web development">
    <meta name="author" content="Yu Zhou">
    <title>先看人 | 创投服务</title>


    <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">

    <!--Home page using level 1 index css-->
    <link href="<?php echo base_url("assets/css/L1/index.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/L2/home_my_card.css"); ?>" rel="stylesheet">

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

        body > .container {
            padding: 60px 15px 0;
        }

        .container .text-muted {
            margin: 20px 0;
        }

        code {
            font-size: 80%;
        }

        /* ----------- filter end --------------*/

        /*header start*/

        .common-flex {
            display: flex;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            justify-content: center;
            align-items: center;
            -webkit-justify-content: center; /* Safari 6.1+ */
            -webkit-align-items: center; /* Safari 7.0+ */
        }

        .bc-flex {
            display: flex;
            justify-content: center;
            align-items: center;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */
            -webkit-justify-content: center; /* Safari 6.1+ */
            -webkit-align-items: center; /* Safari 7.0+ */
        }

        .common-block {
            display: inline-block;
            justify-content: center;
            align-items: center;
        }

        .bc-top-bar {
            width: 100%;
            height: 38px;
        }

        .font-xihei {
            font-family: STXihei;
        }

        /* ----------- Nexus 5 and 6 ----------- */

        @media screen and (min-width: 320px) and (max-width: 411px) and (min-height: 659px) {
            .bc-container {
                margin-top: 130px;
            }

            .bc-row-two {
                margin-top: 40px;
            }
        }

        @media screen and (min-width: 320px) and (max-width: 401px) and (min-height: 659px) {
            .bc-container {
                margin-top: 45px;
            }

            .bc-row-two {
                margin-top: 0px;
            }
        }

        /*i-6*/

        @media screen and (min-width: 375px) and (min-height: 769px) {
            .bc-container {
                margin-top: 0px;
            }
        }

        /* ----------- Nexus 5 and 6 ----------- */
        /* ----------- iPhone 4 and 4S ----------- */

        @media only screen and (min-width: 320px) {
        }



        /* ----------- edit start --------------*/

        /*------------ edit end----------*/


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
                <div class="bc-top-half bc-flex font-xihei" onclick="toHref('<?php echo base_url("level_1/home01"); ?>')">
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
                <div class="inner-tag-HTML">
                    <div class="tag-inner-content bc-flex">
                        <div class="tag-inner-co greybubble bc-flex">
                            <div class="tag-inner-option bc-flex">
                                <div class="tag-inner-split bc-flex">
                                    <div class="tag-inner-split">
                                        <div class="tag-inner-split-vertical bc-flex">
                                            <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                    class="option-font">金融</font>
                                            </div>
                                        </div>
                                        <div class="tag-inner-split-vertical bc-flex">
                                            <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                    class="option-font">人工智能</font></div>
                                        </div>
                                        <div class="tag-inner-split-vertical bc-flex">
                                            <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                    class="option-font">旅游</font>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tag-inner-split">
                                        <div class="tag-inner-split-vertical bc-flex">
                                            <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                    class="option-font">A
                                                    轮</font></div>
                                        </div>
                                        <div class="tag-inner-split-vertical bc-flex">
                                            <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                    class="option-font">教育</font>
                                            </div>
                                        </div>
                                        <div class="tag-inner-split-vertical bc-flex">
                                            <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                    class="option-font">娱乐</font>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tag-inner-split bc-flex">
                                    <div class="tag-inner-split">
                                        <div class="tag-inner-split-vertical bc-flex">
                                            <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                    class="option-font">自定义</font></div>
                                        </div>
                                        <div class="tag-inner-split-vertical bc-flex">
                                            <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                    class="option-font">医疗健康</font></div>
                                        </div>
                                        <div class="tag-inner-split-vertical bc-flex">
                                            <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                    class="option-font">房产</font>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tag-inner-split">
                                        <div class="tag-inner-split-vertical bc-flex">
                                            <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                    class="option-font">电商</font>
                                            </div>
                                        </div>
                                        <div class="tag-inner-split-vertical bc-flex">
                                            <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                    class="option-font">金融</font>
                                            </div>
                                        </div>
                                        <div class="tag-inner-split-vertical bc-flex">
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
            </div>
            <div id="card-cover-div" class="card-cover-div bc-flex" style="visibility: ;">
                <div class="home-card-HTML">
                    <div class="home-card-row1">
                    </div>

                    <div class="home-card-row2 bc-flex">
                        <div class="home-card-row2-content">

                            <div class="home-card-row2-col1 bc-flex">
                                <div class="bc-flex">
                                    <img src="<?php echo base_url('assets/images/default_person1.png'); ?>" width="auto"
                                         height="50px"/>
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
                            <div class="home-card-row3-content-dis" style="float:left;">医疗健康 / Pre-A轮 / 一起创业 / 智能硬件 、sss
                            </div>
                            <div onclick="showContact('','tag-cover-div')">
                                <img class="home-card-row3-content-more"
                                     src="<?php echo base_url('assets/images/me_more.png'); ?>"/>
                            </div>
                        </div>
                    </div>

                    <div class="home-card-row4">
                        <div class="home-card-row4-content bc-flex">
                            <div class="home-card-row4-content-dis" style="float:left;">让投资人先看到你的脸，让创业者看到你的脸 ...
                            </div>
                        </div>
                    </div>

                    <div class="home-card-row5 bc-flex">
                        <img class="home-card-row5-video-image"
                             src="<?php echo base_url('assets/images/home_default_video.jpg'); ?>"/>
                    </div>


                </div>

            </div>

            <div class="home-row1-slide-button-div"><img
                    src="<?php echo base_url('assets/images/home_right.png'); ?>" width="auto"
                    height="18px"/>
            </div>
        </div>

        <div class="home-row2 bc-flex">
            <div class="bc-contact-pay-row2-content bc-flex">

                <div class="bc-contact-pay-row2-col1 bubble bc-flex">
                    <div class="bubble-insert">
                        <div class="bubble-insert-row1 bc-flex">
                            <image class="bubble-insert-pic"
                                   src="<?php echo base_url('assets/images/contact01.png'); ?>"/>
                            <div class="bc-contact-pay-row2-tit" color="#898a8a">联系</div>
                        </div>
                        <div class="bubble-insert-row2 bc-flex">
                            <div color="#898a8a"> 3768人</div>
                        </div>
                    </div>
                </div>

                <div class="bc-contact-pay-row2-col2 bubble bc-flex">
                    <div class="bubble-insert">
                        <div class="bubble-insert-row1 bc-flex">
                            <image class="bubble-insert-pic"
                                   src="<?php echo base_url('assets/images/collect01.png'); ?>"/>
                            <div class="bc-contact-pay-row2-tit" color="#ce1442">收藏</div>
                        </div>
                        <div class="bubble-insert-row2 bc-flex" color="#898a8a"> 10000+人</div>
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
                            <div color="#898a8a">23条</div>
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
    function toHref(url) {
        window.location.href = url;
    }
    //隐藏前面 显示后面
    function showContact(ctOne, ctTwo) {
        document.getElementById(ctTwo).style.visibility = "visible";
        document.getElementById(ctOne).style.visibility = "hidden";
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