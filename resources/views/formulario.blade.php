@extends('dashboard')
@section('content')


<div class="card mt-4 w-75 ms-5" style="border-color:  #a05a65 ">
    <div class="card-header text-white" style="background-color: #a05a65;">Patologias</div>
        <div class="card-body">
            <form action="{{route('enviarFormulario')}}" method='POST'>
            @csrf
                <div class="row">  
                    <div class="col-md-4">
                        <label for="titulo"><strong>Título</strong></label>
                        <input type="text" name='titulo' id='titulo' class='form-control' required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label for="descricao"><strong>Descrição</strong></label>
                            <textarea class="form-control" id="descricao" name='descricao' rows="4" required></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label for="sintomas"><strong>Sinais e sintomas</strong></label>
                            <textarea class="form-control" id="sintomas" name='sintomas' rows="4" required></textarea>
                    </div>
                </div>
                <a class="btn btn-primary mt-5" id='btn_produto'>Adicionar Produto</a>
                <div id='adcionar_prod'>
                </div>
                <button type='submit' class='mt-4 btn btn-primary'>Enviar</button>
            </form>
        </div>
    </div>


@endsection
@section('script')

<script>
        let contador = 0;
        $('#btn_produto').click(function(){
            contador++;

            let html = "<div class='row mt-2' id='dados_produto["+contador+"]'>" +
        "<div class='col-md-4'>" +
                "<label><b>Título</b></label>" +
                "<input type='text' name='titulo_produto["+contador+"]' id='titulo_produto["+contador+"]' class='form-control' placeholder='Informe o título do produto'/>" +
                "</div>" +
                "<div class='col-md-6'>" +
                "<label><b>Descrição</b></label>" +
                "<textarea class='form-control bg-white focus-ring focus-ring-primary' id='desc_produto["+contador+"]' name='desc_produto["+contador+"]' rows='2' placeholder='Informe neste campo a descrição do produto' required></textarea>" +
                "</div>" +
                "<div class='col-md-2' style='margin-top: 35px'>" +
                "<a onclick='excluirProduto("+contador+")' class='btn btn-danger'><i class='fa fa-trash'></i> Excluir</a>" +
                "</div>" +
                "</div>";

            $('#adcionar_prod').append(html);
            $('#cont').val(contador);
        });

        function excluirProduto(cont){
            $("[id='dados_produto["+cont+"]']").css("display", "none");
            $("[name='desc_produto["+cont+"]']").val('').removeAttr('required');
            $("[name='titulo_produto["+cont+"]']").val('').removeAttr('required');
        }
    </script>

@endsection