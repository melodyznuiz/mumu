<?php

require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = false;

if ($API->connect('10.0.111.1', 'admin', '')) {

   //$API->write('/interface/getall');
	$name1 = $_GET ['name'];
  //print ($name1);
	$API->write('/ip/hotspot/user/remove',false);
	//$API->write('/ip/dns/static/remove', false);
     //$API->write("=.id=" . $name1, true);
	$API->write("=.id=" . $name1, true);

    

   $READ = $API->read(false);
   $ARRAY = $API->parseResponse($READ);

   //print_r($ARRAY);
   echo "<a href='create_user.php'>return</a>";


   $API->disconnect();

}

?>
