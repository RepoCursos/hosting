<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- la @-yield directiva se utiliza para mostrar el contenido de una sección determinada, en este caso el titulo -->
    <title> <?php echo $__env->yieldContent('title'); ?> </title>
</head>

<body>
    <!-- este es el codigo base de nuestra apliacion por lo que se mantendra la escturcuta de nuestros css, js
         y toda confuguracion base como los meta y linck nesesarios -->

    <!-- la @-include directiva: le permite incluir una vista de Blade desde otra vista. Todas las variables 
	que estén disponibles para la vista de los padres se pondrán a disposición de la opsinión incluida
    en esta ocacion estamos incluyendo el menu para que se muestre en toda la aplicacion -->
    <?php echo $__env->make('layouts._partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('layouts._partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- la @-yield directiva: se utiliza para mostrar el contenido de una sección determinada en este caso el contenido -->
    <?php echo $__env->yieldContent('content'); ?>

    <!-- Como podemos obserbar podemos tener la @-yield directiva que necesitemos solo no se puede repetir
         lo que este dentro ('esto es como una variable') en este ej indicamos "othercontent" y cuando lo 
         cumplimentemos en el indicamos @-section('othercontent') -->
    <?php echo $__env->yieldContent('othercontent'); ?>

    <!-- Como podemos obserbar podemos tener la @-include directiva que necesitemos en este ej indicamos "footer" -->   
    <?php echo $__env->make('layouts._partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH /app/resources/views/layouts/app.blade.php ENDPATH**/ ?>