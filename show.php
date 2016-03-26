<?php 

require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = false;
$nae1 = $_GET ['nae'];
$na1 = $_GET ['na'];
$pa1 = $_GET ['pa'];
$em1 = $_GET ['em'];
$co1 = $_GET ['co'];

if ($API->connect('10.0.111.1', 'admin', '')) {

    $API->write('/ip/hotspot/user/print');

   $READ = $API->read(false);
   $ARRAY = $API->parseResponse($READ);
   
   $API->disconnect();

}

?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Hook</title>
    </head>
    <body>
        <form method="post" action="eddit.php">
        ID : <input type="text" name="nae" id="nae" size="20" value="<?php echo $nae1; ?>" /><br>
            User : <input type="text" name="user" id="user" size="20" value="<?php echo $na1; ?>" /><br>
            Pass : <input type="text" name="pass" id="pass" size="20" value="<?php echo $pa1; ?>" /><br>
            E-Mail : <input type="text" name="e_mail" id="e_mail" size="20" value="<?php echo $em1; ?>" /><br>
            Personal-ID : <input type="text" name="p_id" id="p_id" value="<?php echo $co1 ?>" size="20" /><br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>