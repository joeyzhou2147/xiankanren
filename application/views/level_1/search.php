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
    <meta name="viewport"
          content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
                <img src="<?php echo base_url('assets/images/search02.png') ?>"
                     style="position: absolute;width: auto;height: 1.4rem;top:1.2rem;left: 1.7rem;">

                <form class="search-top-box-form bc-flex" method="post" onsubmit="return false;">
                    <input type="text" class="search-box" id="search-top-box-input" name="searchText" required
                           autofocus="true" x-webkit-speech
                           autocomplete="on" placeholder="先看人"/>
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
    <div class="search-background" id="searchResultList">


        <div class="sea-container bc-flex">
            <div class="search-col1 bc-flex">
                <image class="image-sea-photo" id="search-col2-row1-img"
                       src="<?php echo base_url('assets/images/default_person1.png'); ?>">

            </div>
            <div class="search-col2">
                <div class="search-col2-row1 bc-flex">
                    <div class="search-col2-row1-name" id="search-col2-row1-name"></div>
                    <div class="search-col2-row1-role" id="search-col2-row1-role"></div>
                </div>
                <div class="search-col2-row2">
                    <div color="black" id="search-col2-row1-company"></div>
                </div>
                <div class="search-col2-row3" style="" id="search-col2-row1-tag"></div>
            </div>
        </div>


        <div class="sea-container bc-flex">
            <div class="search-col1 bc-flex">
                <div class="" style="display:flex;align-items:center;justify-content:center">
                    <image class="image-sea-photo" id="search-col2-row1-img"
                           src="<?php echo base_url('assets/images/default_person1.png'); ?>">
                </div>
            </div>
            <div class="search-col2">
                <div class="search-col2-row1 bc-flex">
                    <div class="search-col2-row1-name" id="search-col2-row1-name">牛肉哥</div>
                    <div class="search-col2-row1-role" id="search-col2-row1-role">创始人</div>
                </div>
                <div class="search-col2-row2">
                    <div color="black" id="search-col2-row1-company"><a class="search-keyword">先看人</a>技术网络科技有限公司</div>
                </div>
                <div class="search-col2-row3" style="font-size: 12px; color: #7a7979" id="search-col2-row1-tag">
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

        <div class="search-sys-info bc-flex" id="search-sys-info">System Information</div>


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
    function toHref(url) {
        window.location.href = url;
    }
    document.getElementById('search-top-box-input').addEventListener("change", function () {
        if (this.value.length == 0) {
            document.getElementById("search-sys-info").innerHTML = "请输入关键字";
            document.getElementById("search-sys-info").style.display = "flex";
            return;
        }
        //this.value is the search text
        // window.alert(this.value);
        sendSearch(this.value);
        //window.alert(result);
    })
    function sendSearch(searchText) {
        //var searchText = document.getElementById('search-top-box-input').value;
        var result = "没有更多的搜索结果";
        var xmlhttp = new XMLHttpRequest();
        var searchResultListDiv = document.getElementById("searchResultList");
        xmlhttp.onreadystatechange = function () {
            //执行如下代码
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                searchResultListDiv.innerHTML="";
                if (xmlhttp.responseText == "no more result") {
                    // 没有数据返回
                    var sysInfoDiv = document.createElement("div");
                    sysInfoDiv.className = "search-sys-info bc-flex";
                    sysInfoDiv.id = "search-sys-info";
                    searchResultListDiv.appendChild(sysInfoDiv);
                    document.getElementById("search-sys-info").innerHTML = xmlhttp.responseText;
                    document.getElementById("search-sys-info").style.display = "flex";
                } else {
                    // 有数据返回
                    var searchResult = JSON.parse(xmlhttp.responseText);
                    console.log(searchResult.length);// 总共length-1个结果
                    //声明background div
                    // 总共length-1个结果 从i=1开始
                    for (i = 1; i < searchResult.length; i++){
                        // 创建外div
                        var searchResultDiv = document.createElement("div");
                        searchResultDiv.className = "sea-container bc-flex";
                        searchResultListDiv.appendChild(searchResultDiv);
                        var searchResultCol1 = document.createElement("div");
                        searchResultCol1.className = "search-col1 bc-flex";
                        searchResultDiv.appendChild(searchResultCol1);
                        // 第一列 图片
                        var searchResultImg = document.createElement("img");
                        searchResultImg.className = "image-sea-photo";
                        searchResultImg.id = "searchResultImg"+i;
                        searchResultCol1.appendChild(searchResultImg);
                        var searchResultCol2 = document.createElement("div");
                        searchResultCol2.className = "search-col2";
                        searchResultDiv.appendChild(searchResultCol2);
                        var searchResultCol2row1 = document.createElement("div");
                        searchResultCol2row1.className = "search-col2-row1 bc-flex";
                        searchResultCol2.appendChild(searchResultCol2row1);
                        // 第二行 公司
                        var searchResultCompany = document.createElement("div");
                        searchResultCompany.className = "search-col2-row2";
                        searchResultCompany.id = "searchResultCompany"+i;
                        searchResultCol2.appendChild(searchResultCompany);
                        // 第三行 标签sss
                        var searchResultTag = document.createElement("div");
                        searchResultTag.className = "search-col2-row3";
                        searchResultTag.id = "searchResultTag"+i;
                        searchResultCol2.appendChild(searchResultTag);
                        // 第一行 姓名
                        var searchResultName = document.createElement("div");
                        searchResultName.className = "search-col2-row1-name";
                        searchResultName.id = "searchResultName"+i;
                        searchResultCol2row1.appendChild(searchResultName);
                        // 第一行 角色
                        var searchResultRole = document.createElement("div");
                        searchResultRole.className = "search-col2-row1-role";
                        searchResultRole.id = "searchResultRole"+i;
                        searchResultCol2row1.appendChild(searchResultRole);
                    }

                    // 把数据分开 searchResult[1]是object， searchResult[1]["id"] 对应id行
                    //  'id' => "001",   'name' => "牛肉个",  'img' => "path",  'role' => "创始仁",  'company' => "先看人优先公司",      'tag' => "O2O",
                    for (j = 1; j < searchResult.length; j++){
                        // 图片
                        document.getElementById("searchResultImg"+j).src = searchResult[j]["img"];
                        // 公司
                        document.getElementById("searchResultCompany"+j).innerHTML = searchResult[j]["company"];
                        // 姓名
                        document.getElementById("searchResultTag"+j).innerHTML = searchResult[j]["tag"];
                        // 姓名
                        document.getElementById("searchResultName"+j).innerHTML = searchResult[j]["name"];
                        // 角色
                        document.getElementById("searchResultRole"+j).innerHTML = searchResult[j]["role"];
                    }
                }
                return "没有更多的搜索结果0";
            }
        };
        // true 表明会调用onreadystatechange里面的函数，false则不会
        xmlhttp.open("GET", "<?php echo base_url('L1/search/searching');?>?searchText=" + searchText, true);
        var searchList = xmlhttp.responseText;
        xmlhttp.send();
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