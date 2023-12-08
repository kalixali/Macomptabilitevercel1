<?php if($message = Session::get('success')): ?>
    <div class="alert alert-success alert-block">
    <!-- <button type="button" class="close" data-dismiss="alert">x</button> -->
        <strong><?php echo e($message); ?></strong>
    </div>
<?php endif; ?>
<?php if($message = Session::get('info')): ?>
    <div class="alert alert-info alert-block">
        <strong><?php echo e($message); ?></strong>
    </div>
<?php endif; ?>
<?php if($message = Session::get('error')): ?>
    <div class="alert alert-danger alert-block">
        <strong><?php echo e($message); ?></strong>
    </div>
<?php endif; ?>
<?php if($message = Session::get('warning')): ?>
    <div class="alert alert-warning alert-block">
        <strong><?php echo e($message); ?></strong>
    </div>
<?php endif; ?>
<?php if($errors -> any()): ?>
    <div class="alert alert-danger">
       Please check the form below for errors
    </div>
<?php endif; ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/flash-message.blade.php ENDPATH**/ ?>