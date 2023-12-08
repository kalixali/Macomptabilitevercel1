<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9rabsBJ7ccqRqE2p',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rPsI8nGrApeAEpeX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/produit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'produit.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'produit.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/produit/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'produit.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/scan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9ZGBbf8bIJi2qkd6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/fournisseurs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fournisseurs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fournisseurs.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/fournisseurs/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fournisseurs.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clients.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'clients.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clients/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clients.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/achats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'achats.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'achats.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/achats/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'achats.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/achatscan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wDDMxbemFyGZqSbb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchfactach' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchfactach',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchfactach1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchfactach1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchach1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchach1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchach2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchach2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchach3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchach3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchach' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5fw8Xgs5ZiuQVLQs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getachats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Uug9SqSHn6Lzktp1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/downloadach' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BURy3VAakVnS10mc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/downloadfactach' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::97hJqjxkBy8TdKgy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ventes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ventes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ventes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ventes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ventes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ventescan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oOwU4PGiS18Dqahs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchvte1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchvte1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchvte2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchvte2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchvte' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rIeYSsp9KEWI1W95',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getventes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hi2SLCSpsEd9qu5v',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/downloadvte' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QUrLaT0BSj2QmXuc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/downloadfactvte' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KZQ4BVNRARTvE8Ia',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchfactvte' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchfactvte',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchfactvte1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchfactvte1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/journal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'journal.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'journal.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/journal/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'journal.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchcpte1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchcpte1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchcodejournal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchcodejournal',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getjournal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q9mNsrAjKcBGxHWt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/downloadjournal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5QNJKn0HpKJWfcR4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/codesjournaux' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'codesjournaux.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'codesjournaux.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/codesjournaux/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'codesjournaux.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/plancpte' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plancpte.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'plancpte.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/plancpte/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plancpte.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/entstock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'entstock.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'entstock.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/entstock/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'entstock.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchent1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchent1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchentstock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i1LSJg5SRtzZUHMf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getentstock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ItEows9a2OB4lSKq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sortistock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sortistock.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sortistock.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sortistock/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sortistock.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchsort1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchsort1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchsortistock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p1H15oymxJCUvxqH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getsortistock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bv7hg0zE1tcMdbkU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/stockactu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stockactu.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'stockactu.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/stockactu/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stockactu.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Balance.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'Balance.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Balance/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Balance.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getBalance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LgJm1pdvZK6xQC0d',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/downloadbalance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KoTP7lui1q1CGedt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/grdlivre' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'grdlivre.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'grdlivre.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/grdlivre/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'grdlivre.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getlivre' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o0ZLJoP0rov70kC4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchfromcpte' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchfromcpte',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchtocpte' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchtocpte',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/downloadgrdlivre' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yr22nmhx8H9N8lfG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/EmployesPDF2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EwV1LOQxNHqeQKwh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/entreprise' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'entreprise.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'entreprise.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/entreprise/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'entreprise.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bulletin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bulletin.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bulletin.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bulletin/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bulletin.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/downloadPDF2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ReioUtHp8X6qxGr7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchfromat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchfromat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchtomat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchtomat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cpteresultat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cpteresultat.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cpteresultat.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cpteresultat/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cpteresultat.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getcpteresultat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l9P2Gp1ljM6OiQd4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/downloadPDFcpteresultat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dVarnTwRr45eIzJU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bilan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bilan.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bilan.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bilan/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bilan.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getbilan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QvjTStdISZqZppry',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/downloadPDFbilan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uPGIphMgDwmFlEU2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/comptasalaire' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ynCDUdVukn2nBGYr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/comptasal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i7jHGiFULV09zOyW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/comptapatron' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7YVe1sendanl3eEi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/comptapatronal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EfnbVABCLZ04dl4s',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/salaire' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salaire.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'salaire.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/salaire/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salaire.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchsal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::poTs0d0YDPCFjh1O',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/downloadPDFsal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X6Hs7NBz4E4aCQls',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getsalaire' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yQi0s58t8JxKrpnv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchmat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchmat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/salbrutimp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salbrutimp.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'salbrutimp.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/salbrutimp/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salbrutimp.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hnRPFa9oBZiaX1ZT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/downloadPDF' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2nNeoSa6ihYlpBog',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cotsocpat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cotsocpat.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cotsocpat.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cotsocpat/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cotsocpat.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getcotsocpat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BgDoUnyIASKhphVd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cotficpat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cotficpat.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cotficpat.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cotficpat/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cotficpat.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getcotficpat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B3n3DosK0kX43caz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getsalbrutimp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hcaUIvFd5amgSYLz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6H5gS6b171e55OoZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NsGVKF29LG4suP60',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GZ3YN6ILUVWagznK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zpXLNLF5fnzfr4IW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/loadchart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'loadchart.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'loadchart.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/loadchart/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'loadchart.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/loadchart1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s4aN8NP7G4K6isL7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/loadchart2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sg1b6tdveB2zRgV0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/p(?|roduit/([^/]++)(?|(*:30)|/edit(*:42)|(*:49))|lancpte/([^/]++)(?|(*:76)|/edit(*:88)|(*:95)))|/fournisseurs/([^/]++)(?|(*:129)|/edit(*:142)|(*:150))|/c(?|lients/([^/]++)(?|(*:182)|/edit(*:195)|(*:203))|o(?|desjournaux/([^/]++)(?|(*:239)|/edit(*:252)|(*:260))|t(?|socpat/([^/]++)(?|(*:291)|/edit(*:304)|(*:312))|ficpat/([^/]++)(?|(*:339)|/edit(*:352)|(*:360))))|pteresultat/([^/]++)(?|(*:394)|/edit(*:407)|(*:415)))|/achats/([^/]++)(?|(*:444)|/edit(*:457)|(*:465))|/ventes/([^/]++)(?|(*:493)|/edit(*:506)|(*:514))|/journal/([^/]++)(?|(*:543)|/edit(*:556)|(*:564))|/e(?|nt(?|stock/([^/]++)(?|(*:600)|/edit(*:613)|(*:621))|reprise/([^/]++)(?|(*:649)|/edit(*:662)|(*:670)))|mployes/([^/]++)(?|(*:699)|/edit(*:712)|(*:720)))|/s(?|ortistock/([^/]++)(?|(*:756)|/edit(*:769)|(*:777))|tockactu/([^/]++)(?|(*:806)|/edit(*:819)|(*:827))|al(?|aire/([^/]++)(?|(*:857)|/edit(*:870)|(*:878))|brutimp/([^/]++)(?|(*:906)|/edit(*:919)|(*:927))))|/Balance/([^/]++)(?|(*:958)|/edit(*:971)|(*:979))|/grdlivre/([^/]++)(?|(*:1009)|/edit(*:1023)|(*:1032))|/b(?|ulletin/([^/]++)(?|(*:1066)|/edit(*:1080)|(*:1089))|ilan/([^/]++)(?|(*:1115)|/edit(*:1129)|(*:1138)))|/loadchart/([^/]++)(?|(*:1171)|/edit(*:1185)|(*:1194)))/?$}sDu',
    ),
    3 => 
    array (
      30 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'produit.show',
          ),
          1 => 
          array (
            0 => 'produit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      42 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'produit.edit',
          ),
          1 => 
          array (
            0 => 'produit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      49 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'produit.update',
          ),
          1 => 
          array (
            0 => 'produit',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'produit.destroy',
          ),
          1 => 
          array (
            0 => 'produit',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      76 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plancpte.show',
          ),
          1 => 
          array (
            0 => 'plancpte',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      88 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plancpte.edit',
          ),
          1 => 
          array (
            0 => 'plancpte',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      95 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plancpte.update',
          ),
          1 => 
          array (
            0 => 'plancpte',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'plancpte.destroy',
          ),
          1 => 
          array (
            0 => 'plancpte',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      129 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fournisseurs.show',
          ),
          1 => 
          array (
            0 => 'fournisseur',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      142 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fournisseurs.edit',
          ),
          1 => 
          array (
            0 => 'fournisseur',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fournisseurs.update',
          ),
          1 => 
          array (
            0 => 'fournisseur',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fournisseurs.destroy',
          ),
          1 => 
          array (
            0 => 'fournisseur',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      182 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clients.show',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      195 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clients.edit',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      203 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clients.update',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'clients.destroy',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      239 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'codesjournaux.show',
          ),
          1 => 
          array (
            0 => 'codesjournaux',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      252 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'codesjournaux.edit',
          ),
          1 => 
          array (
            0 => 'codesjournaux',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      260 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'codesjournaux.update',
          ),
          1 => 
          array (
            0 => 'codesjournaux',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'codesjournaux.destroy',
          ),
          1 => 
          array (
            0 => 'codesjournaux',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      291 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cotsocpat.show',
          ),
          1 => 
          array (
            0 => 'cotsocpat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cotsocpat.edit',
          ),
          1 => 
          array (
            0 => 'cotsocpat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      312 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cotsocpat.update',
          ),
          1 => 
          array (
            0 => 'cotsocpat',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cotsocpat.destroy',
          ),
          1 => 
          array (
            0 => 'cotsocpat',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      339 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cotficpat.show',
          ),
          1 => 
          array (
            0 => 'cotficpat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      352 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cotficpat.edit',
          ),
          1 => 
          array (
            0 => 'cotficpat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      360 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cotficpat.update',
          ),
          1 => 
          array (
            0 => 'cotficpat',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cotficpat.destroy',
          ),
          1 => 
          array (
            0 => 'cotficpat',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      394 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cpteresultat.show',
          ),
          1 => 
          array (
            0 => 'cpteresultat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      407 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cpteresultat.edit',
          ),
          1 => 
          array (
            0 => 'cpteresultat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      415 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cpteresultat.update',
          ),
          1 => 
          array (
            0 => 'cpteresultat',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cpteresultat.destroy',
          ),
          1 => 
          array (
            0 => 'cpteresultat',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      444 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'achats.show',
          ),
          1 => 
          array (
            0 => 'achat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      457 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'achats.edit',
          ),
          1 => 
          array (
            0 => 'achat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'achats.update',
          ),
          1 => 
          array (
            0 => 'achat',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'achats.destroy',
          ),
          1 => 
          array (
            0 => 'achat',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      493 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ventes.show',
          ),
          1 => 
          array (
            0 => 'vente',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      506 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ventes.edit',
          ),
          1 => 
          array (
            0 => 'vente',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      514 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ventes.update',
          ),
          1 => 
          array (
            0 => 'vente',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ventes.destroy',
          ),
          1 => 
          array (
            0 => 'vente',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      543 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'journal.show',
          ),
          1 => 
          array (
            0 => 'journal',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      556 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'journal.edit',
          ),
          1 => 
          array (
            0 => 'journal',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'journal.update',
          ),
          1 => 
          array (
            0 => 'journal',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'journal.destroy',
          ),
          1 => 
          array (
            0 => 'journal',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      600 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'entstock.show',
          ),
          1 => 
          array (
            0 => 'entstock',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      613 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'entstock.edit',
          ),
          1 => 
          array (
            0 => 'entstock',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      621 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'entstock.update',
          ),
          1 => 
          array (
            0 => 'entstock',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'entstock.destroy',
          ),
          1 => 
          array (
            0 => 'entstock',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      649 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'entreprise.show',
          ),
          1 => 
          array (
            0 => 'entreprise',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      662 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'entreprise.edit',
          ),
          1 => 
          array (
            0 => 'entreprise',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      670 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'entreprise.update',
          ),
          1 => 
          array (
            0 => 'entreprise',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'entreprise.destroy',
          ),
          1 => 
          array (
            0 => 'entreprise',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      699 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employes.show',
          ),
          1 => 
          array (
            0 => 'employe',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      712 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employes.edit',
          ),
          1 => 
          array (
            0 => 'employe',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      720 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employes.update',
          ),
          1 => 
          array (
            0 => 'employe',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employes.destroy',
          ),
          1 => 
          array (
            0 => 'employe',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      756 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sortistock.show',
          ),
          1 => 
          array (
            0 => 'sortistock',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      769 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sortistock.edit',
          ),
          1 => 
          array (
            0 => 'sortistock',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      777 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sortistock.update',
          ),
          1 => 
          array (
            0 => 'sortistock',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sortistock.destroy',
          ),
          1 => 
          array (
            0 => 'sortistock',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      806 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stockactu.show',
          ),
          1 => 
          array (
            0 => 'stockactu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      819 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stockactu.edit',
          ),
          1 => 
          array (
            0 => 'stockactu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      827 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stockactu.update',
          ),
          1 => 
          array (
            0 => 'stockactu',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'stockactu.destroy',
          ),
          1 => 
          array (
            0 => 'stockactu',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      857 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salaire.show',
          ),
          1 => 
          array (
            0 => 'salaire',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      870 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salaire.edit',
          ),
          1 => 
          array (
            0 => 'salaire',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      878 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salaire.update',
          ),
          1 => 
          array (
            0 => 'salaire',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'salaire.destroy',
          ),
          1 => 
          array (
            0 => 'salaire',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      906 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salbrutimp.show',
          ),
          1 => 
          array (
            0 => 'salbrutimp',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      919 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salbrutimp.edit',
          ),
          1 => 
          array (
            0 => 'salbrutimp',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      927 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'salbrutimp.update',
          ),
          1 => 
          array (
            0 => 'salbrutimp',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'salbrutimp.destroy',
          ),
          1 => 
          array (
            0 => 'salbrutimp',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      958 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Balance.show',
          ),
          1 => 
          array (
            0 => 'Balance',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      971 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Balance.edit',
          ),
          1 => 
          array (
            0 => 'Balance',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      979 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Balance.update',
          ),
          1 => 
          array (
            0 => 'Balance',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'Balance.destroy',
          ),
          1 => 
          array (
            0 => 'Balance',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1009 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'grdlivre.show',
          ),
          1 => 
          array (
            0 => 'grdlivre',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1023 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'grdlivre.edit',
          ),
          1 => 
          array (
            0 => 'grdlivre',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1032 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'grdlivre.update',
          ),
          1 => 
          array (
            0 => 'grdlivre',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'grdlivre.destroy',
          ),
          1 => 
          array (
            0 => 'grdlivre',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1066 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bulletin.show',
          ),
          1 => 
          array (
            0 => 'bulletin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1080 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bulletin.edit',
          ),
          1 => 
          array (
            0 => 'bulletin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1089 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bulletin.update',
          ),
          1 => 
          array (
            0 => 'bulletin',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bulletin.destroy',
          ),
          1 => 
          array (
            0 => 'bulletin',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bilan.show',
          ),
          1 => 
          array (
            0 => 'bilan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1129 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bilan.edit',
          ),
          1 => 
          array (
            0 => 'bilan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1138 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bilan.update',
          ),
          1 => 
          array (
            0 => 'bilan',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bilan.destroy',
          ),
          1 => 
          array (
            0 => 'bilan',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'loadchart.show',
          ),
          1 => 
          array (
            0 => 'loadchart',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1185 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'loadchart.edit',
          ),
          1 => 
          array (
            0 => 'loadchart',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1194 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'loadchart.update',
          ),
          1 => 
          array (
            0 => 'loadchart',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'loadchart.destroy',
          ),
          1 => 
          array (
            0 => 'loadchart',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9rabsBJ7ccqRqE2p' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000004ee0000000000000000";}";s:4:"hash";s:44:"sQJyav/M6YDFErFzVLgqCgUYkVbtK7Tb8/RYVfNcQ00=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9rabsBJ7ccqRqE2p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rPsI8nGrApeAEpeX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:260:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:42:"function () {
    return \\view(\'index\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000004f20000000000000000";}";s:4:"hash";s:44:"Hh83ilVi0BDLuBQCqzG+1sXiEeYuaxk1YITaUh24AIE=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rPsI8nGrApeAEpeX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'produit.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'produit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'produit.index',
        'uses' => 'App\\Http\\Controllers\\ProduitController@index',
        'controller' => 'App\\Http\\Controllers\\ProduitController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'produit.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'produit/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'produit.create',
        'uses' => 'App\\Http\\Controllers\\ProduitController@create',
        'controller' => 'App\\Http\\Controllers\\ProduitController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'produit.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'produit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'produit.store',
        'uses' => 'App\\Http\\Controllers\\ProduitController@store',
        'controller' => 'App\\Http\\Controllers\\ProduitController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'produit.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'produit/{produit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'produit.show',
        'uses' => 'App\\Http\\Controllers\\ProduitController@show',
        'controller' => 'App\\Http\\Controllers\\ProduitController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'produit.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'produit/{produit}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'produit.edit',
        'uses' => 'App\\Http\\Controllers\\ProduitController@edit',
        'controller' => 'App\\Http\\Controllers\\ProduitController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'produit.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'produit/{produit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'produit.update',
        'uses' => 'App\\Http\\Controllers\\ProduitController@update',
        'controller' => 'App\\Http\\Controllers\\ProduitController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'produit.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'produit/{produit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'produit.destroy',
        'uses' => 'App\\Http\\Controllers\\ProduitController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProduitController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9ZGBbf8bIJi2qkd6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'scan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\ProduitController@scan',
        'controller' => 'App\\Http\\Controllers\\ProduitController@scan',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9ZGBbf8bIJi2qkd6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fournisseurs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fournisseurs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'fournisseurs.index',
        'uses' => 'App\\Http\\Controllers\\FournisseurController@index',
        'controller' => 'App\\Http\\Controllers\\FournisseurController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fournisseurs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fournisseurs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'fournisseurs.create',
        'uses' => 'App\\Http\\Controllers\\FournisseurController@create',
        'controller' => 'App\\Http\\Controllers\\FournisseurController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fournisseurs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fournisseurs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'fournisseurs.store',
        'uses' => 'App\\Http\\Controllers\\FournisseurController@store',
        'controller' => 'App\\Http\\Controllers\\FournisseurController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fournisseurs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fournisseurs/{fournisseur}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'fournisseurs.show',
        'uses' => 'App\\Http\\Controllers\\FournisseurController@show',
        'controller' => 'App\\Http\\Controllers\\FournisseurController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fournisseurs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fournisseurs/{fournisseur}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'fournisseurs.edit',
        'uses' => 'App\\Http\\Controllers\\FournisseurController@edit',
        'controller' => 'App\\Http\\Controllers\\FournisseurController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fournisseurs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'fournisseurs/{fournisseur}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'fournisseurs.update',
        'uses' => 'App\\Http\\Controllers\\FournisseurController@update',
        'controller' => 'App\\Http\\Controllers\\FournisseurController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fournisseurs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'fournisseurs/{fournisseur}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'fournisseurs.destroy',
        'uses' => 'App\\Http\\Controllers\\FournisseurController@destroy',
        'controller' => 'App\\Http\\Controllers\\FournisseurController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'clients.index',
        'uses' => 'App\\Http\\Controllers\\ClientController@index',
        'controller' => 'App\\Http\\Controllers\\ClientController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clients/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'clients.create',
        'uses' => 'App\\Http\\Controllers\\ClientController@create',
        'controller' => 'App\\Http\\Controllers\\ClientController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'clients.store',
        'uses' => 'App\\Http\\Controllers\\ClientController@store',
        'controller' => 'App\\Http\\Controllers\\ClientController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clients/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'clients.show',
        'uses' => 'App\\Http\\Controllers\\ClientController@show',
        'controller' => 'App\\Http\\Controllers\\ClientController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clients/{client}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'clients.edit',
        'uses' => 'App\\Http\\Controllers\\ClientController@edit',
        'controller' => 'App\\Http\\Controllers\\ClientController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'clients/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'clients.update',
        'uses' => 'App\\Http\\Controllers\\ClientController@update',
        'controller' => 'App\\Http\\Controllers\\ClientController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'clients/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'clients.destroy',
        'uses' => 'App\\Http\\Controllers\\ClientController@destroy',
        'controller' => 'App\\Http\\Controllers\\ClientController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'achats.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'achats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'achats.index',
        'uses' => 'App\\Http\\Controllers\\AchatsController@index',
        'controller' => 'App\\Http\\Controllers\\AchatsController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'achats.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'achats/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'achats.create',
        'uses' => 'App\\Http\\Controllers\\AchatsController@create',
        'controller' => 'App\\Http\\Controllers\\AchatsController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'achats.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'achats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'achats.store',
        'uses' => 'App\\Http\\Controllers\\AchatsController@store',
        'controller' => 'App\\Http\\Controllers\\AchatsController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'achats.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'achats/{achat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'achats.show',
        'uses' => 'App\\Http\\Controllers\\AchatsController@show',
        'controller' => 'App\\Http\\Controllers\\AchatsController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'achats.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'achats/{achat}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'achats.edit',
        'uses' => 'App\\Http\\Controllers\\AchatsController@edit',
        'controller' => 'App\\Http\\Controllers\\AchatsController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'achats.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'achats/{achat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'achats.update',
        'uses' => 'App\\Http\\Controllers\\AchatsController@update',
        'controller' => 'App\\Http\\Controllers\\AchatsController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'achats.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'achats/{achat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'achats.destroy',
        'uses' => 'App\\Http\\Controllers\\AchatsController@destroy',
        'controller' => 'App\\Http\\Controllers\\AchatsController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wDDMxbemFyGZqSbb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'achatscan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\AchatsController@achatscan',
        'controller' => 'App\\Http\\Controllers\\AchatsController@achatscan',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wDDMxbemFyGZqSbb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchfactach' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'searchfactach',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\AchatsController@searchfactach',
        'controller' => 'App\\Http\\Controllers\\AchatsController@searchfactach',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchfactach',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchfactach1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'searchfactach1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\AchatsController@searchfactach1',
        'controller' => 'App\\Http\\Controllers\\AchatsController@searchfactach1',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchfactach1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchach1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'searchach1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\AchatsController@searchach1',
        'controller' => 'App\\Http\\Controllers\\AchatsController@searchach1',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchach1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchach2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'searchach2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\AchatsController@searchach2',
        'controller' => 'App\\Http\\Controllers\\AchatsController@searchach2',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchach2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchach3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'searchach3',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\AchatsController@searchach3',
        'controller' => 'App\\Http\\Controllers\\AchatsController@searchach3',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchach3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5fw8Xgs5ZiuQVLQs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'searchach',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\AchatsController@searchach',
        'controller' => 'App\\Http\\Controllers\\AchatsController@searchach',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5fw8Xgs5ZiuQVLQs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Uug9SqSHn6Lzktp1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getachats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\AchatsController@getachats',
        'controller' => 'App\\Http\\Controllers\\AchatsController@getachats',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Uug9SqSHn6Lzktp1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BURy3VAakVnS10mc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'downloadach',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\AchatsController@downloadach',
        'controller' => 'App\\Http\\Controllers\\AchatsController@downloadach',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BURy3VAakVnS10mc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::97hJqjxkBy8TdKgy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'downloadfactach',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\AchatsController@downloadfactach',
        'controller' => 'App\\Http\\Controllers\\AchatsController@downloadfactach',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::97hJqjxkBy8TdKgy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ventes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ventes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'ventes.index',
        'uses' => 'App\\Http\\Controllers\\VentesController@index',
        'controller' => 'App\\Http\\Controllers\\VentesController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ventes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ventes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'ventes.create',
        'uses' => 'App\\Http\\Controllers\\VentesController@create',
        'controller' => 'App\\Http\\Controllers\\VentesController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ventes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ventes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'ventes.store',
        'uses' => 'App\\Http\\Controllers\\VentesController@store',
        'controller' => 'App\\Http\\Controllers\\VentesController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ventes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ventes/{vente}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'ventes.show',
        'uses' => 'App\\Http\\Controllers\\VentesController@show',
        'controller' => 'App\\Http\\Controllers\\VentesController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ventes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ventes/{vente}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'ventes.edit',
        'uses' => 'App\\Http\\Controllers\\VentesController@edit',
        'controller' => 'App\\Http\\Controllers\\VentesController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ventes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'ventes/{vente}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'ventes.update',
        'uses' => 'App\\Http\\Controllers\\VentesController@update',
        'controller' => 'App\\Http\\Controllers\\VentesController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ventes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'ventes/{vente}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'ventes.destroy',
        'uses' => 'App\\Http\\Controllers\\VentesController@destroy',
        'controller' => 'App\\Http\\Controllers\\VentesController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oOwU4PGiS18Dqahs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ventescan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\VentesController@ventescan',
        'controller' => 'App\\Http\\Controllers\\VentesController@ventescan',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oOwU4PGiS18Dqahs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchvte1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'searchvte1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\VentesController@searchvte1',
        'controller' => 'App\\Http\\Controllers\\VentesController@searchvte1',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchvte1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchvte2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'searchvte2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\VentesController@searchvte2',
        'controller' => 'App\\Http\\Controllers\\VentesController@searchvte2',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchvte2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rIeYSsp9KEWI1W95' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'searchvte',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\VentesController@searchvte',
        'controller' => 'App\\Http\\Controllers\\VentesController@searchvte',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rIeYSsp9KEWI1W95',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hi2SLCSpsEd9qu5v' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getventes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\VentesController@getventes',
        'controller' => 'App\\Http\\Controllers\\VentesController@getventes',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hi2SLCSpsEd9qu5v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QUrLaT0BSj2QmXuc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'downloadvte',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\VentesController@downloadvte',
        'controller' => 'App\\Http\\Controllers\\VentesController@downloadvte',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QUrLaT0BSj2QmXuc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KZQ4BVNRARTvE8Ia' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'downloadfactvte',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\VentesController@downloadfactvte',
        'controller' => 'App\\Http\\Controllers\\VentesController@downloadfactvte',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KZQ4BVNRARTvE8Ia',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchfactvte' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'searchfactvte',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\VentesController@searchfactvte',
        'controller' => 'App\\Http\\Controllers\\VentesController@searchfactvte',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchfactvte',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchfactvte1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'searchfactvte1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\VentesController@searchfactvte1',
        'controller' => 'App\\Http\\Controllers\\VentesController@searchfactvte1',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchfactvte1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'journal.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'journal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'journal.index',
        'uses' => 'App\\Http\\Controllers\\JournalController@index',
        'controller' => 'App\\Http\\Controllers\\JournalController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'journal.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'journal/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'journal.create',
        'uses' => 'App\\Http\\Controllers\\JournalController@create',
        'controller' => 'App\\Http\\Controllers\\JournalController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'journal.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'journal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'journal.store',
        'uses' => 'App\\Http\\Controllers\\JournalController@store',
        'controller' => 'App\\Http\\Controllers\\JournalController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'journal.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'journal/{journal}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'journal.show',
        'uses' => 'App\\Http\\Controllers\\JournalController@show',
        'controller' => 'App\\Http\\Controllers\\JournalController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'journal.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'journal/{journal}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'journal.edit',
        'uses' => 'App\\Http\\Controllers\\JournalController@edit',
        'controller' => 'App\\Http\\Controllers\\JournalController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'journal.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'journal/{journal}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'journal.update',
        'uses' => 'App\\Http\\Controllers\\JournalController@update',
        'controller' => 'App\\Http\\Controllers\\JournalController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'journal.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'journal/{journal}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'journal.destroy',
        'uses' => 'App\\Http\\Controllers\\JournalController@destroy',
        'controller' => 'App\\Http\\Controllers\\JournalController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchcpte1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'searchcpte1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\JournalController@searchcpte1',
        'controller' => 'App\\Http\\Controllers\\JournalController@searchcpte1',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchcpte1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchcodejournal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'searchcodejournal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\JournalController@searchcodejournal',
        'controller' => 'App\\Http\\Controllers\\JournalController@searchcodejournal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchcodejournal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q9mNsrAjKcBGxHWt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getjournal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\JournalController@getjournal',
        'controller' => 'App\\Http\\Controllers\\JournalController@getjournal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::q9mNsrAjKcBGxHWt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5QNJKn0HpKJWfcR4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'downloadjournal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\JournalController@downloadjournal',
        'controller' => 'App\\Http\\Controllers\\JournalController@downloadjournal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5QNJKn0HpKJWfcR4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'codesjournaux.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'codesjournaux',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'codesjournaux.index',
        'uses' => 'App\\Http\\Controllers\\CodesjournauxController@index',
        'controller' => 'App\\Http\\Controllers\\CodesjournauxController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'codesjournaux.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'codesjournaux/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'codesjournaux.create',
        'uses' => 'App\\Http\\Controllers\\CodesjournauxController@create',
        'controller' => 'App\\Http\\Controllers\\CodesjournauxController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'codesjournaux.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'codesjournaux',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'codesjournaux.store',
        'uses' => 'App\\Http\\Controllers\\CodesjournauxController@store',
        'controller' => 'App\\Http\\Controllers\\CodesjournauxController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'codesjournaux.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'codesjournaux/{codesjournaux}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'codesjournaux.show',
        'uses' => 'App\\Http\\Controllers\\CodesjournauxController@show',
        'controller' => 'App\\Http\\Controllers\\CodesjournauxController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'codesjournaux.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'codesjournaux/{codesjournaux}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'codesjournaux.edit',
        'uses' => 'App\\Http\\Controllers\\CodesjournauxController@edit',
        'controller' => 'App\\Http\\Controllers\\CodesjournauxController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'codesjournaux.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'codesjournaux/{codesjournaux}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'codesjournaux.update',
        'uses' => 'App\\Http\\Controllers\\CodesjournauxController@update',
        'controller' => 'App\\Http\\Controllers\\CodesjournauxController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'codesjournaux.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'codesjournaux/{codesjournaux}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'codesjournaux.destroy',
        'uses' => 'App\\Http\\Controllers\\CodesjournauxController@destroy',
        'controller' => 'App\\Http\\Controllers\\CodesjournauxController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plancpte.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'plancpte',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'plancpte.index',
        'uses' => 'App\\Http\\Controllers\\plancpteController@index',
        'controller' => 'App\\Http\\Controllers\\plancpteController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plancpte.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'plancpte/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'plancpte.create',
        'uses' => 'App\\Http\\Controllers\\plancpteController@create',
        'controller' => 'App\\Http\\Controllers\\plancpteController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plancpte.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'plancpte',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'plancpte.store',
        'uses' => 'App\\Http\\Controllers\\plancpteController@store',
        'controller' => 'App\\Http\\Controllers\\plancpteController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plancpte.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'plancpte/{plancpte}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'plancpte.show',
        'uses' => 'App\\Http\\Controllers\\plancpteController@show',
        'controller' => 'App\\Http\\Controllers\\plancpteController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plancpte.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'plancpte/{plancpte}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'plancpte.edit',
        'uses' => 'App\\Http\\Controllers\\plancpteController@edit',
        'controller' => 'App\\Http\\Controllers\\plancpteController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plancpte.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'plancpte/{plancpte}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'plancpte.update',
        'uses' => 'App\\Http\\Controllers\\plancpteController@update',
        'controller' => 'App\\Http\\Controllers\\plancpteController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plancpte.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'plancpte/{plancpte}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'plancpte.destroy',
        'uses' => 'App\\Http\\Controllers\\plancpteController@destroy',
        'controller' => 'App\\Http\\Controllers\\plancpteController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'entstock.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'entstock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'entstock.index',
        'uses' => 'App\\Http\\Controllers\\EntstockController@index',
        'controller' => 'App\\Http\\Controllers\\EntstockController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'entstock.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'entstock/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'entstock.create',
        'uses' => 'App\\Http\\Controllers\\EntstockController@create',
        'controller' => 'App\\Http\\Controllers\\EntstockController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'entstock.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'entstock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'entstock.store',
        'uses' => 'App\\Http\\Controllers\\EntstockController@store',
        'controller' => 'App\\Http\\Controllers\\EntstockController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'entstock.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'entstock/{entstock}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'entstock.show',
        'uses' => 'App\\Http\\Controllers\\EntstockController@show',
        'controller' => 'App\\Http\\Controllers\\EntstockController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'entstock.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'entstock/{entstock}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'entstock.edit',
        'uses' => 'App\\Http\\Controllers\\EntstockController@edit',
        'controller' => 'App\\Http\\Controllers\\EntstockController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'entstock.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'entstock/{entstock}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'entstock.update',
        'uses' => 'App\\Http\\Controllers\\EntstockController@update',
        'controller' => 'App\\Http\\Controllers\\EntstockController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'entstock.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'entstock/{entstock}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'entstock.destroy',
        'uses' => 'App\\Http\\Controllers\\EntstockController@destroy',
        'controller' => 'App\\Http\\Controllers\\EntstockController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchent1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'searchent1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\EntstockController@searchent1',
        'controller' => 'App\\Http\\Controllers\\EntstockController@searchent1',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchent1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i1LSJg5SRtzZUHMf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'searchentstock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\EntstockController@searchentstock',
        'controller' => 'App\\Http\\Controllers\\EntstockController@searchentstock',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::i1LSJg5SRtzZUHMf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ItEows9a2OB4lSKq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getentstock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\EntstockController@getentstock',
        'controller' => 'App\\Http\\Controllers\\EntstockController@getentstock',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ItEows9a2OB4lSKq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sortistock.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sortistock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'sortistock.index',
        'uses' => 'App\\Http\\Controllers\\SortistockController@index',
        'controller' => 'App\\Http\\Controllers\\SortistockController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sortistock.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sortistock/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'sortistock.create',
        'uses' => 'App\\Http\\Controllers\\SortistockController@create',
        'controller' => 'App\\Http\\Controllers\\SortistockController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sortistock.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sortistock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'sortistock.store',
        'uses' => 'App\\Http\\Controllers\\SortistockController@store',
        'controller' => 'App\\Http\\Controllers\\SortistockController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sortistock.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sortistock/{sortistock}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'sortistock.show',
        'uses' => 'App\\Http\\Controllers\\SortistockController@show',
        'controller' => 'App\\Http\\Controllers\\SortistockController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sortistock.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sortistock/{sortistock}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'sortistock.edit',
        'uses' => 'App\\Http\\Controllers\\SortistockController@edit',
        'controller' => 'App\\Http\\Controllers\\SortistockController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sortistock.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'sortistock/{sortistock}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'sortistock.update',
        'uses' => 'App\\Http\\Controllers\\SortistockController@update',
        'controller' => 'App\\Http\\Controllers\\SortistockController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sortistock.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'sortistock/{sortistock}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'sortistock.destroy',
        'uses' => 'App\\Http\\Controllers\\SortistockController@destroy',
        'controller' => 'App\\Http\\Controllers\\SortistockController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchsort1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'searchsort1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\SortistockController@searchsort1',
        'controller' => 'App\\Http\\Controllers\\SortistockController@searchsort1',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchsort1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p1H15oymxJCUvxqH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'searchsortistock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\SortistockController@searchsortistock',
        'controller' => 'App\\Http\\Controllers\\SortistockController@searchsortistock',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::p1H15oymxJCUvxqH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bv7hg0zE1tcMdbkU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getsortistock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\SortistockController@getsortistock',
        'controller' => 'App\\Http\\Controllers\\SortistockController@getsortistock',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bv7hg0zE1tcMdbkU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stockactu.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stockactu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'stockactu.index',
        'uses' => 'App\\Http\\Controllers\\StocksController@index',
        'controller' => 'App\\Http\\Controllers\\StocksController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stockactu.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stockactu/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'stockactu.create',
        'uses' => 'App\\Http\\Controllers\\StocksController@create',
        'controller' => 'App\\Http\\Controllers\\StocksController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stockactu.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'stockactu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'stockactu.store',
        'uses' => 'App\\Http\\Controllers\\StocksController@store',
        'controller' => 'App\\Http\\Controllers\\StocksController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stockactu.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stockactu/{stockactu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'stockactu.show',
        'uses' => 'App\\Http\\Controllers\\StocksController@show',
        'controller' => 'App\\Http\\Controllers\\StocksController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stockactu.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stockactu/{stockactu}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'stockactu.edit',
        'uses' => 'App\\Http\\Controllers\\StocksController@edit',
        'controller' => 'App\\Http\\Controllers\\StocksController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stockactu.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'stockactu/{stockactu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'stockactu.update',
        'uses' => 'App\\Http\\Controllers\\StocksController@update',
        'controller' => 'App\\Http\\Controllers\\StocksController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stockactu.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'stockactu/{stockactu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'stockactu.destroy',
        'uses' => 'App\\Http\\Controllers\\StocksController@destroy',
        'controller' => 'App\\Http\\Controllers\\StocksController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Balance.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'Balance.index',
        'uses' => 'App\\Http\\Controllers\\BalanceController@index',
        'controller' => 'App\\Http\\Controllers\\BalanceController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Balance.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Balance/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'Balance.create',
        'uses' => 'App\\Http\\Controllers\\BalanceController@create',
        'controller' => 'App\\Http\\Controllers\\BalanceController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Balance.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'Balance.store',
        'uses' => 'App\\Http\\Controllers\\BalanceController@store',
        'controller' => 'App\\Http\\Controllers\\BalanceController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Balance.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Balance/{Balance}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'Balance.show',
        'uses' => 'App\\Http\\Controllers\\BalanceController@show',
        'controller' => 'App\\Http\\Controllers\\BalanceController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Balance.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Balance/{Balance}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'Balance.edit',
        'uses' => 'App\\Http\\Controllers\\BalanceController@edit',
        'controller' => 'App\\Http\\Controllers\\BalanceController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Balance.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'Balance/{Balance}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'Balance.update',
        'uses' => 'App\\Http\\Controllers\\BalanceController@update',
        'controller' => 'App\\Http\\Controllers\\BalanceController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Balance.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'Balance/{Balance}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'Balance.destroy',
        'uses' => 'App\\Http\\Controllers\\BalanceController@destroy',
        'controller' => 'App\\Http\\Controllers\\BalanceController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LgJm1pdvZK6xQC0d' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getBalance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\BalanceController@getBalance',
        'controller' => 'App\\Http\\Controllers\\BalanceController@getBalance',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LgJm1pdvZK6xQC0d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KoTP7lui1q1CGedt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'downloadbalance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\BalanceController@downloadbalance',
        'controller' => 'App\\Http\\Controllers\\BalanceController@downloadbalance',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KoTP7lui1q1CGedt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'grdlivre.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'grdlivre',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'grdlivre.index',
        'uses' => 'App\\Http\\Controllers\\grdlivreController@index',
        'controller' => 'App\\Http\\Controllers\\grdlivreController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'grdlivre.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'grdlivre/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'grdlivre.create',
        'uses' => 'App\\Http\\Controllers\\grdlivreController@create',
        'controller' => 'App\\Http\\Controllers\\grdlivreController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'grdlivre.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'grdlivre',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'grdlivre.store',
        'uses' => 'App\\Http\\Controllers\\grdlivreController@store',
        'controller' => 'App\\Http\\Controllers\\grdlivreController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'grdlivre.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'grdlivre/{grdlivre}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'grdlivre.show',
        'uses' => 'App\\Http\\Controllers\\grdlivreController@show',
        'controller' => 'App\\Http\\Controllers\\grdlivreController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'grdlivre.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'grdlivre/{grdlivre}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'grdlivre.edit',
        'uses' => 'App\\Http\\Controllers\\grdlivreController@edit',
        'controller' => 'App\\Http\\Controllers\\grdlivreController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'grdlivre.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'grdlivre/{grdlivre}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'grdlivre.update',
        'uses' => 'App\\Http\\Controllers\\grdlivreController@update',
        'controller' => 'App\\Http\\Controllers\\grdlivreController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'grdlivre.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'grdlivre/{grdlivre}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'grdlivre.destroy',
        'uses' => 'App\\Http\\Controllers\\grdlivreController@destroy',
        'controller' => 'App\\Http\\Controllers\\grdlivreController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o0ZLJoP0rov70kC4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getlivre',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\grdlivreController@getlivre',
        'controller' => 'App\\Http\\Controllers\\grdlivreController@getlivre',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::o0ZLJoP0rov70kC4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchfromcpte' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'searchfromcpte',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\grdlivreController@searchfromcpte',
        'controller' => 'App\\Http\\Controllers\\grdlivreController@searchfromcpte',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchfromcpte',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchtocpte' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'searchtocpte',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\grdlivreController@searchtocpte',
        'controller' => 'App\\Http\\Controllers\\grdlivreController@searchtocpte',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchtocpte',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yr22nmhx8H9N8lfG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'downloadgrdlivre',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\grdlivreController@downloadgrdlivre',
        'controller' => 'App\\Http\\Controllers\\grdlivreController@downloadgrdlivre',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::yr22nmhx8H9N8lfG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EwV1LOQxNHqeQKwh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'EmployesPDF2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeController@EmployesPDF2',
        'controller' => 'App\\Http\\Controllers\\EmployeController@EmployesPDF2',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EwV1LOQxNHqeQKwh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'employes.index',
        'uses' => 'App\\Http\\Controllers\\EmployeController@index',
        'controller' => 'App\\Http\\Controllers\\EmployeController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'employes.create',
        'uses' => 'App\\Http\\Controllers\\EmployeController@create',
        'controller' => 'App\\Http\\Controllers\\EmployeController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'employes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'employes.store',
        'uses' => 'App\\Http\\Controllers\\EmployeController@store',
        'controller' => 'App\\Http\\Controllers\\EmployeController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employes/{employe}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'employes.show',
        'uses' => 'App\\Http\\Controllers\\EmployeController@show',
        'controller' => 'App\\Http\\Controllers\\EmployeController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employes/{employe}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'employes.edit',
        'uses' => 'App\\Http\\Controllers\\EmployeController@edit',
        'controller' => 'App\\Http\\Controllers\\EmployeController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'employes/{employe}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'employes.update',
        'uses' => 'App\\Http\\Controllers\\EmployeController@update',
        'controller' => 'App\\Http\\Controllers\\EmployeController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'employes/{employe}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'employes.destroy',
        'uses' => 'App\\Http\\Controllers\\EmployeController@destroy',
        'controller' => 'App\\Http\\Controllers\\EmployeController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'entreprise.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'entreprise',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'entreprise.index',
        'uses' => 'App\\Http\\Controllers\\EntController@index',
        'controller' => 'App\\Http\\Controllers\\EntController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'entreprise.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'entreprise/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'entreprise.create',
        'uses' => 'App\\Http\\Controllers\\EntController@create',
        'controller' => 'App\\Http\\Controllers\\EntController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'entreprise.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'entreprise',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'entreprise.store',
        'uses' => 'App\\Http\\Controllers\\EntController@store',
        'controller' => 'App\\Http\\Controllers\\EntController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'entreprise.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'entreprise/{entreprise}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'entreprise.show',
        'uses' => 'App\\Http\\Controllers\\EntController@show',
        'controller' => 'App\\Http\\Controllers\\EntController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'entreprise.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'entreprise/{entreprise}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'entreprise.edit',
        'uses' => 'App\\Http\\Controllers\\EntController@edit',
        'controller' => 'App\\Http\\Controllers\\EntController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'entreprise.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'entreprise/{entreprise}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'entreprise.update',
        'uses' => 'App\\Http\\Controllers\\EntController@update',
        'controller' => 'App\\Http\\Controllers\\EntController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'entreprise.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'entreprise/{entreprise}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'entreprise.destroy',
        'uses' => 'App\\Http\\Controllers\\EntController@destroy',
        'controller' => 'App\\Http\\Controllers\\EntController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bulletin.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bulletin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'bulletin.index',
        'uses' => 'App\\Http\\Controllers\\BulletinController@index',
        'controller' => 'App\\Http\\Controllers\\BulletinController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bulletin.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bulletin/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'bulletin.create',
        'uses' => 'App\\Http\\Controllers\\BulletinController@create',
        'controller' => 'App\\Http\\Controllers\\BulletinController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bulletin.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'bulletin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'bulletin.store',
        'uses' => 'App\\Http\\Controllers\\BulletinController@store',
        'controller' => 'App\\Http\\Controllers\\BulletinController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bulletin.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bulletin/{bulletin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'bulletin.show',
        'uses' => 'App\\Http\\Controllers\\BulletinController@show',
        'controller' => 'App\\Http\\Controllers\\BulletinController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bulletin.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bulletin/{bulletin}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'bulletin.edit',
        'uses' => 'App\\Http\\Controllers\\BulletinController@edit',
        'controller' => 'App\\Http\\Controllers\\BulletinController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bulletin.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'bulletin/{bulletin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'bulletin.update',
        'uses' => 'App\\Http\\Controllers\\BulletinController@update',
        'controller' => 'App\\Http\\Controllers\\BulletinController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bulletin.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'bulletin/{bulletin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'bulletin.destroy',
        'uses' => 'App\\Http\\Controllers\\BulletinController@destroy',
        'controller' => 'App\\Http\\Controllers\\BulletinController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ReioUtHp8X6qxGr7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'downloadPDF2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\BulletinController@downloadPDF2',
        'controller' => 'App\\Http\\Controllers\\BulletinController@downloadPDF2',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ReioUtHp8X6qxGr7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchfromat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'searchfromat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\BulletinController@searchfromat',
        'controller' => 'App\\Http\\Controllers\\BulletinController@searchfromat',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchfromat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchtomat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'searchtomat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\BulletinController@searchtomat',
        'controller' => 'App\\Http\\Controllers\\BulletinController@searchtomat',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchtomat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cpteresultat.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cpteresultat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'cpteresultat.index',
        'uses' => 'App\\Http\\Controllers\\CpteResultController@index',
        'controller' => 'App\\Http\\Controllers\\CpteResultController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cpteresultat.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cpteresultat/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'cpteresultat.create',
        'uses' => 'App\\Http\\Controllers\\CpteResultController@create',
        'controller' => 'App\\Http\\Controllers\\CpteResultController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cpteresultat.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cpteresultat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'cpteresultat.store',
        'uses' => 'App\\Http\\Controllers\\CpteResultController@store',
        'controller' => 'App\\Http\\Controllers\\CpteResultController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cpteresultat.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cpteresultat/{cpteresultat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'cpteresultat.show',
        'uses' => 'App\\Http\\Controllers\\CpteResultController@show',
        'controller' => 'App\\Http\\Controllers\\CpteResultController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cpteresultat.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cpteresultat/{cpteresultat}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'cpteresultat.edit',
        'uses' => 'App\\Http\\Controllers\\CpteResultController@edit',
        'controller' => 'App\\Http\\Controllers\\CpteResultController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cpteresultat.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cpteresultat/{cpteresultat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'cpteresultat.update',
        'uses' => 'App\\Http\\Controllers\\CpteResultController@update',
        'controller' => 'App\\Http\\Controllers\\CpteResultController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cpteresultat.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cpteresultat/{cpteresultat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'cpteresultat.destroy',
        'uses' => 'App\\Http\\Controllers\\CpteResultController@destroy',
        'controller' => 'App\\Http\\Controllers\\CpteResultController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l9P2Gp1ljM6OiQd4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getcpteresultat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\CpteResultController@getcpteresultat',
        'controller' => 'App\\Http\\Controllers\\CpteResultController@getcpteresultat',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::l9P2Gp1ljM6OiQd4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dVarnTwRr45eIzJU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'downloadPDFcpteresultat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\CpteResultController@downloadPDFcpteresultat',
        'controller' => 'App\\Http\\Controllers\\CpteResultController@downloadPDFcpteresultat',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dVarnTwRr45eIzJU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bilan.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bilan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'bilan.index',
        'uses' => 'App\\Http\\Controllers\\BilanController@index',
        'controller' => 'App\\Http\\Controllers\\BilanController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bilan.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bilan/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'bilan.create',
        'uses' => 'App\\Http\\Controllers\\BilanController@create',
        'controller' => 'App\\Http\\Controllers\\BilanController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bilan.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'bilan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'bilan.store',
        'uses' => 'App\\Http\\Controllers\\BilanController@store',
        'controller' => 'App\\Http\\Controllers\\BilanController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bilan.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bilan/{bilan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'bilan.show',
        'uses' => 'App\\Http\\Controllers\\BilanController@show',
        'controller' => 'App\\Http\\Controllers\\BilanController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bilan.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bilan/{bilan}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'bilan.edit',
        'uses' => 'App\\Http\\Controllers\\BilanController@edit',
        'controller' => 'App\\Http\\Controllers\\BilanController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bilan.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'bilan/{bilan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'bilan.update',
        'uses' => 'App\\Http\\Controllers\\BilanController@update',
        'controller' => 'App\\Http\\Controllers\\BilanController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bilan.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'bilan/{bilan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'bilan.destroy',
        'uses' => 'App\\Http\\Controllers\\BilanController@destroy',
        'controller' => 'App\\Http\\Controllers\\BilanController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QvjTStdISZqZppry' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getbilan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\BilanController@getbilan',
        'controller' => 'App\\Http\\Controllers\\BilanController@getbilan',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QvjTStdISZqZppry',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uPGIphMgDwmFlEU2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'downloadPDFbilan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\BilanController@downloadPDFbilan',
        'controller' => 'App\\Http\\Controllers\\BilanController@downloadPDFbilan',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::uPGIphMgDwmFlEU2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ynCDUdVukn2nBGYr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'comptasalaire',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\SalaireController@comptasalaire',
        'controller' => 'App\\Http\\Controllers\\SalaireController@comptasalaire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ynCDUdVukn2nBGYr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i7jHGiFULV09zOyW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'comptasal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\SalaireController@comptasal',
        'controller' => 'App\\Http\\Controllers\\SalaireController@comptasal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::i7jHGiFULV09zOyW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7YVe1sendanl3eEi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'comptapatron',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\SalaireController@comptapatron',
        'controller' => 'App\\Http\\Controllers\\SalaireController@comptapatron',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7YVe1sendanl3eEi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EfnbVABCLZ04dl4s' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'comptapatronal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\SalaireController@comptapatronal',
        'controller' => 'App\\Http\\Controllers\\SalaireController@comptapatronal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EfnbVABCLZ04dl4s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'salaire.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'salaire',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'salaire.index',
        'uses' => 'App\\Http\\Controllers\\SalaireController@index',
        'controller' => 'App\\Http\\Controllers\\SalaireController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'salaire.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'salaire/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'salaire.create',
        'uses' => 'App\\Http\\Controllers\\SalaireController@create',
        'controller' => 'App\\Http\\Controllers\\SalaireController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'salaire.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'salaire',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'salaire.store',
        'uses' => 'App\\Http\\Controllers\\SalaireController@store',
        'controller' => 'App\\Http\\Controllers\\SalaireController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'salaire.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'salaire/{salaire}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'salaire.show',
        'uses' => 'App\\Http\\Controllers\\SalaireController@show',
        'controller' => 'App\\Http\\Controllers\\SalaireController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'salaire.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'salaire/{salaire}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'salaire.edit',
        'uses' => 'App\\Http\\Controllers\\SalaireController@edit',
        'controller' => 'App\\Http\\Controllers\\SalaireController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'salaire.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'salaire/{salaire}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'salaire.update',
        'uses' => 'App\\Http\\Controllers\\SalaireController@update',
        'controller' => 'App\\Http\\Controllers\\SalaireController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'salaire.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'salaire/{salaire}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'salaire.destroy',
        'uses' => 'App\\Http\\Controllers\\SalaireController@destroy',
        'controller' => 'App\\Http\\Controllers\\SalaireController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::poTs0d0YDPCFjh1O' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'searchsal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\SalaireController@searchsal',
        'controller' => 'App\\Http\\Controllers\\SalaireController@searchsal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::poTs0d0YDPCFjh1O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X6Hs7NBz4E4aCQls' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'downloadPDFsal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\SalaireController@downloadPDFsal',
        'controller' => 'App\\Http\\Controllers\\SalaireController@downloadPDFsal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::X6Hs7NBz4E4aCQls',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yQi0s58t8JxKrpnv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getsalaire',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\SalaireController@getsalaire',
        'controller' => 'App\\Http\\Controllers\\SalaireController@getsalaire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::yQi0s58t8JxKrpnv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchmat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'searchmat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\SalaireController@searchmat',
        'controller' => 'App\\Http\\Controllers\\SalaireController@searchmat',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchmat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'salbrutimp.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'salbrutimp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'salbrutimp.index',
        'uses' => 'App\\Http\\Controllers\\SalbrutimpController@index',
        'controller' => 'App\\Http\\Controllers\\SalbrutimpController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'salbrutimp.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'salbrutimp/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'salbrutimp.create',
        'uses' => 'App\\Http\\Controllers\\SalbrutimpController@create',
        'controller' => 'App\\Http\\Controllers\\SalbrutimpController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'salbrutimp.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'salbrutimp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'salbrutimp.store',
        'uses' => 'App\\Http\\Controllers\\SalbrutimpController@store',
        'controller' => 'App\\Http\\Controllers\\SalbrutimpController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'salbrutimp.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'salbrutimp/{salbrutimp}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'salbrutimp.show',
        'uses' => 'App\\Http\\Controllers\\SalbrutimpController@show',
        'controller' => 'App\\Http\\Controllers\\SalbrutimpController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'salbrutimp.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'salbrutimp/{salbrutimp}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'salbrutimp.edit',
        'uses' => 'App\\Http\\Controllers\\SalbrutimpController@edit',
        'controller' => 'App\\Http\\Controllers\\SalbrutimpController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'salbrutimp.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'salbrutimp/{salbrutimp}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'salbrutimp.update',
        'uses' => 'App\\Http\\Controllers\\SalbrutimpController@update',
        'controller' => 'App\\Http\\Controllers\\SalbrutimpController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'salbrutimp.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'salbrutimp/{salbrutimp}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'salbrutimp.destroy',
        'uses' => 'App\\Http\\Controllers\\SalbrutimpController@destroy',
        'controller' => 'App\\Http\\Controllers\\SalbrutimpController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hnRPFa9oBZiaX1ZT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\SalbrutimpController@search',
        'controller' => 'App\\Http\\Controllers\\SalbrutimpController@search',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hnRPFa9oBZiaX1ZT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2nNeoSa6ihYlpBog' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'downloadPDF',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\SalbrutimpController@downloadPDF',
        'controller' => 'App\\Http\\Controllers\\SalbrutimpController@downloadPDF',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2nNeoSa6ihYlpBog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cotsocpat.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cotsocpat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'cotsocpat.index',
        'uses' => 'App\\Http\\Controllers\\CotsocpatController@index',
        'controller' => 'App\\Http\\Controllers\\CotsocpatController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cotsocpat.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cotsocpat/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'cotsocpat.create',
        'uses' => 'App\\Http\\Controllers\\CotsocpatController@create',
        'controller' => 'App\\Http\\Controllers\\CotsocpatController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cotsocpat.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cotsocpat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'cotsocpat.store',
        'uses' => 'App\\Http\\Controllers\\CotsocpatController@store',
        'controller' => 'App\\Http\\Controllers\\CotsocpatController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cotsocpat.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cotsocpat/{cotsocpat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'cotsocpat.show',
        'uses' => 'App\\Http\\Controllers\\CotsocpatController@show',
        'controller' => 'App\\Http\\Controllers\\CotsocpatController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cotsocpat.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cotsocpat/{cotsocpat}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'cotsocpat.edit',
        'uses' => 'App\\Http\\Controllers\\CotsocpatController@edit',
        'controller' => 'App\\Http\\Controllers\\CotsocpatController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cotsocpat.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cotsocpat/{cotsocpat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'cotsocpat.update',
        'uses' => 'App\\Http\\Controllers\\CotsocpatController@update',
        'controller' => 'App\\Http\\Controllers\\CotsocpatController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cotsocpat.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cotsocpat/{cotsocpat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'cotsocpat.destroy',
        'uses' => 'App\\Http\\Controllers\\CotsocpatController@destroy',
        'controller' => 'App\\Http\\Controllers\\CotsocpatController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BgDoUnyIASKhphVd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getcotsocpat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\CotsocpatController@getcotsocpat',
        'controller' => 'App\\Http\\Controllers\\CotsocpatController@getcotsocpat',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BgDoUnyIASKhphVd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cotficpat.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cotficpat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'cotficpat.index',
        'uses' => 'App\\Http\\Controllers\\CotficpatController@index',
        'controller' => 'App\\Http\\Controllers\\CotficpatController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cotficpat.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cotficpat/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'cotficpat.create',
        'uses' => 'App\\Http\\Controllers\\CotficpatController@create',
        'controller' => 'App\\Http\\Controllers\\CotficpatController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cotficpat.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cotficpat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'cotficpat.store',
        'uses' => 'App\\Http\\Controllers\\CotficpatController@store',
        'controller' => 'App\\Http\\Controllers\\CotficpatController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cotficpat.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cotficpat/{cotficpat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'cotficpat.show',
        'uses' => 'App\\Http\\Controllers\\CotficpatController@show',
        'controller' => 'App\\Http\\Controllers\\CotficpatController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cotficpat.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cotficpat/{cotficpat}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'cotficpat.edit',
        'uses' => 'App\\Http\\Controllers\\CotficpatController@edit',
        'controller' => 'App\\Http\\Controllers\\CotficpatController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cotficpat.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cotficpat/{cotficpat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'cotficpat.update',
        'uses' => 'App\\Http\\Controllers\\CotficpatController@update',
        'controller' => 'App\\Http\\Controllers\\CotficpatController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cotficpat.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cotficpat/{cotficpat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'cotficpat.destroy',
        'uses' => 'App\\Http\\Controllers\\CotficpatController@destroy',
        'controller' => 'App\\Http\\Controllers\\CotficpatController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B3n3DosK0kX43caz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getcotficpat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\CotficpatController@getcotficpat',
        'controller' => 'App\\Http\\Controllers\\CotficpatController@getcotficpat',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::B3n3DosK0kX43caz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hcaUIvFd5amgSYLz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getsalbrutimp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\SalbrutimpController@getsalbrutimp',
        'controller' => 'App\\Http\\Controllers\\SalbrutimpController@getsalbrutimp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hcaUIvFd5amgSYLz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6H5gS6b171e55OoZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'search1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'CotsocempController@search1',
        'controller' => 'CotsocempController@search1',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6H5gS6b171e55OoZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NsGVKF29LG4suP60' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'search2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'CotficempController@search2',
        'controller' => 'CotficempController@search2',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NsGVKF29LG4suP60',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GZ3YN6ILUVWagznK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'search4',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\CotsocpatController@search4',
        'controller' => 'App\\Http\\Controllers\\CotsocpatController@search4',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::GZ3YN6ILUVWagznK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zpXLNLF5fnzfr4IW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'search3',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\CotficpatController@search3',
        'controller' => 'App\\Http\\Controllers\\CotficpatController@search3',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zpXLNLF5fnzfr4IW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'loadchart.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'loadchart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'loadchart.index',
        'uses' => 'App\\Http\\Controllers\\ChartController@index',
        'controller' => 'App\\Http\\Controllers\\ChartController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'loadchart.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'loadchart/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'loadchart.create',
        'uses' => 'App\\Http\\Controllers\\ChartController@create',
        'controller' => 'App\\Http\\Controllers\\ChartController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'loadchart.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'loadchart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'loadchart.store',
        'uses' => 'App\\Http\\Controllers\\ChartController@store',
        'controller' => 'App\\Http\\Controllers\\ChartController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'loadchart.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'loadchart/{loadchart}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'loadchart.show',
        'uses' => 'App\\Http\\Controllers\\ChartController@show',
        'controller' => 'App\\Http\\Controllers\\ChartController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'loadchart.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'loadchart/{loadchart}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'loadchart.edit',
        'uses' => 'App\\Http\\Controllers\\ChartController@edit',
        'controller' => 'App\\Http\\Controllers\\ChartController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'loadchart.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'loadchart/{loadchart}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'loadchart.update',
        'uses' => 'App\\Http\\Controllers\\ChartController@update',
        'controller' => 'App\\Http\\Controllers\\ChartController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'loadchart.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'loadchart/{loadchart}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'as' => 'loadchart.destroy',
        'uses' => 'App\\Http\\Controllers\\ChartController@destroy',
        'controller' => 'App\\Http\\Controllers\\ChartController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s4aN8NP7G4K6isL7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'loadchart1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\ChartController@loadchart1',
        'controller' => 'App\\Http\\Controllers\\ChartController@loadchart1',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::s4aN8NP7G4K6isL7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sg1b6tdveB2zRgV0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'loadchart2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'myhtmlminifier',
        ),
        'uses' => 'App\\Http\\Controllers\\ChartController@loadchart2',
        'controller' => 'App\\Http\\Controllers\\ChartController@loadchart2',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sg1b6tdveB2zRgV0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
