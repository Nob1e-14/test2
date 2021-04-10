@extends('principal')

@section('contenido')




<div class="right_col" role="main" align="center">
<div class="">
<div class="page-title">
<div class="title_left">
  <!-- <div class="container"> -->
      <h1>PROCESO {{$proceso}}</h1>
      <br>
      @if ($error==1)

      <div class="alert alert-warning">{{$mensaje}}</div>
      @else

      <div class="alert alert-warning">{{$mensaje}}</div>
      @endif
  </div>
</div>
</div>
</div>
</div>



</div>
</div>


@stop
