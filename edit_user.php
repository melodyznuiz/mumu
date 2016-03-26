<?php

require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = false;

if ($API->connect('10.0.111.1', 'admin', '')) {

    $name1 = $_POST ['user'];
    $password1 = $_POST ['pass'];
    $email1 = $_POST ['e_mail'];
    $id1 = $_POST ['p_id'];

    //$API->write('/ip/hotspot/user/print');

        //$READ1 = $API->read(false);
        //$ARRAY1 = $API->parseResponse($READ1);

        //print_r($ARRAY1);


    $API->write('/ip/hotspot/user/add',false);
     $API->write("=name=" . $name1, false);
     $API->write("=password=" . $password1, false);
     $API->write("=email=" . $email1, false);
     $API->write("=comment=" . $id1, true);
    
    

   $READ = $API->read(false);
   $ARRAY = $API->parseResponse($READ);
    
   if(!is_array($ARRAY)){
       echo "sucussful</br>";
       echo $_POST['user']."</br>";
       echo $_POST['pass']."</br>";
       echo $_POST['e_mail']."</br>";
       echo $_POST['p_id']."</br>";
       echo "<a href='create_user.php'>return</a>";


       //foreach ($ARRAY1 as $value) {
    //echo $value['name'];
    //echo "<a href='edit.php?name=".$value['.id']."'>edit</a>"."</br>";
        //}
   }else {
       echo "error</br>";
       echo "<a href='create_user.php'>return</a>";
   };

   $API->disconnect();

}

?>
