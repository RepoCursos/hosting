@extends('layouts.app')
@section('title', 'Product')

@section('content')
    @component('product._components.form')
        @slot('title') 
        {{ __('views.section') . " " . __('views.Product') }}
        @endslot
        
        @slot('action')
        action="{{ route('product.update', $product->id) }}"
        @endslot

        @slot('method') @method('PUT') @endslot

        @slot('photo')
        <img src="{{ asset('storage/images/' . $product->urlfoto) }}" alt="" width="65">
        <input type="file" name="urlfoto" class="form-control" value="{{ $product->urlfoto }}">
        @endslot

        @slot('name')
        <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}">
        @endslot

        @slot('price')
        <input type="text" name="price" class="form-control" value="{{ old('price', $product->price) }}">
        @endslot

        @slot('stock')
        <input type="number" name="stock" class="form-control" value="{{ old('stock', $product->stock) }}">
        @endslot

        @slot('categoria')
        <option value="{{ $product->category->id }}" selected>{{ $product->category->name }}</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
        @endslot
    @endcomponent
@endsection
