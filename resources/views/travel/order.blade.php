<html>
<head>
    <title>Order</title>
    <script type="text/javascript" src="{{asset('http://code.jquery.com/jquery-latest.js')}}"></script>
    <script type="text/javascript">
        function getCode() {
            $('#code')[0].src='/mztxhCode/public/checkcode';
        }
    </script>
</head>
<body>
    <div>
       <div>
           <form action="/mztxhCode/public/orderPost" method="post">
               <span>出发地：华南理工大学广州学院行政楼对面</span>
               <input type="number" id="count" name="count">
               <input type="submit" onclick="return isUser()" >
               <img src="/mztxhCode/public/checkcode" style="width: 100px;" onclick="getCode()" id="code"/>
               <input type="text" name="checkCode" />
               {{ csrf_field() }}
           </form>
       </div>
    </div>
</body>
</html>