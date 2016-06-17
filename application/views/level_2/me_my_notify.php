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

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>先看人</title>

    <style type="text/css">

        body {
            margin: 0;
            padding: 0;
            background-color: transparent;
            width: 317px;
        }

        .inner-notify-HTML {
            width: 317px; /*这里指定网页中部宽度*/
            height: 449px;
            background-color: transparent;
            clear: both;
        }

        .bc-flex {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .me-notify-background {
            background-color: #EFEFEF;
            z-index: －1； text-align : center;
            width: 100%;
            height: 100%;
            padding-top: 20px;
            padding-bottom: 5px;
        }

        .me-notify-row1 {
            width: 90%;
            height: 70%;
            margin: auto auto;
        }

        .me-notify-row2 {
            width: 100%;
            height: 30%;

        }

        .talkbubble {
            background: white;
            position: relative;
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
            border-radius: 10px;
        }

        .ch-left-border {
            padding-right: 5px;
            border-left: 1px solid #f5cbd5;
        }

        .margin-10px {
            padding-left: 10px;
        }

        .margin-5px {
            padding-left: 5px;
        }

        .tag {
            padding-top: 15px;
        }

        .notify-tit {
            font-size: 14px;
            width: 40px;
            height: 25px;
            padding-top: 4px;
            margin-right: 5px;
        }

        .notify-row1 {
            display: flex;

            height: 20%;

        }

        .notify-row2 {
            display: flex;

            height: 20%;
        }

        .notify-row3 {
            display: flex;

            height: 20%;
        }

        .notify-col1 {
            display: flex;
            height: 100%;
            width: 25%;
        }

        .notify-col2 {
            height: 100%;
            width: 100%;
            padding-right: 10%;
            margin-left: 5px;
        }

        .notify-col2-row1 {
            float: margin-top;
            width: 100%;
            height: 30%;
            align-items: flex-end;
            display: flex;
        }

        .notify-col2-row1 font {
            width: 20%;
            height: 30px;
            display: flex;
            align-items: flex-end;
        }

        .notify-col2-row1-name {
            font-size: 20px;
        }

        .notify-col2-row2 {
            float: left;
            width: 100%;
            height: 40%;
        }

        .notify-col2-row2 font {
            font-size: 14px;
        }

        .notify-col2-row3 {
            float: left;
            width: 100%;
            height: 20%;
        }

        .notify-col2-row3 font {
            font-size: 12px;

        }

        .notify-border {
            margin-left: 20px;
            margin-top: 20px;
            border-bottom: 2px solid #DCDCDC;
        }

        .notify-button {
            height: 50%;
            width: 35%;
        }

        .notify-button-row1 {
            width: 100%;
            height: 50%;
        }

        .notify-button-row2 {
            width: 100%;
            height: 40%;

        }

    </style>

</head>

<body>

<div class="inner-notify-HTML ">
    <div class="tag bc-flex">

        <div class="bc-flex">
            <img class="margin-10px" src="images/collect01.png" width="auto" height="16"/>
            <font class="margin-5px notify-tit" color="#898a8a">1万+</font>
        </div>

        <div class="ch-left-border bc-flex">
            <img class="margin-10px" src="images/collect01.png" width="auto" height="16"/>
            <font class="margin-5px notify-tit" color="#898a8a">1654</font>
        </div>

        <div class="ch-left-border bc-flex">
            <img class="margin-10px" src="images/comment01.png" width="auto" height="16"/>
            <font class="margin-5px notify-tit" color="#898a8a">1890</font>
        </div>

        <div class="ch-left-border bc-flex">
            <img class="margin-10px" src="images/contact01.png" width="auto" height="16"/>
            <font class="margin-5px notify-tit" color="#898a8a">4568</font>
        </div>
    </div>

    <div class="notify-row1 notify-border">
        <div class="notify-col1 bc-flex">
            <div class="bc-flex">
                <image src="images/default_person1.png" height="60" width="auto"/>
            </div>
        </div>
        <div class="notify-col2">
            <div class="notify-col2-row1">
                <font class="notify-col2-row1-name" color="black">姓名</font>
            </div>
            <div class="notify-col2-row2"><font color="grey">回复回复回复回复回复回复回复回复回复回复回复回复回复回复</font></div>
            <div class="notify-col2-row3">
                <font color="grey">1 minute ago</font>
            </div>
        </div>
    </div>

    <div class="notify-row2 notify-border">
        <div class="notify-col1 bc-flex">
            <div class="bc-flex">
                <image src="images/default_person1.png" height="60" width="auto"/>
            </div>
        </div>
        <div class="notify-col2">
            <div class="notify-col2-row1">
                <font class="notify-col2-row1-name" color="black">姓名</font>
            </div>
            <div class="notify-col2-row2">
                <img src="images/collect01.png" height="20px" width="auto"/>
            </div>
            <div class="notify-col2-row3">
                <font color="grey">1 minute ago</font>
            </div>
        </div>
    </div>

    <div class="notify-row3 notify-border">
        <div class="notify-col1 bc-flex">
            <div class="bc-flex">
                <image src="images/default_person1.png" height="60" width="auto"/>
            </div>
        </div>
        <div class="notify-col2">
            <div class="notify-col2-row1">
                <font class="notify-col2-row1-name" color="black">姓名</font>
            </div>
            <div class="notify-col2-row2"><font color="grey">欢迎使用先看人:)</font></div>
            <div class="notify-col2-row3">
                <font color="grey">1 minute ago</font>
            </div>
        </div>
    </div>

    <div class="notify-row3 notify-border">
        <div class="notify-col1 bc-flex">
            <div class="bc-flex">
                <image src="images/default_person1.png" height="60" width="auto"/>
            </div>
        </div>
        <div class="notify-col2">
            <div class="notify-col2-row1">
                <font class="notify-col2-row1-name" color="black">姓名</font>
            </div>
            <div class="notify-col2-row2"><font color="grey">欢迎使用先看人:)</font></div>
            <div class="notify-col2-row3">
                <font color="grey">1 minute ago</font>
            </div>
        </div>
    </div>


</div>

</body>

</html>