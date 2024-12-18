<?php
/*
Template Name: Design3
*/
get_header();
?>

<main class="design1-page">
    <!-- Section principale avec deux colonnes -->
    <section class="design1-content">
        <!-- Colonne des images -->
        <div class="design1-gallery">
            <div class="design1-images-container">
                <img src="<?php echo get_template_directory_uri(); ?>/design/toyota supra add 1.png" alt="Lauda Revenge">
                
            </div>
        </div>

        <!-- Colonne du texte avec effet sticky -->
        <div class="design1-description">
            <h1>Supra</h1>
            <p>
            Ce design met en avant la Toyota Supra avec une photo intégrée dans le visuel, travaillée ensuite sur Photoshop. Différentes polices d'Adobe Fonts ont été utilisées pour structurer les informations et créer un style percutant, renforçant l'identité de la voiture dans l'affiche.            </p>
        </div>
    </section>

    <!-- Section pour les designs similaires -->
    <section class="design1-related-designs">
        <h2>Voir d'autres designs</h2>
        <div class="design1-suggestions">
        <div class="design1-item">
        <img src="<?php echo get_template_directory_uri(); ?>/design/heliot work png.png" alt="Heliot Design">
    </div>
    <div class="design1-item">
        <img src="<?php echo get_template_directory_uri(); ?>/design/lauda revenge 1.png" alt="Lauda Revenge Design">
    </div>
    <div class="design1-item">
        <img src="<?php echo get_template_directory_uri(); ?>/design/floating.png" alt="Floating Design">
    </div>
    <div class="design1-item">
        <img src="<?php echo get_template_directory_uri(); ?>/design/toyota supra add 1.png" alt="Toyota Supra Design">
    </div>
</div>

    </section>
</main>


<?php get_footer(); ?>
