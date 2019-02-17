<?php
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
    use avi\Router;
    ini_set('max_execution_time', 500);
			
    ob_start();
    define('ROOT', dirname(__FILE__));
//define('ROOT', $_SERVER['DOCUMENT_ROOT']);
	include_once(ROOT.'/router/router.php');
	
	$router = new Router();

    $guide=array('flag'=>"-i",'naturally'=>1, 'map'=>null);
    $valve=0;   
    do{     
        $valve++;
        ob_clean();
        
        if($guide['flag']==="-i"){
            $guide=$router->run($guide['naturally'], $guide['map']);
            $valve--;
        }
        
        if($guide['flag']===true){
            ob_end_flush();
            return true;
        }         

    }while(!$valve);
    ob_clean();
    include_once(ROOT.'/dist/html/error.html');
    ob_end_flush();
?>