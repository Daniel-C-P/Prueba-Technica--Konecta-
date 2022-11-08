@extends('layouts.index')

@section('content')
<h3>venta de {{$producto->Nom_producto}}</h3>

<form action="{{route('producto.vender', $producto->id) }}" method="post">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="NomProducto" class="form-label">cantidad a vender</label>
        <input type="number" class="form-control" name="cantProduct" min="1" id="NomProducto"  required>
    </div>
    <button type="submit" class="btn btn-primary">Vender</button>
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
@if(isset($alert))
<div class="alert alert-primary" role="alert">
    la cantidad a vender es superior a la cantidad en stock
  </div>
@endif

@endsection
