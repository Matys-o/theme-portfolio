<?php
/*
Template Name: Galerie stylise
*/
get_header();
?>

<main class="gallery-page">
    <!-- Titre principal -->
    <section class="gallery-title">
        <h1>Style <span class="highlight">Stylisé</span></h1>
    </section>

    <!-- Galerie d'images -->
    <section class="gallery-section">
        <div class="gallery-grid">
            <?php
            // Tableau des images avec leurs chemins
            $images = array(
                array('src' => get_template_directory_uri() . '/photo/style stylisée/voitures 23_07-306.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style stylisée/voitures 23_07-307.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style stylisée/voitures 23_07-308.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style stylisée/voitures 23_07-309.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style stylisée/voitures 23_07-310.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style stylisée/voitures 23_07-311.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style stylisée/voitures 23_07-312.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style stylisée/voitures 23_07-313.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style stylisée/voitures 23_07-458.jpg'),
            );

            // Boucle pour afficher les images
            foreach ($images as $image) {
                echo '<div class="gallery-item">';
                echo '<img src="' . esc_url($image['src']) . '" alt="' . (isset($image['alt']) ? esc_attr($image['alt']) : 'Image sans description') . '">';
                echo '</div>';
            }
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
