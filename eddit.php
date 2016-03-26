<?php

require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = true;

if ($API->connect('10.0.111.1', 'admin', '')) {


   //$API->write('/interface/getall');
	$nae2 = $_POST ['nae'];
  $na2 = $_POST ['user'];
  $pa2 = $_POST ['pass'];
  $em2 = $_POST ['e_mail'];
  $co2 = $_POST ['p_id'];
  //print ($na2);
	$API->write('/ip/hotspot/user/set',false);
	//$API->write('/ip/dns/static/remove', false);
  $API->write("=.id=" . $nae2,false);
  $API->write('=name='.$na2,false);
  $API->write('=password='.$pa2,false);
  $API->write('mail='.$em2,false);
  $API->write('comment='.$co2);

    

   $READ = $API->read(false);
   $ARRAY = $API->parseResponse($READ);

   //print_r($ARRAY);
   echo "<a href='edit.php'>return</a>";


   $API->disconnect();

}

?>