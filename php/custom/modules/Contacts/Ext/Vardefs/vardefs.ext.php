<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2015-08-29 21:50:43
$dictionary["Contact"]["fields"]["leads_contacts_1"] = array (
  'name' => 'leads_contacts_1',
  'type' => 'link',
  'relationship' => 'leads_contacts_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_CONTACTS_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_contacts_1leads_ida',
);
$dictionary["Contact"]["fields"]["leads_contacts_1_name"] = array (
  'name' => 'leads_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_CONTACTS_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_contacts_1leads_ida',
  'link' => 'leads_contacts_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Contact"]["fields"]["leads_contacts_1leads_ida"] = array (
  'name' => 'leads_contacts_1leads_ida',
  'type' => 'link',
  'relationship' => 'leads_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LEADS_CONTACTS_1_FROM_CONTACTS_TITLE',
);


 // created: 2015-08-29 21:51:31
$dictionary['Contact']['fields']['fonction_c']['labelValue']='Fonction';

 

 // created: 2015-08-29 21:51:43
$dictionary['Contact']['fields']['commentaire_c']['labelValue']='Commentaire';

 
?>