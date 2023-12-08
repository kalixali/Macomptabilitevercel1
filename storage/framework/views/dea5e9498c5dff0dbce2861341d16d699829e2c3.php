
<?php $__env->startSection('content'); ?>

<div class="container">
 
<div class="card">
  <div class="card-header">EDIT Page</div>
  <div class="card-body">
    <div class="row align-items-center">
      
      <form action="<?php echo e(url('retenues/' .$retenues->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        
        
        <div class="col-md-4">
        <input type="hidden" name="id" id="id" value="<?php echo e($retenues->id); ?>" id="id" class="form-control"/>
        </div>

        <div class="col-md-4">
        <label>Matricule</label>
        <input type="text" name="matricule" id="idmatricule" class="form-control" value="<?php echo e($retenues->matricule); ?>">
        </div>
        
        <div class="col-md-4">
        <label>Accompte</label>
        <input type="number" name="accompte" id="idaccompte" class="form-control" value="<?php echo e($retenues->accompte); ?>">
        </div>
        <div class="col-md-4">
        <label>Avance</label>
        <input type="number" name="avance" id="idavance" class="form-control" value="<?php echo e($retenues->avance); ?>">
        </div>
        <div class="col-md-4">
        <label>Autres</label>
        <input type="number" name="autres" id="idautres" class="form-control" value="<?php echo e($retenues->autres); ?>">
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/retenues/edit.blade.php ENDPATH**/ ?>