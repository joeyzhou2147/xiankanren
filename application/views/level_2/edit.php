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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        .w3-theme {
            /*color: #fff !important;
            background-color: #f44336 !important*/
            background-color: #FFFFFF;
            color: #9B9A9A;
            font-size: 20px;
        }

        /* w3 css end  */
        /*header start*/

        .bc-top-bar {
            width: 90%;
            height: 3.9rem;
        }

        .bc-header {
            height: 3.9rem;
            border-bottom: 1px solid rgb(244, 203, 215);
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
            height: 3.9rem;
        }

        .edit-container2 {
            width: 100%;
            height: 100%;
            background-color: #EFEFEF;
            padding-top: 5rem;
        }

        .edit-container3 {
            background-color: #ffffff;
            margin: 0px 1.34% 4% 1.34%;
            padding-bottom: 2.67%;
            padding-top: 2.67%;
            height: 7rem;
            width: 97.07%;
        }

        .edit-container4 {
            background-color: #ffffff;
            margin: 0px 1.34% 4% 1.34%;
            padding-bottom: 2.67%;
            padding-top: 2.67%;
            height: 8.6rem;
            width: 97.07%;
        }

        /*------------ edit end----------*/

        /*---------- footer ------------*/

        .edit-tag-role {
            height: 4.8rem;
            cursor: pointer;
            width: 100%;
        }

        .edit-upload {
            height: 8rem;
            cursor: pointer;
            width: 100%;
        }

        .edit-col-divider {
            border-right: 1px solid #808080;
            border-color: #efefef;
        }

        .edit-footer-div {
            width: 100px;
            height: 50px;
        }

        /*---------- footer end------------*/
        
        /*-------------- Jimmy Edit --------------*/
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
            width: 100%;
            margin-left: 15px;
            margin-right: 15px;
        }

        .edit-company-row1 {
            margin-bottom: 3px;
            justify-content: flex-start;
            -webkit-justify-content: flex-start;
        }

        .edit-company-row2 {
            border-bottom: 1px solid #eeeeee;
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
            width: 100%;
            margin-left: 15px;
            margin-right: 15px;
        }

        .edit-detail-row1 {
            margin-bottom: 3px;
            justify-content: flex-start;
            -webkit-justify-content: flex-start;
        }

        .edit-detail-row2 {
            border-bottom: 1px solid #eeeeee;
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
            width: 100%;
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
            border-bottom: 1px solid #eeeeee;
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
            display: -webkit-box;
            display: -moz-box;
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
            width: 100%;
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
            border-bottom: 1px solid #eeeeee;
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
            display: -webkit-box;
            display: -moz-box;
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
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */
            -webkit-justify-content: center; /* Safari 6.1+ */
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center; /* Safari 7.0+ */
        }

        .edit-country-row2 {
            font-size: 1.4rem;
            display: flex;
            align-items: center;
            justify-content: center;
            display: flex;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */
            -webkit-justify-content: center; /* Safari 6.1+ */
            -webkit-box-align: center;
            -moz-box-align: center;
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
            width: 20.605%;
            margin-right: 1.65%;
            margin-left: 1.65%;
            display: inline-block;
            /*margin-top: 10px;*/
            text-align: center;
            margin-top: 3.022%;
            background-color: #d82d53;
        }

        .display-flex {
            display: flex;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */
        }

        .tag-padding {
            padding-left: 1rem;
            style = "font-size: 1.9rem
        }

        .hidden-input {
            display: none;
        }

        .user_content_input {
            border: hidden;
            width: 100%;
        }

        .user_content_input::-webkit-input-placeholder {
            color: inherit;
        }

        .user_content_input:-moz-placeholder {
        }

        .user_content_input::-moz-placeholder {
        }

        /* for the future */
        .user_content_input:-ms-input-placeholder {
        }
    </style>

</head>

<body style="max-width:100rem;height: 150rem;">


