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
            justify-content: center;
            -webkit-justify-content: center; /* Safari 6.1+ */

            align-items: center;
            -webkit-box-align: center; -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center; /* Safari 7.0+ */
        }

        .font-1 {
            font-size: 2.3rem;
            color: black;
            font-weight: bold;
        }

        .font-2 {
            font-size: 13px;
            color: rgba(red, green, blue, alpha)
        }

        /*---------- header start ------------*/

        /*--------------- header end --------------*/
        /*--------------- container start -----------*/
        /* ---------- cl=collection , col=column ---------*/

        .con-bg {
            background-color: #EFEFEF;
            width: 100%;
            display: inline-block;
            height: 567px;
            margin-top: 3.8rem;
        }

        .cl {
            background-color: #FFFFFF;
            height: 9.7rem;
            margin: 11px 6px 0px 6px;

            display: flex;
            display: -webkit-box; display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */
        }

        .cl-col1 {
            width: 80%;
            display: block;
            justify-content: center;
            -webkit-justify-content: center; /* Safari 6.1+ */

            align-items: center;
            -webkit-box-align: center; -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center; /* Safari 7.0+ */
            z-index: 1;
        }

        /*----------------- contanienr_cl-contact-bubble start -----------------*/

        .cl2 {
            display: flex;
            display: -webkit-box; display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */
            width: 100%;
            height: 100%;
        }

        .cl-col1-1 {
            z-index: 2;
            display: flex;
            display: -webkit-box; display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */
            width: 97%;
            height: 9.7rem;
            background: #EFEFEF;
            position: absolute;
            visibility: hidden;
        }

        .cl-contact-bubble {
            width: 23.5rem;
            height: 9.7rem;
            background: white;
            position: relative;
            display: block;
        }

        /* ----------- iPhone 6 开始----------- */
        /* Portrait and Landscape */

        @media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (-webkit-min-device-pixel-ratio: 2) {
            .cl-contact-bubble {
                width: 28.5rem;
                height: 9.7rem;
                background: white;
                position: relative;
                display: block;
            }
        }


        /* ----------- iPhone 6 结束----------- */

        /* ----------- iPhone 6+ 开始----------- */
        /* Portrait and Landscape */

        @media only screen and (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) {
            .cl-contact-bubble {
                width: 28.5rem;
                height: 9.7rem;
                background: white;
                position: relative;
                display: block;
            }
        }

        /* ----------- iPhone 6+ 结束----------- */

        .cl-contact-bubble:before {
            content: "";
            position: absolute;
            top: 4rem;
            left: 100%;
            width: 0;
            height: 0;
            border-bottom: 0.8rem solid transparent;
            border-left: 1.3rem solid white;
            border-top: 0.8rem solid transparent;
        }

        .cl-col3 {
            width: 80%;
            justify-content: center;
            -webkit-justify-content: center; /* Safari 6.1+ */

            align-items: center;
            -webkit-box-align: center; -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center; /* Safari 7.0+ */
        }

        .cl-col4 {
            width: 20%;
            z-index: 1;
        }

        /*----------------- container_cl-contact-bubble end -----------------*/

        .cl-col2 {
            width: 20%;
            z-index: 1;
        }
        .cl-phone{
            height: 5rem;
            width: auto;
        }
        .cl-col1-row1 {
            height: 5.9rem;
            display: flex;
            display: -webkit-box; display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */
            padding-top: 0.8rem;
        }

        .cl-col1-row2 {
            height: 3.7rem;
            display: flex;
            display: -webkit-box; display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */
        }

        .cl-photo {
            width: 25%;
        }
        .cl-photo-image{
            height: 4.167rem;
        }

        .cl-box {
            width: 75%;
            padding-left: 0.5rem;
        }

        .cl-box-row1 {
            display: flex;
            display: -webkit-box; display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */
            height: 3.6rem;
            padding-bottom: 0.5rem;
        }

        .cl-company {
            display: flex;
            display: -webkit-box; display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */
            height: 1.8rem;
            align-items: center;
            justify-content: flex-start;
            -webkit-justify-content: flex-start;
        }

        .cl-role-div {
            width: 25%;
        }

        .cl-role {
            width: 5rem;
            border: 1px #b4b4b5 solid;
            border-radius: 0.4rem;
        }

        .cl-tag {
            display: flex;
            display: -webkit-box; display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */
            align-items: center;
            -webkit-align-items: center;
            justify-content: flex-start;
            -webkit-justify-content: flex-start;
            width: 75%;
            padding-left: 0.5rem;
        }

        .cl-name {
            display: flex;
            display: -webkit-box; display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */
            align-items: flex-end;
            -webkit-align-items: flex-end;
            justify-content: flex-start;
            -webkit-justify-content: flex-start;
            width: 8rem;
        }

        .cl-position {
            display: flex;
            display: -webkit-box; display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */
            align-items: flex-end;
            -webkit-align-items: flex-end;
            justify-content: flex-start;
            -webkit-justify-content: flex-start;
            width: 70%;
            padding-left: 1rem;
        }

        /*--------------- container end --------------*/




        /*header start*/

        .common-flex {
            display: flex;
            display: -webkit-box; display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */

            justify-content: center;
            -webkit-justify-content: center; /* Safari 6.1+ */

            align-items: center;
            -webkit-box-align: center; -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center; /* Safari 7.0+ */
        }

        .bc-top-bar {
            width: 100%;
        }
        .font-xihei {
            font-family: STXihei;
        }

        /*---------- footer ------------*/


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

        /* ----------- 点击电话后的CSS 开始 --------------*/

        .ph-row1 {
            width: 100%;
            margin-bottom: 1.9rem;
            height: 4.3rem;
            display: flex;
            align-items: flex-end;
            -webkit-align-items: flex-end; /* Safari 7.0+ */
        }

        .ph-row2 {
            width: 100%;
            height: 3.5rem;
        }

        .ph-cancel {
            width:50%;
            margin-right: 2.6rem;
            align-items: flex-start;
            -webkit-align-items: flex-start; /* Safari 7.0+ */
            justify-content: flex-end;
            -webkit-justify-content: flex-end; /* Safari 7.0+ */
            color: #b4b4b5;
        }

        .ph-ok {
            width:50%;
            margin-left: 2.6rem;
            display: flex;
            display: -webkit-box; display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */
            align-items: flex-start;
            justify-content: flex-start;
            color: #2ca93f;
        }

        .image-contact-icon {
            width: 1.6rem;
            height: auto;
        }

        .contact-row1 {
            margin-left: 1.7rem;
            display: flex;
            display: -webkit-box; display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */
            padding-top: 0.9rem;
            align-items: flex-end;
        }

        .contact-row2 {
            margin: 0.9rem 0rem 0.9rem 1.7rem;
            display: flex;
            display: -webkit-box; display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */
        }

        .contact-row3 {
            margin-left: 1.7rem;
            display: flex;
            display: -webkit-box; display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */
        }

        /*------------ 点击电话后的CSS 结束 ---------*/


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
                    <div class="bc-top-title-checked bc-flex">已收藏</div>
                </div>
                <div class="bc-top-half bc-flex font-xihei">
                    <div class="bc-top-title-unchecked bc-flex">联系人</div>
                </div>
            </div>
            <div class="bc-flex font-xihei bc-top-filter">
            </div>
        </div>
    </div>



