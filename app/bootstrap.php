<?php 
	
	require_once 'config.php';

	spl_autoload_register(function($className){
    	require_once 'libraries/' . $className . '.php';
  	});

  	$init = new Core();

?>