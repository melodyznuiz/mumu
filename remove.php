<?php

require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = true;

if ($API->connect('10.0.111.1', 'admin', '')) {

   //$API->write('/interface/getall');
	$name1 = $_GET ['name'];
	$API->write('/ip/hotspot/active/remove',false);
	//$API->write('/ip/dns/static/remove', false);
     $API->write("=.id=" . $name1, true);
    

   $READ = $API->read(false);
   $ARRAY = $API->parseResponse($READ);

   //print_r($ARRAY);
   echo "Kick Complete";
   echo "<a href='showuser.php'>return</a>";


   $API->disconnect();

}

?>