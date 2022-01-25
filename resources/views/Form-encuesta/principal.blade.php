<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encuesta perfect body medical center</title>
    <link href=" {{ asset('css/app2.css') }}" rel="stylesheet">
    <script type="text/javascript" src=" {{asset('js/app.js') }}" ></script>

    <script src="resourse/js/app.js"></script>

    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.0.0/sweetalert.min.js"></script>

</head>
<body background="../imagenes/fondo.gif">
    
        
    <div class="container-fluid h-100 bg-light text-dark">
       
      
        <div class="row justify-content-center align-items-center heigh bg-light">
          <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
           
            <form action="{{route('principal.index')}}" method="POST"><!--formulario de inicio de usuario y llamada al controlador PrincipalController::class -->
              @csrf
              <div class="card" style="width: 20rem;">
                <div class="text-content-center card-header ">
                  <img class="mx-auto my-4 rounded d-block" src="../resources/imagenes/Perfect-Body-Santa-Marta.png" alt="">
                </div>
                <div class="card-body">
                  <h3 class="text-bold card-title" style="width: 15rem;">Encuesta de percepción</h3>
                 
                  <div class="form-group">
                    <label for="">Tipo de identificación</label> <!--ripo de documento-->
                  <select class="form-control" aria-placeholder="seleccionar" required name="Tipo" id="Tipo">
                            <option value="">Seleccionar</option>
                            <option value="1">Registro Civil</option>
                            <option value="2">Tarjeta de Identidad</option>
                            <option value="3">Cedula de Ciudadania</option>
                            <option value="4">Pasaporte</option>
                            <option value="5">Cedula de Extranjeria</option>
                          </select>
                </div>
                <div class="form-group">
                    <label for="">Identificación</label><!--Docuemento del usuario (activo) -->
                  <input type="text" class="form-control" id="Identificacion" name="Identificacion" placeholder="Identificación" required/>
                 
                </div>
                <div class="text-center form-group">
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <div class="form-group row">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Continuar</button>
                          </div>
                        </div>      
                </div>
              </div>


              
            </form>
          </div>
        </div>
      </div>
      @include('sweet::alert')
    
    
</body>
</html>