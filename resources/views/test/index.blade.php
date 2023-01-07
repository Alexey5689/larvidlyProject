<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="title">
                Laravel 5 from index()
                <p> just output of random value {{$p1}}</p>
                @if($p1>700)
                    <p>greater</p>
                @else
                    <p>less</p>
                @endif
                <ul>
                    @foreach ($p2 as $p)
                        <li>
                            {{$p}}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</body>
</html>
