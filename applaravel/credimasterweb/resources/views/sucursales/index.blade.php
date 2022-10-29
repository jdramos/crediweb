@extends('adminlte::page')

@section('title', 'Credimaster Web')

@section('content_header')
<h1>Listado de sucursales</h1>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarSucursalModal" data-target="#staticBackdrop">
	Agregar sucursal
</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarSucursalModal" data-target="#staticBackdrop">
	Modal
</button>
<x-jet-danger-button>
    Crear
</x-jet-danger-button>
@stop

@section('content')

<div class="container">
    @if(session()->has('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif

    @livewire('sucursales')
    
</div>

    
@stop