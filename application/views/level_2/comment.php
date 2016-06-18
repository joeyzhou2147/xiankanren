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
    <meta http-equiv="Page-Enter" content="RevealTrans(duration=100,Transitionv=11)">
    <title>先看人 | 投资服务</title>


    <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/L2/comment.css'); ?>" rel="stylesheet">

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

        .con-bg {
            background-color: #eeeeee;
            width: 100%;
            display: inline-block;
            height: auto;
            position: absolute;
            top:4.4rem;
            bottom: 4.4rem;
            overflow-y: scroll;
        } 

        .bc-top-bar {
            width: 100%;
            height: 4.4rem;
        }

        .bc-top-half{
            color: #8e8f8f;
            font-size: 2.0rem;
        }

        .bc-header {
            height: 4.4rem;
            border-bottom: 0.1rem solid #F4CBD7;
        }

        .bc-flex {
            display: flex;
            display: -webkit-box; display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex; /* Safari */

            justify-content: center;
            -webkit-justify-content: center; /* Safari 6.1+ */

            align-items: center;
            -webkit-box-align: center; -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
        }

        /*---------- footer ------------*/

        .footer {
            width: 100%;
            position: fixed;
            bottom: 0;
            z-index: 1000;
            background-color: #ffffff;
            height: 4.4rem;
            border-top: 0.1rem solid #F4CBD7;
        }

        .container{
            padding-right: 0;
            padding-left: 0;
            margin-right: 0;
            margin-left: 0;
            width: 100%;
            height: 100%;
        }

        .com-container{
            margin-bottom: 1rem;
            width: 96%;
        }

        .comment-footer-box{
            width: 80%;
            height: 2.5rem;
            border: 0.1rem solid #ce1442;
            border-radius: 0.5rem;                /* 圆角边框 */
            padding-left: 1.0rem;
            margin-left: 0;
        }

        .bc-top-filter{
            width: 6%;
            height: 100%;
            font-size: 1.8rem;
            color: #8e8f8f;
        }

        .bc-abolish{
            font-size: 1.8rem;
            color: #8e8f8f;
            width: 12%;
            height: 100%;
            margin-left: 1rem;
        }

        .comment-footer-box-input{
            height: 100%;
            color:gray;
            width: 36rem;
            font-size: 1.5rem;
            background-color: #ffffff;
            border: none;
        }

        .comment-footer-box-input::-webkit-input-placeholder {
            color: #ce1442; text-overflow: ellipsis;
        }
        .comment-footer-box-input:-moz-placeholder {
            color: #ce1442 !important; text-overflow: ellipsis;
        }
        .comment-footer-box-input::-moz-placeholder {
            color: #ce1442 !important; text-overflow: ellipsis;
        } /* for the future */
        .comment-footer-box-input:-ms-input-placeholder {
            color: #ce1442 !important; text-overflow: ellipsis;
        }

        .comment-footer-box-input:not(:valid) ~ .close-icon {
            display: none;
        }

        .image-com-comment{
            width: 2.0rem;
            height: auto;
        }

        .con-bg-background{
            background-color: rgba(0,0,0,0.5);
            width: 100%;
            display: inline-block;
            height: auto;
            position: absolute;
            top:4.4rem;
            bottom: 4.4rem;
            overflow-y: scroll;
            z-index: 10001;
            
            visibility: hidden;
        }

        

        /* ----------- iPhone 5 and 5S 开始----------- */
        /* Portrait and Landscape */

        @media only screen and (min-device-width: 320px) and (max-device-width: 568px) and (-webkit-min-device-pixel-ratio: 2) {
        }

        /* ----------- iPhone 5 and 5S 结束----------- */

    </style>

</head>

<body style="max-width:100rem;height: auto;">

<header class="w3-theme w3-top bc-header">
    <div class="bc-flex" style="justify-content: flex-start;">
        <div class="bc-flex bc-top-bar">
            <div class="bc-flex font-xihei bc-top-filter">
                <img class="image-com-comment" src="<?php echo base_url('assets/images/comment02.png'); ?>"/>
            </div>
            <div class="bc-top-title bc-flex">
                <div class="bc-top-half bc-flex font-xihei">留言</div>
            </div>
            <div class="bc-flex font-xihei bc-top-filter" onclick="tohref('<?php echo base_url("level_2/edit"); ?>')">
                <div class="bc-flex"></div>
            </div>
        </div>
    </div>
