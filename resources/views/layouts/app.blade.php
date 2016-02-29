<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cursinho Vito Gianotti - Acervo Digital</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-table.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datepicker3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><span>Vito</span>Gianotti</a>

        </div>
    </div><!-- /.container-fluid -->
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form method="post" action="{{ url('procurar') }}" role="search">
        {{ csrf_field() }}
        <div class="form-group">
            <input name="procurar" type="text" class="form-control" placeholder="Procurar...">
        </div>
    </form>
    <ul class="nav menu">
        @section('nav')
            <li><a href="{{ url('materias') }}"><span class="glyphicon glyphicon-pencil"></span> Matérias</a></li>
            <li><a href="{{ url('turmas') }}"><span class="glyphicon glyphicon-lock"></span> Turmas</a></li>
            <li><a href="{{ url('professores') }}"><span class="glyphicon glyphicon-star"></span> Professores</a></li>
            <li><a href="{{ url('categorias') }}"><span class="glyphicon glyphicon-list"></span> Categorias</a></li>
            <li role="presentation" class="divider"></li>
            <li><a href="{{ url('admin/create') }}"><span class="glyphicon glyphicon-user"></span> Administrador</a></li>
        @show
    </ul>
    <div class="attribution">Criado por <a href="http://www.rasouza.com.br">R. A. Souza</a></div>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            @yield('breadcrumb')
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">@yield('title')</h1>
        </div>
    </div><!--/.row-->

    @yield('content')

</div>	<!--/.main-->

<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/chart.min.js') }}"></script>
<script src="{{ asset('js/chart-data.js') }}"></script>
<script src="{{ asset('js/easypiechart.js') }}"></script>
<script src="{{ asset('js/easypiechart-data.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/bootstrap-table.js') }}"></script>
<script>
    $('#calendar').datepicker({
    });

    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>
</body>

</html>
