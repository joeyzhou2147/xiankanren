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
    <title>先看人 | 投资服务</title>


    <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">

    <!--Home page using level 1 index css-->
    <link href="<?php echo base_url("assets/css/L1/index.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/L1/search.css"); ?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<link href="./assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

        .font-xihei {
            font-family: STXihei;
        }

        /*---------- footer ------------*/

        /*---------- footer end------------*/

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

        /*------------ edit end----------*/


    </style>

</head>

<body style="max-width:1000px;height: auto;">

<header class="w3-theme w3-top bc-header">
        <div class="bc-flex bc-wh">
            <div class="search-top-box bc-flex">
                <div class="search-wrapper">
                    <img src="<?php echo base_url('assets/images/search02.png')?>" style="position: absolute;width: auto;height: 1.4rem;top:1.2rem;left: 1.7rem;">
                    <form class="search-top-box-form bc-flex" method="">
                        <input type="text" name="focus" required class="search-box" placeholder="先看人"/>
                        <button class="close-icon" type="reset" id="button"></button>
                    </form>
                </div>
                <div class="bc-flex search-top-box-cancel">取消</div>
            </div>
        </div>
</header>

<!-- Begin page content -->
<!-- container -->
<div class="font-xihei search-container">
    <div class="search-background">
        <div class="sea-container">
            <div class="search-col1 bc-flex">
                <div class="" style="display:flex;align-items:center;justify-content:center">
                    <image class="image-sea-photo" src="<?php echo base_url('assets/images/default_person1.png'); ?>">
                </div>
            </div>
            <div class="search-col2">
                <div class="search-col2-row1">
                    <div class="search-col2-row1-name" id="search-col2-row1-name" >牛肉哥</div>
                    <div class="search-col2-row1-role" id="search-col2-row1-role" >创始人</div>
                </div>
                <div class="search-col2-row2"><div color="black"><a class="search-keyword">先看人</a>技术网络科技有限公司</div></div>
                <div class="search-col2-row3" style="font-size: 12px; color: #7a7979">
                    <div style="float:left;">投资人 /</div>
                    <div style="float:left;">医疗健康 /</div>
                    <div style="float:left;">A轮 /</div>
                    <div style="float:left;">自定义 /</div>
                    <div style="float:left;">金融 /</div>
                    <div style="float:left;">天使轮 /</div>
                    <div style="float:left;">...</div>
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
                    <img class="icon-footer-image" src="<?php echo base_url("assets/images/home01.png"); ?>"></i>
                </div>
                <div class="icon-footer-row2">首页</div>
            </div>
            <div class="icon-footer-div" onclick="toHref('<?php echo base_url("level_1/search"); ?>')">
                <div class="icon-footer-row1 bc-flex">
                    <img class="icon-footer-image" src="<?php echo base_url("assets/images/search02.png"); ?>"></i>
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
    document.getElementById('search-top-box-input').addEventListener("change",function(){
        //window.alert(this.value);
    })
    function toHref(url) {
        window.location.href = url;
    }
    function sendSearch() {
        var search_text;
        search_text=  "sad";
        if (search_text.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("search-col2-row1-name").innerHTML += xmlhttp.responseText;
                    document.getElementById("search-col2-row1-name").innerHTML += search_text;
                }
            };
            xmlhttp.open("post", "<?php echo base_url('L1/search/sendSearchText')?>?searchText=" + search_text, true);

            xmlhttp.send();
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