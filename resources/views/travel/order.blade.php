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


<form id="fm1" name="fm1" action="/Home/OrderSubmit" method="POST">

    <!-- main [[ -->
    <div class="main order_info">
        <!-- 车票 [[ -->
        <div class="m_ticket plr20">
            <div class="headinfo">
                <!-- <span class="icon icon_bmcoach"></span> -->
                <!--<span class="txt">高一级 粤U152010</span>-->
                <!-- <span class="txt"></span> -->
                <span class="txt">车牌待定</span>
                <time class="time">16-08-19&nbsp;周五</time>
            </div>

            <ul class="site">
                <li class="list site_city">
                    <span class="depart">肇庆</span>
                    <span class="terminal">广州</span>
                    <time class="txt time">17:30</time>
                </li>

                <li class="list station">
                    <span class="depart">端州区广百时代广场东北门门口(即裕满石锅鱼旁)</span>
                    <span class="terminal">天河城东门</span>
                    <span class="txt">出发</span>
                </li>
            </ul>

        </div>
        <!-- 车票 ]] -->





        <div class="order_import">
            <div class="head plr20">
                <div class="quantity">
                    <span id="sufficientTxt">余票充足</span>

                    <span class="none" id="moreTicket">余票<i class="txt" id="seats">32</i></span>
                </div>
                <div class="price">
                    票价
                    <span class="txt" id="ticketPrice">&yen;20 </span>
                </div>
            </div>



            <ul class="m_list e_list_import">
                <li class="list plr20">
                    <span class="hint hint_import">每订单最多3张</span>

                    <div class="item_amount u_plusminus">
                        <span class="icon_minus_outline minus"></span>
                        <input class="text text_amount" id="ticketAdult" type="text" value="0" readonly autocomplete="off" >
                        <span class="icon_plus plus"></span>
                    </div>

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
        <ul class="discount m_list e_list_alonetxt" style="display: none; ">
            <li class="list plr20">
                <a href="javascript:void(0);" class="link">
                    <span class="icon_r icon_angle_right"></span>
                    <span class="hint" id="totalFavorableMoney">无</span>
                    <span class="title">优惠劵</span>
                </a>
            </li>
        </ul>
        <!-- 优惠券 ]] -->

        <!-- 联系信息 [[ -->
        <div class="mtb10">
            <h2 class="e_title_little plr20">联系信息</h2>
            <ul class="m_list e_list_import mb10">
                <li class="list plr20">
                    <input type="text" class="input import" id="UserName" placeholder="填写姓名" value='' maxlength="6">
                </li>
                <li class="list plr20">
                    <input type="text" class="input import" id="UserPhone" placeholder="联系手机" value="" maxlength="11">
                </li>
            </ul>
        </div>
        <!-- 联系信息 ]] -->

        <!-- 支付方式 [[ -->
        <div class="pay_way mtb10">
            <h2 class="e_title_little plr20">支付方式</h2>
            <ul class="pay_list e_pay_list_icono plr20 mb10 ">
                <li class="list u_radio">
                    <label>
                        <input class="radio" id="payway_online" type="radio" name="payway_from" checked >
                        <div class="wrap">
                            <span class="icon_pay"></span>
                            <span class="txt_pay">在线支付</span>
                            <span class="icon icon_radio"></span>
                        </div>
                    </label>
                </li>

                <li class="list u_radio">
                    <label>
                        <input class="radio" id="payway_oncar" type="radio" name="payway_from">
                        <div class="wrap">
                            <span class="icon_pay"></span>
                            <span class="txt_pay">上车支付</span>
                            <span class="icon icon_radio"></span>
                        </div>
                    </label>
                </li>
            </ul>

        </div>
        <div class="m_fun_botton g_col_618382">
            <div class="total w_per618">
                <div class="pl20">
                        <span class="title">
                            合计&nbsp;
                            <span class="color" id="amount">
                                &yen; 0
                            </span>
                        </span>
                    <span class="hint" id="amountAppend">(共0张)</span>
                </div>
            </div>
            <div class="btn_warp w_per382">
                <!-- <a href="javascript:void(0);" class="btn u_btn e_btn_orange e_btn_big" id="btnsub">提交订单</a> -->
                <button class="btn u_btn e_btn_orange e_btn_big" id="btnsub" type="button" name="button">提交订单</button>
            </div>
        </div>
        <div class="m_fun_botton_block"></div>
        <!-- 功能区域 ]] -->

    </div>
    <!-- main ]] -->

    <input type="hidden" id="LineId" value="88562" />

    <input type="hidden" id="pce1" value="25.0000"   />
    <input type="hidden" id="pce2" value="15.0000" />

    <input type="hidden" id="UCid" value="" />
    <input type="hidden" id="UCPrice" value="20" />
    <input type="hidden" id="MinSpend" value="0" />

