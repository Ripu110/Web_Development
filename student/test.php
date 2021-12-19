<?php
namespace Google{
		Class Search {	 
		    public function query() {
		        return 'Searching Google';
		    }
		}
}
 
namespace Bing{
	Class Search {
	    public function query() {
	        return 'Searching Bing';
	    }
	}
}

namespace{

$obj=new Google\Search;

echo $obj->query();

}

 

?>
