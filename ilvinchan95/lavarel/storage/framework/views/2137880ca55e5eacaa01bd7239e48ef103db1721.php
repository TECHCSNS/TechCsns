<?php echo $__env->make('auth.main.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container-fluid">
<?php echo $__env->yieldContent('content'); ?>
</div>
<?php echo $__env->make('auth.main.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>