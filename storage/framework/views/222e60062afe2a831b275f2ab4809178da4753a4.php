
<?php $__env->startSection('content'); ?>
 
 <div class="container">
    <div class="card">
  <div class="card-header">FICHE PRODUIT</div>
  <div class="card-body">
    <div class="row align-items-center">  
      <form action="<?php echo e(url('produit')); ?>" method="post" id="formprod">
        <?php echo csrf_field(); ?>

        <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-3">
        <div class="col-md-6">
        <label>Réf. Article</label>
        <input type="text" name="refprod" id="refprod" class="form-control" autocomplete="off" required>
        </div>
        <div class="col-md-6">
        <label>Article</label>
        <input type="text" name="prod" id="prod" class="form-control" autocomplete="off">
        </div>
        <div class="col-md-6">
        <label>PU achat</label>
        <input type="text" name="puach" id="puach" class="form-control" autocomplete="off">
        </div>
        <div class="col-md-6">
        <label>PU vente</label>
        <input type="text" name="puvte" id="puvte" class="form-control" autocomplete="off">
        </div>
        <div class="col-md-6">
        <label>Compte Achat</label>
        <input type="text" name="cpteach" id="cpteach" class="form-control" autocomplete="off">
        <div id="compte_list"> </div>
        </div>
        <div class="col-md-6">
        <label>Compte Vente</label>
        <input type="text" name="cptevte" id="cptevte" class="form-control" autocomplete="off">
        <div id="compte_list1"> </div>
        </div>
        <!-- <div id="essai"> Bonjour
        </div> -->
        
        <div class="col-md-3 mt-3">
        <input type="submit" value="Valider" class="btn btn-success form-control">
        </div>
        </div>
                
    </form>
  </div>
</div>
 </div>

        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>LISTE PRODUITS</h2>
                    </div>
                    <div class="card-body">
                        <br/>
                        
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>REF. ARTICLE</th>
                                        <th>ARTICLE</th>
                                        <th>PU ACHAT</th>
                                        <th>PU VENTE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $produit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <td id="ref"><?php echo e($item->refprod); ?></td>
                                        <td><?php echo e($item->prod); ?></td>
                                        <td><?php echo e($item->puach); ?></td>
                                        <td><?php echo e($item->puvte); ?></td>
                                    <td>
                                            
                                        <a href="<?php echo e(url('/produit/' . $item->id . '/edit')); ?>" title="Edit Produit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        <!-- <a href="" title="Edit JOURNAL"><button class="bout btn btn-primary btn-sm" value="<?php echo e($item->id); ?>" id="bouton"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a> -->
                                            <form method="POST" action="<?php echo e(url('/produit' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
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

        <div class="row">
 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>SCANNER DES PRODUITS</h2>
                    </div>
                    <div class="card-body">
                        <br/>
                        <a class="btn btn-success" href="<?php echo e(url('/scan')); ?>" role="button">IMPRIMER TOUS LES CODES BARRES</a>
                    </div>

                </div>
        </div>

</div>
    </div>
<script src="jquery-3.6.3.js"></script>
<script>
    $(document).ready(function() {
          
        $("#cpteach").on('keyup', function() {
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
        $("#cptevte").on('keyup', function() {
            var value = $(this).val();
            $.ajax({
                url: "<?php echo e(route('searchcpte1')); ?>",
                type: "GET",
                data: {'compte' : value},
                success: function(data){
                    $("#compte_list1").html(data);
                }
            });
        });
        $(document).on('click', '#compte_list li', function() {
            var value = $(this).text();
            var ii = value.indexOf('-');
            var val1 = value.substring(0,ii-1);
            var val2 = value.substring(ii+1);
            $("#cpteach").val(val1);
            $("#compte_list").html(" "); 
        }); 
        $(document).on('click', '#compte_list1 li', function() {
            var value = $(this).text();
            var ii = value.indexOf('-');
            var val1 = value.substring(0,ii-1);
            var val2 = value.substring(ii+1);
            $("#cptevte").val(val1);
            $("#compte_list1").html(" "); 
        }); 
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/produit/index.blade.php ENDPATH**/ ?>