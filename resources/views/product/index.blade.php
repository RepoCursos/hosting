@extends('layouts.app')
@section('title', 'Product')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <!-- la directiva blade __('') se usa para traducir los textos de la aplicacion, como se puede ver 
                    el el directorio lang tenemos 3 directorios mas, esto pertenece a cada lenguaje, hemos agregado el archivo 
                    views.php para indicar las traduccionse de nuestros formularios y demas textos de nuestras vistas 
                ver video: https://www.youtube.com/watch?v=dPuP30gGtlk&list=PLDllzmccetSM50U0Y9fTOWHvSzAZ_W6Il&index=15 -->
                <h1 class="mt-3 mb-3 fs-4">{{ __('views.section') . " " . __('views.Product') }}</h1>
                <a href="{{ route('product.create') }}" class="btn btn-success">{{ __('views.create') . " " . __('views.Product') }}</a>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{ __('views.photo') }}</th>
                            <th scope="col">{{ __('views.name') }}</th>
                            <th scope="col">{{ __('views.price') }}</th>
                            <th scope="col">{{ __('views.stock') }}</th>
                            <th scope="col">{{ __('views.category') }}</th>
                            <th scope="col">{{ __('views.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $i => $product)
                        <tr>
                            <th>{{ $i + 1 }}</th>
                            <!-- para acceder a las imagenes tenemos que acceder a la ruta atravez de la directiva asset() -->
                            <td scope="row"><img src="{{ asset('storage/images/' . $product->urlfoto )}}" alt="" width="65"></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->category->name}}</td>
                            <td>
                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">{{ __('views.edit') }}</a>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('product.destroy', $product->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="{{ __('views.delete') }}" class="btn btn-danger" >
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">{{ __('views.no_data') }}</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
