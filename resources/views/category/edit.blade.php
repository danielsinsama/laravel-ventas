@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Editar producto</h1>
    <form method="POST" action="{{url('categories'.'/'.$categoria->id)}}">
        {!! csrf_field() !!}
        @method('patch')
        <label>Nombre</label><br/><input  value="{{$categoria->name}}"  class="form-control" placeholder="Nombre"  type="text" name="name"/><br/>
        <label>Descripcion</label><br/><input  value="{{$categoria->description}}"  class="form-control" placeholder="Descripcion"  type="text" name="description"/><br/>  
        <input  class="btn btn-dark" type="submit" value="Editar"/>
    </form>
    </div>
</div>
@endsection
