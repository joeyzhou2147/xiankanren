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
    <link rel="stylesheet" href="./ionic/css/ionicons.css">
    <link rel="stylesheet" href="./ionic/css/ionicons.min.css">
    <title>先看人 | 投资服务</title>


    <style>
        /* w3 css start  */

        .w3-theme-l5 {
            color: #000 !important;
            background-color: #fef4f3 !important
        }

        .w3-theme-l4 {
            color: #000 !important;
            background-color: #fdd9d6 !important
        }

        .w3-theme-l3 {
            color: #000 !important;
            background-color: #fbb3ae !important
        }

        .w3-theme-l2 {
            color: #000 !important;
            background-color: #f98d85 !important
        }

        .w3-theme-l1 {
            color: #fff !important;
            background-color: #f6665c !important
        }

        .w3-theme-d1 {
            color: #fff !important;
            background-color: #f32617 !important
        }

        .w3-theme-d2 {
            color: #fff !important;
            background-color: #e11a0c !important
        }

        .w3-theme-d3 {
            color: #fff !important;
            background-color: #c5170a !important
        }

        .w3-theme-d4 {
            color: #fff !important;
            background-color: #a91409 !important
        }

        .w3-theme-d5 {
            color: #fff !important;
            background-color: #8d1007 !important
        }

        .w3-theme-light {
            color: #000 !important;
            background-color: #fef4f3 !important
        }

        .w3-theme-dark {
            color: #fff !important;
            background-color: #8d1007 !important
        }

        .w3-theme-action {
            color: #fff !important;
            background-color: #8d1007 !important
        }

        .w3-theme {
            /*color: #fff !important;
            background-color: #f44336 !important*/
            background-color: #FFFFFF;
            color: #9B9A9A;
            font-size: 20px;
            font-weight: 600;
        }

        .w3-text-theme {
            color: #f44336 !important
        }

        .w3-theme-border {
            border-color: #f44336 !important
        }

        .w3-hover-theme:hover {
            color: #fff !important;
            background-color: #f44336 !important
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

        .half-width {
            width: 50%;
        }
        /*header end*/
        /*footer start*/

        .icon-footer {
            font-size: 8px;
            letter-spacing: 0px;
            text-align: center;
            border-top: 1px #D92D53 solid;
        }

        .icon-footer-div {
            display: inline-block;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            width: 200px;
            height: 60px;
        }

        .icon-footer-row1 {
            height: 42px;
        }

        .icon-footer-row2 {
            height: 10px;
        }

        .icon-footer-index {
            height: 32px;
        }

        .icon-footer-search {
            height: 32px;
        }

        .icon-footer-people {
            height: 36px;
        }

        .icon-footer-me {
            height: 32px;
        }
        /*footer end*/

        .bc-top {
            background-color: #FFFFFF;
        }

        .icon-row-two-icon {
            font-size: 46px;
            color: black;
            cursor: pointer;
            width: 60px;
            padding-left: 18px;
            padding-right: 18px;
        }

        .font-xihei {
            font-family: STXihei;
        }

        .bc-container {
            display: inline-block;
            margin-top: 45px;
            width: 100%;
        }

        .bc-row-one-div2 {
            width: 28px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bc-row-one-div3 {
            width: 28px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bc-row-two {
            width: 100%;
            display: inline-block;
            text-align: center;
        }

        .bc-row-two-border {
            width: 100%;
            display: flex;
            margin: -59px 0px 0px 0px;
            justify-content: center;
        }

        .bc-row-two-border-item {
            z-index: 99;
            display: flex;
            margin: 0px 12px 0px 11px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 1px black solid;
        }

        .image-cropper {
            width: 120px;
            height: 120px;
            position: relative;
            overflow: hidden;
            border-radius: 50%;
            border: 2px lightgray solid;
        }

        .profile-image {
            width: auto;
            max-height: 170px;
            /*change image size here*/
        }

        .card-row-one {
            margin: 10px 5px 5px 5px;
        }

        .card-row-two {
            margin: 0px 0px 0px 0px;
        }

        .card-row-three {
            margin: 0px 0px 0px 10px;
        }

        .card-row-three-item {
            margin-right: 10px;
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
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)!important;
            }
        }
        /* ----------- iPhone 4 and 4S ----------- */
        /* ----------- iPhone 5 and 5S ----------- */

        @media only screen and (min-width: 360px) {}

        @media only screen and (min-height: 660px) {
            .bc-row-one {
                display: flex;
                width: 100%;
                height: 440px;
                margin-top: 20px;
            }
            .bc-row-one-div1-card {
                width: 335px;
                height: 462px;
                border-radius: 5px;
                border: 1px solid black;
                display: inline-block;
                align-items: center;
                justify-content: center;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)!important;
            }
        }
        /* ----------- iPhone 5 and 5S ----------- */
        /* ----------- iPhone 6 and 6S ----------- */

        @media only screen and (min-width: 411px) {
            .bc-row-one-div1 {
                width: 400px;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .bc-row-one-div1-card {
                width: 354px;
                height: 462px;
                border-radius: 5px;
                border: 1px solid black;
                display: inline-block;
                align-items: center;
                justify-content: center;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)!important;
                margin-top: -20px;
            }
        }

        @media only screen and (min-height: 720px) {
            .bc-row-one {
                display: flex;
                justify-content: center;
                width: 100%;
                height: 515px;
            }
        }

        @media only screen and (min-height: 770px) {
            .bc-row-one {
                display: flex;
                width: 100%;
                height: 550px;
            }
        }

        @media only screen and (min-height: 1024px) {
            .bc-row-one {
                display: flex;
                width: 100%;
                height: 700px;
            }
        }
        /* ----------- iPhone 6 and 6S ----------- */
        /* ----------- iPhone 4 and 4S ----------- */
        /* Portrait and Landscape */

        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {
            letter-spacing: 4px;
        }
        /* Portrait */

        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait) {
            letter-spacing: 4px;
        }
        /* Landscape */

        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {
            letter-spacing: 4px;
        }
        /* ----------- iPhone 5 and 5S ----------- */
        /* Portrait and Landscape */

        @media only screen and (min-device-width: 320px) and (max-device-width: 568px) and (-webkit-min-device-pixel-ratio: 2) {
            letter-spacing: 4px;
        }
        /* Portrait */

        @media only screen and (min-device-width: 320px) and (max-device-width: 568px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait) {
            letter-spacing: 4px;
        }
        /* Landscape */

        @media only screen and (min-device-width: 320px) and (max-device-width: 568px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {
            letter-spacing: 4px;
        }
        /* ----------- iPhone 6 ----------- */
        /* Portrait and Landscape */

        @media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (-webkit-min-device-pixel-ratio: 2) {
            letter-spacing: 4px;
        }
        /* Portrait */

        @media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait) {
            letter-spacing: 4px;
        }
        /* Landscape */

        @media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {
            letter-spacing: 4px;
        }
        /* ----------- iPhone 6+ ----------- */
        /* Portrait and Landscape */

        @media only screen and (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) {
            letter-spacing: 14px;
        }
        /* Portrait */

        @media only screen and (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: portrait) {
            letter-spacing: 14px;
        }
        /* Landscape */

        @media only screen and (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) and (orientation: landscape) {
            letter-spacing: 14px;
        }


        /* ----------- header start --------------*/
        .bc-flex2{
            width:100%;
            height:50px;
        }

        /*------------ container start----------*/
        .bc-container2{
            margin-top:50px;
            width:100%；
        }

        .font-style1{
            font-size:18px;
            padding-left:20px;
            color:#D92D53;
            align-items: flex-end;
            justify-content: flex-start;
            padding-top: 20px;
            padding-bottom: 3px;
            width: 100%;
        }

        .bc-tag1{
            margin-right: 20px;
            margin-left: 20px;
            width: 100%;
        }

        .font-style2{
            font-size:13px;
            color: black;
        }

        .bc-tag2{
            border: 1px solid black;
            border-radius: 5px;
            width: 60px;
            height:20px;
            margin-right: 10px;
            display: inline-block;
            margin-top: 10px;
            text-align: center;
        }

        /*---------- footer ------------*/

        .footer1{
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: #FFFFFF;
            font-size: 18px;
        }

        .footer2{
            display: inline-block;
            justify-content: center;
            align-items: center;

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



    </style>

</head>

<body style="max-width:1000px">

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

    <div class="bc-flex2 bc-top-bar bc-flex">
        <div style="boder-bottom:1px white solid;">
            筛选
        </div>
    </div>

</header>

<!-- container -->
<div class="font-xihei bc-container2">
    <div class="bc-row-start font-style1">
        阶段
    </div>
    <div class="bc-tag1">
        <div class="font-style2 bc-tag2">
            全部
        </div>
        <div class="font-style2 bc-tag2">
            种子轮
        </div>
        <div class="font-style2 bc-tag2">
            天使轮
        </div>
        <div class="font-style2 bc-tag2">
            Pre-A 轮
        </div>
    </div>
    <div class="bc-tag1">
        <div class="font-style2 bc-tag2">
            A 轮
        </div>
        <div class="font-style2 bc-tag2">
            B 轮
        </div>
        <div class="font-style2 bc-tag2">
            C 轮
        </div>
        <div class="font-style2 bc-tag2">
            准备上市
        </div>
    </div>

    <div class="font-style1">
        资金需求
    </div>
    <div class="bc-tag1">
        <div class="font-style2 bc-tag2">
            全部
        </div>
        <div class="font-style2 bc-tag2">
            十万元级
        </div>
        <div class="font-style2 bc-tag2">
            百万元级
        </div>
        <div class="font-style2 bc-tag2">
            千万元级
        </div>
    </div>

    <div class="font-style1">
        行业
    </div>
    <div class="bc-tag1">
        <div class="font-style2 bc-tag2">
            全部
        </div>
        <div class="font-style2 bc-tag2">
            游戏
        </div>
        <div class="font-style2 bc-tag2">
            金融
        </div>
        <div class="font-style2 bc-tag2">
            娱乐
        </div>
    </div>
    <div class="bc-tag1">
        <div class="font-style2 bc-tag2">
            电商
        </div>
        <div class="font-style2 bc-tag2">
            教育
        </div>
        <div class="font-style2 bc-tag2">
            医疗健康
        </div>
        <div class="font-style2 bc-tag2">
            VR/AR
        </div>
    </div>
    <div class="bc-tag1">
        <div class="font-style2 bc-tag2">
            人工智能
        </div>
        <div class="font-style2 bc-tag2">
            广告营销
        </div>
        <div class="font-style2 bc-tag2">
            智能居家
        </div>
        <div class="font-style2 bc-tag2">
            大数据
        </div>
    </div>
    <div class="bc-tag1">
        <div class="font-style2 bc-tag2">
            游戏
        </div>
        <div class="font-style2 bc-tag2">
            汽车
        </div>
        <div class="font-style2 bc-tag2">
            房产
        </div>
        <div class="font-style2 bc-tag2">
            社交
        </div>
    </div>
    <div class="bc-tag1">
        <div class="font-style2 bc-tag2">
            企业业务
        </div>
        <div class="font-style2 bc-tag2">
            智能硬件
        </div>
        <div class="font-style2 bc-tag2">
            本地生活
        </div>
        <div class="font-style2 bc-tag2">
            工具
        </div>
    </div>
    <div class="bc-tag1">
        <div class="font-style2 bc-tag2">
            其他行业
        </div>
    </div>
</div>




<footer class="footer1 icon-footer2 bc-flex font-xihei">

    <div class="icon-footer-div">
        <div class="icon-footer-row2"></div>
    </div>

    <div class="icon-footer-div">
        <div class="icon-footer-row2 bc-laud-top-checked ">开始</div>
    </div>

    <div class="icon-footer-div">
        <div class="icon-footer-row2 bc-laud-top-unchecked ">取消</div>
    </div>

    <div class="icon-footer-div">
        <div class="icon-footer-row2"></div>
    </div>

</footer>

<script>
    function w3_open() {
        var x = document.getElementsByClassName("w3-sidenav")[0];
        x.style.display = "block";
    }
    function w3_close() {
        var x = document.getElementsByClassName("w3-sidenav")[0];
        x.style.display = "none";
    }
</script>

</body>


</html>