<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 6.6 URL Server</title>
    </head>
    <body>
        <?php 
        if ((isset($_REQUEST['building'])) && (!empty($_REQUEST['building'])))
        {
           $buildingParam= $_REQUEST['building'];
        }
        else
        {
            exit ("'building' parameter is missing");
        }
        if ((isset($_REQUEST['room'])) && (!empty($_REQUEST['room'])))
        {
           $roomParam= $_REQUEST['room'];
        }
        else
        {
            exit ("'room' parameter is missing");
        }
        echo ("PHP server script: ".__FILE__);
        ?>
        <p>Received parameters on Server:</p>
        <p>test_url.php?week=<?=$buildingParam ?>&rom=<?=$roomParam ?></p>
    </body>
</html>