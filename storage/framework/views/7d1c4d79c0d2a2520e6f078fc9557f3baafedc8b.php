
<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">EDIT Page</div>
  <div class="card-body">
    <div class="row align-items-center">
      
      <form action="<?php echo e(url('sortistock/' .$sortistock->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        
        
        <input type="hidden" name="id" id="id" value="<?php echo e($sortistock->id); ?>" id="id" /> <br/>
        
        <div class="col-md-auto">
        <label>ARTICLE</label>
        <input type="text" name="prod" id="idprod" class="form-control" value="<?php echo e($sortistock->prod); ?> " disabled="disabled" >
        </div>

        <div class="col-md-auto">
        <label>QTITE</label>
        <input type="text" name="qtite" id="idqtite" class="form-control" value="<?php echo e($sortistock->qtite); ?>">
        </div>

        <div class="col-md-auto">
        <label>PU</label>
        <input type="text" name="pu" id="idpu" class="form-control" value="<?php echo e($sortistock->pu); ?>">
        </div>

        <div class="col-md-auto">
        <label>MONTANT</label>
        <input type="text" name="mont" id="idmont" class="form-control" value="<?php echo e($sortistock->mont); ?>">
        </div>

        <input type="submit" value="Modifier" class="btn btn-success"></br>
    </form>
   </div>
   </div>
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/sortistock/edit.blade.php ENDPATH**/ ?>