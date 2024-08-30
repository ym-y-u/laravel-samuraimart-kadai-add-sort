<div class="container">
     <?php $__currentLoopData = $major_category_names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $major_category_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <h2><?php echo e($major_category_name); ?></h2>
         <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <?php if($category->major_category_name === $major_category_name): ?>
             <label class="samuraimart-sidebar-category-label"><a href="<?php echo e(route('products.index', ['category' => $category->id])); ?>"><?php echo e($category->name); ?></a></label>
             <?php endif; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </div><?php /**PATH C:\xampp\htdocs\laravel-samuraimart\resources\views/components/sidebar.blade.php ENDPATH**/ ?>