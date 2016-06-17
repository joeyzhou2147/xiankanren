<?php
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
    <rolele>先看人</rolele>


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


        /*header end*/
        /*footer start*/


        /*footer end*/


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

        /* ----------- header start --------------*/
        .bc-flex2 {
            width: 100%;
            height: 50px;
        }

        /*------------ container start----------*/
        .search-container {
            margin-top: 30px;
            width: 100%;
            height: 667px;
        }


        .bc-tag1 {
            margin-right: 20px;
            margin-left: 20px;
            width: 100%;
        }

        /*--------------------------先看人－搜索页面－Start-----------------------------*/
        .res-url {
            display: flex;
            margin-left: 5px;
            margin-right: 5px;
            background-color: #FFFFFF;
            height: 15%;
        }

        .search-col1 {
            display: flex;
            height: 100%;
            width: 20%;
        }

        .search-col1 img {
            display: block;
            margin: 0 auto;
        }

        .search-col2-row1 {
            float: margin-top;
            width: 100%;
            height: 40%;
            align-items: flex-end;
            display: flex;
        }

        .search-col2-row1 font {
            width: 20%;
            height: 30px;
            display: flex;
            align-items: flex-end;
        }

        .search-col2-row1-name {
            font-size: 18px;
        }

        .search-col2-row1-role {
            font-size: 13px;
            padding-bottom: 3px;
        }

        .search-col2-row2 {
            float: left;
            width: 100%;
            height: 25%;
        }

        .search-col2-row2 font {
            font-size: 13px;
        }

        .search-col2-row3 {
            float: left;
            width: 100%;
            height: 35%;
        }

        .search-col2-row3 font {
            font-size: 13px;

        }

        .search-background {
            background-color: #DCDCDC;
            z-index: －1； text-align : center;
            width: 100%;
            height: 100%;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        /*--------------------------------先看人－搜索页面－End--------------------------------------*/
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
        <div>
            <input name="" type="text"/>
        </div>
    </div>

</header>

<!-- container -->
<div class="font-xihei search-container">

    <div class="search-background">
        <div class="res-url">
            <div class="search-col1 bc-flex">
                <div class="" style="display:flex;align-items:center;justify-content:center">
                    <image src="#"/>
                </div>
            </div>
            <div class="search-col2">
                <div class="search-col2-row1">
                    <font class="search-col2-row1-name" color="black">牛肉哥</font>
                    <font class="search-col2-row1-role" color="grey">创始人</font>
                </div>
                <div class="search-col2-row2"><font color="black">先看人技术网络科技有限公司</font></div>
                <div class="search-col2-row3">
                    <div style="float:left;"><font color="grey">投资人</font>/</div>
                    <div style="float:left;"><font color="grey">医疗健康</font>/</div>
                    <div style="float:left;"><font color="grey">A轮</font>/</div>
                    <div style="float:left;"><font color="grey">...</font>/</div>
                </div>
            </div>
        </div>
    </div>
    <div class="bc-tag1">

    </div>


</div>


<footer class=" font-xihei">


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