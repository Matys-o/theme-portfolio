<?php
/*
Template Name: Design7
*/
get_header();
?>

<main class="design1-page">
    <!-- Section principale avec deux colonnes -->
    <section class="design1-content">
        <!-- Colonne des images -->
        <div class="design1-gallery">
            <div class="design1-images-container">
                <img src="<?php echo get_template_directory_uri(); ?>/design/heliot work png.png" alt="Lauda Revenge">
                
            </div>
        </div>

        <!-- Colonne du texte avec effet sticky -->
        <div class="design1-description">
            <h1>HELIOT</h1>
            <p>
            Ce design met en avant la marque de vêtements Heliot. L'image en noir et blanc présente une esthétique futuriste et mystérieuse, avec des personnages masqués portant des lunettes sur lesquelles est inscrit le nom "HELIOT". Le montage a été réalisé sur Photoshop pour créer un effet de répétition et de profondeur, renforçant l'identité visuelle unique et avant-gardiste de la marque. </p>    </div>
    <!-- Section pour les designs similaires -->
    <section class="design1-related-designs">
        <h2>Voir d'autres designs</h2>
        <div class="design1-suggestions">
    <div class="design1-item">
        <img src="<?php echo get_template_directory_uri(); ?>/design/porsche gt3rs edit.png" alt="Porsche GT3RS Design">
    </div>
    <div class="design1-item">
        <img src="<?php echo get_template_directory_uri(); ?>/design/kendrick works 1.png" alt="Kendrick Works Design">
    </div>
    <div class="design1-item">
        <img src="<?php echo get_template_directory_uri(); ?>/design/difference png.png" alt="Difference Design">
    </div>
    <div class="design1-item">
        <img src="<?php echo get_template_directory_uri(); ?>/design/lauda revenge 1.png" alt="Lauda Revenge Design">
    </div>
</div>



    </section>
</main>


<?php get_footer(); ?>
