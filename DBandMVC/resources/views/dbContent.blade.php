<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h2 class="text-center">{{$dbheader}}</h2>
  <a href="todo/create"><button class="btn btn-info">On create</button></a>
  @foreach($dbcontent as $item)
  <h4 class="text-center">{{$item->title}}</h4>
  <p class="text-center">description: {{$item->description}}</p>
  <p class="text-center">created_at: {{$item->created_at}}</p>
  <p class="text-center">updated_at: {{$item->updated_at}}</p>
  @endforeach
  </div>
</body>
</html>
