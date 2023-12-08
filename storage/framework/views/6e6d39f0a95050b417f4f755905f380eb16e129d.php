
 <div class="container">
    <div class="row">
 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>SALAIRE BRUT IMPOSABLE - EMPLOYE</h2>
                    </div>
                    <div class="card-body">
                        <br/>
                        
                    <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Matricule</th>
                                        <th>Salaire de base</th>
                                        <th>Sursalaire</th>
                                        <th>Total primes</th>
                                        <th>Avantages en nat.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $salbrutimp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->matricule); ?></td>
                                        <td><?php echo e($item->salbase); ?></td>
                                        <td><?php echo e($item->sursal); ?></td>
                                        <td><?php echo e($item->totprimes); ?></td>
                                        <td><?php echo e($item->totavtagenat); ?></td>
                                       
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
    
<?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/salbrutimp/index2.blade.php ENDPATH**/ ?>