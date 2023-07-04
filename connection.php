<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_connection.css" type="text/css">
</head>
<body>
<div id="message-erreur"><p>Désolé, ce site n'est pas disponible sur téléphones.</p></div>
<?php include 'include/database.php';
    global $db; 
?>
    <div class="rectangle1" id="rectangle1">
        
        <h1 id="h1">connectez vous a votre compte</h1>
        <form method="post" id="form2">
            <p><input type="cpseudo" name="cpseudo" id="cpseudo" placeholder="votre pseudo" required></p>
            <p><input type="cemail" name="cemail" id="cemail" placeholder="votre mot email" required></p>
            <p><input type="copasseword" name="copasseword" id="copasseword" placeholder="votre mot de passe" required></p>
            <p><input type="submit" name="formlogin" id="formlogin"></p>
        </form>
        <a id="texte3" href="index.php">Vous n'avez pas de compte ?</a>
    <div>
<?php include "include/formulaire_connection.php"; ?>
    
</body>
</html>