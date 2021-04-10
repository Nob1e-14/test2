@extends('principal')

@section('contenido')
<div class="right_col" role="main">

<form action = "{{route('guardacambios')}}" method = "POST">
      {{csrf_field()}}
<div class="clearfix"></div>

<div class="row">
<div class="col-md-12 col-sm-12 ">
<div class="x_panel">
<div class="x_title">
<h2>Formulario Proveedor </h2>

<div class="clearfix"></div>
</div>
<div class="x_content">
<br />
<form class="form-label-left input_mask">
<div class="col-md-6 col-sm-6  form-group has-feedback">
<input type="text" class="form-control has-feedback-left" name="id_s" id="id_s" value="{{$consulta->id_s}}" readonly="readonly" placeholder="Clave Sucursal">
@if ($errors->first('id_s'))
    <p class="text-danger">{{$errors->first('id_s')}}</p>
@endif
<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
</div>
<div class="col-md-6 col-sm-6  form-group has-feedback">
<input type="text" class="form-control" name="calle" id="calle" value="{{$consulta->calle}}" placeholder="Calle">
@if ($errors->first('calle'))
    <p class="text-danger">{{$errors->first('calle')}}</p>
@endif
<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
</div>
<div class="col-md-6 col-sm-6  form-group has-feedback">
<input type="text" class="form-control has-feedback-left" name="numext" id="numext" value="{{$consulta->numext}}" placeholder="Numero Exterior">
@if ($errors->first('numext'))
    <p class="text-danger">{{$errors->first('numext')}}</p>
@endif
<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
</div>
<div class="col-md-6 col-sm-6  form-group has-feedback">
<input type="text" class="form-control " name="numint" id="numint" value="{{$consulta->numint}}" placeholder="Numero Interior">
@if ($errors->first('numint'))
    <p class="text-danger">{{$errors->first('numint')}}</p>
@endif
<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
</div>
<div class="col-md-6 col-sm-6  form-group has-feedback">
  <input type="tel" class="form-control has-feedback-left" name="tel" id="tel" value="{{$consulta->tel}}" placeholder="Telefono">
  @if ($errors->first('tel'))
      <p class="text-danger">{{$errors->first('tel')}}</p>
  @endif
  <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
</div>
<div class="col-md-6 col-sm-6  form-group has-feedback">
<input type="text" class="form-control" name="cp" id="cp" value="{{$consulta->cp}}" placeholder="Codigo Postal">
@if ($errors->first('cp'))
    <p class="text-danger">{{$errors->first('cp')}}</p>
@endif
<span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
</div>
<!-- <div class="col-md-12 col-sm-12  form-group has-feedback">
<input type="tel" class="form-control has-feedback-left" id="inputSuccess8" placeholder="Direccion">
<span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
</div> -->

<div class="col-md-6 col-sm-6 form-group has-feedback">

<select class="select2_single form-control" tabindex="-1" name="estado" id="estado">
<option value="{{$consulta->estado}}">{{$consulta->estado}}</option>
<option value="México">México</option>
</select>


</div>
<div class="col-md-6 col-sm-6 form-group has-feedback">

<select class="select2_single form-control" tabindex="-1" name="municipio" id="municipio">
<option value="{{$consulta->municipio}}">{{$consulta->municipio}}</option>
<option value="Lerma">Lerma</option>
<option value="San Mateo Atenco">San Mateo Atenco</option>
<option value="Xonacatlan">Xonacatlan</option>
<option value="Toluca">Toluca</option>
</select>

</div>
<div class="col-md-6 col-sm-6 form-group has-feedback">

<select class="select2_single form-control" tabindex="-1" name="colonia" id="colinia">
<option value="{{$consulta->colonia}}">{{$consulta->colonia}}</option>
<option value="Llanito">El Llanito</option>
</select>

</div>

<div class="col-md-6 col-sm-6 form-group has-feedback">

<select class="select2_single form-control" tabindex="-1" name="id_e">
<option value="{{$consulta->id_e}}">{{$consulta->nom_e}} {{$consulta->app}}</option>
@foreach ($empleados as $emp)
                      <option value="{{$emp->id_e}}">{{$emp->nom_e}} {{$emp->app}}</option>
                  @endforeach
</select>

</div>


<div class="col-md-9 col-sm-9  form-group has-feedback">
  <button type="submit" class="btn btn-success" value="Guardar">Guardar</button>

<!-- <button type="button" class="btn btn-danger">Cancel</button> -->
</div>

</form>
</div>
</div>

</div>
</div>




</div>
</div>                  

@stop
