<?php
/*
Template Name: Design5
*/
get_header();
?>

<main class="design1-page">
    <!-- Section principale avec deux colonnes -->
    <section class="design1-content">
        <!-- Colonne des images -->
        <div class="design1-gallery">
            <div class="design1-images-container">
                <img src="<?php echo get_template_directory_uri(); ?>/design/difference png.png" alt="Lauda Revenge">
                
            </div>
        </div>

        <!-- Colonne du texte avec effet sticky -->
        <div class="design1-description">
            <h1>Same difference</h1>
            <p>
            Ce design utilise une photographie expressive, travaillée sur Photoshop pour accentuer le contraste et mettre en avant le message "Same difference". La typographie simple et percutante, provenant d’Adobe Fonts, renforce l’impact visuel et souligne le concept d’individualité et de similarité dans la diversité.   </section>
</p>
    </div>
    <!-- Section pour les designs similaires -->
    <section class="design1-related-designs">
        <h2>Voir d'autres designs</h2>
        <div class="design1-suggestions">
    <div class="design1-item">
        <img src="<?php echo get_template_directory_uri(); ?>/design/toyota supra add 1.png" alt="Toyota Supra Design">
    </div>
    <div class="design1-item">
        <img src="<?php echo get_template_directory_uri(); ?>/design/nike add 1.png" alt="Nike Add Design">
    </div>
    <div class="design1-item">
        <img src="<?php echo get_template_directory_uri(); ?>/design/lauda revenge 1.png" alt="Lauda Revenge Design">
    </div>
    <div class="design1-item">
        <img src="<?php echo get_template_directory_uri(); ?>/design/floating.png" alt="Floating Design">
    </div>
</div>

    </section>
</main>


<?php get_footer(); ?>
