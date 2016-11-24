@extends('layouts.principal')
@extends('layouts.app')
@section('conteudo')
    @if(empty($produtos))
        <div class="alert alert-danger">Você não tem nenhum produto cadastrado.</div>
    @else
        <h1>Listagem de produtos</h1>
        <table id="myTable" class="table table-striped table-bordered table-hover">
            <tr>
                <td class="titleTable">Nome</td>
                <td class="titleTable">Valor Compra</td>
                <td class="titleTable">Quantidade</td>
                <td class="titleTable">Valor</td>
                <td class="titleTable">Vendidos</td>
                <td class="titleTable">Lucro</td>
                <td class="titleTable">Apagar</td>
                <td class="titleTable">Editar</td>
            </tr>
            @foreach ($produtos as $p)
               <p style="display: none;">{{$lucro = ($p->quantidadeVend * $p->valorUni) - $p->valorCompra}}</p>
                <tr>
                    <td> {{$p->nome}} </td>
                    <td> R${{$p->valorCompra}}</td>
                    <td class="{{$p->quantidade <= 2 ? 'danger' : '' }}"> {{$p->quantidade}} </td>
                    <td> R${{$p->valorUni}}</td>
                    <td> {{$p->quantidadeVend}} </td>
                    <td class="{{$lucro < 0 ? 'alert-danger' : 'alert-success' }}"> R${{$lucro}}</td>
                    <td>
                        <a href="{{action('ProdutoController@remove', $p->id)}}">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                    <td>
                        <a href="/produtos/editar/{{$p->id}}">
                            <i class="fa fa-edit"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
    <h4>
        <span class="label label-danger pull-right">
        Quantidade: Um ou menos itens no estoque
        </span>
    </h4><br>
    <h4>
        <span class="label label-danger pull-right">
        Lucro: Lucro negativo
        </span>
    </h4><br>
    <h4>
        <span class="label label-success pull-right">
        Lucro: Lucro positivo
        </span>
    </h4>

    @if(old('nome'))
        <div class="alert alert-success">
            <strong>Sucesso!</strong>
            O produto {{ old('nome') }} foi adicionado.
        </div>
    @endif
@stop