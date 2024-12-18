<?php
/*
Template Name: Autres Modeles
*/
get_header();
?>

<main class="gallery-page">
    <!-- Titre principal -->
    <section class="gallery-title">
        <h1>Autres <span class="highlight">modèles</span></h1>
    </section>

    <!-- Galerie d'images -->
    <section class="gallery-section">
        <div class="gallery-grid">
            <?php
            // Tableau des images avec leurs chemins
            $images = array(
                array('src' => get_template_directory_uri() . '/photo/autres/voitures 23_07-181.jpg'),
                array('src' => get_template_directory_uri() . '/photo/autres/voitures 23_07-184.jpg'),
                array('src' => get_template_directory_uri() . '/photo/autres/voitures 23_07-185.jpg'),
                array('src' => get_template_directory_uri() . '/photo/autres/voitures 23_07-192.jpg'),
                array('src' => get_template_directory_uri() . '/photo/autres/voitures 23_07-223.jpg'),
                array('src' => get_template_directory_uri() . '/photo/autres/voitures 23_07-225.jpg'),
                array('src' => get_template_directory_uri() . '/photo/autres/voitures 23_07-230.jpg'),
                array('src' => get_template_directory_uri() . '/photo/autres/voitures 23_07-232.jpg'),
                array('src' => get_template_directory_uri() . '/photo/autres/voitures 23_07-234.jpg'),
                array('src' => get_template_directory_uri() . '/photo/autres/voitures 23_07-236.jpg'),
                array('src' => get_template_directory_uri() . '/photo/autres/voitures 23_07-239.jpg'),
                array('src' => get_template_directory_uri() . '/photo/autres/voitures 23_07-263.jpg'),
                array('src' => get_template_directory_uri() . '/photo/autres/voitures 23_07-264.jpg'),
                array('src' => get_template_directory_uri() . '/photo/autres/voitures 23_07-272.jpg'),
                array('src' => get_template_directory_uri() . '/photo/autres/voitures 23_07-277.jpg'),
                array('src' => get_template_directory_uri() . '/photo/autres/voitures 23_07-283.jpg'),
                array('src' => get_template_directory_uri() . '/photo/autres/voitures 23_07-289.jpg'),
                array('src' => get_template_directory_uri() . '/photo/autres/voitures 23_07-291.jpg'),
                array('src' => get_template_directory_uri() . '/photo/autres/voitures 23_07-292.jpg'),
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
