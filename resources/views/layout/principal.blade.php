<html>
<head>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#myTable').DataTable({

            });
        });
    </script>
    <title>Controle de estoque</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/produtos">
                    Estoque Laravel
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{action('ProdutoController@lista')}}">Listagem</a></li>
                <li><a href="{{action('ProdutoController@novo')}}">Novo</a></li>
            </ul>
        </div>
    </nav>
    @yield('conteudo')
    <footer class="footer">
        <p>Mainha.</p>
    </footer>
</div>
</body>
</html>