<header class="w3-theme w3-top bc-header">

    <div class="edit-flex2 bc-top-bar bc-flex">
        <div class="common-flex filter-top-bar">
            <div class="common-flex font-xihei filter-top-filter">
            </div>
            <div class="filter-top-title common-flex">
                <div class="filter-top-half common-flex font-xihei">
                    <div class="common-flex" style="">
                        <img class="filter-top-filter-image" src="<?php echo base_url("assets/images/edit.png"); ?>">
                    </div>
                    <div class="filter-top-title-unchecked common-flex" style="padding-left: 1rem;">编辑</div>
                </div>
            </div>
            <div class="common-flex font-xihei filter-top-filter">
            </div>
        </div>
    </div>

</header>

<!-- container -->
<div class="font-xihei edit-container2">
    <div class="edit-container3 common-flex" style="height: 5rem;">
        <input id="user_type" type="checkbox" name="user_type" value="创业者" class="hidden-input">

        <div id="user_type_tz" class="edit-tag-role edit-col-divider common-flex font-color1 font-style-tag"
             onclick="userTypeChoose('user_type_tz', 'user_type_cy', '投资人');">我是投资人
        </div>
        <div id="user_type_cy" class="edit-tag-role common-flex font-style-tag" style="color: #d82d53"
             onclick="userTypeChoose('user_type_cy', 'user_type_tz', '创业者');">我是创业者
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


        <div class="edit-tag-role edit-col-divider common-flex font-color1" id="user_name">
            <div class="edit-name common-block">
                <div class="edit-name-row1 common-flex font-style-title">
                    姓名
                </div>
                <div class="edit-name-row2 common-flex font-color2">
                    <div class="edit-name-col1 font-style3">
                        <input id="user_name_input" class="user_content_input" name="user_name" placeholder="牛肉哥">
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
        <div class="edit-tag-role common-flex font-color1" id="user_role">
            <div class="edit-role common-block">
                <div class="edit-role-row1 common-flex font-style-title">
                    职位
                </div>
                <div class="edit-role-row2 common-flex font-color2">
                    <div class="edit-role-col1  font-style3">
                        <input id="user_role_input" class="user_content_input" name="user_role" placeholder="创始合伙人">
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

    <div class="edit-container3 common-flex" id="user_company">
        <div class="edit-company common-block">
            <div class="edit-company-row1 common-flex font-color1 font-style-title">
                项目/公司名称
            </div>
            <div class="edit-company-row2 common-flex font-color2">
                <div class="edit-company-col1  font-style3">
                    <input id="user_company_input" class="user_content_input" name="user_company"
                           placeholder="先看人网络科技技术有限公司">
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

    <div class="edit-container3 common-flex" id="user_detail">
        <div class="edit-detail common-block">
            <div class="edit-detail-row1 common-flex font-color1 font-style-title">
                为了投资人能够快速了解你的项目，请对其进行描述
            </div>
            <div class="edit-detail-row2 common-flex font-color2">
                <div class="edit-detail-col1  font-style3">
                    <input id="user_detail_input" class="user_content_input" name="user_detail"
                           placeholder="让投资人看到你的脸，也让创业者看到你的脸">
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

        <div class="edit-phone common-flex font-color1" id="user_contact">
            <div class="edit-role common-block">
                <div class="edit-role-row1 common-flex font-style-title">
                    电话
                </div>
                <div class="edit-role-row2 common-flex font-color2">
                    <div class="edit-role-col1  font-style3">
                        <input id="user_contact_input" class="user_content_input" name="user_contact"
                               placeholder="1234-12345678-123">
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


    <div class="edit-container3 common-flex" id="user_wx">
        <div class="edit-detail common-block">
            <div class="edit-detail-row1 common-flex font-color1 font-style-title">
                微信
            </div>
            <div class="edit-detail-row2 common-flex font-color2">
                <div class="edit-detail-col1  font-style3">
                    <input id="user_wx_input" class="user_content_input" name="user_wx" placeholder="asdfjkjsd7654skl">
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

    <div class="edit-container3 common-flex" id="user_email">
        <div class="edit-detail common-block">
            <div class="edit-detail-row1 common-flex font-color1 font-style-title">
                邮箱
            </div>
            <div class="edit-detail-row2 common-flex font-color2">
                <div class="edit-detail-col1 font-style3">
                    <input id="user_email_input" class="user_content_input" name="user_email"
                           placeholder="xiankanren@xiankanrenapp.com">
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

    <div id="edit-agreement-div" class="edit-agreement-div bc-flex" onclick="backgroundch()">
        <div class="edit-agreement-col1">
            我已阅读并同意
        </div>
        <div class="edit-agreement-col2">
            《先看人用户协议》
        </div>
    </div>

    <!-- edit-filter-end-->


