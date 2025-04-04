 <!-- con el "extends" traemos toda la codificacion de la aplicacion base que se encuentra en views/layouts/app.blade.php -->
<?php $__env->startSection('title', 'HOME'); ?> <!-- aqui en esta sentencia modificamos en nombre del titulo de la varra de navegacion del 
                            @-yield('title') que esta en nuestra app "base"
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/home.blade.php ENDPATH**/ ?>