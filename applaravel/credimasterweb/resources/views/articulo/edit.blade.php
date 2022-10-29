@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Articulos</h1>
@stop

@section('content')
<form action="/articulos/{{$articulo->id}}" method="POST">
    @method('PUT')
    @csrf
    <div class = "mb-3">
        <label for="" class="form-label">Código</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{$articulo->codigo}}">
    </div>
    <div class = "mb-3">
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" value="{{$articulo->descripcion}}">
    </div>
    <div class = "mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3" value="{{$articulo->cantidad}}">
    </div>
    <div class = "mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="4" value="{{$articulo->precio}}">
    </div>

    <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button  >
    

    
@stop

@section('css')
    
@stop

@section('js')
    
@stop


