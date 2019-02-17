<?php   namespace AVi;

	class Router{		
		private $_routes;	
		private $_started;
		
		public function __construct(){			
			$_ = include(ROOT.'/router/route.php');
			$this -> _routes = $_[0];		
			$this -> _started = $_[1];		
		}
		private function getLaw(){            
            $this_rout = mb_strtolower(trim($_GET['route'], '/'));
            foreach($this -> _routes as $mask => $law){
                if(preg_match("~".$mask."~i", $this_rout)){
                    if($law['value']){
                        unset($_GET['route']);                        
                        if($law['ex']){
                            $tmp=explode("/", $this_rout, 2);
                            $law['milk'] = array_merge(
								array(
									'ex' => array(
										'_r' => $tmp[0],
										'_a' => explode("/", $tmp[1]),
										'_l' => explode("/", $tmp[1], $law['ex']+1),
									),
									'get' => $_GET,
									'xss' => $law["xss"],
									'post' => $_POST
								),
								$_GET,
								$_POST,
								$law["xss"]
							);
                        }else{
                            $law['milk'] = array_merge(
								array(
									'get' => $_GET,
									'xss' => $law["xss"],
									'post' => $_POST
								),
								$_GET,
								$_POST,
								$law["xss"]
							);
                        }						
                    }else{
						 $law['milk'] = array_merge(
								array(
									'xss' => $law["xss"],
								),
								$law["xss"]
							);
					}
					$law['milk']['_p'] = $this_rout;
                    $law["_P"] = $this_rout;
                    return $law;
                }
            }
            return array(
                'controler' => 'Index',
                'action' => 'NotFound'
            );
        }
		
		public function run($naturally, $law=null){	
            if($naturally)
                $law = $this->getLaw();
/*
			include_once( ROOT.'/controlers/AutorisationControl.php');			
			$controler = new Control\Autorisation\AutorisationControl();
			$result = $controler -> actionCheckAutorisation($law, $this -> _started);
*/            
			$result = true;
            
//			var_dump($law);
//            exit();
			if($result){
                include_once(ROOT.'/controlers/'.$law['controler'].'Control.php');
				$controler = 'AVi\Control\\'.$law['controler'].'\\'.$law['controler']."Control";			
				$action = "action".$law['action'];
                                
				$controler = new $controler;			
				$guide=$controler -> $action($law['milk']);
				return array('flag'=>true);
			}else{				
				return array('flag'=>false);
			}            
		}		
	}