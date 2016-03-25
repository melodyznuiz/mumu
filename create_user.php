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
  
   foreach ($ARRAY as $value) {
   	echo $value['user'];
   	echo "<a href='remove.php?name=".$value['.id']."'>Kick</a>";
   	

   }



  

   $API->disconnect();

}

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Hook</title>
    </head>
    <body>
        <form method="post" action="edit_user.php">
            User : <input type="text" name="user" size="20" /><br>
            Pass : <input type="text" name="pass" size="20" /><br>
            E-Mail : <input type="text" name="e_mail" size="20" /><br>
            Personal-ID : <input type="text" name="p_id" size="20" /><br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>
