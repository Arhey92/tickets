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

    @for ($i = 1; $i <= 80; $i++)
        @if ($i <= 20)
            @if ($i == 20)
                <div class="sector a" data-id="{{$i}}">
                    <a href="#">A - {{$i}}</a>
                </div><br>
            @else
                <div class="sector a" data-id="{{$i}}">
                    <a href="#">A - {{$i}}</a>
                </div>
            @endif
        @elseif($i > 20 && $i <= 40)
            @if ($i == 40)
                <div class="sector b" data-id="{{$i}}">
                    <a href="#">B - {{$i}}</a>
                </div><br>
            @else
                <div class="sector b" data-id="{{$i}}">
                    <a href="#">B - {{$i}}</a>
                </div>
            @endif
        @elseif($i > 40 && $i <= 60)
            @if ($i == 60)
                <div class="sector c" data-id="{{$i}}">
                    <a href="#">C - {{$i}}</a>
                </div><br>
            @else
                <div class="sector c" data-id="{{$i}}">
                    <a href="#">C - {{$i}}</a>
                </div>
            @endif
        @else
            <div class="sector d" data-id="{{$i}}">
                <a href="#">D - {{$i}}</a>
            </div>
        @endif
    @endfor


</body>
</html>