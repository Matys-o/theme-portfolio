<?php
/*
Template Name: Lambo
*/
get_header();
?>

<main class="gallery-page">
    <!-- Titre principal -->
    <section class="gallery-title">
        <h1>Lambo<span class="highlight">rghini</span></h1>
    </section>

    <!-- Galerie d'images -->
    <section class="gallery-section">
        <div class="gallery-grid">
            <?php
            // Tableau des images avec leurs chemins
            $images = array(
                array('src' => get_template_directory_uri() . '/photo/lambo/voitures 23_07-376.jpg'),
                array('src' => get_template_directory_uri() . '/photo/lambo/voitures 23_07-379.jpg'),
                array('src' => get_template_directory_uri() . '/photo/lambo/voitures 23_07-378.jpg'),
                array('src' => get_template_directory_uri() . '/photo/lambo/voitures 23_07-375.jpg'),
                array('src' => get_template_directory_uri() . '/photo/lambo/voitures 23_07-377.jpg'),
                array('src' => get_template_directory_uri() . '/photo/lambo/voitures 23_07-384.jpg'),
                array('src' => get_template_directory_uri() . '/photo/lambo/voitures 23_07-381.jpg'),
                array('src' => get_template_directory_uri() . '/photo/lambo/voitures 23_07-386.jpg'),
                array('src' => get_template_directory_uri() . '/photo/lambo/voitures 23_07-382.jpg'),
                array('src' => get_template_directory_uri() . '/photo/lambo/voitures 23_07-385.jpg'),
                
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
