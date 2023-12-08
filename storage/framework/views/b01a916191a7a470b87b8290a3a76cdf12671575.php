
<?php $__env->startSection('content'); ?>
 
 <div class="container">
            <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>BILAN</h2>
                    </div>
                    <div class="card-body">
                        <br/>
                        
                    <form action = "<?php echo e(url('getbilan')); ?>" method = "POST">
                        <?php echo e(csrf_field()); ?>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Du</label>
                                    <input type="date" name="from_date" class="form-group">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Au</label>
                                    <input type="date" name="to_date" class="form-group">
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Afficher</button>
                            </div>
                        </div>
                    </div>
                </form>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/bilan/index.blade.php ENDPATH**/ ?>