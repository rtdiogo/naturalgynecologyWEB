@extends('dashboard')
@section('content')
<div class="card" style="border-color: #a05a65;">
    <div class="card-header text-white" style="background-color: #a05a65;">
        {{$patologia->titulo}}
    </div>    
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h5><strong>Título: </strong>{{$patologia->titulo}}</h5>
            </div>
            <div class="col-md-6">
                <h5><strong>Descrição: </strong>{{$patologia->descricao}}</h5>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <h5><strong>Sintomas: </strong>{{$patologia->sintomas}}</h5>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-12">
                <a href="{{route('editarPatologia', $patologia->id)}}" class="btn btn-primary">Editar</a>
            </div>
        </div>
    </div>
</div>

<div class="card mt-4" style="border-color:  #a05a65">
    <div class="card-header text-white" style="background-color: #a05a65;">
        Produtos
    </div>
    <div class="card-body">
        <a href="{{route('formularioProduto', $patologia->id)}}" class="btn btn-primary">+ Adicionar</a>
        <div class="table-responsive mt-3"></div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="text-center" style="background-color: #edd4be;">
                    <th>Patologia</th>
                    <th>Descrição</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            @foreach($patologia->produtos as $produto)
                <tbody>
                    <tr>
                        <td>{{$produto->titulo}}</td>
                        <td>{{mb_strimwidth($produto->forma_uso, 0, 60, "...")}}</td>
                        <td><a href="{{route('editarProduto', $produto->id)}}" class="btn btn-primary">Editar</a></td>
                        <td>
                            <form action="{{route('deletaProduto', $produto->id)}}" method="post" onsubmit="return confirm('Deletar {{$produto->titulo}} do sistema?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm ml-lg-1 mt-1 ms-2"  data-toggle="tooltip" data-placement="bottom" title="deletar"><i class="fa fa-trash" aria-hidden="true"></i> Excluir</button>
                            </form>
                        </td>
                        
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection