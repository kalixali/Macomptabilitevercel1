
<?php $__env->startSection('content'); ?>
 
 <div class="container">
 <div class="col-md-9">
<div class="card">
    <div class="card-header">
        <h2>BALANCE</h2>
    </div>
    <div class="card-body">
        <br/>

    <form action = "<?php echo e(url('getBalance')); ?>" method = "POST">
        <?php echo e(csrf_field()); ?>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Du</label>
                    <input type="number" name="from_compte" id="from_compte" class="form-group" placeholder="Compte">
                    <div id="compte_list"> </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Au</label>
                    <input type="number" name="to_compte" id="to_compte" class="form-group" placeholder="Compte">
                    <div id="compte_list1"> </div>
                </div>
            </div>
        </div>
        <br/>
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
    </form>
    <br/>
    <br/>
   
    <div class="row">
 
            
<br/>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Compte</th>
                <th>Libellé</th>
                <th>TDebit</th>
                <th>TCredit</th>
                <th>Solde</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $balance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->compte); ?></td>
                <td><?php echo e($item->libellé); ?></td>
                <td><?php echo e($item->Tdebit); ?></td>
                <td><?php echo e($item->Tcredit); ?></td>
                <td><?php echo e($item->solde); ?></td>
                
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $bal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
                <th></th>
                <th></th>
                <th><?php echo e($ite->Sdebit); ?></th>
                <th><?php echo e($ite->Scredit); ?></th>
                <th><?php echo e($ite->Tsolde); ?></th>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>


                        <br/>

        <form action = "<?php echo e(url('downloadbalance')); ?>" method = "POST">
        <?php echo e(csrf_field()); ?>

        <div class="row">
        <div class="col-md-4">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Imprimer</button>
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
                        <input type="hidden" name="from_compte1" class="form-group" placeholder="Compte" value="<?php echo e($from_compte); ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="hidden" name="to_compte1" class="form-group" placeholder="Compte" value="<?php echo e($to_compte); ?>">
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

    <script src="jquery-3.6.3.js"></script>
    <script>
        $(document).ready(function() {
            $("#from_compte").on('keyup', function() {
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

            $("#to_compte").on('keyup', function() {
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
        });
        $(document).on('click', '#compte_list li', function() {
            var value = $(this).text();
            var ii = value.indexOf('-');
            var val1 = value.substring(0,ii-1);
            $("#from_compte").val(val1);
            $("#compte_list").html(" "); 
        }); 
        $(document).on('click', '#compte_list1 li', function() {
            var value = $(this).text();
            var ii = value.indexOf('-');
            var val1 = value.substring(0,ii-1);
            $("#to_compte").val(val1);
            $("#compte_list1").html(" "); 
        }); 
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/balance/index.blade.php ENDPATH**/ ?>