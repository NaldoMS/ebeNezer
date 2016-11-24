@extends('layouts.principal')
@section('conteudo')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <script type="text/javascript">
        $(function(){
            $(".dinheiro").maskMoney();
        })
    </script>

    <h1>Novo produto</h1>
    <form action="{{isset($p) ? '/produtos/atualiza/'.$p->id : '/produtos/adiciona'}}" method="post">

        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control" value="{{isset($p) ? $p->nome : old('nome') }}"/>
        </div>
        <div class="form-group">
            <label>Valor da Compra</label>
            <input name="valorCompra" class="form-control dinheiro" value="{{isset($p) ? $p->ValorCompra : old('ValorCompra') }}"/>
        </div>
        <div class="form-group">
            <label>Valor unitário</label>
            <input name="valorUni" class="form-control" value="{{isset($p) ? $p->valorUni : old('valorUni') }}"/>
        </div>
        <div class="form-group">
            <label>Quantidade em estoque</label>
            <input type="number" name="quantidade" class="form-control" value="{{isset($p) ? $p->quantidade : old('quantidade') }}">
        </div>
        <div class="form-group">
            <label>Itens vendidos</label>
            <input type="number" name="quantidadeVend" class="form-control" value="{{isset($p) ? $p->quantidadeVend : old('quantidadeVend') }}"/>
        </div>
        @if(isset($p))
            <button type="submit" class="btn btn-primary btn-block">Alterar</button>
        @else
            <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
        @endif
    </form>
@stop