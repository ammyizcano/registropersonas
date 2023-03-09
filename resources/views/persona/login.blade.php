<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" integrity="sha512-hwwdtOTYkQwW2sedIsbuP1h0mWeJe/hFOfsvNKpRB3CkRxq8EW7QMheec1Sgd8prYxGm1OM9OZcGW7/GUud5Fw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<img class="wave" src="{{URL('css/wave.png')}}">
	<div class="container">
    <div class="img">
                
		        </div>
		<div class="login-content">
        
			<form method="POST" action="{{route('ingresar')}}">
				@csrf
				<img src="{{URL('css/avatar.svg')}}">
				<h2 class="title">ACCESO</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
					
					<input  type="email" id="form3Example3" class="input" name="email"
						placeholder="Correo Electrónico" :value="old('email')" required autocomplete="username" />
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
					<input type="password" id="form3Example4" class="input" name="password"
					placeholder="Contraseña" required autocomplete="new-password" />
            	   </div>
            	</div>
            	
            
				<button type="submit" class="btn btn-primary btn-block mb-4 rounded-4">
					Ingresar
				  </button>
            </form>
        </div>
    </div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/main.js"></script>
	@if(session('fail') == "done")
    <script>
            swal({
  title: '¡Error!',
  text: 'Sus credenciales no son correctas.',
  timer: 2000,
  showCancelButton: false,
  showConfirmButton: false
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      //console.log('I was closed by the timer')
    }
  }
)
    </script>
@endif
</body>
</html>