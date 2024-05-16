<?php get_header(); ?>

<?php
$img_middle_id = '';
$img_middle_query = new WP_Query( array(
    'post_type'      => 'attachment',
    'post_mime_type' => 'image',
    'post_status'    => 'inherit',
    'title'          => 'img-middle',
) );

if ( $img_middle_query->have_posts() ) {
    $img_middle_id = $img_middle_query->posts[0]->ID;
}

$img_left_id = '';
$img_left_query = new WP_Query( array(
    'post_type'      => 'attachment',
    'post_mime_type' => 'image',
    'post_status'    => 'inherit',
    'title'          => 'img-left',
) );

if ( $img_left_query->have_posts() ) {
    $img_left_id = $img_left_query->posts[0]->ID;
}

$img_right_id = '';
$img_right_query = new WP_Query( array(
    'post_type'      => 'attachment',
    'post_mime_type' => 'image',
    'post_status'    => 'inherit',
    'title'          => 'img-right',
) );

if ( $img_right_query->have_posts() ) {
    $img_right_id = $img_right_query->posts[0]->ID;
}

$img_solution_id = '';
$img_solution_query = new WP_Query( array(
    'post_type'      => 'attachment',
    'post_mime_type' => 'image',
    'post_status'    => 'inherit',
    'title'          => 'img-solution',
) );

if ( $img_solution_query->have_posts() ) {
    $img_solution_id = $img_solution_query->posts[0]->ID;
}
?>

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
            <?php if ( ! empty( $img_middle_id ) ) : ?>
                <div class="img-anim img-middle">
                    <?php echo wp_get_attachment_image( $img_middle_id, 'full' )?>
                </div>
            <?php endif; ?>
            <?php if ( ! empty( $img_left_id ) ) : ?>
                <div class="img-anim img-left">
                    <?php echo wp_get_attachment_image( $img_left_id, 'full' )?>
                </div>
            <?php endif; ?>
            <?php if ( ! empty( $img_right_id ) ) : ?>
                <div class="img-anim img-right">
                    <?php echo wp_get_attachment_image( $img_right_id, 'full' )?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="solution">
       <div class="img-solution">
            <?php if ( ! empty( $img_solution_id ) ) : ?>
                <?php echo wp_get_attachment_image( $img_solution_id, 'full' )?>
            <?php endif; ?>
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
            <div class="avantage">Réduction du temps de décision à 5/10min</div>
        </div>
        <div class="card card-2">
            <div class="small grey">Moyenne de</div>
            <div class="number big">16€</div>
            <div class="description small">de panier moyen par personne</div>
            <div class="avantage">Augmentation du panier moyen de +25%</div>
        </div>
        <div class="card card-3">
            <div class="small grey">Environ</div>
            <div class="number big">42%</div>
            <div class="description small">préfèrent des restaurants avec un univers unique</div>
            <div class="avantage">Des restaurants et bars avec un concept et une ambiance unique</div>
        </div>
        </div>
    </section>

    <section class="testimonial">
        <p class="big">Quelques mots de <span class="primary">l'équipe</span></p>
    </section>

    <section class="collapse">
        <p class="big">Plus besoin de chercher, <span class="primary">découvrez</span></p>
    </section>
</main>


<?php get_footer(); ?>