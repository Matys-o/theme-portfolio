<?php
/*
Template Name: Design4
*/
get_header();
?>

<main class="design1-page">
    <!-- Section principale avec deux colonnes -->
    <section class="design1-content">
        <!-- Colonne des images -->
        <div class="design1-gallery">
            <div class="design1-images-container">
                <img src="<?php echo get_template_directory_uri(); ?>/design/AB6ED216-FF5A-4EF8-9505-62DBE702DA9D 1.png" alt="Lauda Revenge">
                
            </div>
        </div>

        <!-- Colonne du texte avec effet sticky -->
        <div class="design1-description">
            <h1>720S</h1>
            <p>
            Ce design présente une affiche de la McLaren 720S. La photo a été prise et intégrée directement dans le design, qui a ensuite été travaillé sur Photoshop. Plusieurs polices d’Adobe Fonts ont été utilisées pour structurer les informations techniques et donner une touche dynamique à l’affiche.        </div>
    </section>

    <!-- Section pour les designs similaires -->
    <section class="design1-related-designs">
        <h2>Voir d'autres designs</h2>
        <div class="design1-suggestions">
    <div class="design1-item">
        <img src="<?php echo get_template_directory_uri(); ?>/design/floating.png" alt="Floating Design">
    </div>
    <div class="design1-item">
        <img src="<?php echo get_template_directory_uri(); ?>/design/heliot work png.png" alt="Heliot Design">
    </div>
    <div class="design1-item">
        <img src="<?php echo get_template_directory_uri(); ?>/design/difference png.png" alt="Difference Design">
    </div>
    <div class="design1-item">
        <img src="<?php echo get_template_directory_uri(); ?>/design/toyota supra add 1.png" alt="Toyota Supra Design">
    </div>
</div>
    </section>
</main>


<?php get_footer(); ?>
