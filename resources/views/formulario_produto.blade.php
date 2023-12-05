@extends('dashboard')
@section('content')


<div class="card mt-4 w-75 ms-5" style="border-color:  #a05a65 ">
    <div class="card-header text-white" style="background-color: #a05a65;">Produto</div>
        <div class="card-body">
            <form action="{{isset($produto) ? route('atualizaProduto') : route('enviarFormularioProduto')}}" method='POST'>
            @csrf
                <input type="hidden" name="patologia_id" id="patologia_id" value="{{$patologia_id ?? ''}}">
                    <input type="hidden" name="produto_id" id="produto_id" value="{{$produto->id ?? ''}}">
                <div class="row">  
                    <div class="col-md-4">
                        <label for="titulo"><strong>Título</strong></label>
                        <input type="text" name='titulo' id='titulo' class='form-control' required value="{{$produto->titulo ?? old('titulo')}}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label for="descricao"><strong>Forna de Uso</strong></label>
                            <textarea class="form-control" id="forma_uso" name='forma_uso' rows="4" required>{{$produto->forma_uso ?? old("forma_uso")}}</textarea>
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