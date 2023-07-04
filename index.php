<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css" type="text/css">

    <title>creation de compte</title>

</head>

<body>
    <div id="message-erreur"><p>Désolé, ce site n'est pas disponible sur téléphones.</p></div>  
    <div class="rectangle0" id="rectangle0">
        <h1 id="h1">Inscrivez-vous !</h1>
        
        <form method="post" id="form">
            <p><input type="pseudo" name="pseudo" id="pseudo" placeholder="votre pseudo" required></p>
            <p><input type="email" name="email" id="email" placeholder="votre mot email" required></p>
            <p><input type="passeword" name="passeword" id="passeword" placeholder="votre mot de passe" required></p>
            <p><input type="cpasseword" name="cpasseword" id="cpasseword" placeholder="confirmer votre mot de passe" required></p>
            <p><input type="submit" name="formsend" id="formsend"></p>
        </form>
        <a id="texte3" href="connection.php" >Vous avez déjà un compte ?</a>
        <div class="rectangle" id="rectangle"></div>
        <?php include "include/formulaire_creation.php"?>
 
    </div>
</body>

</html>