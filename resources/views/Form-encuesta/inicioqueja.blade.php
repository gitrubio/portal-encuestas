<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encuesta perfect body medical center</title>
    <link href=" {{ asset('css/app.css') }}" rel="stylesheet">
    <link href=" {{ asset('sass/app.scss') }}" rel="stylesheet">
    <script type="text/javascript" src=" {{asset('js/app.js') }}" ></script>
</head>
<body>
    
        <img class="mx-auto my-4 rounded d-block" src="../resources/imagenes/Perfect-Body-Santa-Marta.png" alt="">
    <div class="container-fluid h-100 bg-light text-dark">
        <div class="row justify-content-center align-items-center">
          <h1>Proceso de formalización de queja</h1>    
        </div>
           
    <hr/>
        <div class="row justify-content-center align-items-center h-100">
          <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
            <form action="" method="POST">
              <div class="form-group">
                <label for="select-tidentificacion">Tipo de identificación</label>
                <select class="form-control" placeholder="seleccionar" name="tidentificacion" id="tidentificacion" required>
                          <option value="">seleccionar</option>
                          <option value="1">Registro Civil</option>
                          <option value="2">Tarjeta de Identidad</option>
                          <option value="3">Cedula de Ciudadania</option>
                          <option value="4">Pasaporte</option>
                          <option value="5">Cedula de Extranjeria</option>
                        </select>
              </div>
              <div class="form-group">
                  <label for="">Identificación</label>
                <input type="text" class="form-control" name="qidentificacion" placeholder="Identificación" required/>
              </div>
              <div class="form-group">
                <label for="">Unidad funcional</label>
                <select class="form-control" aria-placeholder="seleccionar" name="Unidadfuncional" id="unidadfuncional" required>
                    <option value="">selecionar</option>
                    <option value="1">Consulta Prioritaria</option>
                    <option value="2">Consulta Externa</option>
                    <option value="3">Hospitalización</option>
                    <option value="4">UCI</option>
                </select>
              
            </div>
              <div class="form-group">
                  <label for="">Fecha del succeso</label></br>
                  <input type="date" name="Fsucceso" class="form-control" required>
              </div>
              <div class="text-center form-group">
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <div class="form-group row">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-success">Continuar</button>
                        </div>
                      </div>      
            </form>
          </div>
        </div>
      </div>
 
    
    
</body>
</html>