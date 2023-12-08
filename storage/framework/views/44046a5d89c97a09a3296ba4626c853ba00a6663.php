
<?php $__env->startSection('content'); ?>

<div class="container">
 
<div class="card">
  <div class="card-header">EDIT Page</div>
  <div class="card-body">
    <div class="row align-items-center">
      
      <form action="<?php echo e(url('indemnitetax/' .$indemnitetax->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        
        
        <div class="col-md-4">
        <input type="hidden" name="id" id="id" value="<?php echo e($indemnitetax->id); ?>" id="id" class="form-control"/>
        </div>

        <div class="col-md-4">
        <label>Matricule</label>
        <input type="text" name="matricule" id="idmatricule" class="form-control" value="<?php echo e($indemnitetax->matricule); ?>">
        </div>
        
        <div class="col-md-4">
        <label>Indemnité de logement</label>
        <input type="number" name="ind_logement" id="idind_logement" class="form-control" value="<?php echo e($indemnitetax->ind_logement); ?>">
        </div>
        <div class="col-md-4">
        <label>Indemnité de nourriture</label>
        <input type="number" name="ind_nourriture" id="idind_nourriture" class="form-control" value="<?php echo e($indemnitetax->ind_nourriture); ?>">
        </div>
        <div class="col-md-4">
        <label>Autres indemnité</label>
        <input type="number" name="ind_otr" id="idind_otr" class="form-control" value="<?php echo e($indemnitetax->ind_otr); ?>">
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/indemnitetax/edit.blade.php ENDPATH**/ ?>