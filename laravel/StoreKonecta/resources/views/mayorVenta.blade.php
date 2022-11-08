@extends('layouts.index')
@section('content')
<H3>El Producto con Mayor Venta es:{{$producto->Nom_producto}}</H3>

<p>con :{{$producto->Ventas}}</p>

@endsection
