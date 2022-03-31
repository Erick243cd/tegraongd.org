<main>
    <div class="slider-area">
        <div class="slider-height2 slider-bg4 hero-overly d-flex align-items-center"  style="background-image:url(<?= base_url()?>assets/img/hero/inscription.jpg);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="hero-caption hero-caption2">
                        <h3 class="text-white font-bold">Centre de formation </h3>
                        <p>Garantissez votre avenir professionnel et devenez la perle rare des Entreprises grâce à l’ensemble des formations que nous vous proposons.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="section-top-border">
<div class="container">
<h3 class="mb-30">Inscription aux formations</h3>
<div class="row">
    <?php if ($this->session->flashdata('message_sent')):?>
        <div class="alert alert-success alert-dismissible" role="alert" id="connexion-failed">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" id="btn-close">
                <span aria-hidden="true">&times;</span>
            </button>
            <span><?php echo $this->session->flashdata('message_sent');?></span>
        </div>
<?php endif;?>
<div class="col-lg-12">
<blockquote class="generic-blockquote">
“Notre Objectif est
l’Insertion socio professionnelle de la personne et  
l’avenir du travail.
Nous avons comme missions: L’orientation des Jeunes vers un Métier d’avenir approprié,  Accompagner les jeunes diplômés dans leur insertion professionnelle, Promouvoir l’Entrepreneuriat, Apporter l’assistance technique aux Partenaires.

Nos valeurs sont: Valorisation du développement individuel, Respect de la personne, Ethique & Confidentialité, Valorisation des échanges et proximité des acteurs, Authenticité et engagement dans le parcours d’accompagnement, Ponctualité, disponibilité, active, Réactivité, suivi, Performance
”
</blockquote>
</div>
<div class="col-lg-8">
    <h2 class="contact-title">Inscrivez-vous à nos formation</h2>
</div>
<div class="col-lg-10">
<form class="form-contact contact_form" action="<?= base_url()?>contact/sendMailinscription" method="post">
<div class="row">
<div class="col-sm-6 mb-3">
<select class="form-control" name="formation" required>
    <option selected disabled>Choisissez la formation</option>
    <option value="Ajustage & soudure ">Ajustage & soudure </option>
    <option value="Ressources humaines">Ressources humaines</option>
    <option value="Administration">Administration</option>
    <option value="Informatique">Informatique</option>
    <option value="Multimédias ">Multimédias </option>
    <option value="Logistique">Logistique </option>
    <option value="Techniques Coupe & Couture">Techniques Coupe & Couture</option>
    <option value="Mécanique auto & Générale ">Mécanique auto & Générale </option>
</select>
</div>

<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter votre nom complet'" placeholder="Entrer votre nom" required="required">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="telephone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre téléphone'" placeholder="Votre téléphone" required="required">
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer votre email'" placeholder="Email" required="required">
</div>
</div>


<div class="col-12">
<div class="form-group">
<input class="form-control" name="adresse" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre adresse'" placeholder="Votre adresse">
</div>
</div>
</div>
<div class="form-group mt-3">
<button type="submit" class="genric-btn primary btn-fixed">Envoyer</button>
</div>
</form>
</div>
</div>

    

</div>
</div>
</main>