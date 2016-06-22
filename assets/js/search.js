/**
 * Created by Joe on 2016/6/22.
 */

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
    var result = "没有更多\""+searchText+"\"的搜索结果";
    var xmlhttp = new XMLHttpRequest();
    var searchResultListDiv = document.getElementById("searchResultList");

    xmlhttp.onreadystatechange = function () {
        //执行如下代码
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            searchResultListDiv.innerHTML = "";
            if (xmlhttp.responseText == "no more result") {
                // 没有数据返回
                var sysInfoDiv = document.createElement("div");
                sysInfoDiv.className = "search-sys-info bc-flex";
                sysInfoDiv.id = "search-sys-info";
                document.getElementById("searchResultList").appendChild(sysInfoDiv);
                document.getElementById("search-sys-info").innerHTML = result;
                document.getElementById("search-sys-info").style.display = "flex";
            } else {
                // 有数据返回
                var searchResult = JSON.parse(xmlhttp.responseText);
                //测试用
                //console.log(searchResult.length);// 总共length-1个结果
                //测试用
                //声明background div
                // 总共length-1个结果 从i=1开始
                if(searchResult.length>1) {
                    for (i = 1; i < searchResult.length; i++) {
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
                        searchResultImg.id = "searchResultImg" + i;
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
                        searchResultCompany.id = "searchResultCompany" + i;
                        searchResultCol2.appendChild(searchResultCompany);
                        // 第三行 标签sss
                        var searchResultTag = document.createElement("div");
                        searchResultTag.className = "search-col2-row3";
                        searchResultTag.id = "searchResultTag" + i;
                        searchResultCol2.appendChild(searchResultTag);
                        // 第一行 姓名
                        var searchResultName = document.createElement("div");
                        searchResultName.className = "search-col2-row1-name";
                        searchResultName.id = "searchResultName" + i;
                        searchResultCol2row1.appendChild(searchResultName);
                        // 第一行 角色
                        var searchResultRole = document.createElement("div");
                        searchResultRole.className = "search-col2-row1-role";
                        searchResultRole.id = "searchResultRole" + i;
                        searchResultCol2row1.appendChild(searchResultRole);
                    }

                    // 把数据分开 searchResult[1]是object， searchResult[1]["id"] 对应id行
                    //  'id' => "001",   'name' => "牛肉个",  'img' => "path",  'role' => "创始仁",  'company' => "先看人优先公司",      'tag' => "O2O",
                    for (j = 1; j < searchResult.length; j++) {
                        // 图片
                        document.getElementById("searchResultImg" + j).src = searchResult[j]["img"];
                        // 公司
                        document.getElementById("searchResultCompany" + j).innerHTML = searchResult[j]["company"];
                        // 姓名
                        document.getElementById("searchResultTag" + j).innerHTML = searchResult[j]["tag"];
                        // 姓名
                        document.getElementById("searchResultName" + j).innerHTML = searchResult[j]["name"];
                        // 角色
                        document.getElementById("searchResultRole" + j).innerHTML = searchResult[j]["role"];
                    }
                }else{
                    //输出没有result信息
                    var sysInfoDiv = document.createElement("div");
                    sysInfoDiv.className = "search-sys-info bc-flex";
                    sysInfoDiv.id = "search-sys-info";
                    document.getElementById("searchResultList").appendChild(sysInfoDiv);
                    document.getElementById("search-sys-info").innerHTML = result;
                    document.getElementById("search-sys-info").style.display = "flex";
                }
            }
            //输出bug信息
//                var sysInfoDiv = document.createElement("div");
//                sysInfoDiv.className = "search-sys-info bc-flex";
//                sysInfoDiv.id = "search-sys-info";
//                document.getElementById("searchResultList").appendChild(sysInfoDiv);
//                document.getElementById("search-sys-info").innerHTML = result;
//                document.getElementById("search-sys-info").style.display = "flex";
        }else{
            //测试用
            //console.log(xmlhttp.responseText);
            //测试用
        }
    };
    // true 表明会调用onreadystatechange里面的函数，false则不会
    xmlhttp.open("GET", "<?php echo base_url('L1/search/searching');?>?searchText=" + searchText, true);
    var searchList = xmlhttp.responseText;
    xmlhttp.send();
}
