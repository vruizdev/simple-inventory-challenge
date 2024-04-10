<?php
    #Archivo para la manipulación de sesiones, utilizo require, para indicarle que debe cargarlo solamente la primera vez que visite la pagina.
    require "./includes/controllers/session.php" 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple inventory challenge</title>
    <?php include "./includes/templates/styles.php" ?>
</head>
<body>
    <?php
        if (!isset($_GET['view']) || $_GET['view'] == '') {
            $_GET['view'] = 'login';
        }

        if (is_file("./views/".$_GET['view'].".php") && $_GET['view'] != 'login' && $_GET['view'] != 'error_page') {
            include "./includes/templates/navbar.php";
            include "./views/".$_GET['view'].".php";
            include "./includes/templates/scripts.php";
            
        } else {

            if ($_GET['view'] == 'login') {
                include "./views/login.php";
            } else {
                include "./views/error_page.php";
            }
        }
    
    ?>
</body>
</html>