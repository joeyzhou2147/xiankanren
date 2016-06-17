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
    <meta name="viewport" content="width=device-width,initial-scale=0.85, minimum-scale=0.85, maximum-scale=1, user-scalable=no"/>
    <meta name="description" content="Xiankanren - 简洁、直观、强悍、用户优先的投资服务平台，让创业投资更迅速、简单。">
    <meta name="keywords" content="先看人, 先看脸, 创业, 投资, framework, bootstrap, front-end, frontend, web development">
    <meta name="author" content="Yu Zhou">
    <title>先看人 | 投资服务</title>


    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!--Home page using level 1 index css-->
    <link href="<?php echo base_url('assets/css/L1/index.css'); ?>" rel="stylesheet">
    <!--Home page using level 1 filter css-->
    <link href="<?php echo base_url('assets/css/L2/filter.css'); ?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<link href="./assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

        .font-style2 {
            font-size: 1.6rem;
            color: #727171;
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

        .bc-top-bar {
            width: 90%;
            height: 50px;
        }

        .bc-header {
            height: 50px;
            border-bottom: 1px solid #D92D53;
        }

        .font-xihei {
            font-family: STXihei;
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
            padding-top: 57px;
        }

        .edit-container3 {
            background-color: #ffffff;
            margin: 0px 5px 15px 5px;
            padding-bottom: 10px;
            padding-top: 10px;
            height: 70px;
            width: 364px;
        }

        .edit-container4 {
            background-color: #ffffff;
            margin: 0px 5px 15px 5px;
            padding-bottom: 10px;
            padding-top: 10px;
            height: 86px;
            width: 364px;
        }

        .edit-empty-row {
            height: 50px;
        }

        /*------------ edit end----------*/

        /*---------- footer ------------*/

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
            border-color: #efefef;
        }
        .edit-footer-div{
            width:100px;
            height:50px;
        }
        .bc-laud-top-checked {
            color: #D92D53;
        }

        .bc-laud-top-unchecked {
            color: #ADADAD;
        }

        /*---------- footer end------------*/
        
        /*-------------- Jimmy Edit --------------*/
        .filter-container3 {
            background-color: #ffffff;
            margin: 0px 5px 15px 5px;
            padding-bottom: 10px;
            padding-top: 10px;
            width: 364px;
            display: block;
            align-items: center;
            justify-content: center;
        }
        .font-color1 {
            color: #888888;
        }

        .font-color2 {
            color: #595757;
        }

        .font-color3 {
            color: #dbdcdc;
        }

        .font-style-tag {
            font-size: 19px;
        }

        .font-style-title {
            font-size: 12px;
        }

        .font-style3 {
            font-size: 1.5rem;
        }

        .edit-company {
            width:100%;
            margin-left: 15px;
            margin-right: 15px;
        }

        .edit-company-row1 {
            margin-bottom: 3px;
            justify-content: flex-start;
            -webkit-justify-content: flex-start;
        }

        .edit-company-row2 {
            border-bottom:1px solid #eeeeee;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .edit-company-col1 {
            width: 87%;
        }

        .edit-company-col2 {
            width: 13%;
            display: flex;
        }

        .edit-company-col2-1 {
            width: 50%;
            display: flex;
            justify-content: flex-end;
            -webkit-justify-content: flex-end;
        }

        .edit-company-col2-2 {
            width: 50%;
        }

        .edit-detail {
            width:100%;
            margin-left: 15px;
            margin-right: 15px;
        }

        .edit-detail-row1 {
            margin-bottom: 3px;
            justify-content: flex-start;
            -webkit-justify-content: flex-start;
        }

        .edit-detail-row2 {
            border-bottom:1px solid #eeeeee;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .edit-detail-col1 {
            width: 87%;
        }

        .edit-detail-col2 {
            width: 13%;
            display: flex;
        }

        .edit-detail-col2-1 {
            width: 50%;
            display: flex;
            justify-content: flex-end;
            -webkit-justify-content: flex-end;
        }

        .edit-detail-col2-2 {
            width: 50%;
        }

        .edit-name {
            width:100%;
            margin-left: 15px;
            margin-right: 15px;
        }

        .edit-name-row1 {
            margin-bottom: 3px;
            width: 100%;
            justify-content: flex-start;
            -webkit-justify-content: flex-start;
        }

        .edit-name-row2 {
            border-bottom:1px solid #eeeeee;
            width: 100%;
            justify-content: flex-start;
            -webkit-justify-content: flex-start;
        }

        .edit-name-col1 {
            width: 80%;
        }

        .edit-name-col2 {
            width: 20%;
            display: flex;
            display: -webkit-box; display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */

        }

        .edit-name-col2-1 {
            width: 50%;
            display: flex;
            justify-content: flex-end;
            -webkit-justify-content: flex-end;
        }

        .edit-name-col2-2 {
            width: 50%;
            justify-content: flex-start;
            -webkit-justify-content: flex-start;
        }


        .edit-role {
            width:100%;
            margin-left: 15px;
            margin-right: 15px;
        }

        .edit-role-row1 {
            margin-bottom: 3px;
            width: 100%;
            justify-content: flex-start;
            -webkit-justify-content: flex-start;
        }

        .edit-role-row2 {
            border-bottom:1px solid #eeeeee;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .edit-role-col1 {
            width: 80%;
        }

        .edit-role-col2 {
            width: 20%;
            display: flex;
            display: -webkit-box; display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */

        }

        .edit-role-col2-1 {
            width: 50%;
            display: flex;
            justify-content: flex-end;
            -webkit-justify-content: flex-end;
        }

        .edit-role-col2-2 {
            width: 50%;
        }

        .edit-country {
            width: 15%;
            display: block;
            border-right: 1px solid #eeeeee;
        }

        .edit-country-row1 {
            font-size: 1.4rem;
            display: flex;
            align-items: center;
            justify-content: center;
            display: flex;
            display: -webkit-box; display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */
            -webkit-justify-content: center; /* Safari 6.1+ */
            -webkit-box-align: center; -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center; /* Safari 7.0+ */
        }

        .edit-country-row2 {
            font-size: 1.4rem;
            display: flex;
            align-items: center;
            justify-content: center;
            display: flex;
            display: -webkit-box; display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */
            -webkit-justify-content: center; /* Safari 6.1+ */
            -webkit-box-align: center; -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center; /* Safari 7.0+ */
        }

        .edit-phone {
            font-size: 1.4rem;
            width: 70%;
        }

        .image-picture {
            height: 6.1rem;
            width: auto;
            max-height: 12.8rem;
        }

        .image-play {
            height: 6.5rem;
            width: auto;
        }

        .image-upload {
            height: 2.5rem;
            width: auto;
        }

        .filter-tag3 {
            border: 1px solid #d82d53;
            border-radius: 4px;
            width: 7.5rem;
            height: 2.1rem;
            margin-right: 6px;
            margin-left: 6px;
            display: inline-block;
            /*margin-top: 10px;*/
            text-align: center;
            margin-top: 1.1rem;
            background-color: #d82d53 ;
        }

        .image-edit {
            heigh: 2rem;
            width: auto;
        }

        .display-flex {
            display: flex;
            display: -webkit-box; display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */
        }

        .tag-padding {
            padding-left: 1rem;
            style="font-size: 1.9rem
        }

    </style>

