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
            height: 56.7rem;
        } 

        .bc-top-bar {
            width: 100%;
            height: 5rem;
        }

        .bc-top-half{
            color: #8e8f8f;
        }

        .bc-header {
            height: 5rem;
            border-bottom: 0.1rem solid #D92D53;
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

        .font-xihei {
            font-family: STXihei;
        }

        /*---------- footer ------------*/

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 5rem;
            background-color: #ffffff;
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
            height: 10.9rem;
            width: 96%;
        }

        .search-top-box{
            width: 86%;
            height: 100%;
        }

        .bc-top-filter{
            width: 14%;
            height: 100%;
            font-size: 1.8rem;
            color: #8e8f8f;
        }

        .search-top-box-input{
            height: 2.5rem;
            color:gray;
            margin: 0;
            padding: 1rem 0;
            border: 0.1rem solid #ce1442;
            border-radius: 0.5rem;                /* 圆角边框 */
            width: 32rem;
            font-size: 1.5rem;
            padding-left: 1.5rem;
            background-color: transparent;
            display: flex;
            justify-content: flex-start;
            margin-left: 5px;
        }

        ::-webkit-input-placeholder { 
            color: #ce1442; text-overflow: ellipsis; 
        } 
        :-moz-placeholder { 
            color: #ce1442 !important; text-overflow: ellipsis; 
        } 
        ::-moz-placeholder { 
            color: #ce1442 !important; text-overflow: ellipsis; 
        } /* for the future */ 
        :-ms-input-placeholder { 
            color: #ce1442 !important; text-overflow: ellipsis; 
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


<footer class="footer bc-flex">
    <div class="container bc-flex">
        <div class="search-top-box bc-flex">   
            <input class="search-top-box-input" type="text" placeholder="留下评论，带走好运..."/>        
        </div>
        <div class="bc-flex font-xihei bc-top-filter" onclick="toHref('<?php echo base_url("level_1/home"); ?>')">
            <div class="bc-flex">取消</div>
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
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo base_url("assets/js/ie10-viewport-bug-workaround.js"); ?>"></script>
</body>


</html>