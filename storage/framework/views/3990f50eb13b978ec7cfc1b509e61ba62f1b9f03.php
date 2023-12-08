
<?php $__env->startSection('content'); ?>
 
 <div class="container">
    <div class="card">
  <div class="card-header">SAISIE COTISATIONS SOCIALES - EMPLOYE</div>
  <div class="card-body">

    <div class="row">
        <form action="<?php echo e(url('search')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <div class="col-md-4">   
        <label>Matricule</label>
        <input type="search1" name="matricule" id="matricule" class="form-control" placeholder="Entrez ici le matricule de l'Employé">
        </div>
        <div class="col-md-2">
        <br/>
        <input type="submit" value="OK" class="btn btn-success form-control">
        </div>
        </form>
    </div>

    <div class="row align-items-center">  
      <form action="<?php echo e(url('cotsocemp')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <div class="col-md-4">
        <label>Matricule</label>
        <input type="text" name="matricule" id="idmatricule" class="form-control" value="<?php echo e($salbimp->matricule); ?>">
        </div>
        
        <div class="col-md-4">
        <label>Salaire b. imp.</label>
        <input type="number" name="salbimp" id="idsalbimp" class="form-control" value="<?php echo e($salbimp->salbimp); ?>">
        </div>
        <div class="col-md-4">
        <label>C.R. (retraite)</label>
        <input type="number" name="cr" id="idcr" class="form-control" value="<?php echo e($salbimp->cr); ?>">
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
                        <h2>COTISATIONS SOCIALES - EMPLOYE</h2>
                    </div>
                    <div class="card-body">
                        <br/>
                        
                    <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Matricule</th>
                                        <th>Salaire b. imp.</th>
                                        <th>C.R. (retraite)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $cotsocemp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->matricule); ?></td>
                                        <td><?php echo e($item->salbimp); ?></td>
                                        <td><?php echo e($item->cr); ?></td>
                                        <td>
                                            
                                            <a href="<?php echo e(url('/cotsocemp/' . $item->id . '/edit')); ?>" title="Edit Cotisation sociales"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="<?php echo e(url('/cotsocemp' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/cotsocemp/index1.blade.php ENDPATH**/ ?>