<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href=" {{ asset('css/app.css') }}" rel="stylesheet">









    

    <script type="text/javascript" src=" {{asset('js/app.js') }}" ></script>
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
          @foreach ($pacientesactivos as $pa)
        </br><strong>Por favor, Realizar la siguiente encuesta:{{$pa->Nombre}}  </strong></p>
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
        <p class="text-center justify-content-end">Estimado usuario </br>
        Para <strong>PERFECT BODY MEDICAL CENTER</strong>, sus opiniones y sugerencias son de valiosa importancia para la mejora continua. Permitanos conocer su percepción para la toma de decisiones que nos permita prestarle cada vez, un mejor servicio.
        </br><strong>Por favor, marque la casilla según su percepción del servicio recibido:</strong></p>
{{-- Inicia el formulario de preguntas el cual el usuario va a llenar --}}
        
        <form class="px-4" action="{{route('respuestas.store')}}" method="POST">
          @foreach ($preguntas as $pregunta)
          
            <fieldset>           
          <p class="text-center"><strong>{{$pregunta->pregunta}}</strong></p>
           <div class="">
             @foreach ($opciones as $opcion)
              @if($opcion->PreguntaID == $pregunta->id)
               <div class="mb-2 form-check">
                  <input class="form-check-input" type="radio" name="pregunta{{$pregunta->id}}"} id="radio2Example{{$opcion->id}}" />
                  <label class="form-check-label" for="radio2Example1">{{$opcion->OpcionTexto}}</label>
               </div>
              @endif
             @endforeach
              
        </fieldset> 
          @endforeach
          

        <!--=========================================================================================-->
         <!-- <fieldset>
          <p class="text-center"><strong>¿Comó califica el trato recibido por parte del Personal?</strong></p>

          <div class="mb-2 form-check">
            <input class="form-check-input" type="radio" name="pregunta2" id="radio2Example1" />
            <label class="form-check-label" for="radio2Example1">
              Very good
            </label>
          </div>
          <div class="mb-2 form-check">
            <input class="form-check-input" type="radio" name="pregunta2" id="radio2Example2" />
            <label class="form-check-label" for="radio2Example2">
              Good
            </label>
          </div>
          <div class="mb-2 form-check">
            <input class="form-check-input" type="radio" name="pregunta2" id="radio2Example3" />
            <label class="form-check-label" for="radio2Example3">
              Medicore
            </label>
        </div>
        <div class="mb-2 form-check">
          <input class="form-check-input" type="radio" name="pregunta2" id="radio2Example4" />
          <label class="form-check-label" for="radio2Example4">
            Bad
          </label>
        </div>
        <div class="mb-2 form-check">
          <input class="form-check-input" type="radio" name="pregunta2" id="radio2Example5" />
          <label class="form-check-label" for="radio2Example5">
            Very bad
          </label>
        </div>
      </fieldset>
<!--=========================================================================================-->

    <!--  <fieldset>
      <p class="text-center"><strong>Your rating:</strong></p>
      <div class="mb-2 form-check">
        <input class="form-check-input" type="radio" name="pregunta3" id="radio2Example1" />
        <label class="form-check-label" for="radio2Example1">
          Very good
        </label>
      </div>
      <div class="mb-2 form-check">
        <input class="form-check-input" type="radio" name="pregunta3" id="radio2Example2" />
        <label class="form-check-label" for="radio2Example2">
          Good
        </label>
      </div>
      <div class="mb-2 form-check">
        <input class="form-check-input" type="radio" name="pregunta3" id="radio2Example3" />
        <label class="form-check-label" for="radio2Example3">
          Medicore
        </label>
      </div>
      <div class="mb-2 form-check">
        <input class="form-check-input" type="radio" name="pregunta3" id="radio2Example4" />
        <label class="form-check-label" for="radio2Example4">
          Bad
        </label>
      </div>
      <div class="mb-2 form-check">
        <input class="form-check-input" type="radio" name="pregunta3" id="radio2Example5" />
        <label class="form-check-label" for="radio2Example5">
          Very bad
        </label>
      </div>
    </fieldset>

<!--=========================================================================================-->
    <!-- <fieldset>
    <p class="text-center"><strong>Your rating:</strong></p>
    <div class="mb-2 form-check">
      <input class="form-check-input" type="radio" name="pregunta4" id="radio2Example1" />
      <label class="form-check-label" for="radio2Example1">
        Very good
      </label>
    </div>
    <div class="mb-2 form-check">
      <input class="form-check-input" type="radio" name="pregunta4" id="radio2Example2" />
      <label class="form-check-label" for="radio2Example2">
        Good
      </label>
    </div>
    <div class="mb-2 form-check">
      <input class="form-check-input" type="radio" name="pregunta4" id="radio2Example3" />
      <label class="form-check-label" for="radio2Example3">
        Medicore
      </label>
    </div>
    <div class="mb-2 form-check">
      <input class="form-check-input" type="radio" name="pregunta4" id="radio2Example4" />
      <label class="form-check-label" for="radio2Example4">
        Bad
      </label>
    </div>
    <div class="mb-2 form-check">
      <input class="form-check-input" type="radio" name="pregunta4" id="radio2Example5" />
      <label class="form-check-label" for="radio2Example5">
        Very bad
      </label>
    </div>
  </fieldset>
