<?php $__env->startSection('content'); ?>
<h3 class="">Are You Really Want To LogOut ?</h3>
<input name="" type="submit" value="Logout" class="btn btn-danger pull-left " />

<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.main.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>