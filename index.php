<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Africapps Digital Services</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
		
		<meta name="author" content="africappsdigital">
		
		<meta name="description" content="Application de tourisme, ingénierie en réseau et télécommunication, developpement d'application sociale">
		
		<meta name="keywords" content="tourisme,social,education,santé,environnement,agriculture,pollution,service,informatique,application,web,africappsdigital,afric,mobile,web,service,informatique,réseaux,administration,sécurité,fibre,optique,apps,application,digital,pollution,education,yaounde,douala,cameroun,securite,innovation,siteweb,mobile,web"> 
		
		
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
<!--        <link rel="stylesheet" href="css/owl.theme.default.min.css">-->
        
        <!-- Style CSS principal -->
                    
        <link rel="stylesheet" href="css/main-style.css">
        <link rel="stylesheet" href="css/menu-deroulant.css">
        
        <!-- Icone sur le titre -->
                    
        <link href="images/logos.png" rel="icon">
                    
<!--
        <style type="text/css">
            #tourism, #security
            {
                width: 90%;
            }
        </style>
-->
        
    </head>
        
    <!-- BODY -->
    <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
        
        <!-- PRE LOADER -->
        <?php // require_once 'vues/preloader.html'; //inclure la portion de texte preloader.?>
                
        <!-- CONNEXION TO DATABASE -->
        <?php require_once 'models/database.php'; ?>
        
        <!-- MENU -->
        <?php require_once 'vues/menu.php'; ?>
        
        <!-- HOME -->                
			<?php require_once 'vues/home.php'; ?>

        <!-- FEATURE -->
        <?php require_once 'vues/feature.php'; ?>
        
        <!-- CONTACT -->
        
        <?php require_once 'vues/contact.php'; ?>
        
        <!-- FOOTER -->
        
        <?php require_once 'vues/footer.php'; ?>
        
        <!-- SCRIPTS -->
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
<!--        <script src="js/smoothscroll.js"></script>-->
        <script src="js/custom.js"></script>
        
    </body>
</html>