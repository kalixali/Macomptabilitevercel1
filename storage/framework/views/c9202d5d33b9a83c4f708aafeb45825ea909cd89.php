
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ma Comptabilité</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="mstyl.css">

  </head>
  
  <body>
 <div class="container">
     
    <div class="row">
          <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="spolice"><u>LISTE DES EMPLOYES</u></h2>
                    </div>
                    <div class="card-body">
                        <br/>
                        
                    <div class="table-responsive">
                            <table class="table">
                                <thead class="">
                                    <tr >
                                    <td>
                                        <img src="<?php echo e(asset($entreprise->logo)); ?>" width= '50' height= '50' class = "img img-responsive" />
                                    </td>
                                    <td class="" colspan="3"><?php echo e($entreprise->sigle); ?></td>
                                    </tr>
                                    <tr >
                                        <td class="" colspan="6"><?php echo e($entreprise->nom_complet); ?></td>
                                    </tr>
                                    <tr >
                                        <td class="">Num CC :</td>
                                        <td class="" colspan="3"><?php echo e($entreprise->numCC); ?></td>
                                        <th class=""></th>
                                        <td class="">Num RC :</td>
                                        <td class="" colspan="3"><?php echo e($entreprise->numRC); ?></td>
                                        <th class=""></th>
                                        <td class="">Contact :</td>
                                        <td class="" colspan="3"> <?php echo e($entreprise->contact1); ?></td>
                                    </tr>
                                    <br/>
                                    <tr>
                                        <th>Matricule</th>
                                        <th>Nom</th>
                                        <th>Prénoms</th>
                                        <th>Date nais.</th>
                                        <th>Lieu nais.</th>
                                        <th>Nationalité</th>
                                        <th>Date arriv.</th>
                                        <th>Date emb.</th>
                                        <th>Ancienneté</th>
                                        <th>Poste</th>
                                        <th>Sit. mat.</th>
                                        <th>nbre Enft</th>
                                        <th>Catégorie</th>
                                        <th>Salaire de base</th>
                                        <th>Txhoraire</th>
                                        <th>Sursalaire</th>
                                                                                                                        
                                    </tr>
                                    
                                   
                                </thead>
                                
                                <tbody >
                                    <h2></h2>
                                    <?php $__currentLoopData = $employe; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->matricule); ?></td>
                                        <td><?php echo e($item->nom); ?></td>
                                        <td><?php echo e($item->prenoms); ?></td>
                                        <td><?php echo e($item->datenais); ?></td>
                                        <td><?php echo e($item->lieunais); ?></td>
                                        <td><?php echo e($item->nation); ?></td>
                                        <td><?php echo e($item->datearriv); ?></td>
                                        <td><?php echo e($item->datemb); ?></td>
                                        <td><?php echo e($item->ancien); ?></td>
                                        <td><?php echo e($item->poste); ?></td>
                                        <td><?php echo e($item->sitmat); ?></td>
                                        <td><?php echo e($item->nbrenft); ?></td>
                                        <td><?php echo e($item->categ); ?></td>
                                        <td><?php echo e($item->salbase); ?></td>
                                        <td><?php echo e($item->txhorair); ?></td>
                                        <td><?php echo e($item->sursal); ?></td>
                                                                                                                        
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
   
    </div >
</body class="pbreak">
</html>
    
<?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/employes/employespdf.blade.php ENDPATH**/ ?>