
<?php $__env->startSection('content'); ?>
 
 <div class="container">
    <div class="card">
  <div class="card-header">FOURNISSEURS</div>
  <div class="card-body">
  
     <div class="row align-items-center">  
      <form action="<?php echo e(url('fournisseurs')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-3">
        <div class="col-md-6">
        <label>SIGLE</label>
        <input type="text" name="siglefourn" id="siglefourn" class="form-control" autocomplete="off" required>
        </div>
        <div class="col-md-6">
        <label>FOURNISSEUR</label>
        <input type="text" name="fournisseur" id="fournisseur" class="form-control" autocomplete="off">
        </div>
        <div class="col-md-6">
        <label>COMPTE FOURNISSEUR</label>
        <input type="number" name="cptef" id="cptef" class="form-control" required>
        <div id="compte_list"> </div>                                                                                                                                                                                                                                                                                
        </div>
        <div class="col-md-6">
        <label>CONTACT1</label>
        <input type="text" name="contactf1" id="contactf1" class="form-control">
        </div>
        <div class="col-md-6">
        <label>CONTACT2</label>
        <input type="text" name="contactf2" id="contactf2" class="form-control" autocomplete="off">
        </div>
        <div class="col-md-6">
        <label>EMAIL</label>
        <input type="text" name="emailf" id="emailf" class="form-control" autocomplete="off">
        </div>
        <div class="col-md-6">
        <label>ADRESSE</label>
        <input type="text" name="adressef" id="adressef" class="form-control" autocomplete="off">
        </div>
        <div class="col-md-6">
        <label>SIT. GEO</label>
        <input type="text" name="sitgeof" id="sitgeof" class="form-control" autocomplete="off">
        </div>
                       
       <div class="col-md-2 mt-3">
        <input type="submit" value="Valider" class="btn btn-success form-control">
        </div>
    </div>
    </form>
  </div>
</div>
 </div>

        <div class="row">
 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>FOURNISSEURS</h2>
                    </div>
                    <div class="card-body">
                        <br/>
                     
                         
                    <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SIGLE</th>
                                        <th>FOURNISSEUR</th>
                                        <th>CONTACT1</th>
                                        <th>CONTACT2</th>
                                        <th>EMAIL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $fournisseurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->siglefourn); ?></td>
                                        <td><?php echo e($item->fournisseur); ?></td>
                                        <td><?php echo e($item->contactf1); ?></td>
                                        <td><?php echo e($item->contactf2); ?></td>
                                        <td><?php echo e($item->emailf); ?></td>
                                    <td>
                                        <a href="<?php echo e(url('/fournisseurs/' . $item->id . '/edit')); ?>" title="Edit Fournisseurs"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        <form method="POST" action="<?php echo e(url('/fournisseurs' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
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
<script src="jquery-3.6.3.js"></script>
<script>
    $(document).ready(function() {
          
        $("#cptef").on('keyup', function() {
            var value = $(this).val();
            $.ajax({
                url: "<?php echo e(route('searchcpte1')); ?>",
                type: "GET",
                data: {'compte' : value},
                success: function(data){
                    $("#compte_list").html(data);
                }
            });
        });
       
        $(document).on('click', '#compte_list li', function() {
            var value = $(this).text();
            var ii = value.indexOf('-');
            var val1 = value.substring(0,ii-1);
            var val2 = value.substring(ii+1);
            $("#cptef").val(val1);
            $("#compte_list").html(" "); 
        });  
    }); 
</script>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/fournisseurs/index.blade.php ENDPATH**/ ?>