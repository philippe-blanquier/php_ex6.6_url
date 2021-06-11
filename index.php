<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 6.6 URL Client</title>
    </head>
    <body >
        <!--
            Faire une page index.php. 
            Tester sur cette page que tous les paramètres de cette URL existent  
            et les afficher : index.php?building=12&room=101
        -->
        <form action='test_url.php' methode='get'>
            <label for='building'>Building :</label>
			<input type='integer' name='building' placeholder='12'>
            <label for='room'>Room :</label>
			<input type='integer' name='room' placeholder='101'>
            <input type='submit' value='OK'>
        </form>
    </body>
</html>