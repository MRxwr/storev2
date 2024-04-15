<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <form method="post" action="{{route('categories.store')}}">
    <div class="row">
            @csrf
        <div class="col-md-6">English Title</div>
        <div class="col-md-6"><input class='form-control' name="enTitle" type='text' value=""></div>
        <div class="col-md-6">Arabid Title</div>
        <div class="col-md-6"><input class='form-control' name="arTitle" type='text' value=""></div>
        <div class="col-md-12"><button class='btn btn-primary'>Submit</button></div>
    </div>
  </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>