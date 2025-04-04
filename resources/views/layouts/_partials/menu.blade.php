<!-- este menu es un parcial el cual sera llamado desde app "base", es porque app puede llamarlo con el @-include() 
    para que se refleje en las vistas -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">{{ __('views.Home')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product.index') }}">{{ __('views.Product')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('category.index') }}">{{ __('views.Category')}}</a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                    {{ __('views.Language')}}
                </a>
                <ul class="dropdown-menu">
                    <!-- Recorremos el archivo "config.languages" de configuracion donde definimos nuestros lenguajes -->
                    @foreach (Config::get('languages') as $lang => $language)
                    <!-- Si el lenguaje esta sellecionado no lo mostramos -->
                        @if ($lang != App::getLocale())
                    <!-- enviamos el lenguaje seleccionado a la ruta de nuestro contolador -->
                            <li><a class="dropdown-item" href="{{ route('lang', $lang) }}">{{ $language }}</a></li>                           
                        @endif
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>
</nav>
