<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encuesta perfect body medical center</title>
    <link href=" {{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src=" {{asset('js/app.js') }}" ></script>
</head>
<body>
    
        
    <div class="container-fluid h-100 bg-light text-dark">
       
      
        <div class="row justify-content-center align-items-center h-100">
          <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
           
            <form action="" method="POST">

              <div class="card" style="width: 20rem;">
                <div class="text-content-center card-header ">
                  <img class="mx-auto my-4 rounded d-block" src="../resources/imagenes/Perfect-Body-Santa-Marta.png" alt="">
                </div>
                <div class="card-body">
                  <h3 class="text-bold card-title" style="width: 15rem;">Encuesta de percepción</h3>
                  <div class="form-group">
                    <label for="">Tipo de identificación</label>
                  <select class="form-control" aria-placeholder="seleccionar" required>
                            <option value="">Seleccionar</option>
                            <option value="1">Registro Civil</option>
                            <option value="2">Tarjeta de Identidad</option>
                            <option value="3">Cedula de Ciudadania</option>
                            <option value="4">Pasaporte</option>
                            <option value="5">Cedula de Extranjeria</option>
                            <option value="6">N° Único de id. Personal</option>
                            <option value="7">Carnet Diplomatico</option>
                            <option value="8">Per Especial Permanencia</option>
                            <option value="9">Per Protección Temporal</option>
                          </select>
                </div>
                <div class="form-group">
                    <label for="">Identificación</label>
                  <input type="text" class="form-control" name="Identificacion" placeholder="Identificación" required/>
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
 
    
    
</body>
</html>