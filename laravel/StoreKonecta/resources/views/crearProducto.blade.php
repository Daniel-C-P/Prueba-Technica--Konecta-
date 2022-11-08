@extends('layouts.index')
@section('content')

{{-- formularioo para la creacion de nuevos productos --}}

<h3>Crear Producto</h3>

<form action="{{route('producto.store')}}" method="POST">
    @csrf
     <div class="mb-3">
      <label for="NomProducto" class="form-label">Nombre Producto</label>
      <input type="text" class="form-control" name="NomProducto" id="NomProducto"  required>
     </div>
     <div class="mb-3">
        <label for="Referencia" class="form-label">Referencia</label>
        <input type="text" class="form-control" name="Referencia" id="Referencia"  required>
     </div>
      <div class="mb-3">
        <label for="Precio" class="form-label">Precio</label>
        <input type="number" class="form-control" name="Precio" id="Precio" min="1" required>
      </div>
      <div class="mb-3">
        <label for="Peso" class="form-label">Peso</label>
        <input type="number" class="form-control" name="Peso" id="Peso" min="1" required>
      </div>
      <div class="mb-3">
        <label for="Categoria" class="form-label">Categoria</label>
        <input type="text" class="form-control" name="Categoria" id="Categoria" required>
      </div>
      <div class="mb-3">
        <label for="Stock" class="form-label">Stock</label>
        <input type="number" class="form-control" name="Stock" id="Stock" min="1" required>
      </div>

    <button type="submit" class="btn btn-primary">Crear</button>
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
