
<?php $__env->startSection('content'); ?>

<div class="container">
<div class="card">
  <div class="card-header">EDIT Page</div>
  <div class="card-body">
    <div class="row align-items-center">
      
      <form action="<?php echo e(url('codesjournaux/' .$codesjournaux->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        
        
        <input type="hidden" name="id" id="id" value="<?php echo e($codesjournaux->id); ?>" id="id" /> <br/>


        <div class="col-md-3">
        <label>Code</label>
        <input type="text" name="Code" id="Code" class="form-control" autocomplete="off" value="<?php echo e($codesjournaux->Code); ?>">
            <div id="compte_list"> </div>
        </div>
        <div class="col-md-3">
        <label>Type</label>
        <input type="text" name="Type" id="Type" class="form-control" value="<?php echo e($codesjournaux->Type); ?>">
        </div>
        <div class="col-md-6">
        <label>Désignation</label>
        <input type="text" name="Designation" id="Designation" class="form-control" value="<?php echo e($codesjournaux->Designation); ?>">
        </div>
        
        <div class="col-md-3 mt-3"> 
        <input type="submit" value="Modifier" class="btn btn-success form-control">
        </div>
    </form>
   </div>
   </div>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>
 

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/codesjournaux/edit.blade.php ENDPATH**/ ?>