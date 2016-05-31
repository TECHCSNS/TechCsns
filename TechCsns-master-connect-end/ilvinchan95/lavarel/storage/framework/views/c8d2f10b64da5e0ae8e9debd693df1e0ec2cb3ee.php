<h1>todo index</h1>


<form action="<?php echo e(action('TodosController@create')); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    タイトル：<input type="text" name="title" placeholder="タイトル"/> <br />
    内容：<input type="text" name="body" placeholder="内容"/> <br />
    <input type="submit" name="" value="追加"/>
</form>

<?php $__empty_1 = true; foreach($todos as $todo): $__empty_1 = false; ?>
        <li>
            <h3><?php echo e($todo->title); ?></h3>
            <p>
               <form action="<?php echo e(action('TodosController@destroy', $todo->id)); ?>" method="post" style="display:inline">
                    <?php echo e($todo->body); ?>

                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('delete')); ?>

                    <input type="submit" name="" value="complete!!"/>
                </form>
            </p>
        </li>
      <?php endforeach; if ($__empty_1): ?>
      <li>No posts yet</li>
<?php endif; ?>