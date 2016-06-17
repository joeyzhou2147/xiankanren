<?php
/**
 * Created by PhpStorm.
 * User: Joe
 * Date: 2016/6/8
 * Time: 10:53
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>先看人 | 投资服务</title>


    <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">

    <!--edit page using level 2 edit css-->
    <link href="<?php echo base_url("assets/css/L2/edit.css"); ?>" rel="stylesheet">
    <!--filter page using level 2 filter css-->
    <link href="<?php echo base_url("assets/css/L2/filter.css"); ?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<link href="./assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <style>
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

        .bc-top-bar {
            width: 90%;
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

        @media screen and (min-width: 320px) and (min-height: 769px) {
            .bc-container {
                margin-top: 0px;
            }
        }

        /* ----------- Nexus 5 and 6 ----------- */
        /* ----------- iPhone 4 and 4S ----------- */

        @media only screen and (min-width: 320px) {
            .bc-row-one {
                display: flex;
                width: 100%;
                height: 350px;
                align-items: center;
                justify-content: center;
            }

            .bc-row-one-div1-card {
                width: 280px;
                height: 362px;
                border-radius: 5px;
                border: 1px solid black;
                display: inline-block;
                align-items: center;
                justify-content: center;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important;
            }
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

        .edit-flex2 {
            width: 100%;
            height: 50px;
        }

        .edit-container2 {
            width: 100%;
            height: 100%;
            background-color: #EFEFEF;
        }

        .edit-container3 {
            background-color: #ffffff;
            margin: 0px 10px 15px 10px;
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .edit-empty-row {
            height: 50px;
        }

        /*------------ edit end----------*/

        /*---------- footer ------------*/

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 50px;
            background-color: #ffffff;
        }

        .edit-tag-role {
            height: 30px;
            width: 100%;
        }

        .edit-upload {
            height: 30px;
            width: 100%;
        }

        .edit-col-divider {
            border-right: 1px solid #808080;
        }

        .edit-footer-div {
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            width: 200px;
            height: 50px;
        }

        .edit-footer-row {
            height: auto;
        }

        .icon-footer2 {
            letter-spacing: 0px;
            text-align: center;
        }

        .bc-laud-top-checked {
            color: #D92D53;
        }

        .bc-laud-top-unchecked {
            color: #ADADAD;
        }

        /*---------- footer end------------*/

    </style>

</head>

<body style="max-width:1000px;height: 1400px;">

<nav class="w3-sidenav w3-card-2 w3-white w3-top" style="width:30%;display:none;z-index:2">
    <div class="w3-theme-d2">
        <span onclick="w3_close()" class="w3-closenav w3-right w3-xlarge">x</span>
        <br>

        <div class="w3-padding w3-center">
            <img class="w3-circle" src="img_avatar.jpg" alt="avatar" style="width:75%">
        </div>
    </div>
    <br>
    <a href="#">Movies</a>
    <a href="#">Friends</a>
    <a href="#">Messages</a>
</nav>

<header class="w3-theme w3-top bc-header">

    <div class="edit-flex2 bc-top-bar bc-flex">
        <div style="boder-bottom:1px white solid;">
            编辑
        </div>
    </div>

</header>

<!-- container -->
<div class="font-xihei edit-container2">
    <div class="edit-container3 edit-empty-row"></div>
    <div class="edit-container3 common-flex">
        <div class="edit-tag-role edit-col-divider common-flex">
            我是投资人
        </div>
        <div class="edit-tag-role common-flex">
            我是创业者
        </div>
    </div>

    <div class="edit-container3 common-flex">
        <div class="edit-upload edit-col-divider common-flex">
            上传头像
        </div>
        <div class="edit-upload common-flex">
            <img src="1">
        </div>
    </div>

    <div class="edit-container3 common-flex">
        <div class="edit-tag-role edit-col-divider common-flex">
            姓名
        </div>
        <div class="edit-tag-role common-flex">
            职位
        </div>
    </div>

    <div class="edit-container3 common-flex">
        <div class="edit-company common-block">
            <div class="edit-company-row1 common-flex">
                项目/公司名称
            </div>
            <div class="edit-company-row2 common-flex">
                先看人网络科技技术有限公司
            </div>
        </div>
    </div>

    <div class="edit-container3 common-flex">
        <div class="edit-detail common-block">
            <div class="edit-detail-row1 common-flex">
                为了投资人能够快速了解你的项目，请对其进行描述
            </div>
            <div class="edit-detail-row2 common-flex">
                让投资人看到你的脸，也让创业者看到你的脸
            </div>
        </div>
    </div>

    <div class="edit-container3 common-flex">
        <div class="edit-upload edit-col-divider common-flex">
            上传视频
        </div>
        <div class="edit-upload common-flex">
            <img src="1">
        </div>
    </div>


    <!-- edit-filter-start-->

    <div class="filter-container3">
        <div class="bc-row-start font-style1">
            阶段
        </div>
        <div class="filter-tag1">
            <div class="font-style2 filter-tag2">
                全部
            </div>
            <div class="font-style2 filter-tag2">
                种子轮
            </div>
            <div class="font-style2 filter-tag2">
                天使轮
            </div>
            <div class="font-style2 filter-tag2">
                Pre-A 轮
            </div>
        </div>
        <div class="filter-tag1">
            <div class="font-style2 filter-tag2">
                A 轮
            </div>
            <div class="font-style2 filter-tag2">
                B 轮
            </div>
            <div class="font-style2 filter-tag2">
                C 轮
            </div>
            <div class="font-style2 filter-tag2">
                准备上市
            </div>
        </div>
    </div>

    <div class="filter-container3">
        <div class="font-style1">
            资金需求
        </div>
        <div class="filter-tag1">
            <div class="font-style2 filter-tag2">
                全部
            </div>
            <div class="font-style2 filter-tag2">
                十万元级
            </div>
            <div class="font-style2 filter-tag2">
                百万元级
            </div>
            <div class="font-style2 filter-tag2">
                千万元级
            </div>
        </div>
    </div>

    <div class="filter-container3">
        <div class="font-style1">
            行业
        </div>
        <div class="filter-tag1">
            <div class="font-style2 filter-tag2">
                全部
            </div>
            <div class="font-style2 filter-tag2">
                游戏
            </div>
            <div class="font-style2 filter-tag2">
                金融
            </div>
            <div class="font-style2 filter-tag2">
                娱乐
            </div>
        </div>
        <div class="filter-tag1">
            <div class="font-style2 filter-tag2">
                电商
            </div>
            <div class="font-style2 filter-tag2">
                教育
            </div>
            <div class="font-style2 filter-tag2">
                医疗健康
            </div>
            <div class="font-style2 filter-tag2">
                VR/AR
            </div>
        </div>
        <div class="filter-tag1">
            <div class="font-style2 filter-tag2">
                人工智能
            </div>
            <div class="font-style2 filter-tag2">
                广告营销
            </div>
            <div class="font-style2 filter-tag2">
                智能居家
            </div>
            <div class="font-style2 filter-tag2">
                大数据
            </div>
        </div>
        <div class="filter-tag1">
            <div class="font-style2 filter-tag2">
                游戏
            </div>
            <div class="font-style2 filter-tag2">
                汽车
            </div>
            <div class="font-style2 filter-tag2">
                房产
            </div>
            <div class="font-style2 filter-tag2">
                社交
            </div>
        </div>
        <div class="filter-tag1">
            <div class="font-style2 filter-tag2">
                企业业务
            </div>
            <div class="font-style2 filter-tag2">
                智能硬件
            </div>
            <div class="font-style2 filter-tag2">
                本地生活
            </div>
            <div class="font-style2 filter-tag2">
                工具
            </div>
        </div>
        <div class="filter-tag1">
            <div class="font-style2 filter-tag2">
                其他行业
            </div>
        </div>
    </div>

    <!-- edit-filter-end-->


</div>


<footer class="footer">
    <div class="icon-footer2 bc-flex font-xihei">
        <div class="edit-footer-div">
            <div class="edit-footer-row bc-laud-top-unchecked"
                 onclick="tohref('<?php echo base_url("level_2/edit"); ?>')">
                重置
            </div>
        </div>

        <div class="edit-footer-div">
            <div class="edit-footer-row bc-laud-top-checked "
                 onclick="tohref('<?php echo base_url("level_1/home"); ?>')">
                取消
            </div>
        </div>

        <div class="edit-footer-div">
            <div class="edit-footer-row bc-laud-top-unchecked"
                 onclick="tohref('<?php echo base_url("level_1/home"); ?>')">
                确定
            </div>
        </div>
    </div>
</footer>

<script>
    function tohref(url) {
        window.location.href = url;
    }
</script>

</body>


</html>