</div>
<!--用户协议开始-->
<div class="con-bg-background bc-flex" id="con-bg-background" onclick="returnback()">
    <div class="edit-agreement" id="user-agreement" style="overflow: auto;font-family: STxihei;">用户协议
        特别提示
        先看人网络科技（上海）有限公司（以下简称“先看人”）在此特别提醒您（用户）在注册成为用户之前，请认真阅读本《用户协议》（以下简称“协议”），确保您充分理解本协议中各条款。请您审慎阅读并选择接受或不接受本协议。除非您接受本协议所有条款，否则您无权注册、登录或使用本协议所涉服务。您的注册、登录、使用等行为将视为对本协议的接受，并同意接受本协议各项条款的约束。
        本协议约定先看人与用户之间关于“先看人”软件服务（以下简称“服务”）的权利义务。“用户”是指注册、登录、使用本服务的个人。本协议可由先看人随时更新，更新后的协议条款一旦公布即代替原来的协议条款，恕不再另行通知，用户可在本网站查阅最新版协议条款。在先看人修改协议条款后，如果用户不接受修改后的条款，请立即停止使用先看人提供的服务，用户继续使用先看人提供的服务将被视为接受修改后的协议。
        一、帐号注册
        1、用户在使用本服务前需要注册一个“先看人”帐号。“先看人”帐号应当使用手机号码或微信号绑定注册，请用户使用尚未与“先看人”帐号绑定的手机号码。先看人可以根据用户需求或产品需要对帐号注册和绑定的方式进行变更，而无须事先通知用户。
        2、“先看人”系创业投资服务软件产品，用户注册时应当授权先看人个人基本信息和/或微信账号基本信息方可成功注册“先看人”帐号。故用户完成注册即表明用户同意先看人提取、公开及使用用户的上述信息。
        3、鉴于“先看人”帐号的绑定注册方式，您同意先看人在注册时将使用您提供的手机号码及/或自动提取您的手机号码及自动提取您的手机设备识别码等信息用于注册。
        4、在用户注册及使用本服务时，先看人需要搜集能识别用户身份的个人信息以便先看人可以在必要时联系用户，或为用户提供更好的使用体验。先看人搜集的信息包括但不限于用户的姓名、性别、电话、所属行业、创业项目、融资需求、机构投资人机构相关信息；先看人同意对这些信息的使用将受限于第三条用户个人隐私信息保护的约束。
        二、服务内容
        1、本服务的具体内容由先看人根据实际情况提供，包括但不限于授权用户通过其帐号查看创业者视频、发布留言、关注他人。先看人可以对其提供的服务予以变更，且先看人提供的服务内容可能随时变更；用户将会收到先看人关于服务变更的通知。
        2、先看人提供的服务包含免费服务与收费服务。用户可以通过付费方式购买收费服务，具体方式为：用户通过网上银行、微信支付、支付宝或其他“先看人”平台提供的付费途径支付一定数额的人民币购买“先看人”平台的服务，然后根据先看人公布的资费标准以货币购买用户欲使用的收费服务，从而获得收费服务使用权限。对于收费服务，先看人会在用户使用之前给予用户明确的提示，只有用户根据提示确认其同意按照前述支付方式支付费用并完成了支付行为，用户才能使用该等收费服务。支付行为的完成以银行或第三方支付平台生成“支付已完成”的确认通知为准。
        三、用户个人隐私信息保护
        1、用户在注册帐号或使用本服务的过程中，可能需要填写或提交一些必要的信息，如法律法规、规章规范性文件（以下称“法律法规”）规定的需要填写的身份信息。如用户提交的信息不完整或不符合法律法规的规定，则用户可能无法使用本服务或在使用本服务的过程中受到限制。
        2、个人隐私信息是指涉及用户个人身份或个人隐私的信息，比如，用户身份证号、手机号码、手机设备识别码、IP地址。非个人隐私信息是指用户对本服务的操作状态以及使用习惯等明确且客观反映在先看人服务器端的基本记录信息、个人隐私信息范围外的其它普通信息，以及用户同意公开的上述隐私信息。
        3、尊重用户个人隐私信息的私有性是先看人的一贯制度，先看人将采取技术措施和其他必要措施，确保用户个人隐私信息安全，防止在本服务中收集的用户个人隐私信息泄露、毁损或丢失。在发生前述情形或者先看人发现存在发生前述情形的可能时，将及时采取补救措施。
        4、先看人未经用户同意不向任何第三方公开、 透露用户个人隐私信息。但以下特定情形除外：
        (1) 先看人根据法律法规规定或有权机关的指示提供用户的个人隐私信息；
        (2) 由于用户将其用户密码告知他人或与他人共享注册帐户与密码，由此导致的任何个人信息的泄漏，或其他非因先看人原因导致的个人隐私信息的泄露；
        (3) 用户自行向第三方公开其个人隐私信息；
        (4) 用户与先看人及合作单位之间就用户个人隐私信息的使用公开达成约定，先看人因此向合作单位公开用户个人隐私信息；
        (5) 任何由于黑客攻击、电脑病毒侵入及其他不可抗力事件导致用户个人隐私信息的泄露。
        5、用户同意先看人可在以下事项中使用用户的个人隐私信息：
        (1) 先看人向用户及时发送重要通知，如软件更新、本协议条款的变更；
        (2) 先看人内部进行审计、数据分析和研究等，以改进先看人的产品、服务和与用户之间的沟通；
        (3) 依本协议约定，先看人管理、审查用户信息及进行处理措施；
        (4) 适用法律法规规定的其他事项。
        除上述事项外，如未取得用户事先同意，先看人不会将用户个人隐私信息使用于任何其他用途。
        6、用户确认，其自行录制的视频为非个人隐私信息，且先看人享有用户上传之视频的版权。先看人有权无偿使用视频并向其他用户公开。用户同意，未经先看人同意，任何第三方不得使用用户上传至先看人平台的视频。用户成功注册“先看人”帐号视为同意上述不版权归属约定，先看人有权提取、公开及使用用户的视频版权和信息。尽管如此，如用户需要终止向其他用户公开其视频，可随时自行设置为不公开状态。
        8、为了改善先看人的技术和服务，向用户提供更好的服务体验，先看人或可会自行收集使用或向第三方提供用户的非个人隐私信息。
        四、内容规范
        1、本条所述内容是指用户使用本服务过程中所制作、上载、复制、发布、传播的任何内容，包括但不限于帐号头像、名称、用户说明等注册信息及认证资料，或文字、语音、图片、视频、图文等发送、回复或自动回复消息和相关链接页面，以及其他使用帐号或本服务所产生的内容。
        2、用户不得利用“先看人”帐号或本服务制作、上载、复制、发布、传播如下法律、法规和政策禁止的内容：
        (1) 反对宪法所确定的基本原则的；
        (2) 危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的；
        (3) 损害国家荣誉和利益的；
        (4) 煽动民族仇恨、民族歧视，破坏民族团结的；
        (5) 破坏国家宗教政策，宣扬邪教和封建迷信的；
        (6) 散布谣言，扰乱社会秩序，破坏社会稳定的；
        (7) 散布淫秽、色情、赌博、暴力、凶杀、恐怖或者教唆犯罪的；
        (8) 侮辱或者诽谤他人，侵害他人合法权益的；
        (9) 不遵守法律法规底线、社会主义制度底线、国家利益底线、公民合法权益底线、社会公共秩序底线、道德风尚底线和信息真实性底线的“七条底线”要求的；
        (10) 含有法律、行政法规禁止的其他内容的信息。
        3、用户不得利用“先看人”帐号或本服务制作、上载、复制、发布、传播如下干扰“先看人”正常运营，以及侵犯其他用户或第三方合法权益的内容：
        (1) 含有任何性或性暗示的；
        (2) 含有辱骂、恐吓、威胁内容的；
        (3) 含有骚扰、垃圾广告、恶意信息、诱骗信息的；
        (4) 涉及他人隐私、个人信息或资料的；
        (5) 侵害他人名誉权、肖像权、知识产权、商业秘密等合法权利的；
        (6) 含有其他干扰本服务正常运营和侵犯其他用户或第三方合法权益内容的信息。
        五、使用规则
        1、用户在本服务中或通过本服务所传送、发布的任何内容并不反映或代表，也不得被视为反映或代表先看人的观点、立场或政策，先看人对此不承担任何责任。
        2、用户不得利用“先看人”帐号或本服务进行如下行为：
        (1) 提交、发布虚假信息，或盗用他人头像或资料，冒充、利用他人名义的；
        (2) 强制、诱导其他用户关注、点击链接页面或分享信息的；
        (3) 虚构事实、隐瞒真相以误导、欺骗他人的；
        (4) 利用技术手段批量建立虚假帐号的；
        (5) 利用“先看人”帐号或本服务从事任何违法犯罪活动的；
        (6) 制作、发布与以上行为相关的方法、工具，或对此类方法、工具进行运营或传播，无论这些行为是否为商业目的；
        (7) 其他违反法律法规规定、侵犯其他用户合法权益、干扰“先看人”正常运营或先看人未明示授权的行为。
        3、用户须对利用“先看人”帐号或本服务传送信息的真实性、合法性、无害性、准确性、有效性等全权负责，与用户所传播的信息相关的任何法律责任由用户自行承担，与先看人无关。如因此给先看人或第三方造成损害的，用户应当依法予以赔偿。
        4、先看人提供的服务中可能包括广告，用户同意在使用过程中显示先看人和第三方供应商、合作伙伴提供的广告。除法律法规明确规定外，用户应自行对依该广告信息进行的交易负责，对用户因依该广告信息进行的交易或前述广告商提供的内容而遭受的损失或损害，先看人不承担任何责任。
        六、账户管理
        1、 “先看人”帐号的所有权归先看人所有，用户完成申请注册手续后，获得“先看人”帐号的使用权，该使用权仅属于初始申请注册人，禁止赠与、借用、租用、转让或售卖。先看人因经营需要，有权回收用户的“先看人”帐号。
        2、用户可以更改、删除“先看人”帐户上的个人资料、注册信息及传送内容等，但需注意，删除有关信息的同时也会删除用户储存在系统中的文字和图片。用户需承担该风险。
        3、用户有责任妥善保管注册帐号信息及帐号密码的安全，因用户保管不善可能导致遭受盗号或密码失窃，责任由用户自行承担。用户需要对注册帐号以及密码下的行为承担法律责任。用户同意在任何情况下不使用其他用户的帐号或密码。在用户怀疑他人使用其帐号或密码时，用户同意立即通知先看人。
        4、用户应遵守本协议的各项条款，正确、适当地使用本服务，如因用户违反本协议中的任何条款，先看人在通知用户后有权依据协议中断或终止对违约用户“先看人”帐号提供服务。同时，先看人保留在任何时候收回“先看人”帐号、用户名的权利。
        5、如用户注册“先看人”帐号后一年不登录，通知用户后，先看人可以收回该帐号，以免造成资源浪费，由此造成的不利后果由用户自行承担。
        七、数据储存
        1、先看人不对用户在本服务中相关数据的删除或储存失败负责。
        2、先看人可以根据实际情况自行决定用户在本服务中数据的最长储存期限，并在服务器上为其分配数据最大存储空间等。用户可根据自己的需要自行备份本服务中的相关数据。
        3、如用户停止使用本服务或本服务终止，先看人可以从服务器上永久地删除用户的数据。本服务停止、终止后，先看人没有义务向用户返还任何数据。
        八、风险承担
        1、用户理解并同意，“先看人”仅为用户提供信息分享、传送及获取的平台，用户必须为自己注册帐号下的一切行为负责，包括用户所传送的任何内容以及由此产生的任何后果。用户应对“先看人”及本服务中的内容自行加以判断，并承担因使用内容而引起的所有风险，包括因对内容的正确性、完整性或实用性的依赖而产生的风险。先看人无法且不会对因用户行为而导致的任何损失或损害承担责任。
        如果用户发现任何人违反本协议约定或以其他不当的方式使用本服务，请立即向先看人举报或投诉，先看人将依本协议约定进行处理。
        2、用户理解并同意，因业务发展需要，先看人保留单方面对本服务的全部或部分服务内容变更、暂停、终止或撤销的权利，用户需承担此风险。
        九、知识产权声明
        1、除本服务中涉及广告的知识产权由相应广告商享有外，先看人在本服务中提供的内容（包括但不限于网页、文字、图片、音频、视频、图表等）的知识产权均归先看人所有，但用户在使用本服务前对自己发布的内容已合法取得知识产权的除外。
        2、除另有特别声明外，先看人提供本服务时所依托软件的著作权、专利权及其他知识产权均归先看人所有。
        3、先看人在本服务中所涉及的图形、文字或其组成，以及其他先看人标志及产品、服务名称（以下统称“先看人标识”），其著作权或商标权归先看人所有。未经先看人事先书面同意，用户不得将先看人标识以任何方式展示或使用或作其他处理，也不得向他人表明用户有权展示、使用、或其他有权处理先看人标识的行为。
        4、上述及其他任何先看人或相关广告商依法拥有的知识产权均受到法律保护，未经先看人或相关广告商书面许可，用户不得以任何形式进行使用或创造相关衍生作品。
        十、法律责任
        1、如果先看人发现或收到他人举报或投诉用户违反本协议约定的，先看人有权不经通知随时对相关内容，包括但不限于用户资料、聊天记录进行审查、删除，并视情节轻重对违规帐号处以包括但不限于警告、帐号封禁 、设备封禁 、功能封禁
        的处罚，且通知用户处理结果。
        2、因违反用户协议被封禁的用户，将在封禁期限届满后自助解封。其中，被实施功能封禁的用户会在封禁期届满后自动恢复被封禁功能。被封禁用户可向先看人网站相关页面提交申诉，先看人将对申诉进行审查，并自行合理判断决定是否变更处罚措施。
        3、用户理解并同意，先看人有权依合理判断对违反有关法律法规或本协议规定的行为进行处罚，对违法违规的任何用户采取适当的法律行动，并依据法律法规保存有关信息向有关部门报告等，用户应承担由此而产生的一切法律责任。
        4、用户理解并同意，因用户违反本协议约定，导致或产生的任何第三方主张的任何索赔、要求或损失，包括合理的律师费，用户应当赔偿先看人与合作公司、关联公司，并使之免受损害。
        十一、不可抗力及其他免责事由
        1、用户理解并确认，在使用本服务的过程中，可能会遇到不可抗力等风险因素，使本服务发生中断。不可抗力是指不能预见、不能克服并不能避免且对一方或双方造成重大影响的客观事件，包括但不限于自然灾害如洪水、地震、瘟疫流行和风暴等以及社会事件如战争、动乱、政府行为等。出现上述情况时，先看人将努力在第一时间与相关单位配合，及时进行修复，但是由此给用户或第三方造成的损失，先看人及合作单位在法律允许的范围内免责。
        2、本服务同大多数互联网服务一样，受包括但不限于用户原因、网络服务质量、社会环境等因素的差异影响，可能受到各种安全问题的侵扰，如他人利用用户的资料，造成现实生活中的骚扰；用户下载安装的其它软件或访问的其他网站中含有“特洛伊木马”等病毒，威胁到用户的计算机信息和数据的安全，继而影响本服务的正常使用等等。用户应加强信息安全及使用者资料的保护意识，要注意加强密码保护，以免遭致损失和骚扰。
        3、用户理解并确认，本服务存在因不可抗力、计算机病毒或黑客攻击、系统不稳定、用户所在位置、用户关机以及其他任何技术、互联网络、通信线路原因等造成的服务中断或不能满足用户要求的风险，因此导致的用户或第三方任何损失，先看人不承担任何责任。
        4、用户理解并确认，在使用本服务过程中存在来自任何他人的包括误导性的、欺骗性的、威胁性的、诽谤性的、令人反感的或非法的信息，或侵犯他人权利的匿名或冒名的信息，以及伴随该等信息的行为，因此导致的用户或第三方的任何损失，先看人不承担任何责任。
        5、用户理解并确认，先看人需要定期或不定期地对“先看人”平台或相关的设备进行检修或者维护，如因此类情况而造成服务在合理时间内的中断，先看人无需为此承担任何责任，但先看人应事先进行通告。
        6、先看人依据法律法规、本协议约定获得处理违法违规或违约内容的权利，该权利不构成先看人的义务或承诺，先看人不能保证及时发现违法违规或违约行为或进行相应处理。
        7、用户理解并确认，对于先看人向用户提供的下列产品或者服务的质量缺陷及其引发的任何损失，先看人无需承担任何责任：
        (1) 先看人向用户免费提供的服务；
        (2) 先看人向用户赠送的任何产品或者服务。
        8、在任何情况下，先看人均不对任何间接性、后果性、惩罚性、偶然性、特殊性或刑罚性的损害，包括因用户使用“先看人”或本服务而遭受的利润损失，承担责任（即使先看人已被告知该等损失的可能性亦然）。尽管本协议中可能含有相悖的规定，先看人对用户承担的全部责任，无论因何原因或何种行为方式，始终不超过用户因使用先看人提供的服务而支付给先看人的费用(如有)。
        十二、服务的变更、中断、终止
        1、鉴于网络服务的特殊性，用户同意先看人有权随时变更、中断或终止部分或全部的服务（包括收费服务）。先看人变更、中断或终止的服务，先看人应当在变更、中断或终止之前通知用户，并应向受影响的用户提供等值的替代性的服务；如用户不愿意接受替代性的服务，如果该用户已经向先看人支付的货币，先看人应当按照该用户实际使用服务的情况扣除相应货币之后将剩余的货币退还用户的货币账户中（如有充值余额）。
        2、如发生下列任何一种情形，先看人有权变更、中断或终止向用户提供的免费服务或收费服务，而无需对用户或任何第三方承担任何责任：
        (1) 根据法律规定用户应提交真实信息，而用户提供的个人资料不真实、或与注册时信息不一致又未能提供合理证明；
        (2) 用户违反相关法律法规或本协议的约定；
        (3) 按照法律规定或有权机关的要求；
        (4) 出于安全的原因或其他必要的情形。
        十三、其他
        1、先看人郑重提醒用户注意本协议中免除先看人责任和限制用户权利的条款，请用户仔细阅读，自主考虑风险。未成年人应在法定监护人的陪同下阅读本协议。
        2、本协议的效力、解释及纠纷的解决，适用于中华人民共和国法律。若用户和先看人之间发生任何纠纷或争议，首先应友好协商解决，协商不成的，用户同意将纠纷或争议提交先看人住所地有管辖权的人民法院管辖。
        3、本协议的任何条款无论因何种原因无效或不具可执行性，其余条款仍有效，对双方具有约束力。


    </div>
