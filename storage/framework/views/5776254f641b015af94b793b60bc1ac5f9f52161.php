
<?php $__env->startSection('content'); ?>

<div class="container">
<div class="card">
  <div class="card-header">EDIT Page</div>
  <div class="card-body">
    <div class="row align-items-center">
      
      <form action="<?php echo e(url('journal/' .$journal->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        
        
        <input type="hidden" name="id" id="id" value="<?php echo e($journal->id); ?>" id="id" /> <br/>
        
        <div class="col-md-3">
        <label>Compte</label>
        <input type="number" name="compte" id="idcompte" class="form-control" value="<?php echo e($journal->compte); ?>">
        </div>

        <div class="col-md-6">
        <label>Libellé</label>
        <input type="text" name="libellé" id="idlibellé" class="form-control" value="<?php echo e($journal->libellé); ?>">
        </div>
        <div class="col-md-3">
        <label>Code journal</label>
        <input type="text" name="codejournal" id="codejournal" class="form-control" value="<?php echo e($journal->codejournal); ?>">
        </div>
        <div class="col-md-3">
        <label>Num. pièce</label>
        <input type="text" name="numpiece" id="numpiece" class="form-control" value="<?php echo e($journal->numpiece); ?>">
        </div>
        <div class="col-md-3">
        <label>Montant debit</label>
        <input type="number" name="Mdebit" id="idMdebit" class="form-control" value="<?php echo e($journal->Mdebit); ?>">
        </div>

        <div class="col-md-3">
        <label>Montant credit</label>
        <input type="number" name="Mcredit" id="idMcredit" class="form-control" value="<?php echo e($journal->Mcredit); ?>">
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
 

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/journal/edit.blade.php ENDPATH**/ ?>