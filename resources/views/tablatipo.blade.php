@extends('principal')

@section('contenido')

<div class="right_col" role="main">
<div class="">
<div class="page-title">
<div class="col-md-12 col-sm-12  ">
<div class="x_panel">
<div class="x_title">
<h2>Reporte Tipos <!--<small>Bordered table subtitle</small>--></h2>

<div class="clearfix"></div>
</div>
<div class="x_content">
    @if(Session::has('mensaje'))
    <div class="alert alert-success">{{Session::get('mensaje')}}</div>
    @endif
    @if(Session::has('error'))	
	<div  class="w3-panel w3-pale-red w3-round-xxlarge w3-border">{{Session::get('error')}}</div>
    @endif

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column2" data-column="column2">ID</th>
								<th class="column100 column3" data-column="column3">Nombre</th>
								<th class="column100 column4" data-column="column4">Descripcion del Tipo</th>
								<th class="column100 column5" data-column="column5">Caracteristicas Principales/Especiales</th>
								<th class="column100 column6" data-column="column6" colspan="2">Acciones</th>
							</tr>
						</thead>
						<tbody>
@foreach ($tips as $tip)
							<tr class="row100">
								<td class="column100 column2" data-column="column2">{{ $tip->id_t }}</td>
								<td class="column100 column3" data-column="column3">{{ $tip->nom_t }}</td>
								<td class="column100 column4" data-column="column4">{{ $tip->dec_t }}</td>
								<td class="column100 column5" data-column="column5">{{ $tip->carac_t }}</td>
                <td class="column100 column6" data-column="column6">

<a href="{{route('modtype',['id_t'=>$tip->id_t])}}">
  <button type="button" class="btn btn-primary btn-sm">Modificar</button>
</a>
@if ($tip->status_t==0)
<a href="{{route('actype',['id_t'=>$tip->id_t])}}">
  <button type="button" class="btn btn-warning btn-sm">Activar</button>
</a>
<a href="{{route('deltype',['id_t'=>$tip->id_t])}}">
  <button type="button" class="btn btn-dark btn-sm">Borrar</button>
</a>
@else
<a href="{{route('destype',['id_t'=>$tip->id_t])}}">
  <button type="button" class="btn btn-danger btn-sm">Desactivar</button>
</a>
@endif
</td>
</tr>
@endforeach
			</tbody>
	</table>
</div>
</div>
</div>
</div>
</div>
</div>

@stop