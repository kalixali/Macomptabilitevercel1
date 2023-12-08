
<?php $__env->startSection('content'); ?>
 
 <div class="container">
    <div class="card">
  <div class="card-header">SAISIE  DES CODES JOURNAUX</div>
  <div class="card-body">
    <div class="row align-items-center">  
      <form action="<?php echo e(url('codesjournaux')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <div class="col-md-3">
        <label>Code</label>
        <input type="text" name="Code" id="Code" class="form-control" autocomplete="off">
            <div id="compte_list"> </div>
        </div>
        <div class="col-md-3">
        <label>Type</label>
        <input type="text" name="Type" id="Type" class="form-control">
        </div>
        <div class="col-md-6">
        <label>Désignation</label>
        <input type="text" name="Designation" id="Designation" class="form-control">
        </div>
               
        <div class="col-md-3 mt-3">
        <input type="submit" value="Valider" id="idvalider" class="btn btn-success form-control">
        </div>
    </form>
  </div>
</div>
 </div>

<div class="row">

<div class="col-md-9">
<div class="card">
<div class="card-header">
<h2>CODES JOURNAUX</h2>
</div>
<div class="card-body">
<br/>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Code</th>
                <th>Type</th>
                <th>Désignation</th>
                
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $codesjournaux; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->Code); ?></td>
                <td><?php echo e($item->Type); ?></td>
                <td><?php echo e($item->Designation); ?></td>
                <td>
                    
                    <a href="<?php echo e(url('/codesjournaux/' . $item->id . '/edit')); ?>" title="Edit CODES JOURNAUX"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                    <form method="POST" action="<?php echo e(url('/codesjournaux' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
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

<br/>

      
</div>
    </div>
    </div>
    </div>
    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/codesjournaux/index.blade.php ENDPATH**/ ?>