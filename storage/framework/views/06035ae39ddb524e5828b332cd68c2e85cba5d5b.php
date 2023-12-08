
<?php $__env->startSection('content'); ?>

<div class="container">
 
<div class="card">
  <div class="card-header">EDIT Page</div>
  <div class="card-body">
    <div class="row align-items-center">
      
      <form action="<?php echo e(url('cotficemp/' .$cotficemp->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        
        
        <div class="col-md-4">
        <input type="hidden" name="id" id="id" value="<?php echo e($cotficemp->id); ?>" id="id" class="form-control"/>
        </div>
        
        <div class="col-md-4">
        <label>Matricule</label>
        <input type="text" name="matricule" id="idmatricule" class="form-control" value="<?php echo e($cotficemp->matricule); ?>">
        </div>
        
        <div class="col-md-4">
        <label>Salaire b. imp.</label>
        <input type="number" name="salbimp" id="idsalbimp" class="form-control" value="<?php echo e($cotficemp->salbimp); ?>">
        </div>
        <div class="col-md-4">
        <label>I.S.</label>
        <input type="number" name="is" id="idis" class="form-control" value="<?php echo e($cotficemp->is); ?>">
        </div>
        <div class="col-md-4">
        <label>C.N.</label>
        <input type="number" name="cn" id="idcn" class="form-control" value="<?php echo e($cotficemp->cn); ?>">
        </div>
        <div class="col-md-4">
        <label>I.G.R.</label>
        <input type="number" name="igr" id="idigr" class="form-control" value="<?php echo e($cotficemp->igr); ?>">
        </div>
        <div class="col-md-2 mt-3">
        <input type="submit" value="Valider" class="btn btn-success form-control">
        </div>
    </form>
   </div>
   </div>
  </div>
</div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/cotficemp/edit.blade.php ENDPATH**/ ?>