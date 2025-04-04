@extends('layouts.app')
@section('title', 'Category')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <h1 class="mt-3 mb-3 fs-4">{{ __('views.section') . " " . __('views.Category') }}</h1>
                <a href="{{ route('category.create') }}" class="btn btn-success">{{ __('views.create') . " " . __('views.Category') }}</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>SLUG</th>
                            <th>{{ __('views.name') }}</th>
                            <th>{{ __('views.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $i => $category)
                            <tr>
                                <!-- esta variable $i que utilizo es para que muestre el valor de la interacion y no el ID -->
                                <th>{{ $i + 1 }}</th>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">{{ __('views.edit') }}</a>
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('category.destroy', $category->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="{{ __('views.delete') }}" class="btn btn-danger">
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
