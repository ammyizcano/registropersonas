<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://cdn.icon-icons.com/icons2/2489/PNG/96/vaccination_icon_150143.png">
    <title>Registro de Vacunación</title>
</head>
<body>
        <!-- Encabezado  -->
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="https://cdn.icon-icons.com/icons2/2489/PNG/96/vaccination_icon_150143.png" alt="logo" width="60px" height="60px">
      </a>
          <!-- Boton   -->
      <div class="col-md-3 text-end">
        <a href="{{ route('personas.excel') }}"><button type="button" class="btn btn-success">Exportar Excel</button></a>
      </div>
    </header>
  </div>
        <!-- Formulario -->
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
            <form action="/personas" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label text-secondary" for="validationDefault01">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" tabindex="1" required autocomplete=off>
        </div>
        <div class="mb-3">
            <label for="identidad" class="form-label text-secondary " for="validationDefault01">Identidad</label>
            <input type="text" class="form-control" id="identidad" name="identidad" placeholder="Ingrese su identidad" tabindex="2" required autocomplete=off>
        </div>
        <div class="mb-3">
            <label for="celular" class="form-label text-secondary " for="validationDefault01">Celular</label>
            <input type="text" class="form-control" id="celular" name="celular" placeholder="Ingrese su celular" tabindex="3" required autocomplete=off>
        </div>
        <div class="mb-4">
            <label for="departamento" class="form-label text-secondary">Departamento</label>
            <select name="departamento" id="departamento" class="form-control">
                <option value="Atlántida" class="text-secondary">Atlántida</option>
                <option value="Choluteca" class="text-secondary">Choluteca</option>
                <option value="Colón" class="text-secondary">Colón</option>
                <option value="Comayagua" class="text-secondary">Comayagua</option>
                <option value="Copán" class="text-secondary">Copán</option>
                <option value="Cortés" class="text-secondary">Cortés</option>
                <option value="El Paraíso" class="text-secondary">El Paraíso</option>
                <option value="Francisco Morazán" class="text-secondary">Francisco Morazán</option>
                <option value="Gracias a Dios" class="text-secondary">Gracias a Dios</option>
                <option value="Intibucá" class="text-secondary">Intibucá</option>
                <option value="Islas de la Bahía" class="text-secondary">Islas de la Bahía</option>
                <option value="La Paz" class="text-secondary">La Paz</option>
                <option value="Lempira" class="text-secondary">Lempira</option>
                <option value="Ocotepeque" class="text-secondary">Ocotepeque</option>
                <option value="Olancho" class="text-secondary">Olancho</option>
                <option value="Santa Bárbara" class="text-secondary">Santa Bárbara</option>
                <option value="Valle" class="text-secondary">Valle</option>
                <option value="Yoro" class="text-secondary">Yoro</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="imagen" class="form-label text-secondary ">Carnet de Vacunación</label>
            <input type="file" class="form-control" id="imagen" name="imagen"  accept="image/*">
        </div>
        <a href="/personas" tabindex="5" class="btn btn-secondary">Cancelar</a>
        <button type="submit" tabindex="6" class="btn btn-primary">Guardar</button>
    </form>
            </div>
        </div>
    </div>

</body>
</html>    