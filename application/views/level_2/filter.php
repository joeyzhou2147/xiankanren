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

    <!--Home page using level 1 index css-->
    <link href="<?php echo base_url("assets/css/L2/filter.css"); ?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<link href="./assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <style>

        /*header start*/


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


        .filter-tag3 {
            border: 1px solid #d82d53;
            border-radius: 4px;
            width: 75px;
            height: 21px;
            margin-right: 6px;
            margin-left: 6px;
            display: inline-block;
            /*margin-top: 10px;*/
            text-align: center;
            margin-top: 11px;
            background-color: #d82d53 ;
        }
    </style>

</head>

<body style="max-width:1000px;height: 667px;">


<header class="w3-theme w3-top bc-header">


    <div class="common-flex" style="">
        <div class="common-flex filter-top-bar">
            <div class="common-flex font-xihei filter-top-filter">
            </div>
            <div class="filter-top-title common-flex">
                <div class="filter-top-half common-flex font-xihei">
                    <div class="common-flex" style="">
                        <img class="filter-top-filter-image" src="<?php echo base_url("assets/images/filter.png"); ?>">
                    </div>
                    <div class="filter-top-title-unchecked common-flex">筛选</div>
                </div>
            </div>
            <div class="common-flex font-xihei filter-top-filter">
            </div>
        </div>
    </div>

</header>

<!-- container -->
<div class="font-xihei filter-container2">
    <div class="filter-container3" style="height: 115px;">
        <div class="bc-row-start font-style1 font-color1">
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

    <div class="filter-container3" style="height: 83px">
        <div class="bc-row-start font-style1 font-color1">
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

    <div class="filter-container3" style="height: 249px;">
        <div class="bc-row-start font-style1 font-color1">
            领域
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


    
</div>


<footer class="footer1 icon-footer2 common-flex font-xihei">

    <div class="filter-footer-div">
        <div class="filter-footer-row"></div>
    </div>

    <div class="filter-footer-div">
        <div class="filter-footer-row bc-laud-top-checked " onclick="toHref('<?php echo base_url("level_1/home"); ?>')">取消</div>
    </div>

    <div class="filter-footer-div">
        <div class="filter-footer-row bc-laud-top-unchecked"  onclick="toHref('<?php echo base_url("level_1/home"); ?>')">确定</div>
    </div>

    <div class="filter-footer-div">
        <div class="filter-footer-row"></div>
    </div>

</footer>

<script>
    function toHref(url) {
        window.location.href = url;
    }
</script>

</body>


</html>