
<?php $__env->startSection('content'); ?>
 
 <div class="container">
    <div class="card">
  <div class="card-header">FACTURE D'ACHATS</div>
  <div class="card-body">
  
     <div class="row align-items-center">  
      <form action="<?php echo e(url('achats')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-3">
        <div class="col-md-6">
        <label>N° Facture</label>
        <input type="text" name="numfact" id="numfact" class="inputbcolor form-control" autocomplete="off" value="<?php echo e($fa); ?>">
        <div id="facture_list"> </div>
        </div>
        <div class="col-md-6">
        <label>Fournisseur</label>
        <input type="text" name="siglefourn" id="siglefourn" class="form-control" autocomplete="off">
        <div id="fournisseur_list"> </div>
        </div>
        <div class="col-md-6">
        <label>Code Article</label>
        <input type="text" name="refprod" id="refprod" class="form-control" autocomplete="off">
        <div id="produit_list"> </div>
        </div>
        <div class="col-md-6">
        <label>Article</label>
        <input type="text" name="prod" id="prod" class="form-control">
        </div>
        <div class="col-md-6">
        <label>Qtite</label>
        <input type="number" name="qtite" id="qtite" class="form-control" autocomplete="off">
        </div>
        <div class="col-md-6">
        <label>PU</label>
        <input type="text" name="pu" id="pu" class="form-control" autocomplete="off">
        </div>

        <div class="col-md-6">
        <label>Montant M/ses</label>
        <input type="number" name="mont" id="mont" class="form-control" autocomplete="off">
        </div>
        
        <div class="col-md-6">
            <div class="row">
        
                <div class="col-md-4">   
                <label>Taux Remise(en %)</label>
                <input type="number" name="t_remise" id="t_remise" class="form-control" value="0">
                </div>
                <div class="col-md-8">
                <label>Remise</label>
                <input type="number" name="remise" id="remise" class="form-control" value="0">
                </div>
           </div>
        </div>

        <div class="col-md-6">
        <label>Net Commercial</label>
        <input type="number" name="netccial" id="netccial" class="form-control" autocomplete="off">
        </div>

        <div class="col-md-6">
            <div class="row">
        
                <div class="col-md-4">   
                <label>Taux Escpte(en %)</label>
                <input type="number" name="t_escpte" id="t_escpte" class="form-control" value="0">
                </div>
                <div class="col-md-8">
                <label>Escompte</label>
                <input type="number" name="escpte" id="escpte" class="form-control" value="0">
                </div>
            </div>
        </div>

        <div class="col-md-6">
        <label>Net Financier</label>
        <input type="number" name="netfcier" id="netfcier" class="form-control" autocomplete="off">
        </div>

        <div class="col-md-6">
            <div class="row">
        
                <div class="col-md-4">   
                <label>Taux TVA(en %)</label>
                <input type="number" name="ttva" id="ttva" class="form-control" value="18">
                </div>
                <div class="col-md-8">
                <label>TVA</label>
                <input type="number" name="mtva" id="mtva" class="form-control" value="0">
                </div>
           </div>
        </div>

        <div class="col-md-6">
        <label>Montant TTC</label>
        <input type="number" name="mttc" id="mttc" class="form-control">
        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">   
                <label>Frais sur achat</label>
                <input type="number" name="fr_ach" id="fr_ach" class="form-control" value="0">
                </div>
                <div class="col-md-8">
                <label>Net à payer</label>
                <input type="number" name="netpay" id="netpay" class="form-control" value="0">
                </div>
           </div>
        </div>

        <div class="col-md-6">
            <input type="hidden" name="cptef" id="cptef" class="form-control">
        </div>
        <div class="col-md-6">
            <input type="hidden" name="cpteach" id="cpteach" class="form-control">
        </div>
        
       <div class="col-md-3 mt-3">
        <input type="submit" value="Valider" class="btn btn-success form-control">
        </div>
        
    </div>
    </form>
  </div>

  <div class="table-responsive">
        <table class="table"> 
            <thead>
                <tr>
                    <th>Num. Fact.</th>
                    <th>Article</th>
                    <th>Qtite</th>
                    <th>PU</th>
                    <th>Montant TTC</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            
            </tbody>
        </table>
    </div>
