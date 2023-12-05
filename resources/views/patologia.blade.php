@extends('dashboard')
@section('content')

<div class="card" style="border-color: #34A096;"> <div class="card-header text-white" style="background-color: #34A096;"> Pesquisar patologia </div>
    <div class="card-body">
        <form action="{{route('buscarPatologia')}}" method='POST'>
        @csrf
            <div class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <label for=""><strong>Título</strong></label>
                    <input type="search" name="buscar" id="buscar" class="form-control">
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-2">
                <div class="col-md-4">
                    <button class="btn btn-primary">Pesquisar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card mt-4" style="border-color:  #34A096">
    <div class="card-header text-white" style="background-color: #34A096;">
        Patologias
    </div>
    <div class="card-body">
        <a href="{{route('formulario')}}" class="btn btn-primary">+ Adicionar</a>
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
            @foreach($patologias as $patologia)
                <tbody>
                    <tr>
                        <td>{{$patologia->titulo}}</td>
                        <td>{{mb_strimwidth($patologia->descricao, 0, 60, "...")}}</td>
                        <td><a href="{{route('detalhaPatologia', $patologia->id)}}" class="btn btn-primary">Detalhar</a></td>
                        <td>
                            <form action="{{route('deletaFormulario', $patologia->id)}}" method="post" onsubmit="return confirm('Deletar {{$patologia->titulo}} do sistema?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm ml-lg-1 mt-1 ms-2"  data-toggle="tooltip" data-placement="bottom" title="deletar"><i class="fa fa-trash" aria-hidden="true"></i> Excluir</button>
                            </form>
                        </td>
                        
                    </tr>
                </tbody>
            @endforeach
        </table>
        <div class="d-flex justify-content-center">
            {!! $patologias->links() !!}
        </div>
    </div>
</div>

@endsection