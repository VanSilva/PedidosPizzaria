<!DOCTYPE html>
<html>
<head>
  <title>Ingredientes</title>
</head>
<body>
<h1>Ingredientes</h1>
  <ul>

    @foreach($ingredientes as $ingrediente)
      <li>{{ $ingrediente-> descr }}</li>
      <br>
    @endforeach
    
  </ul>
</body>
</html>