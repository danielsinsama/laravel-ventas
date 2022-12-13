@extends('base')
@section('titulo','Agregar producto')
@section('titular','Nuevo producto')
@section('contenido')
    <form method="POST" action="{{url('products')}}">
        {!! csrf_field() !!}
        <input  class="form-control" placeholder="Precio venta"  type="number" step="any" name="precioventa"/>
        <br/>
        <input  class="form-control" placeholder="Precio compra"  type="number" step="any"name="preciocompra"/>
        <br/>
        <input  class="form-control" placeholder="Stock"  type="number" name="stock"/>
        <br/>
        <input  class="form-control" placeholder="Nombre"  type="text" name="nombre"/>
        <br/>
        <input  class="form-control" placeholder="Descripcion"  type="text" name="descripcion"/>
        <br/>
        <input class="btn btn-dark" type="submit" value="Agregar"/>
    </form>
@endsection