</form>


<script type="text/javascript" src="http://cdn.taobus.com/libs/jquery/2.2.3/jquery.min.js"></script>
<script src="/Scripts/sealibs.js" type="text/javascript"></script>
<script src="/Scripts/layer.m.js" type="text/javascript"></script>

<script src="/Scripts/base.js"></script>
<script src="/Scripts/common.js"></script>
<script src="/Scripts/page.js"></script>

<script type="text/javascript">

    //初始化 统一入口
    function init(){

        var couponList;
        var mobile=0;

        //是否有参加优惠
        var isFavorable=false;

        //未登录 优惠为false
        if(mobile==""){
            isFavorable=false;
        }
        console.log(isFavorable)

        //低于数值显示 具体票数
        var showTicket=20;
        //票数
        var ticketNum=33;

        //每张订单票数上限
        var maxTicket=3;

        //购选儿童票按钮
        var $btnBuyChildren=$("#btnBuyChildren");
        //儿童票数Box
        var $childTicketBox=$("#childTicketBox");

        //儿童票价wrap
        var $childPrice=$(".child_price");

        //成人票数
        var $ticketAdult=$("#ticketAdult");
        //儿童票数
        var $ticketChildren=$("#ticketChildren");

        //选择票数框
        var eInput=[
            $ticketAdult,
            $ticketChildren
        ];

        //票成人价
        var ticketPriceAdult=20.0;

        //票儿童价
        var ticketPriceChild=15.0;

        //余票数组
        var remainTicket=[
            ticketNum
        ];

        var $seats=$("#seats");
        //余票文本ID数组
        var remainTicketTxt=[
            $seats
        ];

        //计算的金额元素集合
        var prices=[
            ticketPriceAdult,
            ticketPriceChild
        ];

        //票数数组
        var ticketNums=[
            $ticketAdult,
            $ticketChildren
        ];

        //余票显示
        if( ticketNum < showTicket ){
            $("#sufficientTxt").addClass('none');
            $("#moreTicket").removeClass('none');
        }

        //元素是否选中
        function isBuyChildTicket(e){
            var $e=$("#"+e);
            var val=$e.is(':checked');
            return val
        }

        //更新余票
        function unpdateRemainTicket(e,eTxt,state){
            var $e=e,
                    $eTxt=eTxt;
            var $eL= $e.length,
                    $eTxtL= $eTxt.length;

            switch (state){
                case "plus":
                    for (var i = $eL - 1; i >= 0; i--) {
                        $e[i]++;
                        $($eTxt[i]).html($e[i]);
                    }

                    break;

                case "minus":
                    for (var i = $eL - 1; i >= 0; i--) {
                        $e[i]--;
                        $($eTxt[i]).html($e[i]);
                    }

                    break;
                default:
                    console.log("参数错误");
            }

            // console.log($e)
            return $e
        }

        //更新合计票数
        function unpdateTotalTicketNumber(e){
            var $e=e;
            $eL=$e.length;
            var num=0;
            for (var i = $eL - 1; i >= 0; i--) {
                num = num+ parseInt($e[i].val());
            }
            // console.log(num);
            return num
        }

        //当前总价
        function totalPrices(prices,ticketNums){
            var num=0;
            for (var i =0; i<prices.length; i++) {
                // num=num+prices[i]*ticketNums[0].val();
                console.log("票价"+prices[i])
                if (chkEven(i)) {
                    num=num+prices[i]*ticketNums[0].val();
                }else{
                    num=num+prices[i]*ticketNums[1].val();
                }
            }
            num=num.toFixed(2);
            console.log(num);
            return num
        }

        //获取有效优惠券列表
        function getCouponListValid(mobile){
            var list;
            if (mobile==undefined) {
                alert("手机号码为空")
                return false
            }
            $.ajax({
                url: '/api/CouponList?mobile='+mobile,
                type: 'GET',
                dataType: 'json',
                async:false,
            }).done(function(data) {
                // console.log("success");
                //没有数据直接返回
                if(!data){
                    //没有可用优惠劵
                    console.log("当前用户没有可用优惠劵");
                    return false
                }else{
                    list=data;
                }
            });
            return list
        }

        //自动挑选最优优惠劵
        function autoCouponSelect(grossPrice,mobile,isFavorable){
            if (grossPrice==undefined || mobile==undefined) {
                console.log("参数有误");
                return false
            }
            //不能使用优惠劵
            if (isFavorable==false ) {
                return false
            }

            var couponList=getCouponListValid(mobile);
            var couponListL=couponList.length;

            // console.log(couponList);

            var moneyMinus=0,
                    number;

            //没有优惠劵
            if (couponListL==0  ) {
                return false
            }


            if ( couponListL==1 ) {
                console.log("只有一张优惠劵");
                if (couponList[0].MinSpend <= grossPrice) {
                    moneyMinus=couponList[0].Price;
                    number=0;
                }
            }else{
                //总价大于  满金额
                for (var i =0; i < couponListL; i++) {
                    if(couponList[i].MinSpend<=grossPrice){
                        if(moneyMinus<couponList[i].Price){
                            moneyMinus=couponList[i].Price;
                            number=i;
                        }
                    }
                }
            }

            if (number==undefined) {
                return false
            }else{
                console.log(couponList[number])
                return couponList[number]
            }
        }

        //更新使用优惠劵
        function undateFavorable(e,grossPrice,mobile){
            var favorableUse;
            favorableUse=autoCouponSelect(grossPrice,mobile,isFavorable);
            if (favorableUse) {
                $("#"+e).html("&yen; -"+favorableUse.Price);
            }else{
                $("#"+e).html("无");
            }
        }

        //更新合计金额
        function unpdateTotalMoney(e,grossPrice,mobile){
            var $e=$("#"+e);
            var favorable=autoCouponSelect(grossPrice,mobile,isFavorable);

            var totalPricesNum=totalPrices(prices,ticketNums);
            var totalMoney=0,
                    favorablePrice=0;

            if (favorable) {
                favorablePrice=favorable.Price;
            }else{
                favorablePrice=0;
            }

            totalMoney = totalPricesNum - favorablePrice;

            console.log(typeof totalMoney);

            // 格式化 除去小数为0
            // console.log(totalMoney+"之前")
            totalMoney=formatNumfloorWipeZero(totalMoney.toFixed(1));

            // console.log(totalMoney+"之后")
            $e.html("&yen;"+totalMoney);
            // console.log(totalMoney);
        }

        //加减票函数
        function addMinus2(state,e,maxTicket,typeTicket,eInput,remainTicket){

            //最大儿童票票数
            var maxChildrenTicket= Math.floor(maxTicket/2);

            //获取当前票数
            var adultSeatNum=parseInt(eInput[0].val());
            var childrenSeatNum=parseInt(eInput[1].val());

            var $e=$("#"+e),
                    $eVal=$e.val();

            // console.log($e,$eVal)

            if (state=="plus") {
                var $ePlus=$e.next();

                $ePlus.click(function(event) {

                    //当前选择票数
                    $eVal=$e.val();
                    // alert($eVal);
                    //去程余票 remainTicket[0]
                    //返程余票 remainTicket[1]
                    //儿童票上限 maxChildrenTicket

                    //当前选中票数
                    adultSeatNum=parseInt(eInput[0].val());
                    childrenSeatNum=parseInt(eInput[1].val());

                    //大于当前余票
                    if ( 0 < remainTicket[0] ) {
                        console.log("大于当前余票");

                        switch (typeTicket){
                            case "adult":
                                console.log("成人");

                                if ( (adultSeatNum+childrenSeatNum)< maxTicket ) {

                                    console.log("正常");
                                    unpdateRemainTicket(remainTicket,remainTicketTxt,"minus");
                                    $eVal++;
                                    $e.val($eVal);

                                } else {
                                    layer.open({
                                        content: "总票数不能多于 "+maxTicket+" 张" ,
                                        time:1
                                    });
                                    return false
                                }

                                break;

                            case "children":
                                console.log("儿童");
                                if ( (adultSeatNum+childrenSeatNum)< maxTicket ) {
                                    if(childrenSeatNum<adultSeatNum){
                                        console.log("正常");
                                        unpdateRemainTicket(remainTicket,remainTicketTxt,"minus");
                                        $eVal++;
                                        $e.val($eVal);
                                    }else{
                                        layer.open({
                                            content: "儿童票不能超过成人票" ,
                                            time:1
                                        });
                                        return false
                                    }
                                } else {
                                    layer.open({
                                        content: "总票数不能多于 "+maxTicket+" 张" ,
                                        time:1
                                    });
                                    return false
                                }
                                break;
                            default:
                                console.log("参数错误");
                        }

                        var grossPrice;

                        //合计票数
                        totalTicketNum=unpdateTotalTicketNumber(eInput);

                        //更新余票票数
                        // unpdateRemainTicket(remainTicket,remainTicketTxt,"minus");

                        //总价
                        grossPrice=totalPrices(prices,ticketNums);

                        //更新使用优惠
                        // undateFavorable("totalFavorableMoney",grossPrice,mobile);

                        var hintTxt;
                        if (isFavorable) {
                            //自动挑选最优优惠劵 使用最优
                            var foodDollar=autoCouponSelect(grossPrice,mobile,isFavorable);

                            if(foodDollar== false){
                                hintTxt="(共"+totalTicketNum+"张)";
                            }else{
                                hintTxt="(共"+totalTicketNum+"张，已优惠-"+foodDollar.Price+")";
                            };
                            $("#amountAppend").text(hintTxt);
                            //更新使用优惠
                            undateFavorable("totalFavorableMoney",grossPrice,mobile);
                        }else{
                            hintTxt="(共"+totalTicketNum+"张)";
                            $("#amountAppend").text(hintTxt);
                        }
                        //更新合计
                        unpdateTotalMoney("amount",grossPrice,mobile);

                    }else {

                        //当前余票小于等于0
                        if ( 0 >= remainTicket[0] || 0 >= remainTicket[1] ) {
                            console.log("当前余票小于等于0");
                            layer.open({
                                content: "没有余票了" ,
                                time:1
                            });
                            return false
                        }

                    }

                })
            }

            if (state=="minus") {
                var $eMinus=$e.prev();

                $eMinus.click(function(event) {

                    $eVal=$e.val();

                    //当前选中票数
                    adultSeatNum=parseInt(eInput[0].val());
                    childrenSeatNum=parseInt(eInput[1].val());

                    //选中票数多于0
                    if( $eVal > 0 ){

                        switch (typeTicket){
                            case "adult":
                                $eVal--;
                                $e.val($eVal);

                                //儿票不能小于0
                                if (childrenSeatNum>0) {
                                    //成票等于儿票时 成票减 儿票也减
                                    if ($eVal <= childrenSeatNum){
                                        eInput[1].val($eVal);
                                        console.log("儿票也减");
                                    }
                                }
                                break;

                            case "children":
                                console.log("儿童");
                                $eVal--;
                                $e.val($eVal);
                                break;
                            default:
                                console.log("参数错误");
                                return false
                        }

                        var grossPrice;

                        //合计票数
                        var totalTicketNum=unpdateTotalTicketNumber(eInput);

                        //更新余票票数
                        unpdateRemainTicket(remainTicket,remainTicketTxt,"plus");

                        //总价
                        grossPrice=totalPrices(prices,ticketNums);
                        console.log(grossPrice);

                        var hintTxt;
                        if (isFavorable) {
                            //自动挑选最优优惠劵 使用最优
                            // alert(mobile)
                            var foodDollar=autoCouponSelect(grossPrice,mobile,isFavorable);
                            if(foodDollar== false){
                                hintTxt="(共"+totalTicketNum+"张)";
                            }else{
                                hintTxt="(共"+totalTicketNum+"张，已优惠-"+foodDollar.Price+")";
                            };
                            $("#amountAppend").text(hintTxt);
                            //更新使用优惠
                            undateFavorable("totalFavorableMoney",grossPrice,mobile);
                        }else{
                            hintTxt="(共"+totalTicketNum+"张)";
                            $("#amountAppend").text(hintTxt);
                        }

                        //更新合计
                        unpdateTotalMoney("amount",grossPrice,mobile);
                    }else{
                        layer.open({
                            content: "票数不能小于 0" , time: 1
                        });
                    }

                });
            }
        }

        //加减票按钮
        addMinus2("plus","ticketAdult",maxTicket,"adult",eInput,remainTicket);
        addMinus2("plus","ticketChildren",maxTicket,"children",eInput,remainTicket);

        addMinus2("minus","ticketAdult",maxTicket,"adult",eInput,remainTicket);
        addMinus2("minus","ticketChildren",maxTicket,"children",eInput,remainTicket);


        //是否显示儿童票价和数量
        $btnBuyChildren.change(function(event) {

            if (isBuyChildTicket("btnBuyChildren")) {
                console.log("勾选儿童");
                //显示选择儿童票数
                $childTicketBox.removeClass('none');
                //显示儿童票价格
                $childPrice.addClass("op1");

                var pollNum= Number($ticketAdult.val())+1;
                console.log(pollNum)
                if( pollNum <= maxTicket ){
                    console.log("成人");
                    $ticketChildren.val(1);
                    var grossPrice;
                    //合计票数
                    var totalTicketNum=unpdateTotalTicketNumber(eInput);
                    //余票票数
                    unpdateRemainTicket(remainTicket,remainTicketTxt,"minus");

                    //总价
                    grossPrice=totalPrices(prices,ticketNums);
                    var hintTxt;
                    //自动挑选最优优惠劵 使用最优
                    if (isFavorable) {
                        var foodDollar=autoCouponSelect(grossPrice,mobile,isFavorable);
                        // alert(foodDollar);
                        if(foodDollar== false){
                            hintTxt="(共"+totalTicketNum+"张)";
                        }else{
                            hintTxt="(共"+totalTicketNum+"张，已优惠-"+foodDollar.Price+")";
                        };
                        $("#amountAppend").text(hintTxt);
                        //更新使用优惠
                        undateFavorable("totalFavorableMoney",grossPrice,mobile);
                    }else{
                        hintTxt="(共"+totalTicketNum+"张)";
                        $("#amountAppend").text(hintTxt);
                    }
                    //更新合计
                    unpdateTotalMoney("amount",grossPrice,mobile);
                }

            }else{
                console.log("隐藏儿童");
                //隐藏选择儿童票数
                $childTicketBox.addClass('none');
                //隐藏儿童票价格
                $childPrice.removeClass("op1");
                // console.log("隐藏")

                //显示隐藏清零儿童票
                var $ticketChildrenVal=$ticketChildren.val();
                $ticketChildren.val(0);

                var grossPrice;
                //合计票数
                var totalTicketNum=unpdateTotalTicketNumber(eInput);
                //余票票数
                for (var i = 0; i < $ticketChildrenVal; i++) {
                    unpdateRemainTicket(remainTicket,remainTicketTxt,"plus");
                }
                //总价
                grossPrice=totalPrices(prices,ticketNums);
                var hintTxt;
                //自动挑选最优优惠劵 使用最优
                if (isFavorable) {

                    var foodDollar=autoCouponSelect(grossPrice,mobile,isFavorable);
                    // alert(foodDollar);
                    if(foodDollar== false){
                        hintTxt="(共"+totalTicketNum+"张)";
                    }else{
                        hintTxt="(共"+totalTicketNum+"张，已优惠-"+foodDollar.Price+")";
                    };
                    $("#amountAppend").text(hintTxt);
                    //更新使用优惠
                    undateFavorable("totalFavorableMoney",grossPrice,mobile);
                }else{
                    hintTxt="(共"+totalTicketNum+"张)";
                    $("#amountAppend").text(hintTxt);
                }
                //更新合计
                unpdateTotalMoney("amount",grossPrice,mobile);
            }
            // var $e=$(this);

        });

        //初始化 票数 1
        if(ticketNum>0){
            $("#ticketAdult").val(1);
            var grossPrice;
            //合计票数
            var totalTicketNum=unpdateTotalTicketNumber(eInput);
            //余票票数
            unpdateRemainTicket(remainTicket,remainTicketTxt,"minus");
            //总价
            grossPrice=totalPrices(prices,ticketNums);
            var hintTxt;
            if (isFavorable) {
                var foodDollar=autoCouponSelect(grossPrice,mobile,isFavorable);
                // alert(foodDollar);
                if(foodDollar== false){
                    hintTxt="(共"+totalTicketNum+"张)";
                }else{
                    hintTxt="(共"+totalTicketNum+"张，已优惠-"+foodDollar.Price+")";
                };
                $("#amountAppend").text(hintTxt);
                //更新使用优惠
                undateFavorable("totalFavorableMoney",grossPrice,mobile);
            }else{
                hintTxt="(共"+totalTicketNum+"张)";
                $("#amountAppend").text(hintTxt);
            }
            //更新合计
            unpdateTotalMoney("amount",grossPrice,mobile);
        }else{
            layer.open({
                content: "满座了!",
                time: 1
            });
        }

        //联系信息
        function chkRelationData(){
            var userNameVal = $("#UserName").val();
            var phoneVal = $("#UserPhone").val();
            if(userNameVal=="" ||  userNameVal==" " ){
                layer.open({
                    content: "姓名格式错误",
                    time: 1
                });
                return false
            }

            if (phoneVal=="" || phoneVal==" " || phoneVal.length!=11) {
                layer.open({
                    content: "号码格式错误",
                    time: 1
                });
                return false
            }
            return true
        }

        //登陆
        function chkLogin() {
            var url = "/Account/Register?ReturnUrl=/Home/OrderInfo/88562/3340-2475";
            var u = "0";
            if (Number(u) < 1) {
                layer.open({
                    content: "注册或登陆后在预订!",
                    time: 1
                });
                window.setTimeout(function() { window.location.href = url; }, 2000);
                return false;
            }
            return true
        }

        //票数为0
        function chkTicketNum(e){
            if ($ticketAdult.val() <= 0) {
                return false
            }
            return true
        }

        //支付方式
        function chkPay(){
            var l=$('input:radio[name="payway_from"]:checked').length;
            if (l>0) {
                return true
            }else{
                return false
            }
        }

        $("#btnsub").click(function(event) {
            console.log()
            //验证 表单字段
            if (!chkLogin()) {
                return false
            }
            var chkTicketNum0=chkTicketNum($ticketAdult);
            if (!chkTicketNum0 ) {
                layer.open({
                    content: "请选票!",
                    time: 1
                });
                return false
            }

            if (!chkRelationData()) {
                layer.open({
                    content: "请填写联系信息!",
                    time: 1
                });
                return false
            }

            if (!chkPay()) {
                layer.open({
                    content: "请选择支付方式!",
                    time: 1
                });
                return false
            }

            //优惠劵
            var ucid,ucPrice,minSpend;

            if(isFavorable){
                var grossPrice;
                //合计票数
                var totalTicketNum=unpdateTotalTicketNumber(eInput);
                //总价
                var grossPrice=totalPrices(prices,ticketNums);
                //获取优惠券
                var foodDollar=autoCouponSelect(grossPrice,mobile,isFavorable);

                ucid=foodDollar.UCid;

                console.log(foodDollar.UCid);
                console.log(isFavorable);
                console.log(ucid);
                if(ucid==undefined){
                    console.log(ucid)
                    ucid=0;
                    ucPrice="";
                    minSpend=0;
                }else{
                    ucPrice=foodDollar.Price;
                    minSpend=foodDollar.MinSpend;
                }

            }else{
                ucid=0;
                ucPrice="";
                minSpend=0;
            }

            console.log(isFavorable,ucid,ucPrice,minSpend)

            // ucid=foodDollar.UCid;
            // ucPrice=foodDollar.Price;
            // minSpend=foodDollar.MinSpend;

            var param = {
                tknum1: Number($ticketAdult.val()),
                tknum2: Number($ticketChildren.val()),
                StartSID: 3340,
                EndSID: 2475,
                triptime: "17:30",
                stopinfo: "端州区广百时代广场东北门门口(即裕满石锅鱼旁)||天河城东门",
                __RequestVerificationToken: $("input[name=__RequestVerificationToken]").val(),
                UCid: ucid,
                UCPrice: ucPrice,
                MinSpend: minSpend,
                UserName: $("#UserName").val(),
                PayFrom: $('input:radio[id="payway_online"]:checked').val() == "on" ? "online" : "onCar",
                UserPhone: $("#UserPhone").val()
            };
            console.log(param);

            var urlPost="/Home/OrderAddSave/88562";

            $("#btnsub").attr("disabled",true);

            $.post(urlPost, param, function (data) {
                console.log(data.state);

                switch (data.state){
                    case 0:
                        console.log("未知错误")
                        layer.open({
                            content: "出现未知错误，联系客服！",
                            time: 3
                        });
                        break;
                    case 10:
                        console.log("订单创建成功");
                        layer.open({
                            content: "订单创建成功!",
                            time: 1
                        });
                        window.location.href = data.url;
                        break;
                    case 1:
                        console.log("上车预订成功");
                        var urlSkip="/home/ordersuccess/1";
                        window.location.href = urlSkip;
                        break;
                    case 2:
                        console.log("订单创建失败")
                        layer.open({
                            content: "订单创建失败，<br/>订票已超过3张，不可再预订上车支付",
                            time: 2
                        });
                        $("#btnsub").removeAttr("disabled");
                        break;

                    case 3:
                        console.log("满座");

                        layer.open({
                            content: '该车次，已满座！<br/>请选择其他时间段车次',
                            btn: ['选择其他时段', '返回预订'],
                            shadeClose: false,
                            yes: function(){
                                var urlSkip='/Home/ReservationSearch/'+sessionStorage.getItem("startDay")+"/"+sessionStorage.getItem("startCity")+"-"+sessionStorage.getItem("endCity");
                                window.location.href = urlSkip;
                            },no: function(){
                                // layer.close(layerOpen3);
                                var urlSkip="/Home/Subscribe"
                                window.location.href = urlSkip;
                            }
                        });
                        break;

                    case 4:
                        console.log("已预订");
                        layer.open({
                            content: "订单创建失败！<br/>3天内已预订，相同的车次。<br/>跳转至全部订单...",
                            time: 3
                        });
                        var urlSkip="/Account/UserOrderList";
                        window.setTimeout(function() { window.location.href = urlSkip }, 2000);
                        break;

                    case 5:
                        console.log("已过上车时间");
                        // layer.open({
                        //     content: "已过上车时间",
                        //     time: 2
                        // });

                        layer.open({
                            content: '订单创建失败！<br>已过上车时间',
                            btn: ['选择其他时段', '返回预订'],
                            shadeClose: false,
                            yes: function(){
                                var urlSkip="/Home/ReservationSearch/"+sessionStorage.getItem("startDay")+"/"+sessionStorage.getItem("startCity")+"-"+sessionStorage.getItem("endCity");
                                window.location.href = urlSkip;
                            },no: function(){
                                // layer.close(layerOpen3);
                                var urlSkip="/Home/Subscribe"
                                window.location.href = urlSkip;
                            }
                        });
                        break;


                    default:
                        console.log("其他");
                }
            });

        });

        //初始化 儿童票
        if(isBuyChildTicket("btnBuyChildren")){
            //显示选择儿童票数
            $childTicketBox.removeClass('none');
            //显示儿童票价格
            $childPrice.addClass("op1");
        }else{
            //隐藏选择儿童票数
            $childTicketBox.addClass('none');
            //隐藏儿童票价格
            $childPrice.removeClass("op1");
        }
        console.log( isBuyChildTicket("btnBuyChildren") );

    }
    init();



</script>
</body>
</html>
