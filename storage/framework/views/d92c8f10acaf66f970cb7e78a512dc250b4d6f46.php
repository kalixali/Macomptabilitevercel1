
<?php $__env->startSection('content'); ?>

<div class="container">
 
<div class="card">
  <div class="card-header">EDIT Page</div>
  <div class="card-body">
    <div class="row align-items-center">
      
      <form action="<?php echo e(url('prime/' .$prime->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        
        
        <div class="col-md-4">
        <input type="hidden" name="id" id="id" value="<?php echo e($prime->id); ?>" id="id" class="form-control"/>
        </div>
        
        <div class="col-md-4">
        <label>Matricule</label>
        <input type="text" name="matricule" id="idmatricule" class="form-control" value="<?php echo e($prime->matricule); ?>">
        </div>
        <div class="col-md-4">
        <label>Prime d'ancienneté</label>
        <input type="number" name="prime_ancien" id="idprime_ancien" class="form-control" value="<?php echo e($prime->prime_ancien); ?>">
        </div>
        <div class="col-md-4">
        <label>Prime de diplome</label>
        <input type="number" name="prime_diplo" id="idprime_diplo" class="form-control" value="<?php echo e($prime->prime_diplo); ?>">
        </div>
        <div class="col-md-4">
        <label>Prime de rendement</label>
        <input type="number" name="prime_rendement" id="idprime_rendement" class="form-control" value="<?php echo e($prime->prime_rendement); ?>">
        </div>
        <div class="col-md-4">
        <label>Prime de risque</label>
        <input type="number" name="prim_risq" id="idprim_risq" class="form-control" value="<?php echo e($prime->prime_risq); ?>">
        </div>
        <div class="col-md-4">
        <label>Autres primes</label>
        <input type="number" name="prime_otr" id="prime_otr" class="form-control" value="<?php echo e($prime->prime_otr); ?>">
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/prime/edit.blade.php ENDPATH**/ ?>