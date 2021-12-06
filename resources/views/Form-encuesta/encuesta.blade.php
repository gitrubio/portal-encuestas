<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href=" {{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src=" {{asset('js/app.js') }}" ></script>

    

    <title>Encuesta perfect body medical center</title>
</head>
<body>
  <div class="mx-0 mx-sm-auto">
    <div class="card">
      <div class="card-header bg-primary">
        <h5 class="mt-2 text-white card-title" id="exampleModalLabel">Feedback request</h5>
      </div>
      <div class="modal-body">
        <div class="text-justify ">
          <i class="mb-3 far fa-file-alt fa-4x text-primary"></i>
          <p>
            Estimado usuario</br>
                Para <strong class="color-blue-300">PERFECT BODY MEDICAL CENTER</strong>, sus opiniones y sugerencias son de valiosa
                importancia para la mejora continua. Permitanos conocer su percepción para la 
                toma de decisiones que nos permita prestarle cada vez, un mejor servicio.
                <br>
                <strong>Por favor, marque la casilla segun su percepción del servicio recibido:</strong>
            
          </p>
          
        </div>
  
        <hr />
  
        <form class="px-4" action="">
          <p class="text-center"><strong>¿Como califica nuestras instalaciones?</strong></p>
  
          <div class="mb-2 form-check">
            <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example1" />
            <label class="form-check-label" for="radio3Example1">
              Very good
            </label>
          </div>
          <div class="mb-2 form-check">
            <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example2" />
            <label class="form-check-label" for="radio3Example2">
              Good
            </label>
          </div>
          <div class="mb-2 form-check">
            <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example3" />
            <label class="form-check-label" for="radio3Example3">
              Medicore
            </label>
          </div>
          <div class="mb-2 form-check">
            <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example4" />
            <label class="form-check-label" for="radio3Example4">
              Bad
            </label>
          </div>
          <div class="mb-2 form-check">
            <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example5" />
            <label class="form-check-label" for="radio3Example5">
              Very bad
            </label>
          </div>
          <!--*********************************************-->
          <p class="text-center"><strong>¿Está usted satisfecho con nuestro servicio?</strong></p>
  
          <div class="mb-2 form-check">
            <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example1" />
            <label class="form-check-label" for="radio3Example1">
              Very good
            </label>
          </div>
          <div class="mb-2 form-check">
            <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example2" />
            <label class="form-check-label" for="radio3Example2">
              Good
            </label>
          </div>
          <div class="mb-2 form-check">
            <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example3" />
            <label class="form-check-label" for="radio3Example3">
              Medicore
            </label>
          </div>
          <div class="mb-2 form-check">
            <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example4" />
            <label class="form-check-label" for="radio3Example4">
              Bad
            </label>
          </div>
          <div class="mb-2 form-check">
            <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example5" />
            <label class="form-check-label" for="radio3Example5">
              Very bad
            </label>
          </div>
  
  
          <p class="text-center"><strong>What could we improve?</strong></p>
  
          <!-- Message input -->
          <div class="mb-4 form-outline">
            <textarea class="form-control" id="form4Example3" rows="4"></textarea>
            <label class="form-label" for="form4Example3">Your feedback</label>
          </div>
        </form>
      </div>
      <div class="card-footer text-end">
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</body>
</html>