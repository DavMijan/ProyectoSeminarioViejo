@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Pestaña Principal</h1>
@stop

@livewireStyles

@section('content')

<livewire:mantenimiento />


@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop