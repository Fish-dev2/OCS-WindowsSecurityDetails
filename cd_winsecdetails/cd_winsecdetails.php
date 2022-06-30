<?php
###############################################################################
## OCSINVENTORY-NG
## Copyleft Léa DROGUET 2020
## Web : http://www.ocsinventory-ng.org
##
## This code is open source and may be copied and modified as long as the source
## code is always made freely available.
## Please refer to the General Public Licence http://www.gnu.org/ or Licence.txt
################################################################################


 /**
  * This file is used to build a table refering to the plugin and define its 
  * default columns as well as SQL request.
  */

if (AJAX) {
    parse_str($protectedPost['ocs']['0'], $params);
    $protectedPost += $params;
    ob_start();
    $ajax = true;
} else {
    $ajax = false;
}
## DONT CHANGE THIS ^^^^^^




// print a title for the table
print_item_header("Windows Security Details");








######NOCHANGEVVVV
if (!isset($protectedPost['SHOW'])) {
    $protectedPost['SHOW'] = 'NOSHOW';
}
######^^^^^^






// form details and tab options
$form_name = "winsecdetails";^





#########VVVVVV
$table_name = $form_name;
$tab_options = $protectedPost;
$tab_options['form_name'] = $form_name;
$tab_options['table_name'] = $table_name;
####NOCHANGE^^^^






echo open_form($form_name);
$list_fields = array(
                    'column 1' => 'COLUMN_1',
                    'AMEngineVersion' => 'AMEngineVersion',
                    'AMProductVersion' => 'AMProductVersion',
                    'AMRunningMode' => 'AMRunningMode',
                    'AMServiceEnabled' => 'AMServiceEnabled',
                    'AMServiceVersion' => 'AMServiceVersion',
                    'AntispywareEnabled' => 'AntispywareEnabled',
                    'AntispywareSignatureAge' => 'AntispywareSignatureAge',
                    'AntispywareSignatureLastUpdated' => 'AntispywareSignatureLastUpdated',
                    'AntispywareSignatureVersion' => 'AntispywareSignatureVersion',
                    'AntivirusEnabled' => 'AntivirusEnabled',
                    'AntivirusSignatureAge' => 'AntivirusSignatureAge',
                    'AntivirusSignatureLastUpdated' => 'AntivirusSignatureLastUpdated',
                    'AntivirusSignatureVersion' => 'AntivirusSignatureVersion',
                    'BehaviorMonitorEnabled' => 'BehaviorMonitorEnabled',
                    'IoavProtectionEnabled' => 'IoavProtectionEnabled',
                    'IsTamperProtected' => 'IsTamperProtected',
                    'NISEnabled' => 'NISEnabled',
                    'NISEngineVersion' => 'NISEngineVersion',
                    'NISSignatureAge' => 'NISSignatureAge',
                    'NISSignatureLastUpdated' => 'NISSignatureLastUpdated',
                    'NISSignatureVersion' => 'NISSignatureVersion',
                    'OnAccessProtectionEnabled' => 'OnAccessProtectionEnabled',
                    'RealTimeProtectionEnabled' => 'RealTimeProtectionEnabled',
                    'TamperProtectionSource' => 'TamperProtectionSource',
                );
// columns to include at any time and default columns






#NOCHANGE VVVVVVVV
$list_col_cant_del = $list_fields;
$default_fields = $list_fields;

// select columns for table display
$sql = prepare_sql_tab($list_fields);
$sql['SQL']  .= "FROM $table_name WHERE (hardware_id = $systemid)";

array_push($sql['ARG'], $systemid);
$tab_options['ARG_SQL'] = $sql['ARG'];
$tab_options['ARG_SQL_COUNT'] = $systemid;
ajaxtab_entete_fixe($list_fields, $default_fields, $tab_options, $list_col_cant_del);

echo close_form();


if ($ajax) {
    ob_end_clean();
    tab_req($list_fields, $default_fields, $list_col_cant_del, $sql['SQL'], $tab_options);
    ob_start();
}
?>