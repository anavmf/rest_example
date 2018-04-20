<?php
/* 
A domain Class to demonstrate RESTful web services
*/
require 'vendor/autoload.php';
use Google\Cloud\Storage\StorageClient;

Class Mobile {
		
	public function getAllMobile(){
		
		$storage = new StorageClient();

		$bucket = $storage->bucket('fcul-cc02-bucket');
		$object = $bucket->object('list_mobiles.txt');

		$string = $object->downloadAsString();
		return json_decode($string);
	}
}
?>