<?php 
    
	class pd{	
		public function __construct($__, $_=NULL){	
			if(!empty($_)) $this->$_($__);
			else $this->a($__);
		}
		static public function a($_){	
           echo "<pre>".print_r($_, true)."</pre>";
		}
	}