<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{asset('./css/table.css')}}"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" integrity="sha512-hwwdtOTYkQwW2sedIsbuP1h0mWeJe/hFOfsvNKpRB3CkRxq8EW7QMheec1Sgd8prYxGm1OM9OZcGW7/GUud5Fw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <img class="wave" src="{{URL('css/wave.png')}}">
<section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image"
            style="
        background-image: url('');
        height: 300px;
        ">
        </div>
        <!-- Background image -->
        
        <div class="card mx-4 mx-md-5 shadow-5-strong"
            style="
        margin-top: -190px;
        background: rgb(253,253,253)
        backdrop-filter: blur(30px);
        " >  
        
        <div class="row" style="flex-direction: row-reverse" >
                   
                    <form style="padding: 4%" action="{{route('personas.excel')}}">
                    
                        <button class="btn btn-success" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-filetype-xlsx"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M14 4.5V11h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM7.86 14.841a1.13 1.13 0 0 0 .401.823c.13.108.29.192.479.252.19.061.411.091.665.091.338 0 .624-.053.858-.158.237-.105.416-.252.54-.44a1.17 1.17 0 0 0 .187-.656c0-.224-.045-.41-.135-.56a1.002 1.002 0 0 0-.375-.357 2.028 2.028 0 0 0-.565-.21l-.621-.144a.97.97 0 0 1-.405-.176.37.37 0 0 1-.143-.299c0-.156.061-.284.184-.384.125-.101.296-.152.513-.152.143 0 .266.023.37.068a.624.624 0 0 1 .245.181.56.56 0 0 1 .12.258h.75a1.093 1.093 0 0 0-.199-.566 1.21 1.21 0 0 0-.5-.41 1.813 1.813 0 0 0-.78-.152c-.293 0-.552.05-.777.15-.224.099-.4.24-.527.421-.127.182-.19.395-.19.639 0 .201.04.376.123.524.082.149.199.27.351.367.153.095.332.167.54.213l.618.144c.207.049.36.113.462.193a.387.387 0 0 1 .153.326.512.512 0 0 1-.085.29.558.558 0 0 1-.255.193c-.111.047-.25.07-.413.07-.117 0-.224-.013-.32-.04a.837.837 0 0 1-.249-.115.578.578 0 0 1-.255-.384h-.764Zm-3.726-2.909h.893l-1.274 2.007 1.254 1.992h-.908l-.85-1.415h-.035l-.853 1.415H1.5l1.24-2.016-1.228-1.983h.931l.832 1.438h.036l.823-1.438Zm1.923 3.325h1.697v.674H5.266v-3.999h.791v3.325Zm7.636-3.325h.893l-1.274 2.007 1.254 1.992h-.908l-.85-1.415h-.035l-.853 1.415h-.861l1.24-2.016-1.228-1.983h.931l.832 1.438h.036l.823-1.438Z" />
                            </svg>Exportar Excel</button>
                            <a href="{{route('cerrarsesion')}}" id="link" class="btn btn-info" >Cerrar Sesión</a>
                    </form>
                   
                    
                
        </div>
            <div class="card-body py-5 px-md-5">
              


                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10">
                        <h2 class="fw-bold mb-5">REGISTROS</h2>
                        
                        <table class="table table-responsive table-striped  ">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Identidad</th>
                                    <th>Celular</th>
                                    <th>Departamento</th>
                                    <th>Imagen</th>
                                    <th>Fecha</th>
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
                                        <td>{{ $item->created_at}}</td>
                                        

                                    </tr>
                                @endforeach

                            </tbody>


                        </table>



                    </div>
                </div>
           
                <div class="pagination justify-content-center">{{$persona->links()}}</div>
        </div>
    </section>
</body>
<script type="text/javascript" src="js/main.js"></script>
</html>
