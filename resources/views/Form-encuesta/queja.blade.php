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
<body class="bg-success">
    <img class="mx-auto my-4 rounded d-block" src="../resources/imagenes/Perfect-Body-Santa-Marta.png" alt="">
    
    <div class="container text-center bg-success">
        <h2 class="text-center font-weight-bold pt-8">PRCESO DE RECOLECCIÓN DE QUEJA</h2>
        <h5 class="">Su opinión es importante para nosotros; para realizar su queja tenga en cuenta los siguientes aspectos:</h4>
        <ol class="text-justify list-group ">
            <li>Dirijase en tono respetuoso</li>
            <li>Sea lo mas preciso en la información, incluya fecha, hora, funcionarios involucrados</li>
            <li>Aporte pruebas (si las tiene), cono fotos, documentos, o cualquier tipo de evidencia que usted considere que pueda respaldar lo descrito</li>
        </ul>
    <form action="" method="post">
       
        <div class="form-floating">
           
                <textarea class="form-control" name="queja" id="escqueja" cols="100" rows="10" placeholder="Redacte aqui su queja"></textarea>
                       
        </div>
        <input class="hidden" type="file"></input><br>
        <button class="btn btn-primary" type="submit" style="width: 8rem">Enviar</button>
    </form>
   
</body>
</html>