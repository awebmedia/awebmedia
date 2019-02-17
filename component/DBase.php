<?php   namespace AVi\Dbase;

	class customPDO extends \PDO {
		function __construct($control){
			if(!$control){header('Location: ../');exit();}
			try{
				parent::__construct('mysql:host=localhost;dbname=name','user', 'pass');
				$this->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
				//$this->setAttribute(\PDO::ATTR_ORACLE_NULLS, \PDO::NULL_TO_STRING);
				$this->exec('SET NAMES "utf8"');
			}catch(\PDOException $e){
				header('Location: ../');exit();
			}
		}
		public function qeuryCustom($description=0,$SQL){
			try{			
				$A=$this->prepare($SQL);
				if(!empty($description)){
					foreach($description as $key=>$value){
						if($value['type']!==gettype($value['value'])){
							exit('#');
						}else{							
							$A->bindValue($value['placeholder'],$value['value']);							
						}
					}
				}
				$A->execute();
				$A->setFetchMode(PDO::FETCH_ASSOC);
				return $A;
			}catch (PDOException $e) {
				echo 'неудача: ' . $e->getMessage();
			}
		}
	}