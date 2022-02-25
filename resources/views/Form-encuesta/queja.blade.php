<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href=" {{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src=" {{asset('js/app.js') }}" ></script>
    <title>Reporte de queja PQR</title>
</head>
<body>
    
    
        <div class="container pt-4" style="background: linear-gradient(to bottom right, #dfe7fd,#a9d6e5);">
            <img class="mx-auto my-8 rounded d-block " src="../resources/imagenes/Perfect-Body-Santa-Marta.png" alt="">

            <div class="row">
                <div class="col-sm-12 col-md-12 col-xl-12">
                <h2 class="text-center font-weight-bold pt-8" {{--style="font-size: 10vw"--}}>PROCESO DE RECOLECCIÓN DE QUEJA</h2>
                <h5 class="">Su opinión es importante para nosotros; para realizar su queja tenga en cuenta los siguientes aspectos:</h5>
                    <div class="container">
                        <ol class="text-justify list-group text-content-justify">
                            <li class="ml-4">Dirijase en tono respetuoso</li>
                            <li class="ml-4">Sea lo mas preciso en la información, incluya fecha, hora, funcionarios involucrados</li>
                            <li class="ml-4">Aporte pruebas (si las tiene), cono fotos, documentos, o cualquier tipo de evidencia que usted considere que pueda respaldar lo descrito</li>
                        </ol>
                    </div>
                    </br>
                    </br>
                 
                <form action="{{route('queja.store')}}" method="post">
                    @csrf
                    <div class="form-floating pt-8">
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-name" uppercase><strong>{{ __('Titulo') }}</strong></label>
                                <input type="text" name="Titulo" id="Titulo" class="form-control form-control-alternative" placeholder="{{ __('Titulo de la queja') }}" value="{{$Titulo}}" required autofocus>
                                <label class="form-control-label" for="input-name" uppercase><strong>{{ __('Descripción') }}</strong></label>
                                <textarea class="form-control" name="queja" id="queja" cols="100" rows="10" placeholder="Redacte aqui su queja"></textarea>               
                            </div>
                            <input class="hidden" type="file" name="archivo"></input><br>
                            <button class="btn btn-primary text-center " type="submit" style="width: 8rem">Enviar</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>