<br/>
</div>
 </div>

        <div class="row">
 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>HISTORIQUE DES ACHATS</h2>
                    </div>
                    <div class="card-body">
                        <br/>
                     
                     <form action = "<?php echo e(url('getachats')); ?>" method = "POST">
                        <?php echo e(csrf_field()); ?>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Du</label>
                                    <input type="date" name="from_date" class="form-group">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Au</label>
                                    <input type="date" name="to_date" class="form-group">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Filtre</button>
                                </div>
                            </div>
                        </div>
                        <br/>
                        
                    </form>       
                    <div class="table-responsive">
                            <table class="table"> 
                                <thead>
                                    <tr>
                                        <th>Num. Fact.</th>
                                        <th>Article</th>
                                        <th>Qtite</th>
                                        <th>PU</th>
                                        <th>Montant TTC</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $achats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->numfact); ?></td>
                                        <td><?php echo e($item->prod); ?></td>
                                        <td><?php echo e($item->qtite); ?></td>
                                        <td><?php echo e($item->pu); ?></td>
                                        <td><?php echo e($item->mttc); ?></td>
                                    <td>
                                        <!-- <a href="<?php echo e(url('/achats/' . $item->id . '/edit')); ?>" title="Edit Cotisation sociales"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a> -->
                                        <form method="POST" action="<?php echo e(url('/achats' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>  Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                    <th>TOTAL ACHATS :</th>
                                    <th><?php echo e($ach[0]->Tachmttc); ?></th>
                                </tr>
                               
                                </tbody>
                            </table>
                        </div>
                        <br/>

                        <form action = "<?php echo e(url('downloadach')); ?>" method = "POST">
                        <?php echo e(csrf_field()); ?>

                        <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Imprimer</button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    
                                    <input type="hidden" name="from_date1" id="from_date1" class="form-group" value="<?php echo e($from_date); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    
                                    <input type="hidden" name="to_date1" id="to_date1" class="form-group" value="<?php echo e($to_date); ?>">
                                </div>
                            </div>

                            
                        </div>
                        <br/>
                        
                    </form>
                    </div>

                    <div class="row">
 
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>RECHERCHE DE FACTURE - ACHATS</h2>
                            </div>
                            <div class="card-body">
                                <br/>
                                <div class="row">
                                    <form action="<?php echo e(url('downloadfactach')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>

                                    <div class="col-md-4">   
                                    <label>N° Facture</label>
                                    <input type="text" name="numfact1" id="numfact1" class="form-control" autocomplete="off" placeholder="Entrez ici le numéro de la facture">
                                    <div id="facture_list1"> </div>
                                    </div>
                                    <div class="col-md-2">
                                    <br/>
                                    <input type="submit" value="IMPRIMER" class="btn btn-success form-control">
                                    </div>
                                    </form>
                                </div>
                            </div>
            
                        </div>
                    </div>
        
            </div>
                    </div>
                </div>
            </div>
        
    </div>
    <script src="jquery-3.6.3.js"></script>
    <script>
        $(document).ready(function() {
            $("#siglefourn").on('keyup', function() {
                var value = $(this).val();
                $.ajax({
                    url: "<?php echo e(route('searchach1')); ?>",
                    type: "GET",
                    data: {'siglefourn' : value},
                    success: function(data){
                        $("#fournisseur_list").html(data);
                    }
                });
            });
            $("#refprod").on('keyup', function() {
                var value = $(this).val();
                $.ajax({
                    url: "<?php echo e(route('searchach2')); ?>",
                    type: "GET",
                    data: {'refprod' : value},
                    success: function(data){
                        $("#produit_list").html(data);
                    }
                });
            });

            $("#numfact").on('keyup', function() {
                var value = $(this).val();
                $.ajax({
                    url: "<?php echo e(route('searchfactach')); ?>",
                    type: "GET",
                    data: {'numfact' : value},
                    success: function(data){
                        $("#facture_list").html(data);
                    }
                });
            });
        
        $("#numfact1").on('keyup', function() {
            var value = $(this).val();
                $.ajax({
                    url: "<?php echo e(route('searchfactach1')); ?>",
                    type: "GET",
                    data: {'numfact1' : value},
                    success: function(data){
                        $("#facture_list1").html(data);
                    }
                });
            });
        }); 

        $(document).on('click', '#fournisseur_list li', function() {
            var value = $(this).text();
            var ii = value.indexOf('-');
            var val1 = value.substring(0,ii-1);
            var val2 = value.substring(ii+1);
            $("#siglefourn").val(val1);
            $("#cptef").val(val2);
            $("#fournisseur_list").html(" "); 
        });  
        
        $(document).on('click', '#produit_list li', function() {
            var value = $(this).text();
            var ii = value.indexOf('-');
            var ii1 = value.indexOf('-',ii+1);
            var ii2 = value.indexOf('-',ii1+1);
            var refp = value.substring(0,ii-1);
            var produi = value.substring(ii+1, ii1-1);
            var pua = value.substring(ii1+1, ii2-1);
            var cptea = value.substring(ii2+1);
            $("#refprod").val(refp);
            $("#prod").val(produi);
            $("#pu").val(pua);
            $("#cpteach").val(cptea);
            $("#produit_list").html(" "); 
        }); 
        
        $(document).on('click', '#facture_list li', function() {
            var value = $(this).text();
            //var ii = value.indexOf('-');
            //var val1 = value.substring(0,ii-1);
            $("#numfact").val(value);
            $("#facture_list").html(" "); 
        });   
       
        $(document).on('click', '#facture_list1 li', function() {
            var value = $(this).text();
            //var ii = value.indexOf('-');
            //var val1 = value.substring(0,ii-1);
            $("#numfact1").val(value);
            $("#facture_list1").html(" "); 
        });   
    </script>
    
    <script>
       
       $("#mont").click(function() {
            //calcul du montant total hors taxe
            ne = parseInt($("#qtite").val());
            nS = parseInt($("#pu").val());
            $("#mont").val(parseInt(ne*nS));
            
        });

        $("#remise").click(function() {
            //calcul de la tva
            na = parseInt($("#mont").val());
            no = parseInt($("#t_remise").val());
            $("#remise").val(parseInt(na*(no/100)));
        });

        $("#netccial").click(function() {
            //calcul de la tva
            na = parseInt($("#mont").val());
            no = parseInt($("#remise").val());
            $("#netccial").val(parseInt(na - no));
        });

        $("#escpte").click(function() {
            //calcul de la tva
            na = parseInt($("#netccial").val());
            no = parseInt($("#t_escpte").val());
            $("#escpte").val(parseInt(na*(no/100)));
        });

        $("#netfcier").click(function() {
            //calcul de la tva
            na = parseInt($("#netccial").val());
            no = parseInt($("#escpte").val());
            $("#netfcier").val(parseInt(na - no));
        });

        $("#mtva").click(function() {
            //calcul de la tva
            na = parseInt($("#netfcier").val());
            no = parseInt($("#ttva").val());
            $("#mtva").val(parseInt(na*(no/100)));
            //calcul du montant ttc
            ni = parseInt($("#mtva").val());
            $("#mttc").val(parseInt(na+ni));
        });

        $("#netpay").click(function() {
            //calcul de la tva
            na = parseInt($("#mttc").val());
            no = parseInt($("#fr_ach").val());
            $("#netpay").val(na+no);
            
        });
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/achats/index.blade.php ENDPATH**/ ?>