@extends('layouts.general')

@section('content')

<form>
    <div class="form-group">
      <label for="exampleFormControlInput1">Mostrar categoría</label>
      <input type="text" class="form-control formulario" value="{{$categoria->nombre}}" disabled>
    </div>
    <a href="/Categorias" class="btn btn-danger">Volver</a>
  </form>

@endsection

