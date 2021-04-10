@extends('principal')

@section('contenido')
<div class="right_col" role="main">
<form action = "{{route('newtype')}}" method = "POST" novalidate  enctype='multipart/form-data'>
      {{csrf_field()}}

      <div class="clearfix"></div>

<div class="row">
<div class="col-md-12 col-sm-12 ">
      @if(Session::has('mensaje'))
    <div class="alert alert-success">{{Session::get('mensaje')}}</div>
    @endif
</div>
</div>
    <span class="section">Registro de Tipos</span>
    <div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Nombre<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6">
        <input class="form-control" data-validate-length-range="6,25" name="nom_t" placeholder="Tres Leches, Mil Hojas" required="required" />
      </div>
    </div>
    <div class="field item form-group">
      <label class="col-form-label col-md-3 col-sm-3  label-align">Descripcion<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
      <input class="form-control" name="dec_t" data-validate-length-range="5,50" type="text"  required="required" /></div>
    </div>
    <div class="field item form-group">
      <label class="col-form-label col-md-3 col-sm-3  label-align">Ingredientes Principales/Caracteristicas<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
      <input class="form-control" name="carac_t" data-validate-length-range="5,70" type="text"  required="required" /></div>
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