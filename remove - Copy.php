<?php

require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = false;

if ($API->connect('10.0.111.1', 'admin', '')) {

   //$API->write('/interface/getall');
	$name1 = $_GET ['name'];
	$pass = $_GET ['password'];
	$mail = $_GET ['email'];
	$comm = $_GET ['comment'];
	$API->write('/ip/hotspot/user/set',false);
	//$API->write('/ip/dns/static/remove', false);
     //$API->write("=.id=" . $name1, true);
	$API->write("=name=" . $name1, false);
	$API->write("=password=" . $pass, false);
	$API->write("=email" . $email, false);
	$API->write("=comment=" . $comm, true);
    

   $READ = $API->read(false);
   $ARRAY = $API->parseResponse($READ);

   //print_r($ARRAY);
   echo "<a href='create_user.php'>return</a>";


   $API->disconnect();

}

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Hook</title>
    </head>
    <body>
        <form method="post" action="edit.php">
            User : <input type="text" name="user" size="20" />$name1<br>
            Pass : <input type="text" name="pass" size="20" />$pass<br>
            E-Mail : <input type="text" name="e_mail" size="20" />$mail<br>
            Personal-ID : <input type="text" name="p_id" size="20" />$comm<br>
            <input type="submit" value="submit">
        </form>
        <a href='edit.php'>edit</a>
    </body>
</html>
