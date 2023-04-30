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
  <h2 class="text-center">{{$formCreate}}</h2>
  <div class="container">
  @csrf
    <form action="/todo/post" method="post">
      <div class="form-grup mb-3">
        <label for="title">Введите заголовок задачи</label>
        <input type="text" name="title" placeholder="Введите заголовок задачи" id="title" class="form-control" required>
      </div>
      <div class="form-grup mb-3">
        <label for="description">Введите описание задачи</label>
        <textarea type="text" name="description" placeholder="Введите описание задачи"
          id="description" class="form-control" required></textarea>
      </div>
      <button type="submit" class="btn btn-success mb-3">Отправить</button>
      </form>
      <a href="/todo"><button type="reset" class="btn btn-info">On todo</button></a>
  </div>
  
</body>
</html>
