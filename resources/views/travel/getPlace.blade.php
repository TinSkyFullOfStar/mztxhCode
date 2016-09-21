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
    <h1 class="title">{{ $start }}-{{ $end }}</h1>
    <a class="u_btn btn btn_return" href="javascript:history.go(-1);">
        <span class="icon icon_angle_left"></span>
    </a>
</header>
<!-- 头部 ]] -->
<form id="fm1" name="fm1" action="/mztxhCode/public/getCar" method="POST" >

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

                    @if($up==0)
                        {!! $list[1] !!}
                    @else
                        {!! $list[0] !!}
                    @endif


                </ul>
                <!-- 上车站点 ]] -->

                <p class="path_middle"></p>

                <!-- 下车 站点 [[ -->
                <ul class="site_ul getoff pathsite_select">
                    @if($up==0)
                        {!! $list[0] !!}
                    @else
                        {!! $list[1] !!}
                    @endif
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
