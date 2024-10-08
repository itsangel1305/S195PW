@extends('layouts.plantilla1')
@section('titulo','Componentes Blade')
@section('contenido')

<x-card encabezado="hola s195" titulo="titulo1" textoBoton="guardar"> prueba 1 Slot para contenido</x-card>

<x-card encabezado="Dudas?? s195" titulo="titulo2" textoBoton=" No guardar"> hola </x-card>

<x-alert tipo="success"> alert verde </x-alert>

<x-alert tipo="danger"> alert rojo </x-alert>

@endsection
