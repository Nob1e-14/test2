@extends('principal')

@section('contenido')
<div class="right_col" role="main">
<form class="" action="{{route('modcake2')}}" method = "POST" novalidate  enctype='multipart/form-data'>
      {{csrf_field()}}
      <div class="clearfix"></div>

<div class="row">
<div class="col-md-12 col-sm-12 ">
      @if(Session::has('mensaje'))
    <div class="alert alert-success">{{Session::get('mensaje')}}</div>
    @endif
</div>
</div>
    <span class="section">Modificacion de Pastel</span>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    Imagen de perfil <img src="storage/{{ $modpas->fotoproducto }}" width="75px">
                    <input type="file" name="avatar" id="avatar" accept="image/png, .jpeg, .jpg" class="form-control">
                    <input type="hidden" readonly name="avatar_old"value="{{$modpas->fotoproducto}}" class="form-control">
                </div>
            </div>
<div class="field item form-group">
<label class="col-form-label col-md-3 col-sm-3  label-align">ID<span class="required">*</span></label>
<div class="col-md-6 col-sm-6">
<input value="{{$modpas->id_p}}" class="form-control" readonly name="id_p" />
</div>
</div>
<div class="field item form-group">
<label class="col-form-label col-md-3 col-sm-3  label-align">Nombre<span class="required">*</span></label>
<div class="col-md-6 col-sm-6">
<input value="{{$modpas->nom_p}}" class="form-control" data-validate-length-range="6,35" name="nom_p" placeholder="Red Velvet, Selva Negra" required="required" />
</div>
</div>
<div class="field item form-group">
<label class="col-form-label col-md-3 col-sm-3  label-align">Tipo de pastel <span class="required">*</span></label>
<div class="col-md-6 col-sm-6">
  <select class="form-control" name="id_t" required='required'>
  @foreach($tips as $chk)
                        @if($chk->id_t==$modpas->id_t)
                            <option value="{{ $chk->id_t }}" selected>{{ $chk->nom_t }}</option>
                        @endif
                        @endforeach
  @foreach($tips as $tip)
    <option value="{{$tip->id_t}}">{{$tip->nom_t}}</option>
  @endforeach
  </select>
</div>
</div>
<div class="field item form-group">
<label class="col-form-label col-md-3 col-sm-3  label-align">Descripcion<span class="required">*</span></label>
<div class="col-md-6 col-sm-6">
<input value="{{$modpas->desc_p}}" class="form-control" name="desc_p" data-validate-length-range="5,50" type="text"  required="required" /></div>
</div>
<div class="field item form-group">
<label class="col-form-label col-md-3 col-sm-3  label-align">Caracteristicas especiales</label>
<div class="col-md-6 col-sm-6">
<input value="{{$modpas->carac_p}}" class="form-control" name="carac_p" type="text"/></div>
</div>
<div class="field item form-group">
<label class="col-form-label col-md-3 col-sm-3  label-align">Notas Extra</label>
<div class="col-md-6 col-sm-6">
<input value="{{$modpas->extras}}" class="form-control" name="extras" type="text"/></div>
</div>
<div class="field item form-group">
<label class="col-form-label col-md-3 col-sm-3  label-align">Tamaño(Porciones)<span class="required">*</span></label>
<div class="col-md-6 col-sm-6">
<input value="{{$modpas->tam_p}}" class="form-control" name="tam_p" data-validate-length-range="1,15" type="number"  required="required" /></div>
</div>
<div class="field item form-group">
<label class="col-form-label col-md-3 col-sm-3  label-align">Tiempo de preparacion(Dias previos)<span class="required">*</span></label>
<div class="col-md-6 col-sm-6">
<input value="{{$modpas->tiempprep}}" class="form-control" name="tiempprep" data-validate-length-range="1,15" type="number"  required="required" /></div>
</div>
<div class="field item form-group">
<label class="col-form-label col-md-3 col-sm-3  label-align">Precio <span class="required">*</span></label>
<div class="col-md-6 col-sm-6">
<input value="{{$modpas->precio}}" class="form-control" type="number" class='number' name="precio" data-validate-length-range="1,15" required='required'></div>
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
  <footer>
      <div class="pull-right">
        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com/">Colorlib</a>
      </div>
    <div class="clearfix"></div>
  </footer>
  </div>
  </div>
  <script type="text/javascript">
        $('#image-file').bind('change', function() {
            alert('This file size is: ' + this.files[0].size/800/800 + "MB");
        });
  </script>
  <script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="../vendors/validator/multifield.js"></script>
  <script src="../vendors/validator/validator.js"></script>
  <script>
      var validator = new FormValidator({ "events": ['blur', 'input', 'change'] }, document.forms[0]);
      document.forms[0].onsubmit = function (e) {
        var submit = true,
          validatorResult = validator.checkAll(this);
        console.log(validatorResult);
        return !!validatorResult.valid;
      };
      document.forms[0].onreset = function (e) {
        validator.reset();
      };
      $('.toggleValidationTooltips').change(function () {
        validator.settings.alerts = !this.checked;
        if (this.checked)
          $('form .alert').remove();
      }).prop('checked', false);
    </script>
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../vendors/fastclick/lib/fastclick.js"></script>
  <script src="../vendors/nprogress/nprogress.js"></script>
  <script src="../build/js/custom.min.js"></script>
@stop