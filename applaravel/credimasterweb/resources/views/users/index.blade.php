@extends('adminlte::page')

@section('title', 'Credimaster Web')

@section('content_header')
    <h1>Listado de usuarios</h1>
    <a href="{{route ('users.create')}}" class="btn btn-primary mb-3">Agregar usuario</a>
@stop

@section('content')
    @livewire('users-index')

@stop

@section('css')

@stop

@section('js')

@stop