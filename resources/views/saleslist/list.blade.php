@extends('base')

@section('titulo','Ventas')
@section('titular','Lista de Ventas')

@section('contenido')
    <table class="table">
        <thead class="table-dark">
            <th>Id</th>
            <th>Listado</th>
            <th>Total</th>
            <th>Fecha</th>
        </thead>
        <tbody>
            @foreach($sales_array as $item)
                <tr>
                    <td>{{$item['saleId']}}</td>
                    <td>
                        <table class="table ">
                            <thead class="table-dark">
                                <th>Id del producto</th>                                
                                <th>Nombre</th>                                
                                <th>Descripcion</th>                                
                                <th>Precio venta</th>                                
                                <th>cantidad</th>                                
                            </thead>
                            <tbody>
                            @foreach($item['list'] as $product)
                                <tr>
                                    <td>
                                        {{$product->productId}}
                                    </td>
                                    <td>
                                        {{$product->nombre}}
                                    </td>
                                    <td>
                                        {{$product->descripcion}}
                                    </td>
                                    <td>
                                        {{$product->precioventa}}
                                    </td>
                                    <td>
                                        {{$product->quantity}}
                                    </td>
                                </tr>
                             @endforeach
                            </tbody>
                        </table>
                    </td>
                    <td>{{$item['total']}}</td>
                    <td>{{$item['fecha']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection