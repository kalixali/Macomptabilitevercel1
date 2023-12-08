
<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">EDIT Page</div>
  <div class="card-body">
    <div class="row align-items-center">
      
      <form action="<?php echo e(url('heuresup/' .$heuresup->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        
          <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-3">
            <input type="hidden" name="id" id="id" value="<?php echo e($heuresup->id); ?>" id="id" /> <br/>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Matricule</label>
                                    <input type="text" name="matricule" class="form-control" value="<?php echo e($heuresup->matricule); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Taux horaire </label>
                                    <input type="number" name="txhorair" class="form-control" value="<?php echo e($heuresup->txhorair); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Heure sup. 15%</label>
                                    <input type="number" name="hsup15" class="form-control" value="<?php echo e($heuresup->hsup15); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Heure sup. 50%</label>
                                    <input type="number" name="hsup50" class="form-control" value="<?php echo e($heuresup->hsup50); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Heure sup. 75%</label>
                                    <input type="number" name="hsup75" class="form-control" value="<?php echo e($heuresup->hsup75); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Heure sup. 100%</label>
                                    <input type="number" name="hsup100" class="form-control" value="<?php echo e($heuresup->hsup100); ?>">
                                </div>
                            </div>
                            
                                                        
                        </div>

                <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-3">
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Montant H. S. à 15%</label>
                                    <input type="number" name="msup15" class="form-control" value="<?php echo e($heuresup->msup15); ?>">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Montant H. S. à 50%.</label>
                                    <input type="number" name="msup50" class="form-control" value="<?php echo e($heuresup->msup50); ?>">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Montant H. S. à 75%</label>
                                    <input type="number" name="msup75" class="form-control" value="<?php echo e($heuresup->msup75); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Montant H. S. à 100%</label>
                                    <input type="number" name="msup100" class="form-control" value="<?php echo e($heuresup->msup100); ?>">
                                </div>
                            </div>
                            
                            
                            </div>

                            <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-0">
                            
                            
                            <div class="col-md-3">
                                <div >
                                    <button type="submit" class="btn btn-primary form-control">Valider</button>
                                </div>
                            </div>
                            
                            </div>
                            
                        <br/>
    </form>
   </div>
   </div>
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/heuresup/edit.blade.php ENDPATH**/ ?>