@extends('layouts.app')
@section('title', 'Product')

@section('content')
    @component('product._components.form')
        @slot('title') 
            {{ __('views.section') . " " . __('views.Product') }}
        @endslot

        @slot('action')
            action="{{ route('product.store') }}"
        @endslot

        @slot('method')

        @slot('photo')
        <input type="file" name="urlfoto" class="form-control" placeholder="File" required>
        @endslot

        @slot('name')
        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
        @endslot

        @slot('price')
        <input type="text" name="price" value="{{ old('price') }}" class="form-control">
        @endslot

        @slot('stock')
        <input type="number" name="stock" value="{{ old('stock') }}" class="form-control">
        @endslot

        @slot('categoria')
        <option value="" selected disabled>{{ __('views.Selected_Category') }}</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
        @endslot
    @endcomponent
@endsection