</header>

<!-- Begin page content -->
<!---------- container -------------->

<div class="con-bg fond-xihei">

    <!-------- container 1 ------------>
    <div class="cl">

        <div id="contact001-03" class="cl-col1-1">
            <div class="cl-col3">
                <div class="cl-contact-bubble">
                    <div class="contact-row1">
                        <div>
                            <img class="image-contact-icon" src="<?php echo base_url("assets/images/contact_wechat.png"); ?>">
                        </div>
                        <div style="margin-left: 0.5rem;">
                            niurouge22999
                        </div>
                    </div>
                    <div class="contact-row2">
                        <div>
                            <img class="image-contact-icon" src="<?php echo base_url("assets/images/contact_phone.png"); ?>">
                        </div>
                        <div style="margin-left: 0.5rem;" class="common-flex">
                            <div style="color: #b4b4b5; margin-right: 3px">
                                +86
                            </div>
                            <div>
                                1234-12345678-1234
                            </div>
                        </div>
                    </div>
                    <div class="contact-row3">
                        <div>
                            <img class="image-contact-icon" src="<?php echo base_url("assets/images/contact_email.png"); ?>">
                        </div>
                        <div style="margin-left: 0.5rem;">
                            xingmingxingming@business.com
                        </div>
                    </div>
                   <!----
                   <div>联系手机在这儿</div>
                    <div>
                        <div onclick="showContact('contact001-03','contact001-01')">联系微信在这儿</div>
                        <div onclick="showContact('contact001-03','contact001-01')">联系邮箱在这儿</div>
                    </div>
                    ------>
                </div>

            </div>
            <div class="cl-col4 common-flex" onclick="showContact('contact001-03','contact001-01')">
                <!--01hide 02show -->
                <img class="cl-phone" src="<?php echo base_url("assets/images/contact03.png"); ?>">
            </div>

        </div>

        <div id="contact001-02" class="cl-col1-1">
            <div class="cl-col3">
                <div class="cl-contact-bubble">
                    <div class="ph-row1 common-flex">
                        <div class="font-xihei">
                            联系牛肉哥，请支付
                        </div>
                        <div class="font-xihei" style="color: #2ca93f;">
                            ￥0.01
                        </div>
                    </div>

                    <div class="ph-row2 common-flex">
                        <div class="ph-cancel common-flex" onclick="showContact('contact001-02','contact001-01')">
                            取消
                        </div>
                        <div class="ph-ok" onclick="showContact('contact001-02','contact001-03')">
                            确认
                        </div>

                    </div>
                   <!-------- <div>支付</div>
                    <div>
                        <div onclick="showContact('contact001-02','contact001-01')">取消</div>
                        <div onclick="showContact('contact001-02','contact001-03')">确认</div>
                    </div> ------>
                </div>
            </div>
            <div class="cl-col4 common-flex" onclick="showContact('contact001-02','contact001-01')">
                <!--01hide 02show -->
                <img class="cl-phone" src="<?php echo base_url("assets/images/contact03.png"); ?>">
            </div>

        </div>

        <div id="contact001-01" class="cl2">
            <div class="cl-col1">
                <div class="cl-col1-row1">
                    <div class="cl-photo common-flex">
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
                    <div class="cl-role-div common-flex">
                        <div class="cl-role common-flex">创业者</div>
                    </div>
                    <div class="cl-tag font-2">
                        医疗健康 / A 轮 / 自定义 / 金融 ...
                    </div>
                </div>
            </div>

            <div class="cl-col2 common-flex"
                 onclick="showContact('contact001-01','contact001-02')">
                <img class="cl-phone" src="<?php echo base_url("assets/images/contact01-1.png"); ?>">
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
            <div class="icon-footer-div" onclick="toHref('<?php echo base_url("level_1/home"); ?>')">
                <div class="icon-footer-row1 bc-flex">
                    <img class="icon-footer-image" src="<?php echo base_url("assets/images/home01.png"); ?>"></i>
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
                    <img class="icon-footer-image" src="<?php echo base_url("assets/images/people02.png"); ?>"></i>
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