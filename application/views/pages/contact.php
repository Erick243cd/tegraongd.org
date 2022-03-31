<main>
<div class="slider-area">
    <div class="slider-height2 slider-bg4 hero-overly d-flex align-items-center" style="background-image:url(<?= base_url()?>assets/img/hero/contact.jpg);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 col-md-6">
                    <div class="hero-caption hero-caption2">
                        <h2>Contact</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="support-company-area section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<?php if ($this->session->flashdata('message_sent')):?>
        <div class="alert alert-success alert-dismissible" role="alert" id="connexion-failed">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" id="btn-close">
                <span aria-hidden="true">&times;</span>
            </button>
            <span><?php echo $this->session->flashdata('message_sent');?></span>
        </div>
<?php endif;?>
<h2 class="contact-title">Ecrivez-nous dans ce formulaire</h2>
</div>
<div class="col-lg-8">
<form class="form-contact contact_form" action="<?= base_url()?>contact/sendMailcontact" method="post">
<div class="row">
<div class="col-12">
<div class="form-group">
<textarea class="form-control w-100" name="message" id="message" cols="30" rows="5" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer le message'" placeholder=" Entrer le message" required="required"></textarea>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter votre nom'" placeholder="Entrer votre nom" required="required">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer votre email'" placeholder="Email" required="required">
</div>
</div>
<div class="col-12">
<div class="form-group">
<input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Object'" placeholder="Entrer Object">
</div>
</div>
</div>
<div class="form-group mt-3">
<button type="submit" class="genric-btn primary btn-fixed">Soumettre</button>
</div>
</form>

</div>
<div class="col-lg-3 offset-lg-1">
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-home"></i></span>
<div class="media-body">
<h3>Quartier Naviundu, Commune Annexe </h3>
<p>Av. De l'espérance, de Lubumbashi</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-tablet"></i></span>
<div class="media-body">
<h3>+243 900 009 992</h3>
<p>Du lundi au Samedi de 8 à 16h</p>
</div>
</div>

<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-tablet"></i></span>
<div class="media-body">
<h3>+243 819 964 251</h3>
<p>Du lundi au Samedi de 8 à 16h</p>
</div>
</div>

</div>
</div>
</main>
