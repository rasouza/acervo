@extends('layouts.app')

@section('title')
    Administrador
@stop

@section('breadcrumb')
    <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
    <li class="active">Administrador</li>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Enviar arquivo</div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <form action="{{ action('AdminController@store') }}" enctype="multipart/form-data" method="POST" role="form">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="titulo">Título</label>
                                <input name="titulo" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="professor">Professor</label>
                                <input name="professor" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="materia">Matéria</label>
                                <input name="materia" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="categoria">Categoria</label>
                                <input name="categoria" class="form-control">
                                <p class="help-block">(Lista de exercício, prova resolvida, etc.)</p>
                            </div>

                            <div class="form-group">
                                <label for="turma">Turma</label>
                                <input name="turma" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <textarea name="descricao" class="form-control" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="arquivo">Arquivo</label>
                                <input name="arquivo" type="file">
                                <p class="help-block">Selecione o arquivo a ser enviado.</p>
                            </div>

                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.col-->
    </div>
@stop