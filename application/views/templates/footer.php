<footer>
    <div class="footer-wrapper bg-dark">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-20">

                                <div class="footer-logo mb-35">
                                    <!--- <img src="<?=base_url()?>assets/img/logo/logo.png" alt="">--->
                                    <b><a class="text-white font-bold" href="<?=base_url()?>">Tegra ONGD</a></b>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Tegra Ongd est une Asbl de droit Congolais à caractère social, Communautaire et de développement, crée le 20 Mai 2009 à Lubumbashi dans la Province du Haut Katanga conformément à la loi n°004/2001 du 20 Juillet 2001 relative aux associations sans but lucratif et d’utilité publique.</p>
                                    </div>
                                </div>

                                <div class="footer-social">
                                    <a href="https://www.facebook.com/Tegra_Ongd-100251342178573/" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.youtube.com/channel/UCrIAudmIn7iWN2GcuD9BOhQ" target="_blank"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offset-xl-1 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Navigation</h4>
                                <ul>
                                    <li><a href="<?= base_url()?>">Accueil</a></li>
                                    <li><a href="<?= base_url()?>about">A propos</a></li>
                                    <li><a href="<?= base_url()?>activities/index">Activités</a></li>
                                    <li><a href="<?= base_url()?>inscription">Inscriptions</a></li>
                                    <li><a href="<?= base_url()?>contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Projets</h4>
                                <ul>
                                    <li><a href="#"></a></li>
                                    <li><a href="<?= base_url()?>education">Educatif</a></li>
                                    <li><a href="<?= base_url()?>sante">Sanitaire</a></li>
                                    <li><a href="<?= base_url()?>agropastoral">Agropastoral</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p>Copyright ©<?= date('Y')?> Tegra Ongd, Tous droits reservés</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="back-top" class="back-top">
    <a title="Revenir en de la page" href="#" class="back-top-a"><i class="fas fa-level-up-alt"></i></a>
</div>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="<?= base_url()?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="<?= base_url()?>assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?= base_url()?>assets/js/popper.min.js"></script>
<script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>

<script src="<?= base_url()?>assets/js/owl.carousel.min.js"></script>
<script src="<?= base_url()?>assets/js/slick.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery.slicknav.min.js"></script>

<script src="<?= base_url()?>assets/js/wow.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery.magnific-popup.js"></script>
<script src="<?= base_url()?>assets/js/jquery.nice-select.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery.counterup.min.js"></script>
<script src="<?= base_url()?>assets/js/waypoints.min.js"></script>
<script src="<?= base_url()?>assets/js/barfiller.js"></script>

<script src="<?= base_url()?>assets/js/contact.js"></script>
<script src="<?= base_url()?>assets/js/jquery.form.js"></script>
<script src="<?= base_url()?>assets/js/jquery.validate.min.js"></script>
<script src="<?= base_url()?>assets/js/mail-script.js"></script>
<script src="<?= base_url()?>assets/js/jquery.ajaxchimp.min.js"></script>

<script src="<?= base_url()?>assets/js/plugins.js"></script>
<script src="<?= base_url()?>assets/js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

<script>	// PWA And Services Worker
 if ('serviceWorker' in navigator) {
   window.addEventListener('load', () => {
     navigator.serviceWorker.register('service-worker.js')
       .then(registration => {
         console.log('Le Service Worker est enregistré', registration);
       })
       .catch(error => {
         console.error('L\'enregistrement ne s\'est pas bien passé :', error);
       });
   });
 }
</script>


</body>
</html>
