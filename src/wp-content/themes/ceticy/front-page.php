<?php get_header(); ?>
<main class="wp-block-group is-layout-flow wp-block-group-is-layout-flow">
    <section class="hero">
        <strong class="hero-title">Découvrez, Organisez & Profitez</strong>
        <p class="hero-legend">Ceticy vous permet de <strong>découvrir des restaurants et des bars qui vous ressemblent</strong> afin de les ajouter à votre liste de favoris. <strong>Partagez vos pépites</strong> à vos amis directement dans l’application et organisez votre sortie en toute simplicité.</p>

       <div class="cta-hero">
            <div class="wp-block-button primary chevron">
                <a class="wp-block-button__link wp-element-button">Rester à l'affût</a>
            </div>
            <div class="wp-block-button transparent">
                <a class="wp-block-button__link wp-element-button">Nous contacter</a>
            </div>
       </div>

        <div class="imgs-anim">
            <div class="img-anim img-middle">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hero-middle.png' ?>" alt="">
            </div>
            <div class="img-anim img-left">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hero-left.png' ?>" alt="">
            </div>
            <div class="img-anim img-right">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hero-right.png' ?>" alt="">
            </div>
        </div>
    </section>

    <section class="solution">
       <div class="img-solution">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/solution.png' ?>" alt="">
       </div>
        <p class="big">Les meilleurs <span class="primary">bars et restaurants</span> autour de toi</p>
        <p>T’en a marre d’aller toujours aux mêmes endroits ?</p>
        <p class="small">On a la solution pour toi ! <span class="grey">Télécharge notre application et découvre des lieux qui correspond parfaitement à tes attentes</span></p>
    </section>

    <section class="why">
        <p class="big">Pourquoi avoir créé Ceticy ?</p>
        <p class="small grey">Quelques constats nous on fait réfléchir pour trouver LA solution pour vos sorties aux restaurants / bars</p>
        <div class="why-cards">
        <div class="card card-1">
            <div class="small grey">Jusqu'à</div>
            <div class="number big">1 Heure</div>
            <div class="description small">pour décider d'un restaurant</div>
            <div class="primary">Réduction du temps de décision à 5/10min</div>
        </div>
        <div class="card card-2">
            <div class="small grey">Moyenne de</div>
            <div class="number big">16€</div>
            <div class="description small">de panier moyen par personne</div>
            <div class="primary">Augmentation du panier moyen de +25%</div>
        </div>
        <div class="card card-3">
            <div class="small grey">Environ</div>
            <div class="number big">42%</div>
            <div class="description small">préfèrent des restaurants avec un univers unique</div>
            <div class="primary">Des restaurants et bars avec un concept et une ambiance unique</div>
        </div>
        </div>
    </section>

    <!-- <section class="testimonial">
        <p class="big">Quelques mots de <span class="primary">l'équipe</span></p>
    </section> -->

    <!-- <section class="collapse">
        <p class="big">Plus besoin de chercher, <span class="primary">découvrez</span></p>
    </section> -->

    <section class="newsletter">
        <?php
        while (have_posts()) : the_post();
            get_template_part('template-parts/content', 'page');
        endwhile;
        ?>

        <div class="wpforms-form">
            <div class="small primary">Newsletter</div>
            <div class="big">Suivez toute notre actualité</div>
            <?php
                echo do_shortcode('[wpforms id="82"]');
            ?>
            <div class="small grey">En soumettant ta candidature, tu autorises Ceticy à stocker et à traiter tes informations personnelles afin que nous puissions te fournir le contenu que t’as demandé. Pour plus d’informations, n’hésite pas à consulter notre Politique de confidentialité.</div>
        </div>
        <div class="img-newsletter">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/newsletter.png' ?>" alt="">
        </div>
    </section>
</main>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        if (window.performance) {
            if (window.performance.navigation.type == 1) {
                window.scrollTo(0, 0);
            }
        }
    });
</script>

<?php get_footer(); ?>