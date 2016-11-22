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
    <h1>Novo produto</h1>
    <form action="/produtos/adiciona" method="post">

        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Valor da Compra</label>
            <input name="valorCompra" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Valor unitário</label>
            <input name="valorUni" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Quantidade em estoque</label>
            <input type="number" name="quantidade" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Itens vendidos</label>
            <input type="number" name="quantidadeVend" class="form-control"/>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
    </form>
@stop