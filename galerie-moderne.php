<?php
/*
Template Name: Galerie Moderne
*/
get_header();
?>

<main class="gallery-page">
    <!-- Titre principal -->
    <section class="gallery-title">
        <h1>Style <span class="highlight">Moderne</span></h1>
    </section>

    <!-- Galerie d'images -->
    <section class="gallery-section">
        <div class="gallery-grid">
            <?php
            // Tableau des images avec leurs chemins
            $images = array(
                array('src' => get_template_directory_uri() . '/photo/style moderne/voitures 23_07-294.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style moderne/voitures 23_07-295.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style moderne/voitures 23_07-296.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style moderne/voitures 23_07-297.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style moderne/voitures 23_07-298.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style moderne/voitures 23_07-299.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style moderne/voitures 23_07-300.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style moderne/voitures 23_07-301.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style moderne/voitures 23_07-302.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style moderne/voitures 23_07-303.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style moderne/voitures 23_07-304.jpg'),
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
