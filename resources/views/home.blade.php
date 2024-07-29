{{--<x-app-layout> aqui el contenido </x-app-layout> Esto es si usamos componentes--}}

{{-- Esto es si usamos el Plantillas como tal--}}
@extends('layouts.app')

@push('title')
Pagina principal
@endpush
     

@section('content')
<div class = "max-w-4xl mx-auto px-4"> 
   {{-- <h1>Bienvenido a la pagina principal</h1> --}}
   <x-alert2 type='danger' class="mb-4">
        <x-slot name="title">
            Alerta Wey
        </x-slot>
    Contenido de la alerta
   </x-alert2>
   <p>Hola</p>
</div>
@endsection 

