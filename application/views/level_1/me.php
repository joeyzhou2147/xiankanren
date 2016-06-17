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
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="先看人, 先看脸, 创业, 投资, framework, bootstrap, front-end, frontend, web development">
    <meta name="author" content="Yu Zhou">
    <title>先看人 | 投资服务</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!--Home page using level 1 index css-->
    <link href="<?php echo base_url('assets/css/L1/index.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/L1/me_only.css'); ?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<link href="./assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

    <style>

    </style>

</head>

<body style="background-color: #EFEFEF;">


<!-- container -->
<!-- container -->
<div class="font-xihei bc-me-3div-container">

    <div class="me-3div-background">
        <div class="me-3div-row1 greybubble">

            <div class="content-part whitebubble-bottom-left">
                <div id="tag-cover-div" class="tag-cover-div bc-flex">
                    <div class="inner-tag-HTML" style="">
                        <div class="tag-inner-content bc-flex">
                            <div class="tag-inner-co greybubble bc-flex">
                                <div class="tag-inner-option bc-flex">
                                    <div class="tag-inner-split bc-flex">
                                        <div class="tag-inner-split">
                                            <div class="tag-inner-split-vertical bc-flex">
                                                <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                        class="option-font">金融</font>
                                                </div>
                                            </div>
                                            <div class="tag-inner-split-vertical bc-flex">
                                                <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                        class="option-font">人工智能</font></div>
                                            </div>
                                            <div class="tag-inner-split-vertical bc-flex">
                                                <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                        class="option-font">旅游</font>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tag-inner-split">
                                            <div class="tag-inner-split-vertical bc-flex">
                                                <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                        class="option-font">A
                                                        轮</font></div>
                                            </div>
                                            <div class="tag-inner-split-vertical bc-flex">
                                                <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                        class="option-font">教育</font>
                                                </div>
                                            </div>
                                            <div class="tag-inner-split-vertical bc-flex">
                                                <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                        class="option-font">娱乐</font>
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
                                                <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                        class="option-font">房产</font>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tag-inner-split">
                                            <div class="tag-inner-split-vertical bc-flex">
                                                <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                        class="option-font">电商</font>
                                                </div>
                                            </div>
                                            <div class="tag-inner-split-vertical bc-flex">
                                                <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                        class="option-font">金融</font>
                                                </div>
                                            </div>
                                            <div class="tag-inner-split-vertical bc-flex">
                                                <div class="tag-inner-split-smoption greybubble bc-flex"><font
                                                        class="option-font">社交</font>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tag-inner-cancel bc-flex" onclick="showContact('tag-cover-div','card-cover-div')">
                                    <img src="<?php echo base_url('assets/images/cancel_tag.png'); ?>" height="18px"
                                         width="auto"/>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div id="card-cover-div" class="card-cover-div" style="height:340px;">

                    <div class="inner-card-HTML ">
                        <div class="inner-card-row1">
                            <div class="inner-card-row1-content bc-flex"
                                 onclick="toHref('<?php echo base_url('level_2/edit') ?>')">
                                <div class="inner-card-row1-pic"><img
                                        src="<?php echo base_url('assets/images/edit.png') ?>" height="20px"
                                        width="auto"/>
                                </div>
                                <div class="inner-card-row1-word"><font color="#ce1442" font-size="10px">编辑</font></div>
                            </div>
                        </div>

                        <div class="inner-card-row2 bc-left-center">

                            <div class="inner-card-row2-col1 bc-left-center">
                                <div class="">
                                    <img class="image-card-profile" src="<?php echo base_url('assets/images/default_person1.png'); ?>" >
                                </div>
                            </div>

                            <div class="">
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
                            <div class="inner-card-row3-content bc-left-center">
                                <div class="inner-card-row3-content-dis" style="float:left;"><font color="grey">医疗健康
                                        /</font></div>
                                <div class="inner-card-row3-content-dis" style="float:left;"><font color="grey">Pre-A 轮
                                        /</font></div>
                                <div class="inner-card-row3-content-dis" style="float:left;"><font color="grey">80后
                                        /</font></div>
                                <div class="inner-card-row3-content-dis" style="float:left;"><font color="grey">游戏
                                        /</font></div>
                                <div class="inner-card-row3-content-dis" style="float:left;"><font
                                        color="grey">O2O</font></div>
                                <div style="float:left;margin-left:2.9rem;"
                                     onclick="showContact('','tag-cover-div')"><img
                                        src="<?php echo base_url('assets/images/me_more.png') ?>"
                                        height="10px"
                                        width="auto"/></div>
                            </div>
                        </div>

                        <div class="inner-card-row4">
                            <div class="inner-card-row4-content bc-flex">
                                <div class="inner-card-row4-content2 bc-flex">让投资人先看到你的脸，让创业者也看到你的脸</div>
                            </div>
                        </div>

                        <div class="inner-card-row5 bc-flex">
                            <div class="bc-flex">
                                <img  class="inner-card-row5-video-image" src="<?php echo base_url('assets/images/default_video.png'); ?>"/>
                            </div>
                        </div>


                    </div>

                </div>
                <div id="notify-cover-div" class="notify-cover-div" style="height:340px;">

                    <div class="inner-notify-HTML scroll">
                        <div class="tag bc-flex">

                            <div class="bc-flex">
                                <img class="margin-10px" src="<?php echo base_url('assets/images/collect01.png'); ?>" width="auto" height="16"/>
                                <font class="margin-5px notify-tit" color="#898a8a">1万+</font>
                            </div>

                            <div class="ch-left-border bc-flex">
                                <img class="margin-10px" src="<?php echo base_url('assets/images/collect01.png'); ?>" width="auto" height="16"/>
                                <font class="margin-5px notify-tit" color="#898a8a">1654</font>
                            </div>

                            <div class="ch-left-border bc-flex">
                                <img class="margin-10px" src="<?php echo base_url('assets/images/comment01.png'); ?>" width="auto" height="16"/>
                                <font class="margin-5px notify-tit" color="#898a8a">1890</font>
                            </div>

                            <div class="ch-left-border bc-flex">
                                <img class="margin-10px" src="<?php echo base_url('assets/images/contact01.png'); ?>" width="auto" height="16"/>
                                <font class="margin-5px notify-tit" color="#898a8a">4568</font>
                            </div>
                        </div>

                        <div class="notify-row1 notify-border bc-flex">
                            <div class="notify-col1 bc-flex">
                                <div class="bc-flex">
                                    <image class="image-picture1" src="<?php echo base_url('assets/images/default_person1.png'); ?>">
                                </div>
                            </div>
                            <div class="notify-col2">
                                <div class="notify-col2-row1">
                                    <font class="notify-col2-row1-name" color="black">姓名</font>
                                </div>
                                <div class="notify-col2-row2 bc-flex"><font color="grey">回复回复回复回复回复回复回复回复回复回复回复回复回复回复</font>
                                </div>
                                <div class="notify-col2-row3">
                                    <font color="grey">1 minute ago</font>
                                </div>
                            </div>
                        </div>

                        <div class="notify-row1 notify-border bc-flex">
                            <div class="notify-col1 bc-flex">
                                <div class="bc-flex">
                                    <image class="image-picture1" src="<?php echo base_url('assets/images/default_person1.png'); ?>">
                                </div>
                            </div>
                            <div class="notify-col2">
                                <div class="notify-col2-row1">
                                    <font class="notify-col2-row1-name" color="black">姓名</font>
                                </div>
                                <div class="notify-col2-row2 bc-flex"><font color="grey">回复回复回复回复回复回复回复回复回复回复回复回复回复回复</font>
                                </div>
                                <div class="notify-col2-row3">
                                    <font color="grey">1 minute ago</font>
                                </div>
                            </div>
                        </div>

                        <div class="notify-row1 notify-border bc-flex">
                            <div class="notify-col1 bc-flex">
                                <div class="bc-flex">
                                    <image class="image-picture1" src="<?php echo base_url('assets/images/default_person1.png'); ?>">
                                </div>
                            </div>
                            <div class="notify-col2">
                                <div class="notify-col2-row1">
                                    <font class="notify-col2-row1-name" color="black">姓名</font>
                                </div>
                                <div class="notify-col2-row2 bc-flex"><font color="grey">回复回复回复回复回复回复回复回复回复回复回复回复回复回复</font>
                                </div>
                                <div class="notify-col2-row3">
                                    <font color="grey">1 minute ago</font>
                                </div>
                            </div>
                        </div>

                        <div class="notify-row1 notify-border bc-flex">
                            <div class="notify-col1 bc-flex">
                                <div class="bc-flex">
                                    <image class="image-picture1" src="<?php echo base_url('assets/images/default_person1.png'); ?>">
                                </div>
                            </div>
                            <div class="notify-col2">
                                <div class="notify-col2-row1">
                                    <font class="notify-col2-row1-name" color="black">姓名</font>
                                </div>
                                <div class="notify-col2-row2 bc-flex"><font color="grey">回复回复回复回复回复回复回复回复回复回复回复回复回复回复</font>
                                </div>
                                <div class="notify-col2-row3">
                                    <font color="grey">1 minute ago</font>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

            <div class="option-part bc-flex">
                <div class="whitebubble-top-left-right option-1 bc-flex" onclick="showContact('notify-cover-div','card-cover-div');">
                    <img src="<?php echo base_url('assets/images/me02.png'); ?>" height="20px" width="auto"/>
                    <font class="option-font-style">我的卡片</font>
                </div>

                <div class="option-2 bc-flex whitebackground-right-option" onclick="showContact('card-cover-div','notify-cover-div');">
                    <div class="greybubble-top-right-bottom-left-right option-insert bc-flex">
                        <img src="<?php echo base_url('assets/images/ring02.png'); ?>" height="20px" width="auto"/>
                        <font class="option-font-style">我的消息</font>
                    </div>
                </div>
            </div>

        </div>

        <div class="me-3div-row2 bc-flex">
            <div class="notify-button whitebubble"  onclick="showing()">

                <div class="notify-button-row1 bc-flex">
                    <img id="img1" class="" src="<?php echo base_url('assets/images/me_public01.png'); ?>" width="62px" height="auto"/>
                </div>
                <div class="notify-button-row2 bc-flex"><font color="#898a8a">公开卡片</font></div>

            </div>
        </div>

    </div>

</div>


<footer class="footer">
    <div class="container">
        <div class="icon-footer bc-flex font-xihei" style="">
            <div class="icon-footer-div" onclick="toHref('<?php echo base_url("level_1/home"); ?>')">
                <div class="icon-footer-row1 bc-flex">
                    <img class="icon-footer-image" src="<?php echo base_url('assets/images/home01.png'); ?>"></i>
                </div>
                <div class="icon-footer-row2">首页</div>
            </div>
            <div class="icon-footer-div" onclick="toHref('<?php echo base_url("level_1/search"); ?>')">
                <div class="icon-footer-row1 bc-flex">
                    <img class="icon-footer-image" src="<?php echo base_url('assets/images/search01.png'); ?>"></i>
                </div>
                <div class="icon-footer-row2">搜索</div>
            </div>
            <div class="icon-footer-div" onclick="toHref('<?php echo base_url("level_1/people"); ?>')">
                <div class="icon-footer-row1 bc-flex">
                    <img class="icon-footer-image" src="<?php echo base_url('assets/images/people01.png'); ?>"></i>
                </div>
                <div class="icon-footer-row2">我的人</div>
            </div>
            <div class="icon-footer-div" onclick="toHref('<?php echo base_url("level_1/me"); ?>')">
                <div class="icon-footer-row1 bc-flex">
                    <img class="icon-footer-image" src="<?php echo base_url('assets/images/me02.png'); ?>"></i>
                </div>
                <div class="icon-footer-row2">我</div>
            </div>
        </div>

    </div>
</footer>



<script>
    function toHref(url) {
        window.location.href = url;
    }
    //隐藏前面 显示后面
    function showContact(ctOne, ctTwo) {
        document.getElementById(ctTwo).style.visibility = "visible";
        document.getElementById(ctOne).style.visibility = "hidden";
    }
    var numb = 0;
    function showing() {
        if (numb == 0) {
            numb = 1;
            document.getElementById('img1').setAttribute('src', '<?php echo base_url('assets/images/me_public02.png'); ?>');
        }
        else {
            numb = 0;
            document.getElementById('img1').setAttribute('src', '<?php echo base_url('assets/images/me_public01.png'); ?>');
        }
    }
</script>

</body>


</html>