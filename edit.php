<?php

require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = false;

if ($API->connect('10.0.111.1', 'admin', '')) {

   //$API->write('/interface/getall');
  $API->write('/ip/hotspot/user/print');
  



   $READ = $API->read(false);
   $ARRAY = $API->parseResponse($READ);
   
   //print_r($ARRAY);
  
   foreach ($ARRAY as $key=>$value ) {
    
    if ($key<1) continue;
    echo "User=".$value['name']."&nbsp";
    echo "password=".$value['password']."&nbsp";
    echo "email=".$value['email']."&nbsp";
    echo "personal id=".$value['comment']."&nbsp";
    echo "<a href='show.php?name=".$value['.id']."&na=".$value['name']."&pa=".$value['password']."&em=".$value['email']."&co=".$value['comment']."'>edit</a>"."</br>";
    

   }
   echo "<a href='create_user.php'>return</a>";
  

   $API->disconnect();

}

?>
