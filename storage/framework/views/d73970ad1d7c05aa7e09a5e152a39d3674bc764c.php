<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/a41632f116.js" crossorigin="anonymous"></script>
    
        <link href="<?php echo e(asset('css/samuraimart.css')); ?>" rel="stylesheet">
    </head>
    <body>
         <div id="app">
         <?php $__env->startComponent('components.header'); ?>
         <?php echo $__env->renderComponent(); ?>
 
             <main class="py-4 mb-5">
                 <?php echo $__env->yieldContent('content'); ?>
             </main>

             <?php $__env->startComponent('components.footer'); ?>
             <?php echo $__env->renderComponent(); ?>
         </div>
 
         <!-- Scripts -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   </body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel-samuraimart-add-sort\resources\views/layouts/app.blade.php ENDPATH**/ ?>