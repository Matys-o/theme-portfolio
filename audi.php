<?php
/*
Template Name: Audi
*/
get_header();
?>

<main class="gallery-page">
    <!-- Titre principal -->
    <section class="gallery-title">
        <h1>Au<span class="highlight">di</span></h1>
    </section>

    <!-- Galerie d'images -->
    <section class="gallery-section">
        <div class="gallery-grid">
            <?php
            // Tableau des images avec leurs chemins
            $images = array(
                array('src' => get_template_directory_uri() . '/photo/audi/voitures 23_07-462.jpg'),
                array('src' => get_template_directory_uri() . '/photo/audi/voitures 23_07-473.jpg'),
                array('src' => get_template_directory_uri() . '/photo/audi/voitures 23_07-472.jpg'),
                array('src' => get_template_directory_uri() . '/photo/audi/voitures 23_07-461.jpg'),
                array('src' => get_template_directory_uri() . '/photo/audi/voitures 23_07-470.jpg'),
                array('src' => get_template_directory_uri() . '/photo/audi/voitures 23_07-460.jpg'),
                array('src' => get_template_directory_uri() . '/photo/audi/voitures 23_07-466.jpg'),
                array('src' => get_template_directory_uri() . '/photo/audi/voitures 23_07-464.jpg'),
                array('src' => get_template_directory_uri() . '/photo/audi/voitures 23_07-463.jpg'),
                
                
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
