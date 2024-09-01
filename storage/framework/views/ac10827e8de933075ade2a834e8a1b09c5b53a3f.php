<nav class="navbar navbar-expand-md navbar-light shadow-sm samuraimart-header-container">
     <div class="container">
         <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
           <img src="<?php echo e(asset('img/logo.jpg')); ?>">
         </a>
         <form action="<?php echo e(route('products.index')); ?>" method="GET" class="row g-1">
             <div class="col-auto">
             <input class="form-control samuraimart-header-search-input" name="keyword">
             </div>
             <div class="col-auto">
                 <button type="submit" class="btn samuraimart-header-search-button"><i class="fas fa-search samuraimart-header-search-icon"></i></button>
             </div>
         </form>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
             <span class="navbar-toggler-icon"></span>
         </button>
 
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ms-auto mr-5 mt-2">
                 <?php if(auth()->guard()->guest()): ?>
                     <li class="nav-item mr-5">
                         <a class="nav-link" href="<?php echo e(route('register')); ?>">登録</a>
                     </li>
                     <li class="nav-item mr-5">
                         <a class="nav-link" href="<?php echo e(route('login')); ?>">ログイン</a>
                     </li>
                     <hr>
                     <li class="nav-item mr-5">
                         <a class="nav-link" href="<?php echo e(route('login')); ?>"><i class="far fa-heart"></i></a>
                     </li>
                     <li class="nav-item mr-5">
                         <a class="nav-link" href="<?php echo e(route('login')); ?>"><i class="fas fa-shopping-cart"></i></a>
                     </li>
                 <?php else: ?>
                     <li class="nav-item mr-5">
                         <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                             ログアウト
                         </a>
 
                         <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                             <?php echo csrf_field(); ?>
                         </form>
                     </li>
                 <?php endif; ?>
             </ul>
         </div>
     </div>
 </nav><?php /**PATH C:\xampp\htdocs\laravel-samuraimart-add-sort\resources\views/components/header.blade.php ENDPATH**/ ?>