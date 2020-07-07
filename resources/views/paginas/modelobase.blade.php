@extends('plantilla')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Examen Elemental de la JQCV</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Productos
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#registrar_producto">
                    <i class="fa fa-plus"></i>&nbsp;Nuevo
                </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-md-6">
                        <div class="input-group">
                            <select class="form-control col-md-3" id="opcion" name="opcion">
                                <option value="producto">Nombre</option>
                                <option value="codigo">Descripción</option>
                                <option value="categoria">Categoria</option>
                            </select>
                            <input type="text" id="texto" name="texto" class="form-control" placeholder="Resistol Prit 8 gr">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>                                        
                            <th>Motor</th>
                            <th>Buscador</th>
                            <th>Plataforma(s)</th>
                            <th>Version</th>
                            <th>Soporte Css</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>                                        
                            <td>Trident</td>
                            <td>Internet
                                Explorer 4.0
                            </td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#actualizar_producto">
                                    <i class="fa fa-pencil"></i>
                                </button> &nbsp;
                                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#deshabilitar_producto">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>                                       
                            <td>Trident</td>
                            <td>Internet
                                Explorer 5.0
                            </td>
                            <td>Win 95+</td>
                            <td>5</td>
                            <td>C</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#actualizar_producto">
                                    <i class="fa fa-pencil"></i>
                                </button> &nbsp;
                                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#deshabilitar_producto">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                Explorer 5.5
                            </td>
                            <td>Win 95+</td>
                            <td>5.5</td>
                            <td>A</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#actualizar_producto">
                                    <i class="fa fa-pencil"></i>
                                </button> &nbsp;
                                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#deshabilitar_producto">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                            <th>Opciones</th>
                        </tr>
                    </tfoot>
                </table>
                <nav>
                    <ul class="pagination pull-right">
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <</a> </li> <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">></a>
                        </li>
                    </ul>
                </nav>
           </div>  <!-- /.card-body -->
        </div>  <!-- /.card -->
    </div>  <!-- /.container-fluid -->
</section>  <!-- /.content -->


<div class="container">
    
    <p>En Examen Elemental de la JQCV (Junta Qualificadora de Coneixements de Valencià), pots realitzar l'examen del nivell elemental com si estigueres en la mateixa prova.</p>

	<p>Perquè no trobes diferències amb l'examen real, la nostra pàgina www.practicavalenciano.es, estructura l'examen elemental de la mateixa manera que els exàmens de la JQCV (Junta Qualificadora de Coneixements de Valencià), és a dir, tres respostes a triar una com verdadera. A més a més, amb la novetat del nostre sistema d'autoavaluació, pel qual l'usuari de la nostra pàgina, estudiant dels exàmens de la Junta Qualificadora de Coneixements de Valencià (Exàmens JQCV), puga saber a l'instant la seua puntuació respecte al seu examen, en este cas, el nivell elemental de la JQCV.</p>

	<p>Ja que l'Examen Elemental de la JQCV (Junta Qualificadora de Coneixements de Valencià) conté les mateixes preguntes que l'examen real i en el mateix orde, t'aconsellem que utilitzes esta opció únicament quan hages practicat prou amb els nostres exercicis pràctics.</p>

	<p>T'animem així, a l'estudi de les lliçons incloses en el nostre curs per a prendre confiança, eficàcia i aconseguir resoldre satisfactòriament l'examen elemental de la JQCV.</p>


	<h2>Proves anteriors nivel Elemental JQCV</h2>

	<ul>
		<li><a href="http://www.jqcv.gva.es/va/">Comprova la nota de l’examen de la JQCV</a></li>
		<li>Examen Elemental</li>
		<li>Examen Oral</li>
		<li>Prova C1</li>
		<li>Examen Mitjà</li>
		<li>Prova C2</li>
		<li>Examen Superior</li>
    <ul>

</div>
@endsection
