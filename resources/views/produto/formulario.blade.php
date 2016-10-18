@extends('layout.principal')

@section('conteudo')
    @if(isset($p))
        <h1>Editar produto</h1>
    @else
        <h1>Novo produto</h1>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>
        </div>
    @endif

    <form action="{{isset($p) ? '/produtos/atualiza/'.$p->id : '/produtos/adiciona'}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control" value="{{isset($p) ? $p->nome : old('nome') }}"/>
        </div>
        <div class="form-group">
            <label>Descricao</label>
            <input name="descricao" class="form-control" value="{{isset($p) ? $p->descricao : old('descricao') }}"/>
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input name="valor" class="form-control" value="{{isset($p) ? $p->valor : old('valor') }}"/>
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" name="quantidade" class="form-control" value="{{isset($p) ? $p->quantidade : old('quantidade') }}"/>
        </div>
        @if(isset($p))
            <button type="submit" class="btn btn-primary btn-block">Alterar</button>
        @else
            <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
        @endif

    </form>
@stop