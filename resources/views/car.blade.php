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
    {{-- <h1>{{$car->id}}. Auto:{{$car->name}}</h1>
    
    <p>Deskripcija:  {{$car->description}}</p> --}}

    {{-- <div class="center center-vertical">
    <div class="p-4 p-md-5 mb-4 rounded text-bg-dark ">
        <div class="col-md-6 px-0">
            <div class="single-car-horizontal">
            <div>
            <h1 class="display-4 fst-italic">{{$car->id}}. Auto:{{$car->name}}</h1>
            <p class="lead my-3">{{$car->description}}</p>
            </div>


            <img src="{{$car->imgurl}}" alt="" width="500" class="center">


            </div>
        </div>
      </div>
    </div> --}}

<div class="center center-vertical">
    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0">{{$car->id}}. Auto:{{$car->name}}</h3>
            <p class="card-text mb-auto"><br>{{$car->description}}</p>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="{{$car->imgurl}}" alt="" width="500" class="center">
          </div>
        </div>
      </div>
</div>
</body>
</html>