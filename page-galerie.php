<?php
/*
Template Name: Galerie
*/
get_header();
?>

<main class="galerie-page">
    <!-- Section Titre Principal -->
    <section class="galerie-title">
        <h1>Les <span class="highlight">galeries</span></h1>
    </section>

    <!-- Section Styles de Photographie -->
    <section class="photo-styles">
        <div class="style-item">
            <a href="<?php echo site_url('Moderne'); ?>"> <!-- Lien vers la page Moderne -->
                <img src="<?php echo get_template_directory_uri(); ?>/photo/voitures 23_07-288.jpg" alt="Moderne">
                <div class="style-text">
                    <h2>Moderne</h2>
                    <p>Le style photo moderne est minimaliste, épuré, et utilise subtilement la lumière naturelle.</p>
                </div>
            </a>
        </div>

        <div class="style-item">
            <a href="<?php echo site_url('Stylise'); ?>"> <!-- Lien vers la page Stylisé -->
                <img src="<?php echo get_template_directory_uri(); ?>/photo/voitures 23_07-279.jpg" alt="Stylisé">
                <div class="style-text">
                    <h2>Stylisé</h2>
                    <p>Le style photo stylisé se caractérise par des effets marqués, des couleurs vives, et une retouche créative pour un rendu unique et expressif.</p>
                </div>
            </a>
        </div>

        <div class="style-item">
            <a href="<?php echo site_url('Vintage'); ?>"> <!-- Lien vers la page Vintage -->
                <img src="<?php echo get_template_directory_uri(); ?>/photo/voitures 23_07-189.jpg" alt="Vintage">
                <div class="style-text">
                    <h2>Vintage</h2>
                    <p>Le style photo vintage recrée l'esthétique des photos anciennes avec des teintes passées, des tons chauds, et des effets comme le grain ou le vignetage, évoquant une nostalgie du passé.</p>
                </div>
            </a>
        </div>
    </section>

    <!-- Section Marques -->
    <section class="car-brands">
        <h2>Les <span class="highlight">marques</span></h2>
        <div class="brands-grid">
        <div class="brand-item">
    <a href="<?php echo site_url('lambo'); ?>"> <!-- Lien vers la page Lambo -->
        <img src="<?php echo get_template_directory_uri(); ?>/photo/car-logo/voitures 23_07-350.jpg" alt="Lamborghini">
    </a>
</div>

<div class="brand-item">
    <a href="<?php echo site_url('Ferrari'); ?>"> <!-- Lien vers la page Ferrari -->
        <img src="<?php echo get_template_directory_uri(); ?>/photo/car-logo/voitures 23_07-356.jpg" alt="Ferrari">
    </a>
</div>

<div class="brand-item">
    <a href="<?php echo site_url('BMW'); ?>"> <!-- Lien vers la page BMW -->
        <img src="<?php echo get_template_directory_uri(); ?>/photo/car-logo/voitures 23_07-354.jpg" alt="BMW">
    </a>
</div>

<div class="brand-item">
    <a href="<?php echo site_url('Porsche'); ?>"> <!-- Lien vers la page Porsche -->
        <img src="<?php echo get_template_directory_uri(); ?>/photo/car-logo/voitures 23_07-355.jpg" alt="Porsche">
    </a>
</div>
<div class="brand-item">
    <a href="<?php echo site_url('Audi'); ?>"> <!-- Lien vers la page Audi -->
        <img src="<?php echo get_template_directory_uri(); ?>/photo/car-logo/voitures 23_07-357.jpg" alt="Audi">
    </a>
</div>

            <div class="brand-item">
            <a href="<?php echo site_url('Autres modeles'); ?>"> <!-- Lien vers la page Autres modèles -->
        <img src="<?php echo get_template_directory_uri(); ?>/photo/car-logo/voitures 23_07-358.jpg" alt="Autres modèles">
    </a>
                <span class="brand-label">Autres modèles</span>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
