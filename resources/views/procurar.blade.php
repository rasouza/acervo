@extends('layouts.app')

@section('title')
    Procurar por {{ $texto }}
@stop

@section('breadcrumb')
    <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
    <li class="active">Procurar</li>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                    <div class="panel-heading">Arquivos encontrados</div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="fixed-table-toolbar"></div>
                            <div class="fixed-table-container">
                                <div class="fixed-table-header">
                                    <table></table>
                                </div>
                                <div class="fixed-table-body">
                                    <div class="fixed-table-loading" style="top: 37px; display: none;">Loading, please wait…</div>
                                    <table data-toggle="table" data-url="{{ asset("arquivos/procurar/$texto") }}" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th data-field="path" data-formatter="downloadable" data-align="center">
                                                    <div class="th-inner "></div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th data-field="titulo" style="text-align: right; ">
                                                    <div class="th-inner ">Arquivo</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th data-field="materia" style="">
                                                    <div class="th-inner ">Matéria</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th data-field="categoria" style="">
                                                    <div class="th-inner ">Categoria</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th data-field="professor" style="">
                                                    <div class="th-inner ">Professor</div>
                                                    <div class="fht-cell"></div>
                                                </th>

                                                <th data-field="turma" style="">
                                                    <div class="th-inner ">Turma</div>
                                                    <div class="fht-cell"></div>
                                                </th>

                                                <th data-field="descricao"  style="">
                                                    <div class="th-inner ">Descrição</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="no-records-found">
                                                <td colspan="6">No matching records found</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="fixed-table-pagination"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        function downloadable(value, row, index) {
            return '<a href="{{ url('download')  }}/' + value + '"><i class="glyphicon glyphicon-download"></i> </a>'
        }
    </script>
@stop