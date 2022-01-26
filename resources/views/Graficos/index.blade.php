@extends('layouts.app', ['title' => __('Graficas')])

@section('content')
    @include('users.partials.header', [
        'title' => __('') . ' ',
        'description' => __(''),
        'class' => 'col-lg-10'
    ])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                
            </div>
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">{{ __('Elegir tipo de grafico') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="" autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Información') }}</h6>
                            
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif


                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label"">{{ __('Tipo Grafica') }}</label>
                                        <select class="form-control" aria-placeholder="seleccionar" required name="Tipo">
                                            <option value="">Seleccionar</option>
                                            <option value="2">Barras</option>
                                            <option value="2">Pastel</option>
                                            <option value="2">Lineal</option>
                                            <option value="1">Area Polar</option>
                                            
                                          </select>
                                </div>
                               
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Guardar') }}</button>
                                </div>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection
