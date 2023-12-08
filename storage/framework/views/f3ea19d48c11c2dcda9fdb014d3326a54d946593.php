
<?php $__env->startSection('content'); ?>
 
 <div class="container">
    <div class="card">
  <div class="card-header">PRIMES EMPLOYE</div>
  <div class="card-body">
    <div class="row align-items-center">  
      <form action="<?php echo e(url('prime')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <div class="col-md-4">
        <label>Matricule</label>
        <input type="text" name="matricule" id="idmatricule" class="form-control">
        </div>
        <div class="col-md-4">
        <label>Prime d'ancienneté</label>
        <input type="number" name="prime_ancien" id="idprime_ancien" class="form-control" value="0">
        </div>
        <div class="col-md-4">
        <label>Prime de diplome</label>
        <input type="number" name="prime_diplo" id="idprime_diplo" class="form-control" value="0">
        </div>
        <div class="col-md-4">
        <label>Prime de rendement</label>
        <input type="number" name="prime_rendement" id="idprime_rendement" class="form-control" value="0">
        </div>
        <div class="col-md-4">
        <label>Prime de risque</label>
        <input type="number" name="prim_risq" id="idprim_risq" class="form-control" value="0">
        </div>
        <div class="col-md-4">
        <label>Autres primes</label>
        <input type="number" name="prime_otr" id="prime_otr" class="form-control" value="0">
        </div>
        <div class="col-md-2 mt-3">
        <input type="submit" value="Valider" class="btn btn-success form-control">
        </div>
    </form>
  </div>
</div>
 </div>

        <div class="row">
 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>PRIMES</h2>
                    </div>
                    <div class="card-body">
                        <br/>
                     
                     <form action = "<?php echo e(url('getprime')); ?>" method = "POST">
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
                                        <th>Prime d'ancienneté</th>
                                        <th>Prime de diplome</th>
                                        <th>Prime de rendement</th>
                                        <th>Prime de risque</th>
                                        <th>Autres primes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $prime; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->matricule); ?></td>
                                        <td><?php echo e($item->prime_ancien); ?></td>
                                        <td><?php echo e($item->prime_diplo); ?></td>
                                        <td><?php echo e($item->prime_rendement); ?></td>
                                        <td><?php echo e($item->prim_risq); ?></td>
                                        <td><?php echo e($item->prime_otr); ?></td>
                                        <td>
                                            
                                            <a href="<?php echo e(url('/prime/' . $item->id . '/edit')); ?>" title="Edit Prime"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="<?php echo e(url('/prime' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/prime/index.blade.php ENDPATH**/ ?>