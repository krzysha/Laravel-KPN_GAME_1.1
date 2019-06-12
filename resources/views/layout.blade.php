<!-- layout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>You_Game</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
  <script src="{{ asset('js/app.js') }}" defer> </script>
  <style>
    .obraz {
      width: 100%;
    }
    /* body {
      background-color: grey;
    } */
    table#wynik, tr#wynik td#wynik{
      width: 400px;
      border: 1px solid black;
      border-collapse: collapse;
    }
   </style>
</head>
<body>
<div id ="app">
  <div class="container">
    @yield('content')
  </div>
  
</div>
</body>
</html>