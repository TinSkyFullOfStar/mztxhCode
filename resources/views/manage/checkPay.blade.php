<html>
<head>
    <title>CheckPay</title>

    <link rel="stylesheet" href="{{ asset("/css/getCar.css") }}">

    <style type="text/css">
        #table tr td span{
            margin-left: 10px;
            font-size: 70px;
        }

        #table tr td input{
            margin-left: 10px;
            height: 50px;
            width: 50px;
        }

        #table caption{
            font-size: 70px;
            border: 1px solid #000000;
        }

        #div input{
            margin-left:75%;
            margin-top:15%;
            width: 100%;
            height:10%;
            font-size: 100px;
            border:1px solid #f7f7f7;
            background-color:#00a3ee;
        }
    </style>
</head>
<body>
<form action="/mztxhCode/public/updateOrder" method="post">
    <table style="border-collapse:collapse; width: 100%;" border="1" id="table">
        <caption>乘客名单</caption>
        {!! $list !!}
    </table>

    <div class="btn_warp w_per382" id="div">
        <!-- <a href="javascript:void(0);" class="btn u_btn e_btn_orange e_btn_big" id="btnsub">提交订单</a> -->
        <input type="submit"/>
    </div>
    {{ csrf_field() }}
</form>
</body>
</html>