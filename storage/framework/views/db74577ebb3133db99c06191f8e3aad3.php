 
<?php $__env->startSection("title", $viewData["title"]); ?> 
<?php $__env->startSection('content'); ?> 


<div>
 
    <h1><?php echo e($message); ?></h1>

 
</div>


<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\MAMP\htdocs\laravel-tutorial-01\resources\views/product/sucessSave.blade.php ENDPATH**/ ?>