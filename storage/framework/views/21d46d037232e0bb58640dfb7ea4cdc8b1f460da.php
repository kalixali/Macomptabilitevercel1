
<?php $__env->startSection('content'); ?>
 
 <div class="container">
    <div class="card">
  <div class="card-header">JOURNAL DE SAISIE</div>
  <div class="card-body">
    <div class="row align-items-center">  
      <form action="<?php echo e(url('journal')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <div class="col-12 gy-2 px-2 py-3 mx-1 my-3 border border-3">
        <div class="col-md-4">
        <label>Compte</label>
        <input type="number" name="compte" id="compte" class="form-control" autocomplete="off">
            <div id="compte_list"> </div>
        </div>
        <div class="col-md-6">
        <label>Libellé</label>
        <input type="text" name="libellé" id="libellé" class="form-control">
        </div>
        <div class="col-md-4">
        <label>Code journal</label>
        <input type="text" name="codejournal" id="codejournal" class="form-control" autocomplete="off">
            <div id="codejournal_list"> </div>
        </div>
        <div class="col-md-4">
        <label>Num. pièce</label>
        <input type="text" name="numpiece" id="numpiece" class="form-control">
        </div>
        <div class="col-md-4">
        <label>Montant debit</label>
        <input type="number" name="Mdebit" id="idMdebit" class="form-control" value="0">
        </div>

        <div class="col-md-4">
        <label>Montant credit</label>
        <input type="number" name="Mcredit" id="idMcredit" class="form-control" value="0">
        </div>
        
        <div class="col-md-4 mt-3">
        <input type="submit" value="Valider" id="idvalider" class="btn btn-success form-control">
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
                        <h2>JOURNAL</h2>
                    </div>
                    <div class="card-body">
                        <br/>
                        
                    <form action = "<?php echo e(url('getjournal')); ?>" method = "POST">
                        <?php echo e(csrf_field()); ?>

                        <div class="row">
                        <br/>
                            <div class="col-md-2">
                                <div class="form-group">
                                <br/>
                                    <label>Du</label>
                                    <input type="date" name="from_date" class="form-group">
                                    
                                </div>
                            </div>
                              
                            <div class="col-md-2">
                                <div class="form-group">
                                <br/>
                                    <label>Au</label>
                                    <input type="date" name="to_date" class="form-group">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Code Journal</label>
                                    <input type="text" name="codejournal1" id="codejournal1" class="form-group" placeholder="Entrez le Code Journal" autocomplete="off">
                                    <div id="codejournal_list1"> </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                <br/>
                                    <button type="submit" id="filtr" class="btn btn-primary form-group">Filtre</button>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                    <br/>
                    <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Code J.</th>
                                        <th>Num. pièce</th>
                                        <th>Compte</th>
                                        <th>Libellé</th>
                                        <th>MDebit</th>
                                        <th>MCredit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $journal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(date('d/m/Y', strtotime($item->Date))); ?></td>
                                        <td><?php echo e($item->codejournal); ?></td>
                                        <td><?php echo e($item->numpiece); ?></td>
                                        <td><?php echo e($item->compte); ?></td>
                                        <td><?php echo e($item->libellé); ?></td>
                                        <td><?php echo e($item->Mdebit); ?></td>
                                        <td><?php echo e($item->Mcredit); ?></td>
 
                                        <td>
                                            
                                            <a href="<?php echo e(url('/journal/' . $item->id . '/edit')); ?>" title="Edit JOURNAL"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="<?php echo e(url('/journal' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>  Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $totjournal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iten): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th><?php echo e($iten->Sdebit); ?></th>
                                        <th><?php echo e($iten->Scredit); ?></th>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    
                        <br/>

        <form action = "<?php echo e(url('downloadjournal')); ?>" method = "POST">
        <?php echo e(csrf_field()); ?>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <button type="submit" id="impr" class="btn btn-primary">Imprimer</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="hidden" name="from_date1" class="form-group" value="<?php echo e($from_date); ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                       <input type="hidden" name="to_date1" class="form-group" value="<?php echo e($to_date); ?>">
                    </div>
                </div>
            </div>
            <br/>
            <div class="row">
                
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="hidden" name="codejournal2" class="form-group" value="<?php echo e($codejournal1); ?>">
                    </div>
                </div>
            </div>
         
        </div>
        <br/>
    
        </form>
        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="jquery-3.6.3.js"></script>
    <script>
        $(document).ready(function() {
          
            $("#compte").on('keyup', function() {
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

            $("#codejournal").on('keyup', function() {
                var value = $(this).val();
                $.ajax({
                    url: "<?php echo e(route('searchcodejournal')); ?>",
                    type: "GET",
                    data: {'codejournal' : value},
                    success: function(data){
                        $("#codejournal_list").html(data);
                    }
                });
            });

            $("#codejournal1").on('keyup', function() {
                var value = $(this).val();
                $.ajax({
                    url: "<?php echo e(route('searchcodejournal')); ?>",
                    type: "GET",
                    data: {'codejournal' : value},
                    success: function(data){
                        $("#codejournal_list1").html(data);
                    }
                });
            });
        }); 

                
        $(document).on('click', '#compte_list li', function() {
            var value = $(this).text();
            var ii = value.indexOf('-');
            var val1 = value.substring(0,ii-1);
            var val2 = value.substring(ii+1);
            $("#compte").val(val1);
            $("#libellé").val(val2);
            $("#compte_list").html(" "); 
        }); 
       
        $(document).on('click', '#codejournal_list li', function() {
            var value = $(this).text();
            var ii = value.indexOf('-');
            var val1 = value.substring(0,ii-1);
            $("#codejournal").val(val1);
            $("#codejournal_list").html(" ");
        }); 
        $(document).on('click', '#codejournal_list1 li', function() {
            var value = $(this).text();
            var ii = value.indexOf('-');
            var val1 = value.substring(0,ii-1);
            $("#codejournal1").val(val1);
            $("#codejournal_list1").html(" ");
        });   
         
        // $(document).on('click', '#filtr', function() {
        //     $("#impr").show();
        // });       
    </script>
     <script>
        
        $("#libellé").click(function() {
            nt = $("#compte").val();
            nr = nt.toString();
            nl = nr.length;
            if (nl < 3) {
            alert("Ce numéro de compte n'est pas valide");
            $("#compte").val("");
            $("#compte").focus();
           } 
            
        });

        $("#idvalider").focus(function() {
            nt = $("#compte").val();
            nr = nt.toString();
            nl = nr.length;
            le = $("#idlibellé").val();
            lo = le.toString();
            li = lo.length;
            ce = $("#codejournal").val();
            co = ce.toString();
            ci = co.length;

            ns = parseInt($("#idMdebit").val());
            ne = parseInt($("#idMcredit").val());
                   
            if (nl < 3) {
                alert("Ce numéro de compte n'est pas valide");
                $("#compte").val("");
                $("#compte").focus();
            } 
            else if (li == 0) {
                alert('Renseignez le libellé');
                $("#idlibellé").focus();
                
            }
            else if (ci == 0) {
                alert('Renseignez le Code journal');
                $("#codejournal").focus();
                
            }
                               
            else if (ne == 0 && ns == 0) {
                alert('Les montants au debit et au credit sont nulls');
                $("#idMdebit").focus();
                
            }
            else if (ne != 0 && ns != 0) {
                alert('Une opération ne peut être debité et credité');
                $("#idMdebit").val(0);
                $("#idMcredit").val(0);
                $("#idMdebit").focus();
                
            }

        });

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/journal/index.blade.php ENDPATH**/ ?>