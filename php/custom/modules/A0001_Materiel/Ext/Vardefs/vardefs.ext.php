<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2015-08-29 21:50:30
$dictionary["A0001_Materiel"]["fields"]["leads_a0001_materiel_1"] = array (
  'name' => 'leads_a0001_materiel_1',
  'type' => 'link',
  'relationship' => 'leads_a0001_materiel_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_A0001_MATERIEL_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_a0001_materiel_1leads_ida',
);
$dictionary["A0001_Materiel"]["fields"]["leads_a0001_materiel_1_name"] = array (
  'name' => 'leads_a0001_materiel_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_A0001_MATERIEL_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_a0001_materiel_1leads_ida',
  'link' => 'leads_a0001_materiel_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["A0001_Materiel"]["fields"]["leads_a0001_materiel_1leads_ida"] = array (
  'name' => 'leads_a0001_materiel_1leads_ida',
  'type' => 'link',
  'relationship' => 'leads_a0001_materiel_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LEADS_A0001_MATERIEL_1_FROM_A0001_MATERIEL_TITLE',
);


 // created: 2015-08-29 21:58:17
$dictionary['A0001_Materiel']['fields']['genre_c']['labelValue']='Genre';

 

 // created: 2015-08-29 21:58:26
$dictionary['A0001_Materiel']['fields']['marque_c']['labelValue']='Marque';

 

 // created: 2015-08-29 21:58:35
$dictionary['A0001_Materiel']['fields']['type_c']['labelValue']='Type';

 

 // created: 2015-08-29 21:58:47
$dictionary['A0001_Materiel']['fields']['fournisseur_c']['labelValue']='Fournisseur';

 

 // created: 2015-08-29 21:59:15
$dictionary['A0001_Materiel']['fields']['volume_mois_c']['labelValue']='Volume/ Mois';

 

 // created: 2015-08-29 21:59:51
$dictionary['A0001_Materiel']['fields']['installdate_c']['labelValue']='Date Installation';

 

 // created: 2015-08-29 22:01:20
$dictionary['A0001_Materiel']['fields']['vente_location_c']['labelValue']='Vente/Location';

 

 // created: 2015-08-29 22:02:17
$dictionary['A0001_Materiel']['fields']['duree_c']['labelValue']='Duree';

 

 // created: 2015-08-29 22:02:37
$dictionary['A0001_Materiel']['fields']['echeance_c']['labelValue']='Echeance';

 

 // created: 2015-08-29 22:02:52
$dictionary['A0001_Materiel']['fields']['commentaire_c']['labelValue']='Commentaire';

 
?>