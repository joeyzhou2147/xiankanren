<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>先看人 | 投资服务</title>

    <style>

        /*!
         * Bootstrap v3.0.0
         *
         * Copyright 2013 Twitter, Inc
         * Licensed under the Apache License v2.0
         * http://www.apache.org/licenses/LICENSE-2.0
         *
         * Designed and built with all the love in the world @twitter by @mdo and @fat.
         */
        .talkbubble {
            margin-left:30px;
            width: 120px;
            height: 80px;
            background: red;
            position: relative;
            -moz-border-radius:    10px;
            -webkit-border-radius: 10px;
            border-radius:         10px;
        }
        .talkbubble:before {
            content:"";
            position: absolute;
            top: 100%;
            left: 26px;
            width: 0;
            height: 0;
            border-left: 13px solid transparent;
            border-top: 26px solid red;
            border-right: 13px solid transparent;
        }
    </style>

</head>
<body>

<div class="talkbubble">
    CSS “边框法”实现气泡对话框效果二
</div>

</body>
</html>