<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ma Comptabilité - BALANCE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="mstyl.css">
  </head> 
<body>
  
 <div class="container">
    <div class="card">
  <div class="card-header spolice"><u>BALANCE COMPTABLE</u></div>
  <div class="card-body">
  <br/>
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr >
          <td class="spolice" colspan="10"><?php echo e($entreprise->sigle); ?></td>
          </tr>
          <tr >
              <td class="uppercase" colspan="10"><?php echo e($entreprise->nom_complet); ?></td>
          </tr>
          <tr>
              <td class="">Num CC : <span style="padding-right:80px;"> </span></td>
              <td class="" ><span style="padding-left:80px;"> </span> <?php echo e($entreprise->numCC); ?> <span style="padding-right:80px;"> </span></td>
              <td class=""><span style="padding-left:80px;"> </span>  Num RC : <span style="padding-right:80px;"> </span></td>
              <td class=""> <?php echo e($entreprise->numRC); ?> <span style="padding-right:140px;"></span></td>
              <td class=""><span style="padding-left:80px;"> </span> Contact : <span style="padding-right:80px;"></span></td>
              <td class="" colspan="2"><?php echo e($entreprise->contact1); ?></td>
        </tr>
        
        <br/>
        <tr >
          <td colspan="10">PERIODE : <?php echo e($period); ?></td>
        </tr>
        <br/>
        <tr >
          <td colspan="10">DATE : <?php echo e($dat); ?></td>
        </tr>
        <br/>
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

        </div>
        </div>
    
    </div>
    </body class="pbreak">
    </html>

    <?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/balance/balancepdf.blade.php ENDPATH**/ ?>