</header>

<!-- Begin page content -->
<!---------- container -------------->

<div class="con-bg fond-xihei">

    <!-------- container 1 ------------>
    <div class="font-xihei com-container">
        <div class="com-container-1">
            <div class="com-photo" style="padding-left: 1rem;">
                <img class="image-com-picture" src="<?php echo base_url('assets/images/default_person1.png'); ?>">
            </div>
            <div>
                <div class="com-col2">
                    <div class="com-col2-row1">姓名</div>
                    <div class="com-col2-row2">回复回复回复回复回复回复回复回复回复回复回复回复</div>
                    <div class="com-col2-row3">1分钟前</div>
                </div>
            </div>
        </div>
    </div>

    <div class="font-xihei com-container">
        <div class="com-container-1">
            <div class="com-photo" style="padding-left: 1rem;">
                <img class="image-com-picture" src="<?php echo base_url('assets/images/default_person1.png'); ?>">
            </div>
            <div>
                <div class="com-col2">
                    <div class="com-col2-row1">姓名</div>
                    <div class="com-col2-row2">回复回复回复回复回复回复回复回复回复回复回复回复</div>
                    <div class="com-col2-row3">1分钟前</div>
                </div>
            </div>
        </div>
    </div>

    <div class="font-xihei com-container">
        <div class="com-container-1">
            <div class="com-photo" style="padding-left: 1rem;">
                <img class="image-com-picture" src="<?php echo base_url('assets/images/default_person1.png'); ?>">
            </div>
            <div>
                <div class="com-col2">
                    <div class="com-col2-row1">姓名</div>
                    <div class="com-col2-row2">回复回复回复回复回复回复回复回复回复回复回复回复</div>
                    <div class="com-col2-row3">1分钟前</div>
                </div>
            </div>
        </div>
    </div>

    <div class="font-xihei com-container">
        <div class="com-container-1">
            <div class="com-photo" style="padding-left: 1rem;">
                <img class="image-com-picture" src="<?php echo base_url('assets/images/default_person1.png'); ?>">
            </div>
            <div>
                <div class="com-col2">
                    <div class="com-col2-row1">姓名</div>
                    <div class="com-col2-row2">回复回复回复回复回复回复回复回复回复回复回复回复</div>
                    <div class="com-col2-row3">1分钟前</div>
                </div>
            </div>
        </div>
    </div>

    <div class="font-xihei com-container">
        <div class="com-container-1">
            <div class="com-photo" style="padding-left: 1rem;">
                <img class="image-com-picture" src="<?php echo base_url('assets/images/default_person1.png'); ?>">
            </div>
            <div>
                <div class="com-col2">
                    <div class="com-col2-row1">姓名</div>
                    <div class="com-col2-row2">回复回复回复回复回复回复回复回复回复回复回复回复</div>
                    <div class="com-col2-row3">1分钟前</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="con-bg-background" id="con-bg-background" onclick="returnback()">
</div>


<footer class="footer id="footer" bc-flex">
    <div class="container bc-flex">
        <form class="comment-footer-box bc-flex">
            <input class="comment-footer-box-input" id="footer-box-input" type="text" placeholder="留下评论，带走好运..." onfocus="backgroundch()" onblur="returnback()"/>        
        </form>
        <div class="bc-flex font-xihei bc-abolish" onclick="toHref('<?php echo base_url("level_1/home"); ?>')">
            <div class="bc-flex">取消</div>
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

    function backgroundch(){
        document.getElementById("con-bg-background").style.visibility = "visible";
    }

    function returnback(){
        document.getElementById("con-bg-background").style.visibility = "hidden";
    }


</script>

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="<?php echo base_url("assets/js/vendor/jquery.min.js"); ?>"><\/script>')
</script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo base_url("assets/js/ie10-viewport-bug-workaround.js"); ?>"></script>
</body>


</html>