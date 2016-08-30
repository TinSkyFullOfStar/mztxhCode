<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">

    <title>首页-梅州同乡会</title>

    <!-- mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset("/css/getCar.css") }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $("#button1").bind("click", function() {
                $( "#div1" ).dialog();
            });

            $("#button2").bind("click",function(){
                var city1=$("#txtCity1").text();
                if(city1=="城市")
                    alert("请先选择出发城市");
                else
                    $("#div1").dialog();
            });

            $("#sure1").bind("click",function(){
                var str=$('input:radio[name="test1"]:checked').val();
                var city1=$("#txtCity1").text();
                var city2=$("#txtCity1").text();

                if(str!=city2&&city1=="城市") {
                    $("#txtCity1").text(str);
                    $("#txtCity1").css("color","#000000");
                    $("#div1").dialog("close");
                }else if(city1!=str){
                    $("#txtCity2").text(str);
                    $("#txtCity2").css("color","#000000");
                    $("#div1").dialog("close");
                }else
                    alert("出发地与目的地不能相同");
            });


            $("#btn_day").bind("click",function(){
                $("#div2").dialog();
            })

            $("#sure2").bind("click",function () {
                var str=$('input:radio[name="test2"]:checked').val();
                $("#txtDay").text(str);
                $("#txtDay").css("color","#000000");
                $("#div2").dialog("close");
            })

            $("#btn_query").bind("click",function(){
                var city1=$("#txtCity1").text();
                var city2=$("#txtCity2").text();
                var date=$("#txtDay").text();

                var data='{"start":"'+city1+'", "end":"'+city2+'","date":"'+date+'"}';
                var url="http://192.168.0.100/mztxhCode/public/foo/"+data;
                window.location = url;
            })

        });

    </script>
</head>
<body>
<!-- 头部 [[ -->
    <header class="header">
        <h1 class="title">预订</h1>
    </header>
    <!-- main [[ -->
    <div class="main">
        <!-- 预订表单 [[ -->
        <div class="reservation">
            <div class="wireframe">
                <ul class="m_list_icon">

                    <li class="list">
                        <a href="javascript:void(0);" id="button1" class="link">
                            <span class="icon_r icon_angle_right"></span>
                            <span class="icon_l icon_location-pin icon_depart"></span>
                            <div class="title" id="startbox">
                                <span class="inquire_city" id="txtCity1">城市</span>
                                <span class="site" id="txtAds1">出发起点</span>
                            </div>
                        </a>
                    </li>


                    <li class="list">
                        <a href="javascript:void(0);" id="button2" class="link">
                            <span class="icon_r icon_angle_right"></span>
                            <span class="icon_l icon_location-pin icon_terminal"></span>
                            <div class="title" id="endbox">
                                <span class="inquire_city" id="txtCity2">城市</span>
                                <span class="site" id="txtAds2">到达目的地</span>
                            </div>
                        </a>
                    </li>
                </ul>

                <!-- 转换地址 [[ -->
                <div class="exchange"><span class="icon icon_transition_outline" id="btn_chgange"></span></div>
                <!-- 转换地址 [[ -->
            </div>

            <!-- 日期 [[ -->
            <ul class="m_list_icon date">
                <li class="list">
                    <a class="link" id="btn_day" href="javascript:void(0);">
                        <span class="icon_l icon_calendar"></span>
                        <span class="title" id="txtDay">2016-8-18</span>
                    </a>
                </li>
            </ul>


            <!-- 日期 ]] -->
                <div id="div1" style="display:none;;">
                    <ul>
                        <li>
                            <span style="font-size: 20px">华广</span>
                            <input type="radio" name="test1" value="华广"></li>
                        <li>
                            <span style="font-size: 20px">梅州</span>
                            <input type="radio" name="test1" value="梅州">
                        </li>
                        <li>
                            <input type="button" value="确定" style="font-size: 20px" id="sure1">
                        </li>
                    </ul>
                </div>
                <div id="div2" style="display:none;">
                    <ul>
                        <li>
                            <span style="font-size: 20px">2016-12-11 12:00</span>
                            <input type="radio" name="test2" value="2016-12-11 12:00"></li>
                        <li>
                            <span style="font-size: 20px">2016-12-11 18:00</span>
                            <input type="radio" name="test2" value="2016-12-11 18:00">
                        </li>
                        <li>
                            <input type="button" value="确定" style="font-size: 20px" id="sure2">
                        </li>
                    </ul>
                </div>

            <div class="plr10 ptb20">
                <a href="javascript:void(0);" class="u_btn e_btn_orange e_btn_font" id="btn_query" >查询</a>
            </div>
    </div>
</body>
</html>