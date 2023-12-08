
<?php $__env->startSection('content'); ?>

<div class="container">
 
<div class="card">
  <div class="card-header">EDIT Page</div>
  <div class="card-body">
    <div class="row align-items-center">
      
      <form action="<?php echo e(url('indemnite/' .$indemnite->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        
        
        <div class="col-md-4">
        <input type="hidden" name="id" id="id" value="<?php echo e($indemnite->id); ?>" id="id" class="form-control"/>
        </div>
        
        <div class="col-md-4">
        <label>Matricule</label>
        <input type="text" name="matricule" id="idmatricule" class="form-control" value="<?php echo e($indemnite->matricule); ?>">
        </div>
        <div class="col-md-4">
        <label>Indemnité de salissure</label>
        <input type="number" name="ind_salissure" id="idind_salissure" class="form-control" value="<?php echo e($indemnite->ind_salissure); ?>">
        </div>
        <div class="col-md-4">
        <label>Indemnité de transport</label>
        <input type="number" name="ind_trsport" id="idind_trsport" class="form-control" value="<?php echo e($indemnite->ind_trsport); ?>">
        </div>
        <div class="col-md-4">
        <label>Indemnité d'outillage</label>
        <input type="number" name="ind_outillage" id="idind_outillage" class="form-control" value="<?php echo e($indemnite->ind_outillage); ?>">
        </div>
        <div class="col-md-4">
        <label>Indemnité de tournée</label>
        <input type="number" name="ind_tournee" id="idind_tournee" class="form-control" value="<?php echo e($indemnite->ind_tournee); ?>">
        </div>
        <div class="col-md-4">
        <label>Autres Indemnités</label>
        <input type="number" name="ind_otr" id="idind_otr" class="form-control" value="<?php echo e($indemnite->ind_otr); ?>">
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/indemnite/edit.blade.php ENDPATH**/ ?>