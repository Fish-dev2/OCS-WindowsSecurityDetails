
$details = Get-MpComputerStatus

$xml = ""
$xml += "<WINSECDETAILS>`n"
$xml += "<AMENGINEVERSION>" + $details.AMEngineVersion + "</AMENGINEVERSION>"
$xml += "<AMPRODUCTVERSION>" + $details.AMProductVersion + "</AMPRODUCTVERSION>"
$xml += "<AMRUNNINGMODE>" + $details.AMRunningMode + "</AMRUNNINGMODE>"
$xml += "<AMSERVICEENABLED>" + $details.AMServiceEnabled + "</AMSERVICEENABLED>"
$xml += "<AMSERVICEVERSION>" + $details.AMServiceVersion + "</AMSERVICEVERSION>"
$xml += "<ANTISPYWAREENABLED>" + $details.AntispywareEnabled + "</ANTISPYWAREENABLED>"
$xml += "<ANTISPYWARESIGNATUREAGE>" + $details.AntispywareSignatureAge + "</ANTISPYWARESIGNATUREAGE>"
$xml += "<ANTISPYWARESIGNATURELASTUPDATED>" + $details.AntispywareSignatureLastUpdated + "</ANTISPYWARESIGNATURELASTUPDATED>"
$xml += "<ANTISPYWARESIGNATUREVERSION>" + $details.AntispywareSignatureVersion + "</ANTISPYWARESIGNATUREVERSION>"
$xml += "<ANTIVIRUSENABLED>" + $details.AntivirusEnabled + "</ANTIVIRUSENABLED>"
$xml += "<ANTIVIRUSSIGNATUREAGE>" + $details.AntivirusSignatureAge + "</ANTIVIRUSSIGNATUREAGE>"
$xml += "<ANTIVIRUSSIGNATURELASTUPDATED>" + $details.AntivirusSignatureLastUpdated + "</ANTIVIRUSSIGNATURELASTUPDATED>"      
$xml += "<ANTIVIRUSSIGNATUREVERSION>" + $details.AntivirusSignatureVersion + "</ANTIVIRUSSIGNATUREVERSION>"
$xml += "<BEHAVIORMONITORENABLED>" + $details.BehaviorMonitorEnabled + "</BEHAVIORMONITORENABLED>"
$xml += "<IOAVPROTECTIONENABLED>" + $details.IoavProtectionEnabled + "</IOAVPROTECTIONENABLED>"
$xml += "<ISTAMPERPROTECTED>" + $details.IsTamperProtected + "</ISTAMPERPROTECTED>"
$xml += "<NISENABLED>" + $details.NISEnabled + "</NISENABLED>"
$xml += "<NISENGINEVERSION>" + $details.NISEngineVersion + "</NISENGINEVERSION>"
$xml += "<NISSIGNATUREAGE>" + $details.NISSignatureAge + "</NISSIGNATUREAGE>"
$xml += "<NISSIGNATURELASTUPDATED>" + $details.NISSignatureLastUpdated + "</NISSIGNATURELASTUPDATED>"
$xml += "<NISSIGNATUREVERSION>" + $details.NISSignatureVersion + "</NISSIGNATUREVERSION>"
$xml += "<ONACCESSPROTECTIONENABLED>" + $details.OnAccessProtectionEnabled + "</ONACCESSPROTECTIONENABLED>"
$xml += "<REALTIMEPROTECTIONENABLED>" + $details.RealTimeProtectionEnabled + "</REALTIMEPROTECTIONENABLED>"
$xml += "<TAMPERPROTECTIONSOURCE>" + $details.TamperProtectionSource + "</TAMPERPROTECTIONSOURCE>"
$xml += "</WINSECDETAILS>`n"


[Console]::OutputEncoding = [System.Text.Encoding]::UTF8
[Console]::WriteLine($xml)
