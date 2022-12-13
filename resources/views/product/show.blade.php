@extends('base')
@section('titulo','Detalle del producto')
@section('titular','Detalle del producto')

@section('contenido')
    <p>Informacion a detalle del producto</p>

    <ul>
        <li>Nombre: {{$product->nombre}}</li>
        <li>Precio de venta: {{$product->precioventa}}</li>
        <li>Precio de compra: {{$product->preciocompra}}</li>
        <li>Descripcion: {{$product->descripcion}}</li>
        <li>Stock: {{$product->stock}}</li>
    </ul>
@endsection