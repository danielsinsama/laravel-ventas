@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>
            Agregar producto
        </h1>
        <form method="POST" action="{{url('products')}}">
            {!! csrf_field() !!}
            <select class="form-select" name="categoryId">
                @foreach($categories as $category)
                    <option value="{{$category->id}}"> {{$category->name}}  </option>
                @endforeach
            </select>
            <br/>
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
    </div>
</div>
@endsection


