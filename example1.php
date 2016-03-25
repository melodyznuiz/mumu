<?php

require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = false;

if ($API->connect('10.0.111.1', 'admin', '')) {

   //$API->write('/interface/getall');
	$API->write('/ip/hotspot/active/print');



   $READ = $API->read(false);
   $ARRAY = $API->parseResponse($READ);

   //print_r($ARRAY);
   echo $ARRAY[0]['user'];
   echo "<a href='remove.php'>Kick</a>";

   $API->disconnect();

}

?>
