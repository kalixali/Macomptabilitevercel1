
<?php $__env->startSection('content'); ?>
 
 <div class="container">
    
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>STOCK ACTUEL</h2>
                    </div>
                    <div class="card-body">
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ARTICLE</th>
                                        <th>QTITE</th>
                                        <th>PU</th>
                                        <th>MONTANT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $stockactu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->prod); ?></td>
                                        <td><?php echo e($item->qtite); ?></td>
                                        <td><?php echo e($item->pu); ?></td>
                                        <td><?php echo e($item->mont); ?></td>
                                         
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/stockactu/index.blade.php ENDPATH**/ ?>