@extends('layouts.principal')

@section('conteudo')
<div class="container">
    <h1>Detalhes do produto: {{ $p->nome }}</h1>
    <ul>
        <li style="display: none;">{{$lucro = ($p->quantidadeVend * $p->valorUni) - $p->valorCompra}}</li>
        <li>
            <b>Valor da Compra:</b> R$ {{ $p->valorCompra }}
        </li>
        <li>
            <b>Quantidade em estoque:</b> {{ $p->quantidade }}
        </li>
        <li>
            <b>Valor unitário:</b> R$ {{ $p->valorUni }}
        </li>
        <li>
            <b>Itens vendidos:</b> {{ $p->quantidadeVend }}
        </li>
        <li class="{{$lucro < 0 ? 'alert-danger' : 'alert-success' }}">
            <b>Lucro:</b> R$ {{ $lucro }},00
        </li>
    </ul>
</div>
@stop