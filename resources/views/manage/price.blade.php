<html>
    <head>
        <title>Price</title>
    </head>
    <body>
        <span>按梅州不同地区上车或下车制定价格，定金！！！</span>
        <form action="/mztxhCode/public/price" method="post">
            <span>梅州地区：</span>
            <input type="text" name="place"><br>
            <span>价格：</span>
            <input type="number" name="price"><br>
            <span>订金：</span>
            <input type="number" name="pre_price"><br>
            {{ csrf_field() }}
            <input type="submit">
        </form>
    </body>
</html>