
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
                        <h2>BULLETIN DE SALAIRE - EMPLOYE</h2>
                    </div>
                    <div class="card-body">
                        <br/>
                        
                    <div class="table-responsive">
                            <table class="table">
                                <thead class="sbord">
                                                                          
                                    <tr>
                                        <td>Matricule</td>
                                        <td><?php echo e($empl->matricule); ?></td>
                                        <td><?php echo e($entreprise->sigle); ?></td>
                                    </tr>
                                    <tr class = "border-1">
                                        <td class = "w-25">Nom</td>
                                        <td class = "w-25"><?php echo e($empl->nom); ?></td>
                                        <td><?php echo e($entreprise->nom_complet); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Prénoms</td>
                                        <td><?php echo e($empl->prenoms); ?></td>
                                        <td>Num CC</td>
                                        <td><?php echo e($entreprise->numCC); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Catégorie</td>
                                        <td><?php echo e($empl->categ); ?></td>
                                        <td>Num RC</td>
                                        <td><?php echo e($entreprise->numRC); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Poste</td>
                                        <td><?php echo e($empl->poste); ?></td>
                                        <td><?php echo e($entreprise->contact1); ?></td>
                                       
                                    </tr>
                                   
                                </thead>
                                
                                <tbody class="sbord">
                               
                                    
                                    <tr >
                                        <td>Salaire de base</td>
                                        <td><?php echo e($empl->salbase); ?></td>
                                    </tr>
                                    <tr >
                                        <td>Sursalaire</td>
                                        <td><?php echo e($empl->sursal); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Total primes</td>
                                        <td><?php echo e($empl->totprimes); ?></td>
                                    </tr>
                                    
                                     <tr>
                                        <td>Heure Sup. 15%</td>
                                        <td><?php echo e($heuresup->msup15); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Heure Sup. 50%</td>
                                        <td><?php echo e($heuresup->msup50); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Heure Sup. 75%</td>
                                        <td><?php echo e($heuresup->msup75); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Heure Sup. 1OO%</td>
                                        <td><?php echo e($heuresup->msup100); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Total H.S.</td>
                                        <td><?php echo e($empl->totmhs); ?></td>
                                       
                                    </tr>
                                
                                    <tr>
                                        <td>Avantages en nat.</td>
                                        <td><?php echo e($empl->totavtagenat); ?></td>
                                       
                                    </tr>
                                    <tr>
                                        <td>Salaire brut imposable</td>
                                        <td><?php echo e($empl->salbimp); ?></td>
                                       
                                    </tr>
                                    <tr>
                                        <td>Retenues sur salaire</td>
                                    </tr>
                                    <tr>
                                        <td>CR</td>
                                        <td><?php echo e($cotsocemp->cr); ?></td>
                                    </tr>
                                    <tr>
                                        <td>CN</td>
                                        <td><?php echo e($cotficemp->cn); ?></td>
                                    </tr>
                                    <tr>
                                        <td>IS</td>
                                        <td><?php echo e($cotficemp->is); ?></td>
                                    </tr>
                                    <tr>
                                        <td>IGR</td>
                                        <td><?php echo e($cotficemp->igr); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Salaire Net</td>
                                        <td><?php echo e($empl->salnet); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Indemnité de transport</td>
                                        <td><?php echo e($indemnite->ind_trsport); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Accompte</td>
                                        <td><?php echo e($retenues->accompte); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Avance</td>
                                        <td><?php echo e($retenues->avance); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Net à payer</td>
                                        <td><?php echo e($empl->salpay); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
      
    </div>
</body>
</html>
    
<?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/salbrutimp/pdf2.blade.php ENDPATH**/ ?>