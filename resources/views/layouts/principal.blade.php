<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">

    <title>Controle de estoque</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/produtos">
                    Estoque Ebe Nézer
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{action('ProdutoController@lista')}}">
                        Listagem
                    </a>
                </li>
                <li>
                    <a href="{{action('ProdutoController@novo')}}">
                        Novo
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('conteudo')
    <footer class="footer">
        <p>© Estoque Ebe Nézer by <a id="perfil" href="https://www.facebook.com/reginaldo.sousa.3517" target="_blank">Reginaldo Maranhão.</a></p>
    </footer>
</div>
</body>
</html>