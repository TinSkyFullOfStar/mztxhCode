<html>
    <head>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    </head>
    <script type="application/javascript">
        function send(){
            var tele = $("#tel").val();

            if (tele!=""&&tele!=" ")
                $.post("/mztxhCode/public/sendSms",{tel:tele},function(result){
                    $("span").html(result);
                });
        }
    </script>
    <body>
        <form action="/mztxhCode/public/register" method="post">
            用户名:<input type="text" name="username"><br>
            手机号:<input type="number" id="tel" name="tel"><br>
            验证码:<input type="text" name="smsCode">
            <input type="button" name="sms" onclick="send()" value="发送验证码"><br>
            <input type="submit">
            {{ csrf_field() }}
        </form>
        <span></span>
    </body>
</html>