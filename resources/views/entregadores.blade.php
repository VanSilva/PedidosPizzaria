<!DOCTYPE html>
<html>
<head>
  <title>Entregadores</title>
</head>
<body>
  <h1>Entregadores</h1>
  <ul>

    @foreach($entregadores as $entregador)
      <li>{{ $entregador-> nome }}</li>
      <br>
    @endforeach
    
  </ul>
</body>
</html>