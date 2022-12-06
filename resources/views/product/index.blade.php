<h1>Listar productos</h1>

<p>Listado de los productos agregados</p>

<table>
    <!-- Fila   : table row -->
    <tr>
        <!-- table data -->
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
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->nombre}}</td>
            <td>{{$product->descripcion}}</td>
            <td>{{$product->precioventa}}</td>
            <td>{{$product->preciocompra}}</td>
            <td>{{$product->stock}}</td>
        </tr>
    @endforeach
</table>