@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>
            Agregar categoría
        </h1>
        <form method="POST" action="{{url('categories')}}">
            {!! csrf_field() !!}
            <input  class="form-control" placeholder="Nombre"  type="text" name="name"/>
            <br/>
            <input  class="form-control" placeholder="Descripcion"  type="text" name="description"/>
            <br/>
            <input class="btn btn-dark" type="submit" value="Agregar"/>
        </form>
    </div>
</div>
@endsection


