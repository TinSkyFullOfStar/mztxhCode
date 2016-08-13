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
               <span>出发地：{{ $detail_place }}</span><br>
               <select name="detail_end">
                   <option value=0>{{ $place[0] }}</option>
                   <option value=1>{{ $place[1] }}</option>
                   <option value=2>{{ $place[2] }}</option>
                   <option value=3>{{ $place[3] }}</option>
                   <option value=4>{{ $place[4] }}</option>
               </select><br>
               <span>票数：</span>
               <select name="count">
                   <option value=1>1</option>
                   <option value=2>2</option>
                   <option value=3>3</option>
               </select><br>
               <span>联系人电话：</span>
               <input type="number" name="tel" ><br>
               <span>联系人：</span>
               <input type="number" name="username" ><br>
               <img src="/mztxhCode/public/checkcode" style="width: 100px;" onclick="getCode()" id="code"/>
               <input type="text" name="checkCode" />
               <input type="submit" onclick="return isUser()" >
               {{ csrf_field() }}
           </form>
       </div>
    </div>
</body>
</html>