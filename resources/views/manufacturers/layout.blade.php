<!doctype html>
<html lang="bg">
<head>
    <meta charset="utf-8">
    <title>ПРОИЗВОДИТЕЛИ</title>

    {!!Html::style("css/bootstrap.css" )!!}
    <style>
        .bold {
            font-weight: bold;
        }

        .notActive {
            background-color: #ffdde1;
        }
    </style>
</head>
<body>

<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a href="../" class="navbar-brand">НАЧАЛО</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <h3 style="margin-left: 500px">ПРОИЗВОДИТЕЛИ</h3>
        </div>
    </div>
</div>
<div class="container">
    @yield('content')
</div>
</body>
</html>