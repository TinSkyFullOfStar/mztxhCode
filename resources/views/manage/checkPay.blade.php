<html>
<head>
    <title>CheckPay</title>
</head>
<body>
<form action={{ $path }} method="post">
    <input type="checkbox" name="checkbox" value=1>test1
    <input type="checkbox" name="checkbox" value=2>test2
    <input type="submit">
    {{ csrf_field() }}
</form>
</body>
</html>