<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>填写订单</title>

    <link rel="stylesheet" href="{{ asset("/css/getCar.css") }}">
</head>
<body>
<!-- 头部 [[ -->
<header class="header">
    <h1 class="title">填写订单</h1>
    <a class="u_btn btn btn_return" href="javascript:history.go(-1);">
    </a>
</header>

<form id="fm1" name="fm1" action="/mztxhCode/public/orderPost" method="POST">

    <!-- main [[ -->
    <div class="main order_info">
        <!-- 车票 [[ -->
        <div class="m_ticket plr20">
            <div class="headinfo">
                <!-- <span class="icon icon_bmcoach"></span> -->
                <!--<span class="txt">高一级 粤U152010</span>-->
                <!-- <span class="txt"></span> -->
                <span class="txt">车牌待定</span>
                <time class="time">{{ $date }}&nbsp;周{{ $day }}</time>
            </div>

            <ul class="site">
                <li class="list site_city">
                    <span class="depart">{{ $start }}</span>
                    <span class="terminal">{{ $end }}</span>
                    <time class="txt time">{{ $time }}</time>
                </li>

                <li class="list station">
                    <span class="depart">{{ $goton }}</span>
                    <span class="terminal">{{ $gotoff }}</span>
                    <span class="txt">出发</span>
                </li>
            </ul>

        </div>
        <!-- 车票 ]] -->

        <div class="order_import">
            <div class="head plr20">
                <div class="quantity">
                    <span id="sufficientTxt">余票充足</span>
                </div>
                <div class="price">
                    票价
                    <span class="txt" id="ticketPrice">&yen;{{ $price }} </span>
                    <input type="hidden" name="price" id="price" value={{ $price }} />
                </div>
            </div>



            <ul class="m_list e_list_import">
                <li class="list plr20">
                    <input type="number" name="count" style="width: 300px;" value=1  id="count"/>


                    <span class="title">成人票</span>
                </li>

                <li class="list plr20 none" id="childTicketBox">
                    <div class="item_amount u_plusminus">
                        <span class="icon_minus_outline minus"></span>
                        <input class="text text_amount" id="ticketChildren" type="text" value="0" readonly autocomplete="off">
                        <span class="icon_plus plus"></span>
                    </div>
                </li>
            </ul>
        </div>
        <!-- 优惠券 ]] -->

        <!-- 联系信息 [[ -->
        <div class="mtb10">
            <h2 class="e_title_little plr20">联系信息</h2>
            <ul class="m_list e_list_import mb10">
                <li class="list plr20">
                    <input type="text" class="input import" id="UserName" name="username" placeholder="{{ $name }}" value="{{ $name }}" maxlength="6">
                </li>
                <li class="list plr20">
                    <input type="text" class="input import" id="UserPhone" name="tel" placeholder="{{ $tel }}" value={{ $tel }} maxlength="11">
                </li>
            </ul>
        </div>
        <!-- 联系信息 ]] -->

        <div class="pay_way mtb10">
            <label style="margin-left: 23px;font-size: 20px;">验证码:</label>
            <input type="text" class="form-control" style="width: 200px;height: 30px;margin-left:1%;" name="checkCode"/>
            <img src="/mztxhCode/public/checkcode" style="width: 100px;margin-left:2%;" onclick="getCode()" id="code"/>
            @if (isset($checkCode))
                <span class="help-block" style="margin-left: 35%;">
                    <strong>{{ $checkCode }}</strong>
                </span>
            @endif
        </div>
        <div class="m_fun_botton g_col_618382">
            <div class="total w_per618">
                <div class="pl20">
                        <span class="title">
                            合计&nbsp;
                            <span class="color" id="amount">
                                &yen; {{ $price }}
                            </span>
                        </span>
                    <span class="hint" id="amountAppend">(共1张)</span>
                </div>
            </div>
            <div class="btn_warp w_per382">
                <!-- <a href="javascript:void(0);" class="btn u_btn e_btn_orange e_btn_big" id="btnsub">提交订单</a> -->
                <button class="btn u_btn e_btn_orange e_btn_big" id="btnsub" type="submit" name="button">提交订单</button>
            </div>
        </div>
        <div class="m_fun_botton_block"></div>
        <!-- 功能区域 ]] -->

    </div>
    {{ csrf_field() }}
</form>


<script type="text/javascript" src="http://cdn.taobus.com/libs/jquery/2.2.3/jquery.min.js"></script>
<script src="/Scripts/sealibs.js" type="text/javascript"></script>
<script src="/Scripts/layer.m.js" type="text/javascript"></script>

<script src="/Scripts/base.js"></script>
<script src="/Scripts/common.js"></script>
<script src="/Scripts/page.js"></script>

<script type="text/javascript">
   $( function(){
       $('#count').bind('input propertychange', function() {
           var value =  $('#count').val();
           var price = $("#price").val();

           if(value > 3){
               alert('每人最多只能购买3张票');
               return;
           }
           var sum = value*price;
           value="共("+value+")张";
          $("#amountAppend").text(value);

           value="￥"+sum;
           $("#amount").text(value);
       });
   });
</script>
</body>
</html>
