<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ma Comptabilité - VENTES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="mstyl.css">
  </head> 
<body>
  
 <div class="container">
    <div class="card">
  <div class="card-header spolice"><u>FACTURE - ACHATS N° <?php echo e($nfact); ?></u></div>
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
          <td colspan="10">DATE DE FACTURATION : <?php echo e($dat); ?></td>
        </tr>
        <br/>
            <tr>
                <th>Réf. Article</th>
                <th>Article</th>
                <th>Qtite</th>
                <th>PU</th>
                <th>Montant HT</th>
                <th>Taux TVA</th>
                <th>Montant TVA</th>
                <th>Montant TTC</th>
                <th>Fournisseur</th>
                
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $fact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->refprod); ?></td>
                <td><?php echo e($item->prod); ?></td>
                <td><?php echo e($item->qtite); ?></td>
                <td><?php echo e($item->pu); ?></td>
                <td><?php echo e($item->mont); ?></td>
                <td><?php echo e($item->ttva); ?></td>
                <td><?php echo e($item->mtva); ?></td>
                <td><?php echo e($item->mttc); ?></td>
                <td><?php echo e($item->siglefourn); ?></td>
            
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <tr>
            <th colspan="2">TOTAL HORS TAXE</th>
            <th colspan="2"><?php echo e($totfact[0]->Tmont); ?></th>
        </tr>
        
        <tr>
            <th colspan="2">TOTAL TVA</th>
            <th colspan="2"><?php echo e($totfact[0]->Tmtva); ?></th>
        </tr>
        
        <tr>
            <th colspan="2">TOTAL TTC</th>
            <th colspan="2"><?php echo e($totfact[0]->Tmttc); ?></th>
        </tr>      
        </tbody>
        </table>
        </div>

        </div>
        </div>
    
    </div>
    </body class="pbreak">
    </html>

    <?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/achats/facturepdf.blade.php ENDPATH**/ ?>