</head>

<body style="max-width:100rem;height: 150rem;">

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
            <div class="bc-flex">
            </div>

            <div class="bc-flex" onclick="toHref('<?php echo base_url('level_1/me'); ?>')">
                编辑
            </div>

        </div>
    </div>

</header>

<!-- container -->
<div class="font-xihei edit-container2">
    <div class="edit-container3 common-flex" style="height: 5rem;">
        <div class="edit-tag-role edit-col-divider common-flex font-color1 font-style-tag">
            我是投资人
        </div>
        <div class="edit-tag-role common-flex font-style-tag" style="color: #d82d53">
            我是创业者
        </div>
    </div>

    <div class="edit-container4 common-flex font-color1">
        <div class="edit-upload edit-col-divider common-flex font-style-tag">
            <div class="bc-flex" style="width: 3rem; padding-bottom: 6px; margin-right: 5px;">
                <img class="bc-flex image-upload" src="<?php echo base_url('assets/images/me_upload01.png'); ?>">
            </div>
            <div class="bc-flex">
                上传头像
            </div>

        </div>
        <div class="edit-upload common-flex">
            <img class="image-picture" src="<?php echo base_url('assets/images/default_profile.png'); ?>">
        </div>
    </div>

    <div class="edit-container3 common-flex">


        <div class="edit-tag-role edit-col-divider common-flex font-color1">
            <div class="edit-name common-block">
                <div class="edit-name-row1 common-flex font-style-title">
                    姓名
                </div>
                <div class="edit-name-row2 common-flex font-color2">
                    <div class="edit-name-col1 font-style3">
                        牛肉哥
                    </div>
                    <div class="edit-name-col2 font-style-title display-flex">
                        <div class="edit-name-col2-1 font-color3 display-flex">
                            3
                        </div>
                        <div class="edit-name-col2-2 font-color3">
                            /4
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="edit-tag-role common-flex font-color1">
            <div class="edit-role common-block">
                <div class="edit-role-row1 common-flex font-style-title">
                    职位
                </div>
                <div class="edit-role-row2 common-flex font-color2">
                    <div class="edit-role-col1  font-style3">
                        创始合伙人
                    </div>
                    <div class="edit-role-col2 font-style-title display-flex">
                        <div class="edit-role-col2-1 font-color3 display-flex">
                            5
                        </div>
                        <div class="edit-role-col2-2 font-color3">
                            /5
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="edit-container3 common-flex">
        <div class="edit-company common-block">
            <div class="edit-company-row1 common-flex font-color1 font-style-title">
                项目/公司名称
            </div>
            <div class="edit-company-row2 common-flex font-color2">
                <div class="edit-company-col1  font-style3">
                    先看人网络科技技术有限公司
                </div>
                <div class="edit-company-col2 font-style-title display-flex">
                    <div class="edit-company-col2-1 font-color3 display-flex">
                        13
                    </div>
                    <div class="edit-company-col2-2 font-color3">
                        /15
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="edit-container3 common-flex">
        <div class="edit-detail common-block">
            <div class="edit-detail-row1 common-flex font-color1 font-style-title">
                为了投资人能够快速了解你的项目，请对其进行描述
            </div>
            <div class="edit-detail-row2 common-flex font-color2">
                <div class="edit-detail-col1  font-style3">
                    让投资人看到你的脸，也让创业者看到你的脸
                </div>
                <div class="edit-detail-col2 font-style-title display-flex">
                    <div class="edit-detail-col2-1 font-color3 display-flex">
                        20
                    </div>
                    <div class="edit-detail-col2-2 font-color3">
                        /20
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="edit-container4 common-flex">
        <div class="edit-upload edit-col-divider common-flex font-color1 font-style-tag">
            <div class="bc-flex" style="width: 2.5rem; margin-right: 5px;">
                <img class="bc-flex image-upload" src="<?php echo base_url('assets/images/me_upload01.png'); ?>">
            </div>
            <div class="bc-flex" style="display: block; padding-left: 3px">
                <div class="bc-flex">
                    上传视频
                </div>
                <div class="bc-flex" style="font-size: 12px">
                    (长度不超过30秒)
                </div>
            </div>
        </div>
        <div class="edit-upload common-flex">
            <img class="image-play" src="<?php echo base_url('assets/images/default_video.png'); ?>">
        </div>
    </div>

    <div class="edit-container3 common-flex">


        <div class="edit-country common-flex font-color1" style="color: #d82d53">
            <div class="edit-country-row1">
                中国
            </div>
            <div class="edit-country-row2">
                (+86)
            </div>
        </div>

        <div class="edit-country common-flex font-color1">
            <div class="edit-country-row1">
                美国
            </div>
            <div class="edit-country-row2">
                (+1)
            </div>

        </div>

        <div class="edit-phone common-flex font-color1">
            <div class="edit-role common-block">
                <div class="edit-role-row1 common-flex font-style-title">
                    电话
                </div>
                <div class="edit-role-row2 common-flex font-color2">
                    <div class="edit-role-col1  font-style3">
                        1234-12345678-123
                    </div>
                    <div class="edit-role-col2 font-style-title">
                        <div class="edit-role-col2-1 font-color3 display-flex">
                            18
                        </div>
                        <div class="edit-role-col2-2 font-color3">
                            /18
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="edit-container3 common-flex">
        <div class="edit-detail common-block">
            <div class="edit-detail-row1 common-flex font-color1 font-style-title">
                微信
            </div>
            <div class="edit-detail-row2 common-flex font-color2">
                <div class="edit-detail-col1  font-style3">
                    asdfjkjsd7654skl
                </div>
                <div class="edit-detail-col2 font-style-title display-flex">
                    <div class="edit-detail-col2-1 font-color3 display-flex">
                        15
                    </div>
                    <div class="edit-detail-col2-2 font-color3">
                        /35
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="edit-container3 common-flex">
        <div class="edit-detail common-block">
            <div class="edit-detail-row1 common-flex font-color1 font-style-title">
                邮箱
            </div>
            <div class="edit-detail-row2 common-flex font-color2">
                <div class="edit-detail-col1 font-style3">
                    xiankanren@xiankanrenapp.com
                </div>
                <div class="edit-detail-col2 font-style-title display-flex">
                    <div class="edit-detail-col2-1 font-color3 display-flex">
                        28
                    </div>
                    <div class="edit-detail-col2-2 font-color3">
                        /35
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- edit-filter-start-->

    <div class="filter-container3">
        <div class="bc-row-start font-style1 font-color1 tag-padding">
            阶段
        </div>
        <div class="filter-tag1">
            <div class="font-style2 filter-tag3" style="color: #FFFFFF">
                全 部
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
                C轮之后
            </div>
        </div>
    </div>

    <div class="filter-container3">
        <div class="bc-row-start font-style1 font-color1 tag-padding">
            资金需求
        </div>
        <div class="filter-tag1">
            <div class="font-style2 filter-tag3" style="color: #FFFFFF">
                全 部
            </div>
            <div class="font-style2 filter-tag2">
                十万级
            </div>
            <div class="font-style2 filter-tag2">
                百万级
            </div>
            <div class="font-style2 filter-tag2">
                千万级
            </div>
        </div>
    </div>

    <div class="filter-container3">
        <div class="bc-row-start font-style1 font-color1 tag-padding">
            行业
        </div>
        <div class="filter-tag1">
            <div class="font-style2 filter-tag3" style="color: #FFFFFF">
                全 部
            </div>
            <div class="font-style2 filter-tag2">
                VR/AR
            </div>
            <div class="font-style2 filter-tag2">
                O2O
            </div>
            <div class="font-style2 filter-tag2">
                电 商
            </div>
        </div>
        <div class="filter-tag1">
            <div class="font-style2 filter-tag2">
                人工智能
            </div>
            <div class="font-style2 filter-tag2">
                教 育
            </div>
            <div class="font-style2 filter-tag2">
                医疗健康
            </div>
            <div class="font-style2 filter-tag2">
                金 融
            </div>
        </div>
        <div class="filter-tag1">
            <div class="font-style2 filter-tag2">
                旅 游
            </div>
            <div class="font-style2 filter-tag2">
                汽 车
            </div>
            <div class="font-style2 filter-tag2">
                房 产
            </div>
            <div class="font-style2 filter-tag2">
                社 交
            </div>
        </div>
        <div class="filter-tag1">
            <div class="font-style2 filter-tag2">
                游 戏
            </div>
            <div class="font-style2 filter-tag2">
                娱 乐
            </div>
            <div class="font-style2 filter-tag2">
                工 具
            </div>
            <div class="font-style2 filter-tag2">
                大数据
            </div>
        </div>
        <div class="filter-tag1">
            <div class="font-style2 filter-tag2">
                企业服务
            </div>
            <div class="font-style2 filter-tag2">
                智能硬件
            </div>
            <div class="font-style2 filter-tag2">
                本地生活
            </div>
            <div class="font-style2 filter-tag2">
                广告营销
            </div>
        </div>
        <div class="filter-tag1">
            <div class="font-style2 filter-tag2">
                智能居家
            </div>
            <div class="font-style2 filter-tag2">
                新媒体
            </div>
            <div class="font-style2 filter-tag2">
                音 乐
            </div>
            <div class="font-style2 filter-tag2">
                其 它
            </div>
        </div>
    </div>




    <div class="filter-container3">
        <div class="bc-row-start font-style1 font-color1 tag-padding">
            自定义
        </div>
        <div class="filter-tag1">
            <div class="font-style2 filter-tag3" style="color: #FFFFFF">
                80后
            </div>
            <div class="font-style2 filter-tag3" style="color: #FFFFFF">
                牛肉哥
            </div>
            <div class="font-style2 filter-tag3" style="color: #FFFFFF">
                独角兽
            </div>
            <div class="font-style2 filter-tag2">
                +添加
            </div>
        </div>
    </div>

    <!-- edit-filter-end-->


</div>


<footer class="footer">
    <div class="container">
        <div class="common-flex font-xihei font-color1" style="">
            <div class="edit-footer-div common-flex" onclick="toHref('<?php echo base_url('level_2/edit'); ?>')">
                <div class="common-flex" style="font-size: 1.8rem;">重置</div>
            </div>
            <div class="edit-footer-div common-flex" onclick="toHref('<?php echo base_url('level_1/me'); ?>')">
                <div class="common-flex" style="font-size: 1.8rem;">取消</div>
            </div>
            <div class="edit-footer-div common-flex" onclick="toHref('<?php echo base_url('level_1/me'); ?>')">
                <div class="common-flex" style="font-size: 1.8rem;">确定</div>
            </div>
        </div>

    </div>
</footer>

<script>
    function toHref(url) {
        window.location.href = url;
    }
</script>

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="<?php echo base_url('assets/js/vendor/jquery.min.js'); ?>"><\/script>')
</script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo base_url('assets/js/ie10-viewport-bug-workaround.js'); ?>"></script>
</body>


</html>