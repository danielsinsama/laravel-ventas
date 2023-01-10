@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Informacion a detalle del producto</h1>

        <ul>
            <li>Nombre: {{$product->nombre}}</li>
            <li>Precio de venta: {{$product->precioventa}}</li>
            <li>Precio de compra: {{$product->preciocompra}}</li>
            <li>Descripcion: {{$product->descripcion}}</li>
            <li>Stock: {{$product->stock}}</li>
        </ul>
    </div>
</div>
@endsection


