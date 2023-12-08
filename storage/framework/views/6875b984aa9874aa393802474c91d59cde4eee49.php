
<?php $__env->startSection('content'); ?>
 
 <div class="container text-center">
    <div class="card">
  <div class="card-header">FICHE ENTREPRISE</div>
  <div class="card-body">

    <form action = "<?php echo e(url('entreprise')); ?>" method = "POST" enctype = "multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="id" class="form-control" value="<?php echo e($entreprise->id); ?>">
                        <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Sigle</label>
                                    <input type="text" name="sigle" class="form-control" value="<?php echo e($entreprise->sigle); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Raison sociale </label>
                                    <input type="text" name="nom_complet" class="form-control" value="<?php echo e($entreprise->nom_complet); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">N° CC</label>
                                    <input type="text" name="numCC" class="form-control" value="<?php echo e($entreprise->numCC); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">N° RC</label>
                                    <input type="text" name="numRC" class="form-control" value="<?php echo e($entreprise->numRC); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Adresse</label>
                                    <input type="text" name="adresse" class="form-control" value="<?php echo e($entreprise->adresse); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Contact 1</label>
                                    <input type="text" name="contact1" class="form-control" value="<?php echo e($entreprise->contact1); ?>">
                                </div>
                            </div>
                            
                                                        
                        </div>
                       
                        <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Contact 2</label>
                                    <input type="text" name="contact2" id="contact2" class="form-control" value="<?php echo e($entreprise->contact2); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" value="<?php echo e($entreprise->email); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Sit. geo.</label>
                                    <input type="text" name="sitgeo" class="form-control" value="<?php echo e($entreprise->sitgeo); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Logo</label>
                                    <img src="<?php echo e(asset($entreprise->logo)); ?>" width= '100' height= '100' >
                                </div>
                            </div>
                            
                        </div>
                        <br/>

                        <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-3">
                            
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/entreprise/index1.blade.php ENDPATH**/ ?>