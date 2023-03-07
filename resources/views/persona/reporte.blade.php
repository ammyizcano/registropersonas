<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<table class="table table-responsive table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Identidad</th>
                                    <th>Celular</th>
                                    <th>Departamento</th>
                                    <th>Imagen</th>
                                </tr>


                            </thead>
                            <tbody>
                                @foreach ($persona as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->identidad }}</td>
                                        <td>{{ $item->celular }}</td>
                                        <td>{{ $item->departamento }}</td>
                                        <td><a href="{{asset($item->imagen)}}">{{ $item->imagen }}</a></td>
                                        

                                    </tr>
                                @endforeach

                            </tbody>


                        </table>

</body>
</html>