@extends('principal')

@section('contenido')

<div class="right_col" role="main">
<div class="">
<div class="page-title">
<div class="col-md-12 col-sm-12  ">
<div class="x_panel">
<div class="x_title">
<h2>Reporte Sucursales</h2>

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
<th class="column100 column2" data-column="column2">Clave</th>
<th class="column100 column3" data-column="column3">Direccion</th>
<th class="column100 column4" data-column="column4">Telefon</th>
<th class="column100 column5" data-column="column5">Encargado</th>
<th class="column100 column6" data-column="column6">Operaciones</th>
</tr>
</thead>
<tbody>
  @foreach($consulta as $c)
<tr class="row100">
<td class="column100 column2" data-column="column2">{{$c->id_s}}</th>
<td class="column100 column3" data-column="column3">{{$c->calle}}, {{$c->colonia}}, {{$c->municipio}}, {{$c->estado}}</td>
<td class="column100 column4" data-column="column4">{{$c->tel}}</td>
<td class="column100 column5" data-column="column5">{{$c->empl}} {{$c->appempl}}</td>
<td class="column100 column6" data-column="column6" align="center">

  <a href="{{route('modificasucursal',['id_s'=>$c->id_s])}}">
    <button type="button" class="btn btn-primary btn-sm">Modificar</button>
  </a>
@if ($c->deleted_at)
  <a href="{{route('activarsucursal',['id_s'=>$c->id_s])}}">
    <button type="button" class="btn btn-warning btn-sm">Activar</button>
  </a>

  <a href="{{route('borrasucursal',['id_s'=>$c->id_s])}}">
    <button type="button" class="btn btn-dark btn-sm">Borrar</button>
  </a>
@else
  <a href="{{route('desactivasucursal',['id_s'=>$c->id_s])}}">
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
