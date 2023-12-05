@extends('dashboard')
@section('content')


<div class="card mt-4 w-75 ms-5" style="border-color:  #a05a65 ">
    <div class="card-header text-white" style="background-color: #a05a65;">Patologia</div>
        <div class="card-body">
            <form action="{{route('atualizaPatologia')}}" method='POST'>
            @csrf
                <input type="hidden" name="patologia_id" id="patologia_id" value="{{$patologia->id}}">
                <div class="row">  
                    <div class="col-md-4">
                        <label for="titulo"><strong>Título</strong></label>
                        <input type="text" name='titulo' id='titulo' class='form-control' required value="{{$patologia->titulo}}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label for="descricao"><strong>Descrição</strong></label>
                            <textarea class="form-control" id="descricao" name='descricao' rows="4" required>{{$patologia->descricao}}</textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label for="sintomas"><strong>Sinais e sintomas</strong></label>
                            <textarea class="form-control" id="sintomas" name='sintomas' rows="4" required>{{$patologia->sintomas}}</textarea>
                    </div>
                </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <button type='submit' class='mt-4 btn btn-primary'>Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection