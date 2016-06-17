<?php
/**
 * Created by PhpStorm.
 * User: Joe
 * Date: 2016/6/13
 * Time: 14:18
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>先看人</title>

    <style type="text/css">

        body {
            margin: 0;
            padding: 0;
            background-color: transparent;
            height: 340px;
        }

        .inner-card-HTML {
            /*这里指定网页中部宽度*/
            height: 340px;
            background-color: transparent;
            clear: both;
        }

        .bc-flex {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .inner-card-row1 {
            width: 100%;
            height: 4%;
            padding-top: 20px;

        }

        .inner-card-row1-content {
            float: right;
            padding-right: 20px;
        }

        .inner-card-row1-pic {

        }

        .inner-card-row1-word {
            margin-left: 10px;
        }

        .inner-card-row2 {
            width: 100%;
            height: 15%;
        }

        .inner-card-row2-col2-row1-name {
            font-size: 24px;
            font-weight: bold;
        }

        .inner-card-row2-col2-row1-role {
            font-size: 14px;
        }

        .inner-card-row2-col2 {
            margin-left: 20px;
        }

        .inner-card-row3 {
            width: 100%;
            height: 8%;
        }

        .inner-card-row3-content {
            width: 80%;
            height: 100%;
            border-bottom: 1px solid #EFEFEF;
            margin: auto auto;
            font-size: 12px;
        }

        .inner-card-row4 {
            width: 100%;
            height: 10%;
        }

        .inner-card-row4-content {
            width: 80%;
            height: 80%;
            border-bottom: 1px solid #EFEFEF;
            margin: auto auto;
            font-size: 12px;
        }

        .inner-card-row5 {
            width: 100%;
            height: 40%;
        }

        .inner-card-row3-content-dis {
            margin-right: 4px;
        }


    </style>

</head>

<body>

<div class="inner-card-HTML ">
    <div class="inner-card-row1">
        <div class="inner-card-row1-content bc-flex">
            <div class="inner-card-row1-pic"><img src="images/edit.png" height="20px" width="auto"/></div>
            <div class="inner-card-row1-word"><font color="#ce1442" font-size="10px">编辑</font></div>
        </div>
    </div>

    <div class="inner-card-row2 bc-flex">

        <div class="inner-card-row2-col1 bc-flex">
            <div class="bc-flex">
                <img src="images/default_person1.png" width="50px" height="50px"/>
            </div>
        </div>

        <div class="inner-card-row2-col2">
            <div class="inner-card-row2-col2-row1">
                <font class="inner-card-row2-col2-row1-name" color="black">牛肉哥</font>
                <font class="inner-card-row2-col2-row1-role" color="grey">创始人</font>
            </div>
            <div class="namecard-row2-col2-row2">
                <font color="grey">先看人网络科技有限公司</font>
            </div>
        </div>

    </div>

    <div class="inner-card-row3">
        <div class="inner-card-row3-content bc-flex">
            <div class="inner-card-row3-content-dis" style="float:left;"><font color="grey">医疗健康 /</font></div>
            <div class="inner-card-row3-content-dis" style="float:left;"><font color="grey">Pre-A 轮 /</font></div>
            <div class="inner-card-row3-content-dis" style="float:left;"><font color="grey">80后 /</font></div>
            <div class="inner-card-row3-content-dis" style="float:left;"><font color="grey">游戏 /</font></div>
            <div class="inner-card-row3-content-dis" style="float:left;"><font color="grey">O2O</font></div>
            <div class="inner-card-row3-content-dis" style="float:left;margin-left:10px;"><img src="images/more.png"
                                                                                              height="10px"
                                                                                              width="auto"/></div>
        </div>
    </div>

    <div class="inner-card-row4">
        <div class="inner-card-row4-content bc-flex">
            <font>让投资人先看到你的脸，让创业者也看到你的脸</font>
        </div>
    </div>

    <div class="inner-card-row5 bc-flex">
        <div class="bc-flex">
            <img src="images/#" height="" width="auto"/>
        </div>
    </div>


</div>

</body>

</html>