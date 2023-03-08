<!DOCTYPE html>
<html>
<head>
<title>Formulario de Vacunación</title>
	<link rel="stylesheet" href="{{asset('./css/form.css')}}"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" integrity="sha512-hwwdtOTYkQwW2sedIsbuP1h0mWeJe/hFOfsvNKpRB3CkRxq8EW7QMheec1Sgd8prYxGm1OM9OZcGW7/GUud5Fw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>
</head>

<body>
    <img class="wave" src="{{URL('css/wave.png')}}">
     
       
          
        
	<div class="container">
    <a href="{{route('login')}}" id="link"><button class="btn btn-success" style=" background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px)">➜ Gestión</a></button> 
    <div class="img">
    
		        </div>


		<div class="login-content">
            
        
			<form  action="/personas" method="POST" enctype="multipart/form-data" >
				@csrf
                
				<h3 class="title">Ingrese sus datos:</h3>
				
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas "></i>
           		   </div>
           		   <div class="div">
					<input type="text" class="input" id="nombre" name="nombre" placeholder="Ingrese su nombre" tabindex="1" autocomplete=off value="{{ old('nombre') }}">
                    <small style="color:red;">{{ $errors->first('nombre') }}</small>
					</div>
           		</div>
                   <div class="input-div one">
                    <div class="i">
                        <i class="fas "></i>
                </div>
                   <div class="div">
					<input type="text" class="input" id="identidad" name="identidad" placeholder="Ingrese su identidad" tabindex="2" autocomplete=off value="{{ old('identidad') }}">
                    <small style="color:red;">{{ $errors->first('identidad') }}</small>
					</div>
           		</div>
                   <div class="input-div one">
                    <div class="i">
                        <i class="fas"></i>
                </div>
                   <div class="div">
                    <input type="text" class="input" id="celular" name="celular" placeholder="Ingrese su celular" tabindex="3" autocomplete=off value="{{ old('celular') }}">
                    <small style="color:red;">{{ $errors->first('celular') }}</small>
					</div>
           		</div>
                   <div class=" one">
                    <div class="i">
                        <i class="fas"></i>
                </div>
                
                   <div class="div">
                    <select name="departamento" id="departamento" class="select-css" >
                        <option value="Ninguno">Seleccione un departamento</option>
                        <option value="Atlántida" {{ old('departamento')=='Atlántida' ? 'selected' : ''  }}>Atlántida</option>
                        <option value="Choluteca" {{ old('departamento')=='Choluteca' ? 'selected' : ''  }}>Choluteca</option>
                        <option value="Colón" {{ old('departamento')=='Colón' ? 'selected' : ''  }}>Colón</option>
                        <option value="Comayagua" {{ old('departamento')=='Comayagua' ? 'selected' : ''  }}>Comayagua</option>
                        <option value="Copán" {{ old('departamento')=='Copán' ? 'selected' : ''  }}>Copán</option>
                        <option value="Cortés" {{ old('departamento')=='Cortés' ? 'selected' : ''  }}>Cortés</option>
                        <option value="El Paraíso" {{ old('departamento')=='El Paraíso' ? 'selected' : ''  }}>El Paraíso</option>
                        <option value="Francisco Morazán" {{ old('departamento')=='Francisco Morazán' ? 'selected' : ''  }}>Francisco Morazán</option>
                        <option value="Gracias a Dios" {{ old('departamento')=='Gracias a Dios' ? 'selected' : ''  }}>Gracias a Dios</option>
                        <option value="Intibucá" {{ old('departamento')=='Intibucá' ? 'selected' : ''  }}>Intibucá</option>
                        <option value="Islas de la Bahía" {{ old('departamento')=='Islas de la Bahía' ? 'selected' : ''  }}>Islas de la Bahía</option>
                        <option value="La Paz" {{ old('departamento')=='La Paz' ? 'selected' : ''  }}>La Paz</option>
                        <option value="Lempira" {{ old('departamento')=='Lempira' ? 'selected' : ''  }}>Lempira</option>
                        <option value="Ocotepeque" {{ old('departamento')=='Ocotepeque' ? 'selected' : ''  }}>Ocotepeque</option>
                        <option value="Olancho" {{ old('departamento')=='Olancho' ? 'selected' : ''  }}>Olancho</option>
                        <option value="Santa Bárbara" {{ old('departamento')=='Santa Bárbara' ? 'selected' : ''  }}>Santa Bárbara</option>
                        <option value="Valle" {{ old('departamento')=='Valle' ? 'selected' : ''  }}>Valle</option>
                        <option value="Yoro" {{ old('departamento')=='Yoro' ? 'selected' : ''  }}>Yoro</option>
                    </select>
                    <small style="color:red;">{{ $errors->first('departamento') }}</small>
					</div>
           		</div>
                   <div class=" one">
                    <div class="i">
                        <i class="fas "></i>
                </div>
                   <div class="">
                   <input type="file" class="select-css" id="imagen" name="imagen"  accept="image/*">
                   <small style="color:red;">{{ $errors->first('imagen') }}</small>
					</div>
                   
           		</div>
            
                   
                   <button tabindex="6" class="btn" type="submit">Guardar</button> 
                   <a href="/" tabindex="5" class="btn-cancelar">Cancelar</a>
                   
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
    

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
@if(session('store') == "done")
    <script>
        swal("¡Listo!", "El registro se guardó correctamente", "success", {
            button: "Ok"
        });
    </script>
@endif
</body>
</html>