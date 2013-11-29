<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'CRM_Emailadressenleden_Form_Report_EmailadressenLedenEvent',
    'entity' => 'ReportTemplate',
    'params' => 
    array (
      'version' => 3,
      'label' => 'E-mailadressen van leden gebasseerd op aanmelding voor evenement',
      'description' => 'Lijst met e-mailadressen van leden gebasseerd op aanmelding voor evenement',
      'class_name' => 'CRM_Emailadressenleden_Form_Report_EmailadressenLedenEvent',
      'report_url' => 'be.vkw.emailadressenleden/emailadressenledenevent',
      'component' => 'CiviMember',
    ),
  ),
);