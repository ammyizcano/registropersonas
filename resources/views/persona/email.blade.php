<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <title>Carnet de Vacunación</title>
    <style>
        
        @font-face{
            font-family: "Poppins-bold";
            src: url("../public/font/Poppins-bold.ttf");
        }

        .titulo{
            color: white;
            font-weight: 900;
            
        }

        .bg-formulario{
            background-color: #90b3c1;
        }

        .btn-danger {
            color: #fff;
            background-color: #d15980;;
            border-color: #d15980;;
            font-weight: bold;
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #d15980;;
            border-color: #d15980;;
        }

        .btn-danger:active {
            color: #fff;
            background-color: #d15980;;
            border-color: #d15980;;
        }

        .btn-danger:focus {
            color: #fff;
            background-color: #d15980;;
            border-color: #d15980;;
            /* box-shadow: 0 0 0 0.25rem rgba(225,83,97,.5); */
        }

        .btn-success {
            color: #fff;
            background-color: #2da543;
            border-color: #2da543;
            font-weight: bold;
        }

        .btn-success:hover {
            color: #fff;
            background-color: #2da543;
            border-color: #2da543;
        }
        .btn-success:active {
            color: #fff;
            background-color: #2da543;
            border-color: #2da543;
        }

        .btn-success:focus {
            color: #fff;
            background-color: #2da543;
            border-color: #2da543;
            box-shadow:none; 
        }

        .modal-header {
            display: flex;
            flex-shrink: 0;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 1rem;
            border-bottom: none;
            border-top-left-radius: calc(.3rem - 1px);
            border-top-right-radius: calc(.3rem - 1px);
        }

        .modal-footer {
            display: flex;
            flex-wrap: wrap;
            flex-shrink: 0;
            align-items: center;
            justify-content: flex-end;
            padding: .75rem;
            border-top: none;
            border-bottom-right-radius: calc(.3rem - 1px);
            border-bottom-left-radius: calc(.3rem - 1px);
        }

        .modal-content {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: transparent;
            background-clip: padding-box;
            border: none;
            border-radius: 0;
            outline: 0;
        }

        .fondo-modal{
            position: relative;

        }

        .fondo-modal img {
            width: 100%;
            height: 100%; 
            object-fit: cover;
        }

        .fondo-modal .modal-footer{
            position: absolute;
            top: 78%;
            left: 5%;
        }

        .fondo-modal .social-white{
            position: absolute;
            top: 73%;
            left: 8%;
        }
        .fondo-modal .social-white1{
            position: absolute;
            top: 88%;
            left: 8%;
        }
        .social-white h6 {
                font-size: 1rem;
                font-weight: 900;
                color: white;

                
            }
        .social-white1 h6 {
                font-size: 1rem;
                font-weight: 900;
                color: white;

                
            }
        .social-white a{
            color: white;
            text-decoration: none;
        }
        .social-white a:hover{
            color: white;
            text-decoration: white;
        }
        .social-white1 a{
            color: white;
            text-decoration: none;
        }
        .social-white1 a:hover{
            color: white;
            text-decoration: white;
        }
        .btn-secondary {
            color: #fff;
            background-color: #2da543;
            border-color: #2da543;
            border-radius: 20px;
            font-weight: 900;
        }

        .btn-secondary:hover{

            color: #fff;
            background-color: #2da543;
            border-color: #2da543;
            box-shadow: none;
        }

        .btn-secondary:focus{

            color: #fff;
            background-color: #2da543;
            border-color: #2da543;
            box-shadow: none;
        }

        .btn-primary {
            color: #fff;
            background-color: #d15980;;
            border-color: #d15980;;
            font-weight: 900;
            border-radius: 20px;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #d15980;;
            border-color: #d15980;;
            box-shadow: none;
        }

        .btn-primary:focus {
            color: #fff;
            background-color: #d15980;;
            border-color: #d15980;;
            box-shadow: none;
        }

        .btn-primary:active:focus, .show>.btn-primary.dropdown-toggle:focus {
            box-shadow: none;
        }
        .para-rojo{
            
            top: 30%;
            color: #d15980;;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
            text-align: center;
        }

        .mensaje-rojo{
            position: absolute;
            top: 37%;
            text-align: center;
            color: #d15980;;
        }
        .fondo-modal .social-red{
            position: absolute;
            top:90%;
            left: 5%;
            color: #d15980;;
        }
        .social-red a{
            color: #d15980;;
            text-decoration: none;
        }
        .social-red a:hover{
            color: #d15980;;
            text-decoration: none;
        }

        .para-white{
            position: absolute;
            /* text-align: center; */
            top: 38%;
            color: white;
            font-size: larger;
            left: 10%;
        }

        .mensaje-white{
            position: absolute;
            top: 44%;
            text-align: justify;
            color: #ffffff;
            left: -8%;
        }
        @media(max-width: 768px) and (min-width: 320px){
            .social-white h6 {
                font-size: x-small;
            }
            .social-white1 h6 {
                font-size: x-small;
            }

            .para-rojo{
                font-size: x-small;
            }

            .mensaje-rojo{
                font-size: x-small;
            }

            .mensaje-white{
                font-size: x-small;
            }
            .para-white{
                font-size: x-small;
            }
        }

        @media(max-width:320px){
            .mensaje-rojo{
                font-size: 8px;
            }
            .mensaje-white{
                font-size: 8px;
            }
        }

        .changeColor:hover {
            background-color: dimgray;
        }

        .close{
            color: #d15980;;
            text-decoration: none;
        }
        table, td, th {
            border: 1px solid #d15980;;
        }

        table {
            width: 80%;
            border-collapse: collapse;
        }
    </style>
  </head>

  <body>
    <p>¡Hola!</p>
    <p>Una persona desea comunicarse contigo: <b>{{$persona->nombre}}</b></p>
    <table style="border:1px solid #333;">
        <tr>
            <td><b>Nombre</b></td>
            <td>{{$persona->nombre}}</td>
        </tr>
       <tr>
            <td><b>Identidad</b></td>
            <td>{{$persona->identidad}}</td>
        </tr>
        <tr>
            <td><b>Celular</b></td>
            <td>{{$persona->celular}}</td>
        </tr>
        
        <tr>
            <td><b>Departamento</b></td>
            <td>{{$persona->departamento}}</td>
        </tr>

        <tr>
            <td><b>Imagen</b></td>
            <td><a href="{{asset($persona->imagen)}}">{{ $persona->imagen }}</a></td>
        </tr>
        <tr>
            <td><b>Fecha</b></td>
            <td>{{$persona->created_at}}</td>
        </tr>
  
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a185bc43d4.js" crossorigin="anonymous"></script>
  </body>
</html>