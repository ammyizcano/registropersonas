<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    
    <link rel="stylesheet" href="{{asset('./css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
</head>
<body>
    <!-- Section: Design Block -->
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
          margin-top: -100px;
          background color: ;
          backdrop-filter: blur(30px);
          ">
          <img class="wave" src="{{asset('./css/wave.png')}}">
            <div class="card-body py-4 px-md-5"> 
              

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                    <img src="{{url('https://cdn-icons-png.flaticon.com/128/4807/4807695.png')}}" alt="icon" class="img-fluid">
                    <br>
                        <h2 class="fw-bold mb-5 mt-3">BIENVENIDO</h2>
                        @if(session()->has('success_msg'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session()->get('success_msg') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    @endif
                    @if(session()->has('alert_msg'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{ session()->get('alert_msg') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    @endif
                    @if(count($errors) > 0)
                        @foreach($errors0>all() as $error)
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ $error }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        @endforeach
                    @endif
                        <form method="POST" action="{{route('ingresar')}}">
                          @csrf
                            <!-- 2 column grid layout with text inputs for the first and last names -->



                            <!-- Email input -->
                            <div class="form-outline mb-4 ">
                           
                                <label class="form-label" for="form3Example3">Correo</label>
                                <input  type="email" id="form3Example3" class="form-control" name="email"
                                    placeholder="Correo Electrónico" :value="old('email')" required autocomplete="username" />
                                   

                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example4">Contraseña</label>
                                <input type="password" id="form3Example4" class="form-control" name="password"
                                    placeholder="Contraseña" required autocomplete="new-password" />
                                    

                            </div>


                            <!-- Submit button -->

                            <button type="submit" class="btn btn-primary btn-block mb-4 rounded-4">
                              ingresar
                            </button>

                            <!-- {{-- <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#">Forgot password?</a></p> --}} -->
                            <!-- <p>¿No tienes una cuenta? <a href="registro" class="link-info">Registrarse aqui</a></p> -->

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="js/main.js"></script>
    <!-- Section: Design Block -->
</body>
</html>