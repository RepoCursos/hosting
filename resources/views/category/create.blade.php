@extends('layouts.app')
@section('title', 'Category')

@section('content')
    @component('category._components.form')
        @slot('title')
            {{ __('views.section') . " " . __('views.category')  }}
        @endslot
        @slot('action')
            action="{{ route('category.store') }}"
        @endslot
        <!-- llamamos al slot method pero no le indicamos nada ya que no tiene que ser modificado pero 
            sino lo llamamos nos da error -->
        @slot('method')
        @endslot
        <!-- llamamos al metodo old para que no borre todo lo escrito si da un error en el completado del 
            formulario-->
        @slot('slug')
            value="{{ old('slug') }}"
        @endslot
        <!-- llamamos al metodo old para que no borre todo lo escrito si da un error en el completado del 
            formulario-->
        @slot('name')
            value="{{ old('name') }}"
        @endslot
    @endcomponent

@endsection
