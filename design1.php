<?php
/*
Template Name: Design1
*/
get_header();
?>

<main class="design1-page">
    <!-- Section principale avec deux colonnes -->
    <section class="design1-content">
        <!-- Colonne des images -->
        <div class="design1-gallery">
            <div class="design1-images-container">
                <img src="<?php echo get_template_directory_uri(); ?>/design/lauda revenge 1.png" alt="Lauda Revenge">
            </div>
        </div>

        <!-- Colonne du texte avec effet sticky -->
        <div class="design1-description">
            <h1>Lauda Revenge</h1>
            <p>
                Ce design met en avant le légendaire pilote de Formule 1 Niki Lauda, avec une photo emblématique intégrée dans le visuel et travaillée sur Photoshop. Plusieurs polices d’Adobe Fonts ont été utilisées pour structurer le texte, ajoutant une touche dramatique et captivante à l’affiche qui raconte l'histoire de Lauda et de sa carrière.
            </p>
        </div>
    </section>

    <!-- Section pour les designs similaires -->
    <section class="design1-related-designs">
        <h2>Voir d'autres designs</h2>
        <div class="design1-suggestions">
            <div class="design1-item">
                <img src="<?php echo get_template_directory_uri(); ?>/design/toyota supra add 1.png" alt="Supra Design">
            </div>
            <div class="design1-item">
                <img src="<?php echo get_template_directory_uri(); ?>/design/kendrick works 1.png" alt="Kendrick Design">
            </div>
            <div class="design1-item">
                <img src="<?php echo get_template_directory_uri(); ?>/design/AB6ED216-FF5A-4EF8-9505-62DBE702DA9D 1.png" alt="720S Design">
            </div>
            <div class="design1-item">
                <img src="<?php echo get_template_directory_uri(); ?>/design/floating.png" alt="Floating Design">
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>
