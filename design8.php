<?php
/*
Template Name: Design8
*/
get_header();
?>

<main class="design1-page">
    <!-- Section principale avec deux colonnes -->
    <section class="design1-content">
        <!-- Colonne des images -->
        <div class="design1-gallery">
            <div class="design1-images-container">
                <img src="<?php echo get_template_directory_uri(); ?>/design/kendrick works 1.png" alt="Lauda Revenge">
                
            </div>
        </div>

        <!-- Colonne du texte avec effet sticky -->
        <div class="design1-description">
            <h1>Kendrick</h1>
            <p>
            Ce design met en avant le rappeur Kendrick Lamar, avec un style visuel minimaliste et des éléments textuels marquants. La composition utilise une typographie audacieuse pour son nom et le mot "DAMN", faisant référence à son célèbre album. Des citations en français ajoutent une touche personnelle et poétique, illustrant la profondeur de l'artiste. Le design, réalisé sur Photoshop, capte l'essence introspective et unique de Kendrick Lamar, soulignant son impact dans le monde du rap et sa réflexion sur des thèmes comme la réussite, la solitude et la beauté dans l'achèvement. </p>    </div>
    <!-- Section pour les designs similaires -->
    <section class="design1-related-designs">
        <h2>Voir d'autres designs</h2>
        <div class="design1-suggestions">
    <div class="design1-item">
        <img src="<?php echo get_template_directory_uri(); ?>/design/nike add 1.png" alt="Nike Add Design">
    </div>
    <div class="design1-item">
        <img src="<?php echo get_template_directory_uri(); ?>/design/toyota supra add 1.png" alt="Toyota Supra Add Design">
    </div>
    <div class="design1-item">
        <img src="<?php echo get_template_directory_uri(); ?>/design/floating.png" alt="Floating Design">
    </div>
    <div class="design1-item">
        <img src="<?php echo get_template_directory_uri(); ?>/design/heliot work png.png" alt="Heliot Work Design">
    </div>
</div>




    </section>
</main>


<?php get_footer(); ?>
