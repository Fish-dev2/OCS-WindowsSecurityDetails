<?php
/**
 * The following functions are used by the extension engine to generate a new table
 * for the plugin / destroy it on removal.
 * #TODO THIS FILE
 */


/**
 * This function is called on installation and is used to 
 * create database schema for the plugin
 */
function extension_install_winsecdetails()
{
    $commonObject = new ExtensionCommon;

    $commonObject -> sqlQuery("DROP TABLE IF EXISTS `winsecdetails`");

    $commonObject -> sqlQuery(
        "CREATE TABLE winsecdetails (
        ID INTEGER NOT NULL AUTO_INCREMENT, 
        HARDWARE_ID INTEGER NOT NULL,
        AMEngineVersion VARCHAR(255) DEFAULT NULL,
        AMProductVersion VARCHAR(255) DEFAULT NULL,
        AMRunningMode VARCHAR(255) DEFAULT NULL,
        AMServiceEnabled VARCHAR(255) DEFAULT NULL,
        AMServiceVersion VARCHAR(255) DEFAULT NULL,
        AntispywareEnabled VARCHAR(255) DEFAULT NULL,
        AntispywareSignatureAge VARCHAR(255) DEFAULT NULL,
        AntispywareSignatureLastUpdated VARCHAR(255) DEFAULT NULL,
        AntispywareSignatureVersion VARCHAR(255) DEFAULT NULL,
        AntivirusEnabled VARCHAR(255) DEFAULT NULL,
        AntivirusSignatureAge VARCHAR(255) DEFAULT NULL,
        AntivirusSignatureLastUpdated VARCHAR(255) DEFAULT NULL,
        AntivirusSignatureVersion VARCHAR(255) DEFAULT NULL,
        BehaviorMonitorEnabled VARCHAR(255) DEFAULT NULL,
        IoavProtectionEnabled VARCHAR(255) DEFAULT NULL,
        IsTamperProtected VARCHAR(255) DEFAULT NULL,
        NISEnabled VARCHAR(255) DEFAULT NULL,
        NISEngineVersion VARCHAR(255) DEFAULT NULL,
        NISSignatureAge VARCHAR(255) DEFAULT NULL,
        NISSignatureLastUpdated VARCHAR(255) DEFAULT NULL,
        NISSignatureVersion VARCHAR(255) DEFAULT NULL,
        OnAccessProtectionEnabled VARCHAR(255) DEFAULT NULL,
        RealTimeProtectionEnabled VARCHAR(255) DEFAULT NULL,
        TamperProtectionSource VARCHAR(255) DEFAULT NULL,
        PRIMARY KEY (ID,HARDWARE_ID)) ENGINE=INNODB;"
    );
}

/**
 * This function is called on removal and is used to 
 * destroy database schema for the plugin
 */
function extension_delete_winsecdetails()
{
    $commonObject = new ExtensionCommon;
    $commonObject -> sqlQuery("DROP TABLE IF EXISTS `winsecdetails`");
}

/**
 * This function is called on plugin upgrade
 */
function extension_upgrade_winsecdetails()
{

}

?>