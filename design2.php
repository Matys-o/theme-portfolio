<?php
/*
Template Name: Design2
*/
get_header();
?>

<main class="design1-page">
    <!-- Section principale avec deux colonnes -->
    <section class="design1-content">
        <!-- Colonne des images -->
        <div class="design1-gallery">
            <div class="design1-images-container">
                <img src="<?php echo get_template_directory_uri(); ?>/design/porsche gt3rs edit.png" alt="Lauda Revenge">

            </div>
        </div>

        <!-- Colonne du texte avec effet sticky -->
        <div class="design1-description">
            <h1>Porsche GT3rs</h1>
            <p>

            Ce design présente une affiche de la Porsche 911 GT3RS. L'image de fond est générée par IA, tandis que le reste a été conçu sur Photoshop, avec des polices d’Adobe Fonts pour structurer les informations techniques et esthétiques du modèle.            </p>
        </div>
    </section>

    <!-- Section pour les designs similaires -->
    <section class="design1-related-designs">
        <h2>Voir d'autres designs</h2>
        <div class="design1-suggestions">
            <div class="design1-item">
                <img src="<?php echo get_template_directory_uri(); ?>/design/nike add 1.png" alt="Supra Design">
            </div>
            <div class="design1-item">
                <img src="<?php echo get_template_directory_uri(); ?>/design/kendrick works 1.png" alt="Kendrick Design">
            </div>
            <div class="design1-item">
                <img src="<?php echo get_template_directory_uri(); ?>/design/difference png.png" alt="720S Design">
            </div>
            <div class="design1-item">
                <img src="<?php echo get_template_directory_uri(); ?>/design/floating.png" alt="Floating Design">
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
