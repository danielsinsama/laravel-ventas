@extends('base')

@section('titulo','Vender')
@section('titular','Vender')

@section('contenido')
    <form method="POST" action="{{url('add-to-cart')}}">
        @csrf
        <label>Buscar producto a vender</label>
        <br/>
        <input type="" name="idProducto" class="form-control"/>
    </form>

    @if(count($items)>0)
        <table class="table table-striped mt-4">
            <thead><th>Id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio compra</th>
            <th>Precio venta</th>
            <th>Cantidad</th>
            <th>Sub total</th>
            <th>Stock</th>
            <th>Eliminar</th>
        </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->descripcion}}</td>
                        <td>{{$item->preciocompra}}</td>
                        <td>{{$item->precioventa}}</td>
                        <td>{{$item->cantidad}}</td>
                        <td>{{$item->cantidad * $item->precioventa}}</td>
                        <td>{{$item->stock}}</td>
                        <td>
                            <form method="POST" action="{{url('delete-product-cart'.'/'.$item->id)}}">
                                @csrf
                                @method('put')
                                <button type="submit "class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    @if($total)
        <div>
            Total a pagar: {{$total}}
        </div>
    @endif
@endsection