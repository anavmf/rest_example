<?php
require_once("MobileRestHandler.php");
		
/*
controls the RESTful services
URL mapping
*/

// to handle REST Url /mobile/list/
$mobileRestHandler = new MobileRestHandler();
$mobileRestHandler->getAllMobiles();

?>
