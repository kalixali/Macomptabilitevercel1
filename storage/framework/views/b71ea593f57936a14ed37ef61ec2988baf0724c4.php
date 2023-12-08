
<?php $__env->startSection('content'); ?>
<div class="container">
<div class="card">
  <div class="card-header">EDIT Page</div>
  <div class="card-body">

      <form action="<?php echo e(url('plancpte/' .$plancpte->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" class="form-control" value="<?php echo e($plancpte->id); ?>" id="id" />
        <div class="col-md-3">
        <label>COMPTE</label></br>
        <input type="number" name="compte" id="idcompte" class="form-control" value="<?php echo e($plancpte->compte); ?>" class="form-control"></br>
        </div>
        <div class="col-md-7">
        <label>LIBELLE</label></br>
        <input type="text" name="Libelle" id="idLibelle" class="form-control" value="<?php echo e($plancpte->Libelle); ?>" class="form-control"></br>
        </div>
        <div class="col-md-3 mt-3">
        <input type="submit" value="Modifier" class="btn btn-success form-control">
        </div>
    </form>
   
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/plancpte/edit.blade.php ENDPATH**/ ?>