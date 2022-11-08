@extends('layouts.index')
@section('content')

<H3>El Producto con Mator Stock es:{{$producto->Nom_producto}}</H3>

<p>con :{{$producto->Stock}}</p>

@endsection
