@extends('base')
@section('titulo','Editar producto')
@section('titular','Editar producto')
@section('contenido')
<form method="POST" action="{{url('products'.'/'.$producto->id)}}">
    {!! csrf_field() !!}
    @method('patch')
    <label>Precio venta</label><br/><input  value="{{$producto->precioventa}}"  class="form-control" placeholder="Precio venta"  type="number" step="any" name="precioventa"/><br/>
    <label>Precio compra</label><br/><input  value="{{$producto->preciocompra}}"  class="form-control" placeholder="Precio compra"  type="number" step="any"name="preciocompra"/><br/>
    <label>Stock</label><br/><input  value="{{$producto->stock}}"  class="form-control" placeholder="Stock"  type="number" name="stock"/><br/>
    <label>Nombre</label><br/><input  value="{{$producto->nombre}}"  class="form-control" placeholder="Nombre"  type="text" name="nombre"/><br/>
    <label>Descripcion</label><br/><input  value="{{$producto->descripcion}}"  class="form-control" placeholder="Descripcion"  type="text" name="descripcion"/><br/>  
    <input  class="btn btn-dark" type="submit" value="Editar"/>
</form>
@endsection