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
            height: 100px;
            width: 328px;
        }

        .inner-tag-HTML {
            /*这里指定网页中部宽度*/
            height: 125px;
            width: 328px;
            background-color: transparent;
            clear: both;
        }

        .bc-flex {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .greybubble {
            background: #EFEFEF;
            position: relative;
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
            border-radius: 10px;
        }

        .darkgreybubble {
            background: grey;
            position: relative;
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
            border-radius: 10px;
        }

        .tag-inner-content {
            height: 98%;
            width: 100%;

        }

        .tag-inner-co {
            height: 90%;
            width: 90%;
        }

        .tag-inner-option {
            height: 100%;
            width: 90%;
        }

        .tag-inner-cancel {
            height: 100%;
            width: 10%;
            padding-top: 15px;
            padding-left: 5px;
        }

        .tag-inner-split {
            height: 100%;
            width: 50%;
        }

        .tag-inner-split-vertical {
            width: 100%;
            height: 33.33%;
        }

        .tag-inner-split-smoption {
            height: 70%;
            width: 80%;
            border: 1px solid #595858;
        }

        iframe {
            border-top-color: transparent;
            border-right-color: transparent;
            border-bottom-color: transparent;
            border-left-color: initial;
            border-image-source: none;

            border-top-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 2px;
            border-left-width: 0px;
        }

        .option-font {
            font-size: 11px;
            color: #595858;
        }


    </style>

</head>

<body>

<div class="inner-tag-HTML">
    <div class="tag-inner-content bc-flex">
        <div class="tag-inner-co greybubble bc-flex">
            <div class="tag-inner-option bc-flex">
                <div class="tag-inner-split bc-flex">
                    <div class="tag-inner-split">
                        <div class="tag-inner-split-vertical bc-flex">
                            <div class="tag-inner-split-smoption greybubble bc-flex"><font class="option-font">金融</font>
                            </div>
                        </div>
                        <div class="tag-inner-split-vertical bc-flex">
                            <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                    class="option-font">人工智能</font></div>
                        </div>
                        <div class="tag-inner-split-vertical bc-flex">
                            <div class="tag-inner-split-smoption greybubble bc-flex"><font class="option-font">旅游</font>
                            </div>
                        </div>
                    </div>
                    <div class="tag-inner-split">
                        <div class="tag-inner-split-vertical bc-flex">
                            <div class="tag-inner-split-smoption greybubble bc-flex"><font class="option-font">A
                                    轮</font></div>
                        </div>
                        <div class="tag-inner-split-vertical bc-flex">
                            <div class="tag-inner-split-smoption greybubble bc-flex"><font class="option-font">教育</font>
                            </div>
                        </div>
                        <div class="tag-inner-split-vertical bc-flex">
                            <div class="tag-inner-split-smoption greybubble bc-flex"><font class="option-font">娱乐</font>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tag-inner-split bc-flex">
                    <div class="tag-inner-split">
                        <div class="tag-inner-split-vertical bc-flex">
                            <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                    class="option-font">自定义</font></div>
                        </div>
                        <div class="tag-inner-split-vertical bc-flex">
                            <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                    class="option-font">医疗健康</font></div>
                        </div>
                        <div class="tag-inner-split-vertical bc-flex">
                            <div class="tag-inner-split-smoption greybubble bc-flex"><font class="option-font">房产</font>
                            </div>
                        </div>
                    </div>
                    <div class="tag-inner-split">
                        <div class="tag-inner-split-vertical bc-flex">
                            <div class="tag-inner-split-smoption greybubble bc-flex"><font class="option-font">电商</font>
                            </div>
                        </div>
                        <div class="tag-inner-split-vertical bc-flex">
                            <div class="tag-inner-split-smoption greybubble bc-flex"><font class="option-font">金融</font>
                            </div>
                        </div>
                        <div class="tag-inner-split-vertical bc-flex">
                            <div class="tag-inner-split-smoption greybubble bc-flex"><font class="option-font">社交</font>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tag-inner-cancel"  onclick="showContact('tag-cover-div','card-cover-div')">
                <img src="<?php echo base_url('assets/images/cancel01.png'); ?>" height="18px" width="auto"/>
            </div>
        </div>
    </div>


</div>

</body>

</html>