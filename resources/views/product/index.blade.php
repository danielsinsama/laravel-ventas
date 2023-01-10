@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>
            Listado de productos
        </h1>
        <p>Listado de los productos agregados</p>
@if(count($products)>5)
    <p>Tienes muchos productos</p>
@else
    <p>Tienes pocos productos</p>
@endif
<table class="table">
    <!-- Fila   : table row -->
    <tr>
        <!-- table data -->
        <td>   
            Id
        </td>
        <td>   
            Nombre
        </td>
        <td>   
            Descripcion
        </td>
        <td>   
            Precio venta
        </td>
        <td>   
            Precio compra
        </td>
        <td>   
            Stock
        </td>
        <td>   
            Editar
        </td>
        <td>   
            Eliminar
        </td>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->nombre}}</td>
            <td>{{$product->descripcion}}</td>
            <td>{{$product->precioventa}}</td>
            <td>{{$product->preciocompra}}</td>
            <td>{{$product->stock}}</td>
            <td><a  href="{{url('products'.'/'.$product->id.'/'.'edit')}}" class="btn btn-dark">Editar</a></td>
            <td>   
                <form method="POST" action="{{url('products'.'/'.$product->id)}}">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
    </div>
</div>
@endsection

