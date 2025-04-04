@extends('layouts.app')
@section('title', 'Category')

@section('content')
    <!-- Para llamar y pintar la vista del componente le indicamos en donde se encuentra -->
    <!-- ubicacion del componente -->
    @component('category._components.form')
        <!-- en este slot llamamos a la variable $title para idicarle que mostrar -->
        @slot('title')
        {{ __('views.section') . " " . __('views.category')  }}
        @endslot
        <!-- llamamos al slot action para indicar su configuracion -->
        @slot('action')
            action="{{ route('category.update', $category->id) }}"
        @endslot
        <!-- indicamos el method cual va a ser su valor a modificar -->
        @slot('method')
            @method('PUT')
        @endslot
        <!-- llamamos al metodo old para que no borre todo lo escrito si da un error en el completado del 
            formulario-->
        @slot('slug')
            @isset($category)
                value="{{ old('slug', $category->slug) }}"
            @endisset
        @endslot
        <!-- llamamos al metodo old para que no borre todo lo escrito si da un error en el completado del 
            formulario-->
        @slot('name')
            @isset($category)
                value="{{ old('name', $category->name) }}"
            @endisset
        @endslot
    @endcomponent

@endsection
