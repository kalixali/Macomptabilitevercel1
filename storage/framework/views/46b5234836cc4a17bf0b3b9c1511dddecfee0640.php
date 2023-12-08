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
                        <h2 class="text-center"><u>BILAN COMPTABLE <?php echo e($exec0); ?> </u></h2>
                    </div>
                    <div class="card-body">
                        <br/>
                    <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>REF.</th>
                                        <th>ACTIF</th>
                                        <th>NOTES</th>
                                        <th><?php echo e($exec); ?></th>
                                        <th>REF.</th>
                                        <th>PASSIF</th>
                                        <th>NOTES</th>
                                        <th><?php echo e($exec); ?></th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>AD</td>
                                        <td>IMMOBILISATIONS INCORPORELLES</td>
                                        <td></td>
                                        <td><?php echo e($immo21[0]->immo21); ?></td>
                                        <td>CA</td>
                                        <td>CAPITAL</td>
                                        <td></td>
                                        <td><?php echo e($cap[0]->cap); ?></td>
                                    </tr>
                                    <tr>
                                        <td>AK</td>
                                        <td>TERRAINS</td>
                                        <td></td>
                                        <td><?php echo e($immo22[0]->immo22); ?></td>
                                        <td>CG</td>
                                        <td>RESERVES</td>
                                        <td></td>
                                        <td><?php echo e($resv[0]->resv); ?></td>
                                    </tr>
                                    <tr>
                                        <td>AL</td>
                                        <td>BATIMENTS - INSTAL. TECH. ET AGENCE.</td>
                                        <td></td>
                                        <td><?php echo e($immo23[0]->immo23); ?></td>
                                        <td>CH</td>
                                        <td>REPORT A NOUVEAU</td>
                                        <td></td>
                                        <td><?php echo e($repn[0]->repn); ?></td>
                                    </tr>
                                    <tr>
                                        <td>AN</td>
                                        <td>MATERIELS - MOBILIERS ET ACTIFS BIOLOGIQUES</td>
                                        <td></td>
                                        <td><?php echo e($immo24[0]->immo24); ?></td>
                                        <td>CJ</td>
                                        <td>RESULTAT NET</td>
                                        <td></td>
                                        <td><?php echo e($resultat); ?></td>
                                    </tr>
                                    <tr>
                                        <td>AQ</td>
                                        <td>AVANCES ET ACCOMPTES VERSES SUR IMMO.</td>
                                        <td></td>
                                        <td><?php echo e($immo25[0]->immo25); ?></td>
                                        <td>CL</td>
                                        <td>SUBVENTIONS D'INVESTISSEMENT</td>
                                        <td></td>
                                        <td><?php echo e($subinv[0]->subinv); ?></td>
                                    </tr>
                                    <tr>
                                        <td>AS</td>
                                        <td>TITRES DE PARTICIPATIONS</td>
                                        <td></td>
                                        <td><?php echo e($immo26[0]->immo26); ?></td>
                                        <td>CM</td>
                                        <td>PROVISIONS REGLEMENTEES</td>
                                        <td></td>
                                        <td><?php echo e($provreg[0]->provreg); ?></td>
                                    </tr>
                                    <tr>
                                        <td>AT</td>
                                        <td>AUTRES IMMO. FINNANCIERES</td>
                                        <td></td>
                                        <td><?php echo e($immo27[0]->immo27); ?></td>
                                        <td>DA</td>
                                        <td>EMPRUNTS ET DETTES ASSIMILEES</td>
                                        <td></td>
                                        <td><?php echo e($empdet[0]->empdet); ?></td>
                                    </tr>
                                    <tr>
                                        <td>AV</td>
                                        <td>AMORTISSEMENT DES IMMO.</td>
                                        <td></td>
                                        <td><?php echo e($immo28[0]->immo28); ?></td>
                                        <td>DB</td>
                                        <td>DETTES DE LOCATION ACQUISITION</td>
                                        <td></td>
                                        <td><?php echo e($detloc[0]->detloc); ?></td>
                                    </tr>
                                    <tr>
                                        <td>AY</td>
                                        <td>DEPRECIATION DES IMMO.</td>
                                        <td></td>
                                        <td><?php echo e($immo29[0]->immo29); ?></td>
                                        <td>DC</td>
                                        <td>DETTES LIEES A DES PARTICIPATIONS ET COMPTES DE LIAISON</td>
                                        <td></td>
                                        <td><?php echo e($detparclesp[0]->detparclesp); ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>DD</td>
                                        <td>PROVISIONS POUR RISQUES ET CHARGES</td>
                                        <td></td>
                                        <td><?php echo e($provrc[0]->provrc); ?></td>
                                    </tr>
                                    <tr>
                                        <th>AZ</th>
                                        <th>TOTAL ACTIF IMMOBILISE</th>
                                        <td></td>
                                        <th><?php echo e($immo); ?></th>
                                        <th>DF</th>
                                        <th>TOTAL CAPITAUX PROPRES ET RESSOURCES ASSIMILEES</th>
                                        <td></td>
                                        <th><?php echo e($Totcap); ?></th>
                                    </tr>
                                    <tr>
                                        <td>BB</td>
                                        <td>STOCKS ET ENCOURS</td>
                                        <td></td>
                                        <td><?php echo e($stock[0]->stock); ?></td>
                                        <td>DJ</td>
                                        <td>DETTES FOURNISSEURS D'EXPLOITATION</td>
                                        <td></td>
                                        <td><?php echo e($fourn[0]->fourn); ?></td>
                                    </tr>
                                    <tr>
                                        <td>BC</td>
                                        <td>DEPRECIATION DES STOCKS</td>
                                        <td></td>
                                        <td><?php echo e($stockd[0]->stockd); ?></td>
                                        <td>DG</td>
                                        <td>CLIENTS AVANCES ET ACCOMPTES RECUS</td>
                                        <td></td>
                                        <td><?php echo e($cltacr[0]->cltacr); ?></td>
                                    </tr>
                                    <tr>
                                        <td>BD</td>
                                        <td>COMPTES CLIENTS</td>
                                        <td></td>
                                        <td><?php echo e($clt[0]->clt); ?></td>
                                        <td>DH</td>
                                        <td>DETTES SOCIALES</td>
                                        <td></td>
                                        <td><?php echo e($detsocial[0]->detsocial); ?></td>
                                    </tr>
                                    <tr>
                                        <td>BE</td>
                                        <td>DEPRECIATION DES COMPTES CLIENTS</td>
                                        <td></td>
                                        <td><?php echo e($cltd[0]->cltd); ?></td>
                                        <td>DI</td>
                                        <td>DETTES FISCALES</td>
                                        <td></td>
                                        <td><?php echo e($detfiscal[0]->detfiscal); ?></td>
                                    </tr>
                                    <tr>
                                        <td>BF</td>
                                        <td>FOURNISSEURS AVANCES ET ACCOMPTES VERSES</td>
                                        <td></td>
                                        <td><?php echo e($fournaav[0]->fournaav); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>BG</th>
                                        <th>TOTAL ACTIF CIRCULANT</th>
                                        <td></td>
                                        <th><?php echo e($Totactcir); ?></th>
                                        <th>DH</th>
                                        <th>TOTAL PASSIF CIRCULANT</th>
                                        <td></td>
                                        <th><?php echo e($Totpascir); ?></th>
                                    </tr>
                                    <tr>
                                        <td>BH</td>
                                        <td>TITRES DE PLACEMENT</td>
                                        <td></td>
                                        <td><?php echo e($titrepla[0]->titrepla); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                     <tr>
                                        <td>BI</td>
                                        <td>VALEURS A ENCAISSER</td>
                                        <td></td>
                                        <td><?php echo e($vencais[0]->vencais); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>BJ</td>
                                        <td>BANQUES</td>
                                        <td></td>
                                        <td><?php echo e($banq[0]->banq); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>BK</td>
                                        <td>ETABLISSEMENTS FINANCIERS ET ASSIMILES</td>
                                        <td></td>
                                        <td><?php echo e($etfcier[0]->etfcier); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>BL</td>
                                        <td>CAISSE</td>
                                        <td></td>
                                        <td><?php echo e($cais[0]->cais); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>BM</td>
                                        <td>DEPRECIATION/PROV. TRESORERIE</td>
                                        <td></td>
                                        <td><?php echo e($banqd[0]->banqd); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>BN</th>
                                        <th>TOTAL COMPTES TRESORERIE</th>
                                        <td></td>
                                        <th><?php echo e($TOTtresor); ?></th>
                                        <th></th>
                                        <th></th>
                                        <td></td>
                                        <th></th>
                                    </tr>
                                     <tr>
                                        <th></th>
                                        <th>TOTAL ACTIF</th>
                                        <td></td>
                                        <th><?php echo e($actif); ?></th>
                                        <th></th>
                                        <th>TOTAL PASSIF</th>
                                        <td></td>
                                        <th><?php echo e($passif); ?></th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <td></td>
                                        <th></th>
                                        <th></th>
                                        <th>BILAN</th>
                                        <td></td>
                                        <th><?php echo e($bilan); ?></th>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>




                     </div>
                </div>
            </div>
        </div>
   
    </div >
</body>
</html><?php /**PATH C:\Users\hp\Downloads\Mes projets\Laravel\MaComptabilite\MaComptabilite\resources\views/bilan/pdfbilan.blade.php ENDPATH**/ ?>