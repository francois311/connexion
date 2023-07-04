
<html>
<link rel="stylesheet" href="style.css" type="text/css">

<?php 
   if(isset($_POST['formsend'])){
       extract($_POST);
       if(!empty($passeword) && !empty($cpasseword) && !empty($email) && !empty($pseudo)){
           if($passeword == $cpasseword){
               $options = [
                   'cost' => 12,
               ];
               $hashpass = password_hash($passeword, PASSWORD_BCRYPT, $options);
               include "include/database.php";
               global $db;
               $c = $db->prepare("SELECT email FROM user WHERE email = :email");
               $c->execute(['email' => $email]);
               $result = $c->rowcount();
               if($result == 0){
                   $q = $db->prepare("INSERT INTO user(pseudo,email,passeword) VALUES(:pseudo,:email,:passeword)");
                   $q->execute([
                        'pseudo' => $pseudo,
                       'email' => $email,
                       'passeword' => $hashpass
                       
                   ]);
                   header("Location: wait.html");
                exit();
                    
              
                   
               } else {
                echo '<div id="texte1">l\'adresse mail est déjà utilisée</div>';

               }
           } else {
            echo '<div id="texte2">le mot de passe n\'est pas le même</div>';

           }
       }
   }
   ?>

</html>