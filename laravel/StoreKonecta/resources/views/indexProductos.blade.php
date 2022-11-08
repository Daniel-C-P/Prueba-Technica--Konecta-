@extends('layouts.index')

@section('content')

<h3>Listar Producto</h3>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre del Producto</th>
        <th scope="col">Referencia</th>
        <th scope="col">Precio</th>
        <th scope="col">Peso</th>
        <th scope="col">Categoria</th>
        <th scope="col">Stock</th>
        <th scope="col">Fecha de Creacion</th>
        <th scope="col">opciones</th>
      </tr>
    </thead>
    <tbody>
        @if(isset($productos))
            @foreach ($productos as $producto )
                <tr>
                    <th scope="row">{{$producto->id}}</th>
                    <td>{{$producto->Nom_producto}}</td>
                    <td>{{$producto->Referencia}}</td>
                    <td>{{$producto->Precio}}</td>
                    <td>{{$producto->Peso}}</td>
                    <td>{{$producto->Categoria}}</td>
                    <td>{{$producto->Stock}}</td>
                    <td>{{$producto->Fech_creacion}}</td>
                    <td><a class="button" href="{{route('producto.edit', $producto->id)}}">editar </a>|
                        <form action="{{ route('producto.destroy', $producto->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <button>eliminar</button>
                        </form>
                        <a class="button" href="{{route('producto.show', $producto->id)}}">vender</a>
                     </td>

                </tr>
            @endforeach
        @endif
    </tbody>
  </table>

@endsection
