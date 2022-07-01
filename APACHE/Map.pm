#TODO THIS FULL FILE


package Apache::Ocsinventory::Plugins::Winsecdetails::Map;
 
use strict;
 
use Apache::Ocsinventory::Map;
#Plugin UPTIME
$DATA_MAP{winsecdetails} = {
	mask => 0,
		multi => 1,
		auto => 1,
		delOnReplace => 1,
		sortBy => 'ID',
		writeDiff => 0,
		cache => 0,
		fields => {
            AMEngineVersion => {},
            AMProductVersion => {},
            AMRunningMode => {},
            AMServiceEnabled => {},
            AMServiceVersion => {},
            AntispywareEnabled => {},
            AntispywareSignatureAge => {},
            AntispywareSignatureLastUpdated => {},
            AntispywareSignatureVersion => {},
            AntivirusEnabled => {},
            AntivirusSignatureAge => {},
            AntivirusSignatureLastUpdated => {},
            AntivirusSignatureVersion => {},
            BehaviorMonitorEnabled => {},
            IoavProtectionEnabled => {},
            IsTamperProtected => {},
            NISEnabled => {},
            NISEngineVersion => {},
            NISSignatureAge => {},
            NISSignatureLastUpdated => {},
            NISSignatureVersion => {},
            OnAccessProtectionEnabled => {},
            RealTimeProtectionEnabled => {},
            TamperProtectionSource => {}
	    }
};
1;