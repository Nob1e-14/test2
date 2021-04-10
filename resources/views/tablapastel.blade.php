@extends('principal')

@section('contenido')

<div class="right_col" role="main">
<div class="">
<div class="page-title">
<div class="col-md-12 col-sm-12  ">
<div class="x_panel">
<div class="x_title">
<h2>Reporte Pasteles</h2>

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
								<th class="column100 column3" data-column="column3">Nombre del Pastel</th>
								<th class="column100 column4" data-column="column4">Foto</th>
								<th class="column100 column5" data-column="column5">Tipo de pastel</th>
								<th class="column100 column6" data-column="column6">Descripcion y Cacarceristicas pastel</th>
								<th class="column100 column7" data-column="column7">Notas extra</th>
								<th class="column100 column8" data-column="column8">Tamaño del pastel (Porciones)</th>
								<th class="column100 column9" data-column="column9">Tiempo de preparacion (dias)</th>
								<th class="column100 column10" data-column="column10">Precio</th>
								<th class="column100 column11" data-column="column11">Acciones</th>
							</tr>
						</thead>
						<tbody>
@foreach ($cks as $ck)
							<tr class="row100">
								<td class="column100 column2" data-column="column2">{{ $ck->id_p }}</td>
								<td class="column100 column3" data-column="column3">{{ $ck->nom_p }}</td>
								<td class="column100 column3" data-column="column3"><img src="storage/{{ $ck->fotoproducto }}" width="100px"></td>
								<td class="column100 column4" data-column="column4">{{ $ck->nom_t }}</td>
								<td class="column100 column3" data-column="column3">-> {{ $ck->desc_p }}<br><br>{{ $ck->carac_p }}</td>
								<td class="column100 column6" data-column="column6">{{ $ck->extras }}</td>
								<td class="column100 column7" data-column="column7">{{ $ck->tam_p }}</td>
								<td class="column100 column8" data-column="column8">{{ $ck->tiempprep }}</td>
								<td class="column100 column9" data-column="column9">{{ $ck->precio }}</td>
                <td class="column100 column10" data-column="column10">

  <a href="{{route('modcake',['id_p'=>$ck->id_p])}}">
    <button type="button" class="btn btn-primary btn-sm">Modificar</button>
  </a>
@if ($ck->status_p==0)
  <a href="{{route('actcake',['id_p'=>$ck->id_p])}}">
    <button type="button" class="btn btn-warning btn-sm">Activar</button>
  </a>
  <a href="{{route('delcake',['id_p'=>$ck->id_p])}}">
    <button type="button" class="btn btn-dark btn-sm">Borrar</button>
  </a>
@else
  <a href="{{route('descake',['id_p'=>$ck->id_p])}}">
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