
<?php $__env->startSection('content'); ?>

<div class="container">
 
<div class="card">
  <div class="card-header">EDIT Page</div>
  <div class="card-body">
    <div class="row align-items-center">
      
      <form action="<?php echo e(url('salbrutimp/' .$salbrutimp->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
                
        <div class="col-md-4">
        <input type="hidden" name="id" id="id" value="<?php echo e($salbrutimp->id); ?>" id="id" class="form-control"/>
        </div>
        
        <div class="col-md-4">
        <label>Matricule</label>
        <input type="text" name="matricule" id="matricule" class="form-control" value="<?php echo e($salbrutimp->matricule); ?>">
        </div>
        <div class="col-md-4">
        <label>Salaire de base</label>
        <input type="number" name="salbase" id="idsalbase" class="form-control" value="<?php echo e($salbrutimp->salbase); ?>">
        </div>
        <div class="col-md-4">
        <label>Sursalaire</label>
        <input type="number" name="sursal" id="idsursal" class="form-control" value="<?php echo e($salbrutimp->sursal); ?>">
        </div>
        <div class="col-md-4">
        <label>Total primes</label>
        <input type="number" name="totprimes" id="idtotprimes" class="form-control" value="<?php echo e($salbrutimp->totprimes); ?>">
        </div>
        <div class="col-md-4">
        <label>Avantages en nat.</label>
        <input type="number" name="totavtagenat" id="idtotavtagenat" class="form-control" value="<?php echo e($salbrutimp->totavtagenat); ?>">
        </div>
        <div class="col-md-4">
        <label>Tot H.S.</label>
        <input type="number" name="totmhs" id="idtotmhs" class="form-control" value="<?php echo e($salbrutimp->totmhs); ?>">
        </div>
        <div class="col-md-4">
        <label>Salaire b. imp.</label>
        <input type="number" name="salbimp" id="idsalbimp" class="form-control" value="<?php echo e($salbrutimp->salbimp); ?>">
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/salbrutimp/edit.blade.php ENDPATH**/ ?>