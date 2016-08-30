<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="{{ asset("/css/getCar.css") }}">
    <title>选择上下车站点</title>
</head>
<body>
<!-- 头部 [[ -->
<header class="header">
    <h1 class="title">广州-深圳</h1>
    <a class="u_btn btn btn_return" href="javascript:history.go(-1);">
        <span class="icon icon_angle_left"></span>
    </a>
</header>
<!-- 头部 ]] -->
<form id="fm1" name="fm1" action="/mztxhCode/public/test" method="POST" >

    <!-- main [[ -->
    <div class="main bus_detail">
        <div class="banner">
            <div class="path_site plr20 mtb10">
                <h2 class="title u_title_mian mb20">
                    选择上下车站点
                    <span class="hint">（点击站点）</span>
                </h2>

                <!-- 上车 站点 [[ -->
                <ul class="site_ul geton pathsite_select">

                    <!-- 站点 -->

                    <li class="site_list  ">
                        <!-- 选择 -->
                        <label>
                            <input class="radio" type="radio" name="geton" value="2754" data-lat="23.146582" data-lng="113.26794"  >
                        </label>

                        <span class="icon">始</span>17:30
                        越秀公园地铁B1出口
                    </li>
                    <li class="site_list">
                        <!-- 选择 -->
                        <label>
                            <input class="radio" type="radio" name="geton" value="3378" data-lat="23.137487" data-lng="113.338374"  >
                        </label>

                        <span class="icon">上</span>18:00
                        石牌桥地铁A出口
                    </li>

                </ul>
                <!-- 上车站点 ]] -->

                <p class="path_middle"></p>

                <!-- 下车 站点 [[ -->
                <ul class="site_ul getoff pathsite_select">


                    <li class="site_list">
                        <label>
                            <input class="radio" type="radio" name="getoff" value="3420" data-lat="22.544444" data-lng="113.946086">
                        </label>
                        <span class="icon">下</span>
                        深大北门
                    </li>
                    <li class="site_list">
                        <label>
                            <input class="radio" type="radio" name="getoff" value="3419" data-lat="22.54297" data-lng="113.9807">
                        </label>
                        <span class="icon">下</span>
                        世界之窗地铁站
                    </li>
                    <li class="site_list">
                        <label>
                            <input class="radio" type="radio" name="getoff" value="2391" data-lat="22.546151" data-lng="114.067592">
                        </label>
                        <span class="icon">终</span>
                        市民中心地铁E口
                    </li>
                </ul>
                <!-- 下车 站点 ]] -->
            </div>




            {{ csrf_field() }}
            <!-- 为选择上下车站点 提示 -->
            <!-- 功能区域 [[ -->
            <div class="m_fun_botton">
                <div class="btn_warp">
                    <!--                       <button class="btn u_btn e_btn_big e_btn_orange" disabled>确认站点</button>-->
                    <input type="submit" class="btn u_btn e_btn_big e_btn_orange" id="btnsub" value="确认站点">

                </div>
            </div>
        </div>
</form>
</body>
</html>
