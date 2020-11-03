<!DOCTYPE html>
<html lang="fr">
    <head>
        
        <title>Africapps Digital Services</title>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
		
		<meta name="description" content="développement d'application web et mobile, ingénierie en réseau et télécommunication, livraison de matériels et consommables informatiques">
		
        <meta name="keywords" content="tourisme,social,education,santé,environnement,agriculture,pollution,service,informatique,application,web,africappsdigital,afric,mobile,web,service,informatique,réseaux,administration,sécurité,fibre,optique,apps,application,digital,pollution,education,yaounde,douala,cameroun,securite,innovation,siteweb,mobile,web">
		
		<meta name="author" content="africappsdigital">
		
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        
        <!-- Style CSS principal -->
        <link rel="stylesheet" href="css/main-style.css">
        <link rel="stylesheet" href="css/menu-deroulant.css">
        
        <!-- Icone sur le titre -->
        <link href="images/logos.png" rel="icon">
        
        <style type="text/css">
			/*	FAQ AREA SERVICES	*/
            #services_largeur{
                display: flex;
            }
        </style>
        
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
		<div class="hidden-xs">
			<?php require_once 'vues/home.php'; ?>        
		</div>
        
        <!-- FAQ AREA SERVICES -->
        <?php require_once 'vues/faq-area-services.php'; ?>
        
        <!-- TOURISM -->
                   
        
        
        <!-- EDUCATION -->
        
        
        
        <!-- COMMENTS -->
        
        
        
        <!-- CONTACT -->
        
        <?php require_once 'vues/contact.php'; ?>
        
        <!-- FOOTER -->
        
        <?php require_once 'vues/footer.php'; ?>
        
        <!-- SCRIPTS -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/custom.js"></script>
        
    </body>
</html>