<?php 
    namespace AVi\Control\Index;
    use AVi\Model\Index\IndexModel;
	include(ROOT.'/models/IndexModel.php');

	class IndexControl{		
        public function actionHome($param){            
            $_p = explode("/", $param["_p"], 1);
			$_p = $_p[0];            
			switch($param["_p"]){
				case '': include_once(ROOT.'/views/index.php'); break;
				case 'about': include_once(ROOT.'/views/about.php'); break;
				case 'calculation': include_once(ROOT.'/views/calculation.php'); break;
				default: include_once(ROOT.'/dist/html/notfound.html');					
			}
			return array('flag'=>true);
		}
        public function actionServiceCalc($param){	            
            $model = new IndexModel();
            $result = $model -> sendMail($param);
            echo json_encode($result);                    
            return array('flag'=>true);
		}
	}