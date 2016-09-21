<html>
<head>
    <title>Add Car</title>
</head>
<body>
<div>
    <form action="/mztxhCode/public/car" method="post">
        <h1>请保证至少提交两次，以保证数据库数据至少有两条</h1>
        <span>发车时间：</span>
        <input type="datetime" name="time"><br>
        <span>上车地点：</span>
        <select name="place">
            <option value='华广'>华广</option>
            <option value='梅州'>梅州</option>
        </select><br>
        <span>车辆数：</span>
        <select name="car_count">
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
            <option value=5>5</option>
        </select><br>
        <input type="submit"/>
        {{ csrf_field() }}
    </form>
</div>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>