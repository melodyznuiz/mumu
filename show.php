<?php

$na1 = $_GET ['na'];
$pa1 = $_GET ['pa'];
$em1 = $_GET ['em'];
$co1 = $_GET ['co'];



?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Hook</title>
    </head>
    <body>
        <form method="post" action="edit.php">
            User : <input type="text" name="user" size="20" value="<?php echo $na1; ?>" /><br>
            Pass : <input type="text" name="pass" size="20" value="<?php echo $pa1; ?>" /><br>
            E-Mail : <input type="text" name="e_mail" size="20" value="<?php echo $em1; ?>" /><br>
            Personal-ID : <input type="text" name="p_id" value="<?php echo $co1 ?>" size="20" /><br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>