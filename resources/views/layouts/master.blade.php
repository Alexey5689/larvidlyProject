

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Larabook</title>
</head>
<body>
        @section('menu')
        <div class="mainmenu1 col-sm-12 col-md-12 col-lg-12">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item" role="presentation"  {{$page == 'Main page' ? 'class=active' : ''}}>
                    <a href="{{url('index')}}">MainPage</a>
                </li>
                <li class="nav-item" role="presentation" {{$page =='Forms' ? 'class=active' : ''}}>
                    <a href="{{url('create')}}">Content Control</a>
                </li>
            </ul>
        </div>
        @show
        <div class="container col-sm-12 col-md-12 col-lg-12">
            @yield('content')
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
