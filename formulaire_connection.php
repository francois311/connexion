


<?php 
    if(isset($_POST['formlogin']))
    {
        extract($_POST);

        if(!empty($cpseudo) && !empty($cemail) && !empty($copasseword)) {
            $q = $db->prepare('SELECT * FROM user WHERE email = :email');
            $q->execute(['email' => $cemail]);
            $result = $q->fetch();
            if($result){
                // Le compte existe
                
                if (password_verify($copasseword, $result['passeword'])) {
                    echo"le compte a été trouve, connection en cours";
                } else {
                    echo"le mot de passe est incorect";
                }
            } else {
                echo "<div id='texte2'>Le compte portant l'email " . $cemail . " est introuvable</div>";
            }
        } else {
            echo "<div id='texte1'>Vous n'avez pas rempli tous les champs</div>";
        }
    }
?>