<!--=========================================================================================-->

 <!--  <fieldset>
    <p class="text-center"><strong>Your rating:</strong></p>
    <div class="mb-2 form-check">
    <input class="form-check-input" type="radio" name="pregunta5" id="radio2Example1" />
    <label class="form-check-label" for="radio2Example1">
      Very good
    </label>
  </div>
  <div class="mb-2 form-check">
    <input class="form-check-input" type="radio" name="pregunta5" id="radio2Example2" />
    <label class="form-check-label" for="radio2Example2">
      Good
    </label>
  </div>
  <div class="mb-2 form-check">
    <input class="form-check-input" type="radio" name="pregunta5" id="radio2Example3" />
    <label class="form-check-label" for="radio2Example3">
      Medicore
    </label>
  </div>
  <div class="mb-2 form-check">
    <input class="form-check-input" type="radio" name="pregunta5" id="radio2Example4" />
    <label class="form-check-label" for="radio2Example4">
      Bad
    </label>
  </div>
  <div class="mb-2 form-check">
    <input class="form-check-input" type="radio" name="pregunta5" id="radio2Example5" />
    <label class="form-check-label" for="radio2Example5">
      Very bad
    </label>
  </div>
</fieldset>
<!--=========================================================================================-->

<!-- <fieldset>
<p class="text-center"><strong>Your rating:</strong></p>
<div class="mb-2 form-check">
  <input class="form-check-input" type="radio" name="pregunta6" id="radio2Example1" />
  <label class="form-check-label" for="radio2Example1">
    Very good
  </label>
</div>
<div class="mb-2 form-check">
  <input class="form-check-input" type="radio" name="pregunta6" id="radio2Example2" />
  <label class="form-check-label" for="radio2Example2">
    Good
  </label>
</div>
<div class="mb-2 form-check">
  <input class="form-check-input" type="radio" name="pregunta6" id="radio2Example3" />
  <label class="form-check-label" for="radio2Example3">
    Medicore
  </label>
</div>
<div class="mb-2 form-check">
  <input class="form-check-input" type="radio" name="pregunta6" id="radio2Example4" />
  <label class="form-check-label" for="radio2Example4">
    Bad
  </label>
</div>
<div class="mb-2 form-check">
  <input class="form-check-input" type="radio" name="pregunta6" id="radio2Example5" />
  <label class="form-check-label" for="radio2Example5">
    Very bad
  </label>
</div>
</fieldset>
<!--=========================================================================================-->

<!-- <fieldset>
  <p class="text-center"><strong>Your rating:</strong></p>

<div class="mb-2 form-check">
  <input class="form-check-input" type="radio" name="pregunta7" id="radio2Example1" />
  <label class="form-check-label" for="radio2Example1">
    Very good
  </label>
</div>
<div class="mb-2 form-check">
  <input class="form-check-input" type="radio" name="pregunta7" id="radio2Example2" />
  <label class="form-check-label" for="radio2Example2">
    Good
  </label>
</div>
<div class="mb-2 form-check">
  <input class="form-check-input" type="radio" name="pregunta7" id="radio2Example3" />
  <label class="form-check-label" for="radio2Example3">
    Medicore
  </label>
</div>
<div class="mb-2 form-check">
  <input class="form-check-input" type="radio" name="pregunta7" id="radio2Example4" />
  <label class="form-check-label" for="radio2Example4">
    Bad
  </label>
</div>
<div class="mb-2 form-check">
  <input class="form-check-input" type="radio" name="pregunta7" id="radio2Example5" />
  <label class="form-check-label" for="radio2Example5">
    Very bad
  </label>
</div>
</fieldset>
<fieldset>
  <p class="text-center"></i><strong>Your rating:</strong></p>

<div class="mb-2 form-check">
  <input class="form-check-input" type="radio" name="pregunta8" id="radio2Example1" />
  <label class="form-check-label" for="radio2Example1">Si</label>
</div>
<div class="mb-2 form-check">
  <input class="form-check-input" type="radio" name="pregunta8" id="radio2Example2" />
  <label class="form-check-label" for="radio2Example2">No</label></br>
  <label class="mb-2" for="">¿Por qué?</label></br>
  <div class="mb-4 form-outline">
    <textarea class="form-control" id="form4Example3" rows="4"></textarea>
  </div>
</fieldset>-->
<div class="card-footer text-end">
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>
        </form>
      </div>
     
    </div>
  </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   

      </div>
    <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>-->
    </div>
  </div>
</div>  

</body>
</html>
  <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>