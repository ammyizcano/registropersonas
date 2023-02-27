<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://cdn.icon-icons.com/icons2/2489/PNG/96/vaccination_icon_150143.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" integrity="sha512-hwwdtOTYkQwW2sedIsbuP1h0mWeJe/hFOfsvNKpRB3CkRxq8EW7QMheec1Sgd8prYxGm1OM9OZcGW7/GUud5Fw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Registro de Vacunación</title>
</head>
<body>
        <!-- Encabezado  -->
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-between mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img src="https://cdn.icon-icons.com/icons2/2489/PNG/96/vaccination_icon_150143.png" alt="logo" width="60px" height="60px">
            </a>
            <!-- Boton   -->
            <div class="col-md-3 text-end">
                <a href="{{ route('personas.excel') }}"><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Exportar Excel</button></a>
            </div>
            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        </header>
    </div>
        <!-- Formulario -->
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
            <form action="/personas" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label text-secondary" for="validationDefault01">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" tabindex="1" autocomplete=off value="{{ old('nombre') }}">
                    <small style="color:red;">{{ $errors->first('nombre') }}</small>
                </div>
                <div class="mb-3">
                    <label for="identidad" class="form-label text-secondary " for="validationDefault01">Identidad</label>
                    <input type="text" class="form-control" id="identidad" name="identidad" placeholder="Ingrese su identidad" tabindex="2" autocomplete=off value="{{ old('identidad') }}">
                    <small style="color:red;">{{ $errors->first('identidad') }}</small>
                </div>
                <div class="mb-3">
                    <label for="celular" class="form-label text-secondary " for="validationDefault01">Celular</label>
                    <input type="text" class="form-control" id="celular" name="celular" placeholder="Ingrese su celular" tabindex="3" autocomplete=off value="{{ old('celular') }}">
                    <small style="color:red;">{{ $errors->first('celular') }}</small>
                </div>
                <div class="mb-4">
                    <label for="departamento" class="form-label text-secondary">Departamento</label>
                    <select name="departamento" id="departamento" class="form-select text-secondary" >
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
                <div class="mb-4">
                    <label for="imagen" class="form-label text-secondary ">Carnet de vacunación</label>
                    <input type="file" class="form-control text-secondary" id="imagen" name="imagen"  accept="image/*">
                    <small style="color:red;">{{ $errors->first('imagen') }}</small>
                </div>
                <a href="create" tabindex="5" class="btn btn-secondary">Cancelar</a>
                <button tabindex="6" class="btn btn-primary">Guardar</button>
            </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
@if(session('store') == "done")
    <script>
        swal("¡Listo!", "El registro se guardó correctamente", "success", {
            button: "Ok"
        });
    </script>
@endif
</html>    