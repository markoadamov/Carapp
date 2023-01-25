<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('./cars.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    @include('./components/navigation')

    {{-- <div class="center">
    <div class="content">
    @foreach ($cars as $car)
    <a href="/cars/{{$car->id}}">
        <h4 class="center">{{$car->id}}. Auto:{{$car->name}}</h4>
        <img src="{{$car->imgurl}}" alt="" width="200">
    </a>
    @endforeach
    </div>
    </div> --}}
    <div class="center welcome-message">
    <h1>WELCOME TO CAR DEALERSHIP!</h1>
    </div>

    {{-- <div class="center">
        <div class="content">
    @foreach ($cars as $car)
    <div class="card" style="width: 12rem;">
        <img src="{{$car->imgurl}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$car->id}}. Auto:{{$car->name}}</h5>
          <a href="/cars/{{$car->id}}" class="btn btn-primary">Read More</a>
        </div>
      </div>
    @endforeach
    </div>
    </div> --}}

    
    <div class="album py-5 bg-light">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($cars as $car)
            @if ($car->published == true)
            @include('./components/item')
            @endif
            @endforeach
          </div>
        </div>
      </div>

</body>
</html>