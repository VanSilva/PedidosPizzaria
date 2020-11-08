<!DOCTYPE html>
<html>
<head>
  <title>Funcionarios</title>
</head>
<body>
<h1>Funcionarios</h1>
  <ul>

    @foreach($funcionarios as $funcionario)
      <li>{{ $funcionario-> nome }}</li>
      <br>
    @endforeach
    
  </ul>
</body>
</html>