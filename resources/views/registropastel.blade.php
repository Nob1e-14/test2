@extends('principal')

@section('contenido')
<div class="right_col" role="main">

<form action = "{{route('newcake')}}" method = "POST" novalidate enctype='multipart/form-data'>
      {{csrf_field()}}

<div class="clearfix"></div>

<div class="row">
<div class="col-md-12 col-sm-12 ">
@if(Session::has('mensaje'))
<div class="alert alert-success">{{Session::get('mensaje')}}</div>
@endif
</div>
</div>

      <input type="hidden" name="id_p" value="{{$id_p_sig}}" required="required" />
<span class="section">Registro de Pastel</span>

<div class="field item form-group">
<label class="col-form-label col-md-3 col-sm-3  label-align">Foto del Pastel:<span class="required"></span></label>
<div class="col-md-6 col-sm-6">
<input type="file" name="fotoproducto" id="fotoproducto" accept="image/png, .jpeg, .jpg" class="form-control">
</div>
</div>
<div class="field item form-group">
<label class="col-form-label col-md-3 col-sm-3  label-align">Nombre<span class="required">*</span></label>
<div class="col-md-6 col-sm-6">
<input class="form-control" data-validate-length-range="6,35" name="nom_p" placeholder="Red Velvet, Selva Negra" required="required" />
@if ($errors->first('nom_p'))
    <p class="text-danger">El campo es obligatorio</p>
@endif
</div>
</div>
<div class="field item form-group">
<label class="col-form-label col-md-3 col-sm-3  label-align">Tipo de pastel <span class="required">*</span></label>
<div class="col-md-6 col-sm-6">
  <select class="form-control" name="id_t" required='required'>
    <option value="">Seleccione Uno</option>
  @foreach($tips as $tip)
    <option value="{{$tip->id_t}}">{{$tip->nom_t}}</option>
  @endforeach
  </select>
  @if ($errors->first('id_t'))
    <p class="text-danger">Seleccione Uno</p>
@endif
</div>
</div>
<div class="field item form-group">
<label class="col-form-label col-md-3 col-sm-3  label-align">Descripcion<span class="required">*</span></label>
<div class="col-md-6 col-sm-6">
<input class="form-control" name="desc_p" data-validate-length-range="5,50" type="text"  required="required" />

@if ($errors->first('desc_p'))
    <p class="text-danger">El campo es obligatorio</p>
@endif
</div>
</div>
<div class="field item form-group">
<label class="col-form-label col-md-3 col-sm-3  label-align">Caracteristicas especiales</label>
<div class="col-md-6 col-sm-6">
<input class="form-control" name="carac_p" type="text"/></div>
</div>
<div class="field item form-group"> 
<label class="col-form-label col-md-3 col-sm-3  label-align">Notas Extra</label>
<div class="col-md-6 col-sm-6">
<input class="form-control" name="extras" type="text"/></div>
</div>
<div class="field item form-group">
<label class="col-form-label col-md-3 col-sm-3  label-align">Tamaño(Porciones)<span class="required">*</span></label>
<div class="col-md-6 col-sm-6">
<input class="form-control" name="tam_p" data-validate-length-range="1,15" type="number"  required="required" />
@if ($errors->first('tam_p'))
    <p class="text-danger">El campo solo acepta numeros</p>
@endif
</div>
</div>
<div class="field item form-group">
<label class="col-form-label col-md-3 col-sm-3  label-align">Tiempo de preparacion(Dias previos)<span class="required">*</span></label>
<div class="col-md-6 col-sm-6">
<input class="form-control" name="tiempprep" data-validate-length-range="1,15" type="number"  required="required" />
@if ($errors->first('tiempprep'))
    <p class="text-danger">El campo solo acepta numeros</p>
@endif
</div>
</div>
<div class="field item form-group">
<label class="col-form-label col-md-3 col-sm-3  label-align">Precio <span class="required">*</span></label>
<div class="col-md-6 col-sm-6">
<input class="form-control" type="number" class='number' name="precio" data-validate-length-range="1,15" required='required'>
@if ($errors->first('precio'))
    <p class="text-danger">El campo solo acepta numeros</p>
@endif
</div>
</div>
    <div class="ln_solid">
      <div class="form-group">
        <div class="col-md-6 offset-md-3">
          <button type='submit' class="btn btn-primary">Submit</button>
          <button type='reset' class="btn btn-success">Reset</button>
        </div>
      </div>
    </div>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
@stop