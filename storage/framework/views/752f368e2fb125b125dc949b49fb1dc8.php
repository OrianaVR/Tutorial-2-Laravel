 
<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('subtitle', $viewData["subtitle"]); ?> 
<?php $__env->startSection('content'); ?> 

<div class="text-center"> 

<div class="container"> 

  <div class="row"> 
    
    <div class="col-lg-4 ms-auto"> 
      <p class="lead">Name: Oriana Valoyes</p> 
    </div> 

    <div class="col-lg-4 me-auto"> 
      <p class="lead">Email: info@onlinestore.com</p> 
    </div> 

    <div class="col-lg-4 me-auto"> 
      <p class="lead">Address: Medellín, Colombia</p> 
    </div> 

    <div class="col-lg-4 me-auto"> 
      <p class="lead">Phone: +57 300 123 4567</p> 
    </div> 



  </div> 

</div> 

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\MAMP\htdocs\laravel-tutorial-01\resources\views/contact/index.blade.php ENDPATH**/ ?>