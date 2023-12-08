
<?php $__env->startSection('content'); ?>
 
 <div class="container">
    <div class="card">
      <div class="card-header">SAISIE DES HEURES SUPPLEMENTAIRES</div>
        <div class="card-body">

    <form action = "<?php echo e(url('heuresup')); ?>" method = "POST">
        <?php echo e(csrf_field()); ?>

        <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Matricule</label>
                                    <input type="text" name="matricule" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Taux horaire </label>
                                    <input type="number" name="txhorair" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Heure sup. 15%</label>
                                    <input type="number" name="hsup15" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Heure sup. 50%</label>
                                    <input type="number" name="hsup50" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Heure sup. 75%</label>
                                    <input type="number" name="hsup75" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Heure sup. 100%</label>
                                    <input type="number" name="hsup100" class="form-control">
                                </div>
                            </div>
                            
                                                        
                        </div>

                <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-3">
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Montant H. S. à 15%</label>
                                    <input type="number" name="msup15" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Montant H. S. à 50%.</label>
                                    <input type="number" name="msup50" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Montant H. S. à 75%</label>
                                    <input type="number" name="msup75" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Montant H. S. à 100%</label>
                                    <input type="number" name="msup100" class="form-control">
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

        <div class="row">
 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>FICHE DES HEURES SUPPLEMENTAIRES</h2>
                    </div>
                    <div class="card-body">
                        
                        <form action = "<?php echo e(url('getheuresup')); ?>" method = "POST">
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

                            <div class="col-md-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Filtre</button>
                                </div>
                            </div>
                        </div>
                        <br/>
                        
                    </form>    
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Matricule</th>
                                        <th>Taux horaire</th>
                                        <th>Heure sup. à 15%</th>
                                        <th>Heure sup. à 50%</th>
                                        <th>Heure sup. à 75%</th>
                                        <th>Heure sup. à 100%</th>
                                                                    
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $heuresup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->matricule); ?></td>
                                        <td><?php echo e($item->txhorair); ?></td>
                                        <td><?php echo e($item->hsup15); ?></td>
                                        <td><?php echo e($item->hsup50); ?></td>
                                        <td><?php echo e($item->hsup75); ?></td>
                                        <td><?php echo e($item->hsup100); ?></td>
                                                                                                                     
                                        <td>
                                            
                                            <a href="<?php echo e(url('/heuresup/' . $item->id . '/edit')); ?>" title="Edit Heure sup."><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="<?php echo e(url('/heuresup' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>  Delete</button>
                                            </form>
                                        </td>
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/heuresup/index.blade.php ENDPATH**/ ?>