</div>
<!--用户协议结束-->


<footer class="footer footer-line">
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

<!--- Jimmy Edit ---->
<script>
    window.onload = function () {
        document.getElementById("user_name").addEventListener("click", function () {
            document.getElementById("user_name_input").focus();
        });
        document.getElementById("user_role").addEventListener("click", function () {
            document.getElementById("user_role_input").focus();
        });
        document.getElementById("user_company").addEventListener("click", function () {
            document.getElementById("user_company_input").focus();
        });
        document.getElementById("user_detail").addEventListener("click", function () {
            document.getElementById("user_detail_input").focus();
        });
        document.getElementById("user_contact").addEventListener("click", function () {
            document.getElementById("user_contact_input").focus();
        });
        document.getElementById("user_wx").addEventListener("click", function () {
            document.getElementById("user_wx_input").focus();
        });
        document.getElementById("user_email").addEventListener("click", function () {
            document.getElementById("user_email_input").focus();
        })
    };

    // 变a的颜色为红，变b的颜色为黑，变input值为c
    function userTypeChoose(a, b, c) {
        document.getElementById(a).style.color = "#d82d53";
        document.getElementById(b).style.color = "#888888";
        document.getElementById("user_type").value = c;
    }
    function backgroundch() {
        document.getElementById("con-bg-background").style.visibility = "visible";
        location.href = "#user-agreement";
    }

    function returnback() {
        document.getElementById("con-bg-background").style.visibility = "hidden";
        location.href = "#edit-agreement-div";
    }


</script>

</body>


</html>