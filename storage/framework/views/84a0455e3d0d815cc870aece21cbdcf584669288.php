
<?php $__env->startSection('content'); ?>
 
 <div class="container">
    <div class="card">
  <div class="card-header">FICHE PRODUIT</div>
  <div class="card-body">
    <div class="row align-items-center">  
    <form action="<?php echo e(url('produit/' .$produit->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-3">
        
        <input type="hidden" name="id" id="id" value="<?php echo e($produit->id); ?>" /> <br/>
        
        <div class="col-md-6">
        <label>Réf. Article</label>
        <input type="text" name="refprod" id="refprod" class="form-control" autocomplete="off" value="<?php echo e($produit->refprod); ?>">
        </div>
        <div class="col-md-6">
        <label>Article</label>
        <input type="text" name="prod" id="prod" class="form-control" autocomplete="off" value="<?php echo e($produit->prod); ?>">
        </div>
        <div class="col-md-6">
        <label>PU achat</label> 
        <input type="text" name="puach" id="puach" class="form-control" autocomplete="off" value="<?php echo e($produit->puach); ?>">
        </div>
        <div class="col-md-6">
        <label>PU vente</label>
        <input type="text" name="puvte" id="puvte" class="form-control" autocomplete="off" value="<?php echo e($produit->puvte); ?>">
        </div>
        <div class="col-md-6">
        <label>Compte Achat</label>
        <input type="text" name="cpteach" id="cpteach" class="form-control" autocomplete="off" value="<?php echo e($produit->cpteach); ?>">
        </div>
        <div class="col-md-6">
        <label>Compte Vente</label>
        <input type="text" name="cptevte" id="cptevte" class="form-control" autocomplete="off" value="<?php echo e($produit->cptevte); ?>">
        </div>
        
        <div class="col-md-3 mt-3">
        <input type="submit" value="Valider" class="btn btn-success form-control">
        </div>
        </div>
                
    </form>
  </div>
</div>
 </div>
 </div>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/produit/edit.blade.php ENDPATH**/ ?>