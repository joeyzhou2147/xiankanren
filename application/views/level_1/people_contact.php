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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Xiankanren - 简洁、直观、强悍、用户优先的投资服务平台，让创业投资更迅速、简单。">
    <meta name="keywords" content="先看人, 先看脸, 创业, 投资, framework, bootstrap, front-end, frontend, web development">
    <meta name="author" content="Yu Zhou">
    <meta http-equiv="Page-Enter" content="RevealTrans(duration=100,Transitionv=11)">
    <title>先看人 | 投资服务</title>


    <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">

    <!--Home page using level 1 index css-->
    <link href="<?php echo base_url("assets/css/L1/index.css"); ?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<link href="./assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

        /*--------- public ---------*/

        .font-xihei {
            font-family: STXihei;
        }

        .center-contant {
            align-content: center;
            justify-content: center;
        }

        .font-1 {
            font-size: 18px;
            color: black;
            font-weight: bold;
        }

        .font-2 {
            font-size: 13px;
            color: rgba(red, green, blue, alpha)
        }

        /*---------- header start ------------*/

        .header-box {
            display: flex;
            width: 375px;
            height: 50px;
            border-bottom: 1px #D92D53 solid;
        }

        .header-box1 {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 185px;
        }

        .header-box1-check {
            height: 50px;
            border-bottom: 3px #D92D53 solid;
            color: #D92D53;
            font-size: 20px;
        }

        .header-box1-uncheck {
            height: 50px;
            border-bottom: 1px;
            color: #9B9A9A;
            font-size: 20px;
        }

        /*--------------- header end --------------*/
        /*--------------- container start -----------*/
        /* ---------- cl=collection , col=column ---------*/

        .con-bg {
            background-color: #EFEFEF;
            width: 100%;
            display: inline-block;
            height: 567px;
        }

        .cl {
            margin-right: 6px;
            margin-left: 6px;
            margin-top: 6px;
            background-color: #FFFFFF;
            display: flex;
            height: 100px;
        }

        .cl-col1 {
            width: 80%;
            display: block;
            align-items: center;
            justify-content: center;
            z-index: 1;
        }

        /*----------------- contanienr_cl-contact-bubble start -----------------*/

        .cl2 {
            display: flex;
            width: 100%;
            height: 100%;
        }

        .cl-col1-1 {
            z-index: 2;
            display: flex;
            width: 97%;
            height: 100px;
            background: #EFEFEF;
            position: absolute;
            visibility: hidden;
        }

        .cl-contact-bubble {
            width: 90%;
            height: 100px;
            background: white;
            position: relative;
        }

        .cl-contact-bubble:before {
            content: "";
            position: absolute;
            top: 40px;
            left: 100%;
            width: 0;
            height: 0;
            border-bottom: 13px solid transparent;
            border-left: 26px solid white;
            border-top: 13px solid transparent;
        }

        .cl-col3 {
            width: 80%;
            align-items: center;
            justify-content: center;
        }

        .cl-col4 {
            width: 20%;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /*----------------- container_cl-contact-bubble end -----------------*/

        .cl-col2 {
            width: 20%;
            z-index: 1;
        }
        .cl-phone{
            height: 60px;
        }
        .cl-col1-row1 {
            height: 60%;
            display: flex;
        }

        .cl-col1-row2 {
            height: 40%;
            display: flex;
        }

        .cl-photo {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 25%;
        }
        .cl-photo-image{
            height: 50px;
        }

        .cl-box {
            display: block;
            width: 75%;
        }

        .cl-box-row1 {
            display: flex;
            height: 70%;
        }

        .cl-company {
            display: flex;
            height: 30%;
            align-items: center;
            justify-content: flex-start;
        }

        .cl-role-div {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 25%;
        }

        .cl-role {
            width: 50px;
            border: 1px red solid;
        }

        .cl-tag {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            width: 75%;
        }

        .cl-name {
            display: flex;
            align-items: flex-end;
            justify-content: flex-start;
            width: 30%;
        }

        .cl-position {
            display: flex;
            align-items: flex-end;
            justify-content: flex-start;
            width: 70%;
        }

        /*--------------- container end --------------*/
        /*--------------- footer start ------------*/

        .footer-box {
            position: absolute;
            bottom: 0;
            width: 100%;
            border-top: 1px #D92D53 solid;
            height: 60px;
            background: #FFFFFF;
        }

        .footer-box2 {
            display: flex;
            width: 25%;
            justify-content: center;
            align-items: center;
            height: 58px;
            float: right;
        }

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

        /* w3 css start  */

        .w3-theme-d2 {
            color: #fff !important;
            background-color: #e11a0c !important
        }

        .w3-theme {
            /*color: #fff !important;
            background-color: #f44336 !important*/
            background-color: #FFFFFF;
            color: #9B9A9A;
            font-size: 20px;
            font-weight: 600;
        }

        /* w3 css end  */
        /*header start*/

        .common-flex {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .common-block {
            display: inline-block;
            justify-content: center;
            align-items: center;
        }

        .bc-flex2 {
            width: 100%;
            height: 50px;
        }

        .bc-top-bar {
            width: 100%;
            height: 50px;
        }

        .bc-header {
            height: 50px;
            border-bottom: 1px solid #D92D53;
        }

        .bc-flex {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .font-xihei {
            font-family: STXihei;
        }

        /*---------- footer ------------*/

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 50px;
            background-color: #ffffff;
        }

        .bc-laud-top-checked {
            color: #D92D53;
        }

        .bc-laud-top-unchecked {
            color: #ADADAD;
        }

        /*---------- footer end------------*/

        /* ----------- Nexus 5 and 6 ----------- */

        @media screen and (min-width: 320px) and (max-width: 411px) and (min-height: 659px) {
        }

        @media screen and (min-width: 320px) and (max-width: 401px) and (min-height: 659px) {
        }

        /*i-6*/

        @media screen and (min-width: 320px) and (min-height: 769px) {
        }

        /* ----------- Nexus 5 and 6 ----------- */
        /* ----------- iPhone 4 and 4S ----------- */

        @media only screen and (min-width: 320px) {
        }

        /* ----------- iPhone 6 ----------- */
        /* Portrait and Landscape */

        @media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (-webkit-min-device-pixel-ratio: 2) {
        }

        /* Portrait */

        @media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait) {
        }

        /* Landscape */

        @media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {
        }

        /* ----------- iPhone 6+ ----------- */
        /* Portrait and Landscape */

        @media only screen and (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) {
        }

        /* Portrait */

        @media only screen and (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: portrait) {
        }

        /* Landscape */

        @media only screen and (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: landscape) {
        }

        /* ----------- edit start --------------*/

        /*------------ edit end----------*/


    </style>

</head>

<body style="max-width:1000px;height: auto;">

<header class="w3-theme w3-top bc-header">


    <div class="bc-flex" style="justify-content: flex-start;">
        <div class="bc-flex bc-top-bar">
            <div class="bc-flex font-xihei bc-top-filter">
            </div>
            <div class="bc-top-title bc-flex">
                <div class="bc-top-half bc-flex font-xihei">
                    <div class="header-box1-uncheck bc-flex" onclick="tohref('<?php echo base_url("level_1/people"); ?>')">已收藏</div>
                </div>
                <div class="bc-top-half bc-flex font-xihei">
                    <div class="bc-flex header-box1-check">联系人</div>
                </div>
            </div>
            <div class="bc-flex font-xihei bc-top-filter" onclick="tohref('<?php echo base_url("level_2/edit"); ?>')">
                <div class="bc-flex" style="">
                </div>
                <div class="bc-flex"></div>
            </div>
        </div>
    </div>

</header>

<!-- Begin page content -->
<!---------- container -------------->

<div class="con-bg fond-xihei">

    <!-------- container 1 ------------>
    <div class="cl">

        <div id="contact001-02" class="cl-col1-1" style="vis">
            <div class="cl-col3">
                <div class="cl-contact-bubble">
                    <div>123123123123123</div>
                </div>
            </div>
            <div class="cl-col4 common-flex" onclick="showContact('contact001-02','contact001-01')">
                <!--01hide 02show -->
                <img class="cl-phone" src="<?php echo base_url("assets/images/contact02.png"); ?>">
            </div>

        </div>

        <div id="contact001-01" class="cl2">
            <div class="cl-col1">
                <div class="cl-col1-row1">
                    <div class="cl-photo">
                        <img  class="cl-photo-image" src="<?php echo base_url("assets/images/default_person1.png"); ?>">
                    </div>

                    <div class="cl-box">
                        <div class="cl-box-row1">
                            <div class="cl-name font-1">
                                牛肉哥
                            </div>
                            <div class="cl-position font-2">
                                创始人
                            </div>
                        </div>

                        <div class="cl-company font-2">
                            先看人技术网络科技有限公司
                        </div>
                    </div>
                </div>


                <div class="cl-col1-row2">
                    <div class="cl-role-div">
                        <div class="cl-role common-flex">创业者</div>
                    </div>
                    <div class="cl-tag font-2">
                        医疗健康 / A 轮 / 自定义 / 金融 ...
                    </div>
                </div>
            </div>

            <div class="cl-col2 common-flex"
                 onclick="showContact('contact001-01','contact001-02')">
                <img class="cl-phone" src="<?php echo base_url("assets/images/contact01.png"); ?>">
            </div>
        </div>

    </div>




    <!-------- container 1 ------------>
    <div class="cl">

        <div id="contact002-02" class="cl-col1-1" style="vis">
            <div class="cl-col3">
                <div class="cl-contact-bubble">
                    <div>123123123123123</div>
                </div>
            </div>
            <div class="cl-col4 common-flex" onclick="showContact('contact002-02','contact002-01')">
                <!--01hide 02show -->
                <img class="cl-phone" src="<?php echo base_url("assets/images/contact02.png"); ?>">
            </div>

        </div>

        <div id="contact002-01" class="cl2">
            <div class="cl-col1">
                <div class="cl-col1-row1">
                    <div class="cl-photo">
                        <img  class="cl-photo-image" src="<?php echo base_url("assets/images/default_person1.png"); ?>">
                    </div>

                    <div class="cl-box">
                        <div class="cl-box-row1">
                            <div class="cl-name font-1">
                                牛肉哥
                            </div>
                            <div class="cl-position font-2">
                                创始人
                            </div>
                        </div>

                        <div class="cl-company font-2">
                            先看人技术网络科技有限公司
                        </div>
                    </div>
                </div>


                <div class="cl-col1-row2">
                    <div class="cl-role-div">
                        <div class="cl-role common-flex">创业者</div>
                    </div>
                    <div class="cl-tag font-2">
                        医疗健康 / A 轮 / 自定义 / 金融 ...
                    </div>
                </div>
            </div>

            <div class="cl-col2 common-flex"
                 onclick="showContact('contact002-01','contact002-02')">
                <img class="cl-phone" src="<?php echo base_url("assets/images/contact01.png"); ?>">
            </div>
        </div>

    </div>





    <div class="cl">

        niasdfsdf
    </div>
</div>


<footer class="footer">
    <div class="container">
        <div class="icon-footer bc-flex font-xihei" style="">
            <div class="icon-footer-div" onclick="tohref('<?php echo base_url("level_1/home"); ?>')">
                <div class="icon-footer-row1 bc-flex">
                    <img class="icon-footer-image" src="<?php echo base_url("assets/images/home01.png"); ?>"></i>
                </div>
                <div class="icon-footer-row2">首页</div>
            </div>
            <div class="icon-footer-div" onclick="tohref('<?php echo base_url("level_1/search"); ?>')">
                <div class="icon-footer-row1 bc-flex">
                    <img class="icon-footer-image" src="<?php echo base_url("assets/images/search01.png"); ?>"></i>
                </div>
                <div class="icon-footer-row2">搜索</div>
            </div>
            <div class="icon-footer-div" onclick="tohref('<?php echo base_url("level_1/people"); ?>')">
                <div class="icon-footer-row1 bc-flex">
                    <img class="icon-footer-image" src="<?php echo base_url("assets/images/people02.png"); ?>"></i>
                </div>
                <div class="icon-footer-row2">我的人</div>
            </div>
            <div class="icon-footer-div" onclick="tohref('<?php echo base_url("level_2/edit"); ?>')">
                <div class="icon-footer-row1 bc-flex">
                    <img class="icon-footer-image" src="<?php echo base_url("assets/images/me01.png"); ?>"></i>
                </div>
                <div class="icon-footer-row2">我</div>
            </div>
        </div>

    </div>
</footer>

<script>
    function tohref(url) {
        window.location.href = url;
    }

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