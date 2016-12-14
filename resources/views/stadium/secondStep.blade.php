<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<style>
    .container {
        width: 30px;
    }
    .sector{
        display:inline-block;
        width: 50px;
        height: 40px;
        border: 1px solid red;
        text-align: center;
    }
    .active {
        background-color: lightgreen;
    }
    .sell {
        background-color: darkgrey;
    }
</style>
<body>

@for ($i = 1; $i <= 200; $i++)
    @if(($i % 10) == 0)
        <div class="sector">{{$i}}</div><br>
    @else
        <div class="sector">{{$i}}</div>
    @endif
@endfor


</body>
</html>