
<?php $__env->startSection('content'); ?>
 
 <div class="container">
    <div class="card">
  <div class="card-header">SAISIE COTISATIONS FISCALES - EMPLOYE</div>
  <div class="card-body">

    <div class="row">
        <form action="<?php echo e(url('search2')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <div class="col-md-4">   
        <label>Matricule</label>
        <input type="search" name="matricule" id="matricule" class="form-control" placeholder="Entrez ici le matricule de l'Employé">
        </div>
        <div class="col-md-2">
        <br/>
        <input type="submit" value="OK" class="btn btn-success form-control">
        </div>
        </form>
    </div>
    
    <div class="row align-items-center">  
      <form action="<?php echo e(url('cotficemp')); ?>" method="post">
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
        <label>I.S.</label>
        <input type="number" name="is" id="idis" class="form-control" value="<?php echo e($salbimp->is); ?>">
        </div>
        <div class="col-md-4">
        <label>C.N.</label>
        <input type="number" name="cn" id="idcn" class="form-control" value="<?php echo e($salbimp->cn); ?>">
        </div>
        <div class="col-md-4">
        <label>I.G.R.</label>
        <input type="number" name="igr" id="idigr" class="form-control" value="<?php echo e($salbimp->igr); ?>">
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
                        <h2>COTISATIONS FISCALES - EMPLOYE</h2>
                    </div>
                    <div class="card-body">
                        <br/>
                        
                    <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Matricule</th>
                                        <th>Salaire b. imp.</th>
                                        <th>I.S.</th>
                                        <th>C.N.</th>
                                        <th>I.G.R.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $cotficemp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->matricule); ?></td>
                                        <td><?php echo e($item->salbimp); ?></td>
                                        <td><?php echo e($item->is); ?></td>
                                        <td><?php echo e($item->cn); ?></td>
                                        <td><?php echo e($item->igr); ?></td>
                                        <td>
                                            
                                            <a href="<?php echo e(url('/cotficemp/' . $item->id . '/edit')); ?>" title="Edit Cotisation fiscales"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="<?php echo e(url('/cotficemp' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/cotficemp/index1.blade.php ENDPATH**/ ?>