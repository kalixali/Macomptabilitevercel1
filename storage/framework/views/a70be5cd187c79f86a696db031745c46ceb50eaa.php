
<?php $__env->startSection('content'); ?>

<div class="container">
 
<div class="card">
  <div class="card-header">EDIT Page</div>
  <div class="card-body">
    <div class="row align-items-center">
      
      <form action="<?php echo e(url('salaire/' .$salaire->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
         
         <div class="col-md-4">
          <input type="hidden" name="id" id="id" value="<?php echo e($salaire->id); ?>" id="id" class="form-control"/>
        </div>       
        <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-3">
                          
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Matricule</label>
                                    <input type="text" name="matricule" id="matricule" class="form-control" value="<?php echo e($salaire->matricule); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Nom </label>
                                    <input type="text" name="nom" id="nom" class="form-control" value="<?php echo e($salaire->nom); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Prénoms</label>
                                    <input type="text" name="prenoms" id="prenoms" class="form-control"  value="<?php echo e($salaire->prenoms); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Poste</label>
                                    <input type="text" name="poste" id="poste" class="form-control" value="<?php echo e($salaire->poste); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">catégorie</label>
                                    <input type="text" name="categ" id="categ" class="form-control" value="<?php echo e($salaire->categ); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Nbre part</label>
                                    <input type="number" name="nbrepart" id="nbrepart" class="form-control" value="<?php echo e($salaire->nbrepart); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">salaire de base</label>
                                    <input type="number" name="salbase" id="salbase" class="form-control" value="<?php echo e($salaire->salbase); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Sursalaire</label>
                                    <input type="number" name="sursal" id="sursal" class="form-control" value="<?php echo e($salaire->sursal); ?>">
                                </div>
                            </div>
                                                                                
                        </div>
                       
                        <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-3">
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Logement</label>
                                    <input type="number" name="avg_logement" id="avg_logement" class="form-control" value="<?php echo e($salaire->avg_logement); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Vehicule</label>
                                    <input type="number" name="avg_vehicule" id="avg_vehicule" class="form-control" value="<?php echo e($salaire->avg_vehicule); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Autres avantages</label>
                                    <input type="number" name="avg_otr" id="avg_otr" class="form-control" value="<?php echo e($salaire->avg_otr); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Total avantages en nat. </label>
                                    <input type="number" name="totavtagenat" id="totavtagenat" class="form-control" value="<?php echo e($salaire->totavtagenat); ?>">
                                </div>
                            </div>
                                                        
                        </div>
                        
                        <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-3">
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Prime Anciennété</label>
                                    <input type="number" name="prime_ancien" id="prime_ancien"class="form-control" value="<?php echo e($salaire->prime_ancien); ?>">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Prime de Risque</label>
                                    <input type="number" name="prim_risq" id="prim_risq" class="form-control" value="<?php echo e($salaire->prim_risq); ?>">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Autres Primes</label>
                                    <input type="number" name="prime_otr" id="prime_otr" class="form-control" value="<?php echo e($salaire->prime_otr); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Total Primes</label>
                                    <input type="number" name="totprimes" id="totprimes" class="form-control" value="<?php echo e($salaire->totprimes); ?>">
                                </div>
                            </div>
                            
                            </div>
                            <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Taux horaires</label>
                                    <input type="number" name="txhorair" id="txhorair" class="form-control" value="<?php echo e($salaire->txhorair); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Heure Sup. 15%</label>
                                    <input type="number" name="hsup15" id="hsup15" class="form-control" value="<?php echo e($salaire->hsup15); ?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Heure Sup. 50%</label>
                                    <input type="number" name="hsup50" id="hsup50" class="form-control" value="<?php echo e($salaire->hsup50); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Heure Sup. 75%</label>
                                    <input type="number" name="hsup75" id="hsup75" class="form-control" value="<?php echo e($salaire->hsup75); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Heure Sup. 100%</label>
                                    <input type="number" name="hsup100" id="hsup100" class="form-control" value="<?php echo e($salaire->hsup100); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Montant Heure Sup. 15%</label>
                                    <input type="number" name="msup15" id="msup15" id="msup15" class="form-control" value="<?php echo e($salaire->msup15); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Montant Heure Sup. 50%</label>
                                    <input type="number" name="msup50" id="msup50" class="form-control" value="<?php echo e($salaire->msup50); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Montant Heure Sup. 75%</label>
                                    <input type="number" name="msup75" id="msup75" class="form-control" value="<?php echo e($salaire->msup75); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Montant Heure Sup. 100%</label>
                                    <input type="number" name="msup100" id="msup100" class="form-control" value="<?php echo e($salaire->msup100); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Total Heure Sup.</label>
                                    <input type="number" name="totmhs" id="totmhs" class="form-control" value="<?php echo e($salaire->totmhs); ?>">
                                </div>
                            </div>
                        </div>
                                                                      
                        <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Indemnite de nourriture</label>
                                    <input type="number" name="ind_nourriture" id="ind_nourriture" class="form-control" value="<?php echo e($salaire->ind_nourriture); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Indemnite de logement</label>
                                    <input type="number" name="ind_logement" id="ind_logement" class="form-control" value="<?php echo e($salaire->ind_logement); ?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Autres Indemnites Taxables</label>
                                     <input type="number" name="ind_otrtax" id="ind_otrtax" class="form-control" value="<?php echo e($salaire->ind_otrtax); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Total Indemnites Taxables</label>
                                     <input type="number" name="totindemnitetax" id="totindemnitetax" class="form-control" value="<?php echo e($salaire->totindemnitetax); ?>">
                                </div>
                            </div>
                            
                            
                        </div>
                    
                    <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>salaire Brut Imp.</label>
                                    <input type="number" name="salbimp" id="salbimp"  class="form-control" value="<?php echo e($salaire->salbimp); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Cotisation Retraite</label>
                                    <input type="number" name="cr" id="cr" class="form-control" value="<?php echo e($salaire->cr); ?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Impôt sur salaire</label>
                                     <input type="number" name="is" id="is" class="form-control" value="<?php echo e($salaire->is); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                  
                                    <label class="form-label">Contribution Nationale</label>
                                     <input type="number" name="cn" id="cn" class="form-control" value="<?php echo e($salaire->cn); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Impôt General sur Revenues</label>
                                     <input type="number" name="igr" id="igr" class="form-control" value="<?php echo e($salaire->igr); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Total C. Fiscale employé</label>
                                     <input type="number" name="totficemp" id="totficemp" class="form-control" value="<?php echo e($salaire->totficemp); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">salaire Net</label>
                                     <input type="number" name="salnet" id="salnet" class="form-control" value="<?php echo e($salaire->salnet); ?>">
                                </div>
                            </div>
                            
                        </div>
                        <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Indemnité de Transport</label>
                                    <input type="number" name="ind_trsport" id="ind_trsport" class="form-control" value="<?php echo e($salaire->ind_trsport); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Indemnité de Salissure</label>
                                    <input type="number" name="ind_salissure" id="ind_salissure" class="form-control" value="<?php echo e($salaire->ind_salissure); ?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Autres Indemnités</label>
                                    <input type="number" name="ind_otr" id="ind_otr" class="form-control" value="<?php echo e($salaire->ind_otr); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Total Indemnités Non Taxables</label>
                                    <input type="number" name="totindemnite" id="totindemnite" class="form-control" value="<?php echo e($salaire->totindemnite); ?>">
                                </div>
                            </div>
                            
                        </div>
                    <div class="row gy-2 px-3 py-3 mx-3 my-3 border border-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Accompte</label>
                                    <input type="number" name="accompte" id="accompte" class="form-control" value="<?php echo e($salaire->accompte); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Avance</label>
                                    <input type="number" name="avance" id="avance" class="form-control" value="<?php echo e($salaire->avance); ?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Autres Retenues</label>
                                     <input type="number" name="autres" id="autres" class="form-control" value="<?php echo e($salaire->autres); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Total Retenues</label>
                                     <input type="number" name="totretenues" id="totretenues" class="form-control" value="<?php echo e($salaire->totretenues); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                  
                                    <label class="form-label">salaire Payé</label>
                                     <input type="number" name="salpaye" id="salpaye" class="form-control" value="<?php echo e($salaire->salpaye); ?>">
                                </div>
                            </div>
                                                        
                            <div class="col-md-3">
                                <div >
                                    <button type="submit" class="btn btn-primary form-control">Valider</button>
                                </div>
                            </div>
                        </div>
                        
    </form>
   </div>
   </div>
  </div>
  <script src="maff.js"></script>
</div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/salaire/edit.blade.php ENDPATH**/ ?>