@extends('layouts.index')
@section('content')

{{-- formularioo para la creacion de nuevos productos --}}

<h3>Editar Producto</h3>

<form action="{{route('producto.update', $producto->id)}}" method="POST">
    @method('put')
    @csrf
     <div class="mb-3">
      <label for="Nom_producto" class="form-label">Nombre Producto</label>
      <input type="text" class="form-control" name="Nom_producto" id="NomProducto" value="{{$producto->Nom_producto}}"  required>
     </div>
     <div class="mb-3">
        <label for="Referencia" class="form-label">Referencia</label>
        <input type="text" class="form-control" name="Referencia" id="Referencia" value="{{$producto->Referencia}}" required>
     </div>
      <div class="mb-3">
        <label for="Precio" class="form-label">Precio</label>
        <input type="number" class="form-control" name="Precio" id="Precio" min="1" value="{{$producto->Precio}}" required>
      </div>
      <div class="mb-3">
        <label for="Peso" class="form-label">Peso</label>
        <input type="number" class="form-control" name="Peso" id="Peso" min="1" value="{{$producto->Peso}}" required>
      </div>
      <div class="mb-3">
        <label for="Categoria" class="form-label">Categoria</label>
        <input type="text" class="form-control" name="Categoria" id="Categoria" value="{{$producto->Categoria}}" required>
      </div>
      <div class="mb-3">
        <label for="Stock" class="form-label">Stock</label>
        <input type="number" class="form-control" name="Stock" id="Stock" min="1" value="{{$producto->Stock}}" required>
      </div>

    <button type="submit" class="btn btn-primary">Cargar</button>
  </form>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection
