<footer id="footer">
    <div class="container">
        <div class="row">
            
            <div class="col-md-4 col-sm-4">
                <div class="footer-info">
                    <div class="section-title">
                        <h2>Siège social</h2>
                    </div>
                    <address>
                        <p><i class="fa fa-map-marker"> </i> Yaoundé Biyem-assi lycée.
                            <br/>BP: 96
                        </p>
                    </address>
                    
                    <ul class="social-icon">
                        <li><a href="https://www.facebook.com/africapps/" class="fa fa-facebook-square"  attr="facebook icon"></a></li>
                        <li><a href="https://www.linkedin.com/company/africapps-digital-services/" class="fa fa-linkedin fa-fw"></a></li>
                        <li><a href="https://api.whatsapp.com/send?phone=237696609660" class="fa fa-whatsapp"></a></li>
						<li><a href="https://twitter.com/afric_apps" class="fa fa-twitter"></a></li>
                    </ul>
                    
                    <div class="copyright-text"> 
                        <p>Copyright &copy; 2020 Afric'Apps Digital Services</p>
                                            
                        <p>Design: Conçu par Gallus, élève Ing ENSP-Douala</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-4">
                <div class="footer-info">
                    <div class="section-title">
                        <h2>Nos contacts</h2>
                    </div>
                    <address>
                        <p><i class="fa fa-phone"></i> +237 6 9660 9660</p>
                        <p>
                            <i class="fa fa-envelope-o"></i>
                            <a href="mailto:contact@africappsdigital.com">contact@africappsdigital.com</a>
                        </p>
                        <p>
                            <i class="fa fa-envelope-o"></i>
                            <a href="mailto:assistance@africappsdigital.com">assistance@africappsdigital.com</a>
                        </p>

                    </address>
                    
                    <div class="footer_menu">
                        <h2>A propos de nous</h2>
                        <ul>
                            <li><a href="contact-details.php#entreprise">Notre entreprise</a></li>
                            <li><a href="contact-details.php#partenaires">Nos partenaires</a></li>
                            <li><a href="contact-details.php#offres">Nos offres d'emploi</a></li>
                            <li><a href="contact-details.php#condtions">Conditions &amp; termes d'utilisation </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-4">
                <div class="footer-info newsletter-form">
                    <div class="section-title">
                        <h2>Inscrivez vous à notre messagerie</h2>
                    </div>
                    <div>
                        <div class="form-group">
                            <form action="index.php#form-submit" method="post">
                                <input type="email" class="form-control" style="color : white" placeholder="Entrez votre adresse email" name="email" id="email"   required="required">
<!--                                <input type ="radio" id="" value="" selected = "selected"> <label for = "" >Inscription</label>-->
<!--                                <input type ="radio" id="" value=""> <label for = "" >Desinscription</label>-->
                                <input type="submit" class="form-control" name="inscrire" id="form-submit" value="S'inscrire">
                                <input type="submit" class="form-control" name="desinscrire" value="Se désinscrire">
                            </form>
                            
                            <!-- NEWS LETTERS -->
                            
                            <?php require_once 'models/footer-sql-newletters.php'; ?>
                            
                            <span><sup>*</sup> Notez s'il vous plait - nous ne spammons pas votre adresse email.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div id="footer_value" class="col-md-12 col-sm-12">
                        <p> <strong><sup>*</sup>Nos valeurs<sup>*</sup></strong>-- proximité - innovation - simplicité - expertise - écoute -   convivialité--
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>