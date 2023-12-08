
<?php $__env->startSection('content'); ?>
 
 <div class="container">
    <div class="card">
  <div class="card-header">EDIT PAGE</div>
  <div class="card-body">
  

     <div class="row align-items-center">  
     <form action="<?php echo e(url('clients/' .$clients->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-3">
        <div class="col-md-6">
        <label>SIGLE</label>
        <input type="text" name="sigleclt" id="sigleclt" class="form-control" autocomplete="off" value="<?php echo e($clients->sigleclt); ?>">
        </div>
        <div class="col-md-6">
        <label>CLIENT</label>
        <input type="text" name="client" id="client" class="form-control" autocomplete="off" value="<?php echo e($clients->client); ?>">
        </div>
        <div class="col-md-6">
        <label>COMPTE CLIENT</label>
        <input type="number" name="cptec" id="cptec" class="form-control" value="<?php echo e($clients->cptec); ?>" required>
        </div>
        <div class="col-md-6">
        <label>CONTACT1</label>
        <input type="text" name="contactc1" id="contactc1" class="form-control" value="<?php echo e($clients->contactc1); ?>">
        </div>
        <div class="col-md-6">
        <label>CONTACT2</label>
        <input type="text" name="contactc2" id="contactc2" class="form-control" autocomplete="off" value="<?php echo e($clients->contactc2); ?>">
        </div>
        <div class="col-md-6">
        <label>EMAIL</label>
        <input type="text" name="emailc" id="emailc" class="form-control" autocomplete="off" value="<?php echo e($clients->emailc); ?>">
        </div>
        <div class="col-md-6">
        <label>ADRESSE</label>
        <input type="text" name="adressec" id="adressec" class="form-control" autocomplete="off" value="<?php echo e($clients->adressec); ?>">
        </div>
        <div class="col-md-6">
        <label>SIT. GEO</label>
        <input type="text" name="sitgeoc" id="sitgeoc" class="form-control" autocomplete="off" value="<?php echo e($clients->sitgeoc); ?>">
        </div>
                       
       <div class="col-md-4 mt-3">
        <input type="submit" value="Valider" class="btn btn-success form-control">
        </div>
      </div>

    </form>
  </div>
</div>
 </div>

</div>
        
    <script>
       
        $("#montht").click(function() {
            //calcul du montant total hors taxe
            ne = parseInt($("#qtite").val());
            nS = parseInt($("#pu").val());
            $("#montht").val(ne*nS);
            //calcul du montant ttc
            na = parseInt($("#montht").val());
            no = parseInt($("#ttva").val());
            $("#mtva").val(na*(no/100));
            ni = parseInt($("#mtva").val());
            $("#mttc").val(na+ni);
        });
        $("#mtva").click(function() {
            //calcul de la tva
            na = parseInt($("#montht").val());
            no = parseInt($("#ttva").val());
            $("#mtva").val(na*(no/100));
            //calcul du montant ttc
            ni = parseInt($("#mtva").val());
            $("#mttc").val(na+ni);
        });
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/clients/edit.blade.php ENDPATH**/ ?>