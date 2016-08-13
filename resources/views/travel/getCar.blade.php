<html>
    <title>GetCar</title>
    <head></head>
    <body>
        <form actoin="/mztxhCode/public/getCar" method="post">
            <span>出发地：</span>
            <select name="start">
                <option value=0>华广</option>
                <option value=1>梅州</option>
            </select><br>
            <span>出发时间：</span>
            <select name="time">
                <option value=0>{{ $time[0] }}</option>
                <option value=1>{{ $time[1] }}</option>
            </select><br>
            {{ csrf_field() }}
            <input type="submit">
        </form>
    </body>
</html>