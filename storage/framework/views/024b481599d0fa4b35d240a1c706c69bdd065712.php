
<?php $__env->startSection('content'); ?>

 <div class="container">
 <div class="card">
  <div class="card-header">EDIT Page</div>
  <div class="card-body">
    <div class="row align-items-center">
      
      <form action="<?php echo e(url('entstock/' .$entstock->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
                
        <input type="hidden" name="id" id="id" value="<?php echo e($entstock->id); ?>" id="id" /> <br/>
        
        <div class="col-md-4">
        <label>ARTICLE</label>
        <input type="text" name="prod" id="prod" class="form-control" value="<?php echo e($entstock->prod); ?>">
        </div>

        <div class="col-md-4">
        <label>QTITE</label>
        <input type="text" name="qtite" id="qtite" class="form-control" value="<?php echo e($entstock->qtite); ?>" autocomplete="off">
        </div>

        <div class="col-md-4">
        <label>PU</label>
        <input type="text" name="pu" id="pu" class="form-control" value="<?php echo e($entstock->pu); ?>" autocomplete="off">
        </div>

        <div class="col-md-4">
        <label>MONTANT</label>
        <input type="text" name="mont" id="mont" class="form-control"  autocomplete="off">
        </div>

        <div class="col-md-3 mt-3">
        <input type="submit" value="Modifier" class="form-control btn btn-success"></br>
        </div>
    </form>
   </div>
   </div>
  </div>
</div>
 
 <script src="jquery-3.6.3.min.js"></script>
  <script>
    $("#mont").click(function() {
      ne = parseInt($("#qtite").val());
      nS = parseInt($("#pu").val());
      //$("#idmont").val(0);
      $("#mont").(ne*nS);
    });
    /* $("#idqtite").change(function() {
      ne = parseInt($("#idqtite").val());
      nS = parseInt($("#idpu").val());
      $("#idmont").val(ne*nS);
    }); */
        
  </script>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/entstock/edit.blade.php ENDPATH**/ ?>