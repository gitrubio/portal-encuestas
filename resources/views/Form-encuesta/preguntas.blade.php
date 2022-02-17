<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href=" {{ asset('css/app.css') }}" rel="stylesheet">
    <link href=" {{ asset('css/appprogress.css') }}" rel="stylesheet">
    <script type="text/javascript" src=" {{asset('js/app.js') }}" ></script>
    {{--<script type="text/javascript" src=" {{asset('js/appprogress.js') }}" ></script>

    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>--}}

    <title>Encuesta Perfect Body Medical Center</title>
</head>
<body>
    <!-- Button trigger modal -->
    <div class="container px-8">
    <div class="row2">

    </div>
    <div class= "modal-dialog">
      <div class="modal-content">
        <img class="mx-auto my-4 rounded d-block" src="../resources/imagenes/Perfect-Body-Santa-Marta.png" alt="">

        <div class ="textoInicio">
        <p class="text-justify1 justify-content-end">
          <strong>PERFECT BODY MEDICAL CENTER</strong></br> 
          @foreach ($pacienteactivo as $pa)
        </br><strong>Bienvenid@</strong>
        <strong>{{$pa->Nom1Afil}}  {{$pa->Ape1Afil}}</strong>
      </br><p>Para Perfect Body Medical Center es un gusto brindarle un servicio de calidad, es por eso que estamos 
        agradecidos de que</p>
        </br><strong>Por favor, Realizar la siguiente encuesta </strong></p>
          @endforeach
          
        <div class="row1">

          <button type="button" class="btn1 btn-primary1" data-toggle="modal" data-target="#exampleModalLong">
              Iniciar Encuesta 
          </button> 
      </div>
    </div>
        </div>
    </div>
    
    




<!-- Modal -->
<div class="modal fade bg-info" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <img class="mx-auto my-4 rounded d-block" src="../resources/imagenes/Perfect-Body-Santa-Marta.png" alt="">
      <div class="modal-header justify-content-center">
        <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">Encuesta de percepción</h5>
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>-->
      </div>
      <div class="modal-body">
        <p class="text-justify justify-content-end">Estimado usuario </br>
        Para <strong>PERFECT BODY MEDICAL CENTER</strong>, sus opiniones y sugerencias son de valiosa importancia para la mejora continua.  </br>Permitanos conocer su percepción para la toma de decisiones que nos permita prestarle cada vez, un mejor servicio.
        </br><strong>Por favor, marque la casilla según su percepción del servicio recibido:</strong></p>
               {{-- Inicia el formulario de preguntas el cual el usuario va a llenar --}}
        @php
        $contador = 0;    
        @endphp
        <form class="px-4" action="{{route('respuestas.store')}}" method="POST">
          @csrf
         
          @foreach ($pacienteactivo as $pa){{--Datos del usuario para enviar en el formulario--}}
           @php
            $nombre = $pa->Nom1Afil." ".$pa->Nom2Afil;
            $apellido= $pa->Ape1Afil." ".$pa->Ape2Afil;
           @endphp
           <input class="hidden" type="hidden" name="TipoID" id="TipoID" value="{{$pa->TipoID}}">
           <input class="hidden" type="hidden" name="Identificacion" id="Identificacion" value="{{$pa->Identificacion}}">
           <input class="hidden" type="hidden" name="Nombre" id="Nombre" value="{{$nombre}}">
           <input class="hidden" type="hidden" name="Apellido" id="Apellido" value="{{$apellido}}">
           <input class="hidden" type="hidden" name="Sexo" id="Sexo" value="{{$pa->Sexo}}">
           <input class="hidden" type="hidden" name="FechaNac" id="FechaNac" value="{{$pa->FechaNac}}">
           <input class="hidden" type="hidden" name="Direccion" id="Direccion" value="{{$pa->DirAfil}}">
           <input class="hidden" type="hidden" name="Telefono" id="Telefono" value="{{$pa->TelRes}}">
           <input class="hidden" type="hidden" name="Email" id="Email" value="{{$pa->Email}}">
          @endforeach
           @php
           $Fecha = date('Y-m-d h:i:s', time());  
           @endphp
           <input type="hidden" name="Fecha" id="Fecha"  value="{{$Fecha}}">
           @foreach ($name as $na)
           <input type="hidden" name="EncuestaNombre" id="EncuestaNombre"  value="{{$na->NombreEncuesta}}">
           @endforeach
          @foreach ($preguntas as $pregunta){{--foreach de las preguntas y opciones de cada una--}}
            @php
              $contador++;
            @endphp
{{-- ********************************************************************************************+ --}}
{{-- ********************************************************************************************+ --}}
{{-- ********************************************************************************************+ --}}

      
{{-- ********************************************************************************************+ --}}
{{-- ********************************************************************************************+ --}}
{{-- ********************************************************************************************+ --}}



            <fieldset>           
             <p class="text-center"><strong>{{$pregunta->pregunta}}</strong></p>
              <div class="">
              @foreach ($opciones as $opcion)
                 @if($opcion->PreguntaID == $pregunta->id)
                   <div class="mb-2 form-check">
                     <input class="form-check-input" type="radio" name="{{$pregunta->id}}" id="radio2Example{{$opcion->id}}" value="{{$opcion->id}}" />
                     <label class="form-check-label" for="radio2Example1">{{$opcion->OpcionTexto}}</label>
                   </div>
                 @endif
               @endforeach
              
            </fieldset> 
          @endforeach{{--Fin de la seccion de preguntas--}}
          <input class="hidden" type="hidden" name="contador" id="contador" value="{{$contador}}">{{--este contador sera usado para un ciclo en el controlador--}}
            <div class="card-footer text-end">
             <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
      </div>
     
    </div>
  </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
</div>
    
    </d
    iv>
  </div>
</div>  

</body>
</html>
  <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>

  <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
  