
<?php $__env->startSection('content'); ?>

<div class="container">
 
<div class="card">
  <div class="card-header">EDIT Page</div>
  <div class="card-body">
    <div class="row align-items-center">
      
      <form action="<?php echo e(url('avtagenat/' .$avtagenat->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        
        
        <div class="col-md-4">
        <input type="hidden" name="id" id="id" value="<?php echo e($avtagenat->id); ?>" id="id" class="form-control"/>
        </div>

        <div class="col-md-4">
        <label>Matricule</label>
        <input type="text" name="matricule" id="idmatricule" class="form-control" value="<?php echo e($avtagenat->matricule); ?>">
        </div>

        <div class="col-md-4">
        <label>Logement</label>
        <input type="number" name="avg_logement" id="idavg_logement" class="form-control" value="<?php echo e($avtagenat->avg_logement); ?>">
        </div>

        <div class="col-md-4">
        <label>Vehicule</label>
        <input type="number" name="avg_vehicule" id="idavg_vehicule" class="form-control" value="<?php echo e($avtagenat->avg_vehicule); ?>">
        </div>

        <div class="col-md-4">
        <label>Autres avantages</label>
        <input type="number" name="avg_otr" id="idavg_otr" class="form-control" value="<?php echo e($avtagenat->avg_otr); ?>">
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/avtagenat/edit.blade.php ENDPATH**/ ?>