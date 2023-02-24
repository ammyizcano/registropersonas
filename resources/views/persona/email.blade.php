<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>¡Hola!</p>
    <p>Una persona desea comunicarse contigo: <b>{{$persona->nombre}}</b></p>
    <table>
        <tr>
            <td><b>nombre</b></td>
            <td>{{$persona->nombre}}</td>
        </tr>
       <tr>
            <td><b>identidad</b></td>
            <td>{{$persona->identidad}}</td>
        </tr>
        <tr>
            <td><b>celular</b></td>
            <td>{{$persona->celular}}</td>
        </tr>
        
        <tr>
            <td><b>departamento</b></td>
            <td>{{$persona->departamento}</td>
        </tr>
        <tr>
            <td><b>imagen</b></td>
            <td>{{$persona->imagen}</td>
        </tr>
  
  
    </table>


</body>
</html>