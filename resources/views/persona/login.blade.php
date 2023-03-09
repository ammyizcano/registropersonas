<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>