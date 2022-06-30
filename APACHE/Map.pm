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
		sortBy => 'AUOPTIONS',
		writeDiff => 0,
		cache => 0,
		fields => {
            COLUMN_1 => {},
            COLUMN_2 => {}
	    }
};
1;