<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>CarShop</title>
</head>
<body>

<h1>Il nostro parco auto</h1>
<ul>
@foreach($modelCar as $key)
  <li> {{$key -> brand}} {{$key -> name}} <b> immatricolazione: </b> {{$key -> date}} </li>
@endforeach
</ul>
</body>
</html>