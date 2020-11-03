<?php
    if (!empty($_POST['email']))
    {
        // VERIFIE LA VALIDITE DE L'EMAIL
        if(preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $_POST['email']))
        {
            $_POST['email'] = htmlspecialchars($_POST['email']);
            
            $reponses = $bdd -> prepare ('SELECT id FROM users WHERE email = :email ');
            
            $reponses -> execute(array('email' => $_POST['email']));
                
            // CHECK IF VALUES EXISTS IN DATABASE
            
            $emailExist = $reponses-> fetch();
                
            // INSCRIPTION 
            
            if(!empty($_POST['inscrire']))
            {
                if(!$emailExist)
                {
                    $requete = $bdd -> prepare  ('INSERT INTO users(email,date_inscription) VALUES(:email,:date_inscription)');
                    
                    $requete -> execute (array('email' => htmlspecialchars($_POST['email']),'date_inscription' => date('y/m/d h:i:s')));
                    ?>

                    <div>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success">Inscription réussie </li>
                        </ul>
                    </div>
                    <?php
                    // ENVOIE DE MAIL
//					$to      = htmlspecialchars($_POST['email']);
//					$subject = 'Inscription';
//					$message = 'inscription reussi avec succes !';
//					$headers = 'From: '. htmlspecialchars($_POST['email']) . "\r\n" .
//						'Reply-To: noahgallusfgi@gmail.com' . "\r\n" .
//						'X-Mailer: PHP/' . phpversion();
//
//					mail($to, $subject, $message, $headers);
                    //FIN ENVOIE MAIL
                }
				// SINON DESINSCRIPTION
                else
                {
                    ?>
                    <div>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-warning">Vous êtes déjà inscrit !</li>
                        </ul>
                    </div>
                    <?php
                }
                
            }elseif(!empty($_POST['desinscrire']))
            {
                if($emailExist)
                {
                    $requete = $bdd -> prepare  ('DELETE FROM users WHERE email = :email');
                    
                    $requete -> execute (array('email' => htmlspecialchars($_POST['email'])));
                    ?>

                    <div>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success">Désinscription réussie </li>
                        </ul>
                    </div>
                    <?php
                }
                else
                {
                    ?>
                    <div>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-warning">Vous êtes déjà désinscrit ou pas encore inscrit !</li>
                        </ul>
                    </div>
                    <?php
                }
            }

        }
        else
        {
            ?>
            <div>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-danger">Format incorrect de l'adresse email !</li>
                </ul>
            </div>
            <?php
        }
    }
                            
?>
