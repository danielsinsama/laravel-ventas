@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>
            Listado de categorías
        </h1>
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
            Editar
        </td>
        <td>   
            Eliminar
        </td>
    </tr>
    @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
            <td><a  href="{{url('categories'.'/'.$category->id.'/'.'edit')}}" class="btn btn-dark">Editar</a></td>
            <td>   
                <form method="POST" action="{{url('categories'.'/'.$category->id)}}">
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

