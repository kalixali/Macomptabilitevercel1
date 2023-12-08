
<?php $__env->startSection('content'); ?>
 
 <div class="container">
    <div class="card">
  <div class="card-header">EDIT - PAGE DES VENTES</div>
  <div class="card-body">
  
     <div class="row align-items-center">  
     <form action="<?php echo e(url('ventes/' .$ventes->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-3">
        <div class="col-md-4">
        <label>N° Facture</label>
        <input type="text" name="numfact" id="numfact" class="form-control" value="<?php echo e($ventes->numfact); ?>">
        </div>
        <div class="col-md-4">
        <label>Code Article</label>
        <input type="text" name="refprod" id="refprod" class="form-control" value="<?php echo e($ventes->refprod); ?>">
        </div>
        <div class="col-md-4">
        <label>Article</label>
        <input type="text" name="prod" id="prod" class="form-control" value="<?php echo e($ventes->prod); ?>">
        </div>
        <div class="col-md-4">
        <label>Qtite</label>
        <input type="number" name="qtite" id="qtite" class="form-control" autocomplete="off" value="<?php echo e($ventes->qtite); ?>">
        </div>
        <div class="col-md-4">
        <label>PU</label>
        <input type="number" name="pu" id="pu" class="form-control" value="<?php echo e($ventes->pu); ?>" autocomplete="off">
        </div>
        <div class="col-md-4">
        <label>Montant</label>
        <input type="number" name="mont" id="mont" class="form-control" autocomplete="off" value="<?php echo e($ventes->mont); ?>">
        </div>
        
       <div class="col-md-4">
            <div class="row">
        
                <div class="col-md-4">   
                <label>Taux (en %)</label>
                <input type="number" name="ttva" id="ttva" class="form-control" autocomplete="off" value="<?php echo e($ventes->ttva); ?>">
                </div>
                <div class="col-md-8">
                <label>TVA</label>v
                <input type="number" name="mtva" id="mtva" class="form-control" value="<?php echo e($ventes->mtva); ?>" autocomplete="off">
                </div>
           </div>
        </div>
        <div class="col-md-4">
        <label>Montant TTC</label>
        <input type="number" name="mttc" id="mttc" class="form-control" value="<?php echo e($ventes->mttc); ?>">
        </div>
        <div class="col-md-4">
            <input type="hidden" name="cptevte" id="cptevte" class="form-control" value="<?php echo e($ventes->cptevte); ?>">
        </div>
        <div class="col-md-4">
            <input type="hidden" name="cptec" id="cptec" class="form-control" value="<?php echo e($ventes->cpteclt); ?>">
        </div>
        <div class="col-md-4">
            <input type="hidden" name="sigleclt" id="sigleclt" class="form-control" value="<?php echo e($ventes->sigleclt); ?>">
        </div>
        
        <div class="col-md-3 mt-3">
        <input type="submit" value="Modifier" class="form-control btn btn-success"></br>
        </div>
     </div>
    </form>
  </div>
</div>
</div>
</div>
<script src="jquery-3.6.3.js"></script>
    <script>
       
        $("#mont").click(function() {
            //calcul du montant hors taxe
            ne = parseInt($("#qtite").val());
            nS = parseInt($("#pu").val());
            $("#mont").val(ne*nS);
            //calcul de la tva
            na = parseInt($("#mont").val());
            no = parseInt($("#ttva").val());
            $("#mtva").val(na*(no/100));
            //calcul du montant ttc
            ni = parseInt($("#mtva").val());
            $("#mttc").val(na+ni);
        });
        $("#mtva").click(function() {
            //calcul de la tva
            na = parseInt($("#mont").val());
            no = parseInt($("#ttva").val());
            $("#mtva").val(na*(no/100));
            //calcul du montant ttc
            ni = parseInt($("#mtva").val());
            $("#mttc").val(na+ni);
        });
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/ventes/edit.blade.php ENDPATH**/ ?>