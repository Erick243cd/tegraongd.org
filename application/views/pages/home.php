<div class="slider-area">
    <div class="slider-height2 slider-bg4 hero-overly d-flex align-items-center" style="background-image:url(<?= base_url()?>assets/img/hero/news.jpg);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 col-md-6">
                    <div class="hero-caption hero-caption2">
                        <div class="section-tittle text-center mb-70">
                            <h3 class="text-white font-bold">Ensemble, construisons notre futur</h3>
                            <p>La recherche et la promotion du bien Etre général par la création des œuvres sociales...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="services-area1 section-padding mb-0 pb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-11">

                <div class="section-tittle text-center mb-60">
                    <h2>Dernières activités</h2>
                </div>
            </div>
        </div>
        <div class="services1-active">
            <?php foreach($posts as $row):?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties pb-30">
                    <div class="properties-card">
                        <div class="properties-img">
                            <a href="<?= base_url()?>activities/view/<?= $row->slug?>"><img style="height: 210px" src="<?= base_url()?>assets/img/blog/<?= $row->post_image?>" alt="Tegra Ongd"></a>
                        </div>
                        <div class="wrap-wrapper">
                            <div class="properties-caption">
                                <h3><a href="<?= base_url()?>activities/view/<?= $row->slug?>"><?= character_limiter($row->title,10)?></a></h3>
                                <p><?= character_limiter($row->body,100)?></p>
                            </div>
                            <div class="properties-footer d-flex justify-content-between align-items-center">
                                <div class="class-day">
                                    <a href="<?= base_url()?>activities/view/<?= $row->slug?>" class="genric-btn primary circle" title="Lire les détails">Détails</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        <?php endforeach;?>
        </div>
    </div>
</div>

<!-- Espace vidéo -->

<div class="our-services section-padding position-relative pt-5">
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-xl-7 col-lg-8 col-md-11">
                <div class="section-tittle text-center mb-70">
                    <h2>Orientation des activités</h2>
                    <p>Tegra Ongd oriente ses actvités dans les secteurs <br>ci-après : </p>               </div>
            </div>
        </div>
        <div class="row justify-content-between">
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-icon">
                            <img src="<?= base_url()?>assets/img/icon/sante.jpg" alt="Tegra Ongd" style="width: 100px; height: 100px; border-radius: 100%">
                        </div>
                        <div class="services-cap">
                            <h5><a href="<?= base_url()?>sante">La santé</a></h5>
                            <p>Une population active, en bonne santé est un préalable au développement économique, puisqu’elle consacre davantage de temps et d’énergie à utiliser ses ressources
                                naturelles... </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-icon">
                            <img src="<?= base_url()?>assets/img/icon/education.jpg" alt="Tegra Ongd" style="width: 100px; height: 100px; border-radius: 100%">
                        </div>
                        <div class="services-cap">
                            <h5><a href="<?= base_url()?>education">L'éducation</a></h5>
                            <p>L'éducation est un puissant agent de changement. Elle améliore la santé et les moyens
                                de subsistance, contribue à la stabilité sociale et stimule la croissance économique à long terme...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-icon">
                            <img src="<?= base_url()?>assets/img/icon/agroforesterie.jpg" alt="Tegra Ongd" style="width: 100px; height: 100px; border-radius: 100%">

                        </div>
                        <div class="services-cap">
                            <h5><a href="<?= base_url()?>agropastoral">L'agropastoral</a></h5>
                            <p>L'agriculture et l'élèvage sont des moyens les nécessaires pour la lutte contre l'insécurité alimentaire.</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

<div class="join-us-area section-padding pt-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-4 col-lg-5 col-md-10">
                <div class="joing-details">
                    <div class="section-tittle">
                        <h2>A propos de nous</h2>
                    </div>
                    <p><b>Tegra Ongd </b>est une Asbl de droit Congolais à caractère social,
                                Communautaire et de développement, crée le 20 Mai 2009 à Lubumbashi dans la Province
                                du Haut Katanga conformément à la loi n°004/2001 du 20 Juillet 2001
                                relative aux associations sans but lucratif et d’utilité publique.</p>
                    <a href="<?= base_url()?>about" class="genric-btn primary circle about-btn">Détails</a>
                </div>
            </div>
            <div class="offset-xl-1 col-xl-4 col-lg-4 col-md-7 col-sm-7">
                <div class="joning-img">
                    <img style="border-radius: 5px" src="<?= base_url()?>assets/img/gallery/joining3.jpg" alt="" class="w-100">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-5 col-sm-5">
                <div class="joning-img">
                    <img style="border-radius: 5px" src="<?= base_url()?>assets/img/gallery/joining4.jpg" alt="" class="w-100">
                </div>
            </div>
        </div>
    </div>
</div>


