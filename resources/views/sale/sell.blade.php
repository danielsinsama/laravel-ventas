@extends('base')

@section('titulo','Vender')
@section('titular','Vender')

@section('contenido')
    <form method="POST" action="{{url('sales-search')}}">
        @csrf
        <label>Buscar producto a vender</label>
        <br/>
        <input type="" name="idProducto" class="form-control"/>
    </form>
@endsection