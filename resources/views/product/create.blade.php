<h1>Crear producto</h1>

<hr/>

<form method="POST" action="{{url('products')}}">
    {!! csrf_field() !!}
    <input  placeholder="Precio venta"  type="number" step="any" name="precioventa"/>
    <br/>
    <input  placeholder="Precio compra"  type="number" step="any"name="preciocompra"/>
    <br/>
    <input  placeholder="Stock"  type="number" name="stock"/>
    <br/>
    <input  placeholder="Nombre"  type="text" name="nombre"/>
    <br/>
    <input  placeholder="Descripcion"  type="text" name="descripcion"/>
    <br/>
    <input type="submit" value="Agregar"/>
</form>


<p>Complete los datos para agregar un producto</p>