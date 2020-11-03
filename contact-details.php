<!DOCTYPE html>
<html lang="fr">
    <head>
        
        <title>Afric'Apps Digital Services</title>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
<!--        <link rel="stylesheet" href="css/owl.theme.default.min.css">-->
        
        <!-- MAIN STYLE CSS -->
        <link rel="stylesheet" href="css/main-style.css">
        <link rel="stylesheet" href="css/menu-deroulant.css">
        
        <!-- ICON ON TITLE -->
        <link href="images/logos.png" rel="icon">
        
    </head>
    
    <!-- BODY -->
    <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
                          
        <!-- CONNEXION TO DATABASE-->
        <?php require_once 'models/database.php'; ?>
                  
        <!-- MENU --> 
        <?php require_once 'vues/menu.php'; ?>
		
		<!--	CONTACT CONTENT	-->
		<?php require_once 'vues/contact-content.php'; ?>

        
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