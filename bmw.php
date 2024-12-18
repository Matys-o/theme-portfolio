<?php
/*
Template Name: bmw
*/
get_header();
?>

<main class="gallery-page">
    <!-- Titre principal -->
    <section class="gallery-title">
        <h1>BM<span class="highlight">W</span></h1>
    </section>

    <!-- Galerie d'images -->
    <section class="gallery-section">
        <div class="gallery-grid">
            <?php
            // Tableau des images avec leurs chemins
            $images = array(
                array('src' => get_template_directory_uri() . '/photo/bmw/voitures 23_07-457.jpg'),
                array('src' => get_template_directory_uri() . '/photo/bmw/voitures 23_07-456.jpg'),
                array('src' => get_template_directory_uri() . '/photo/bmw/voitures 23_07-455.jpg'),
                array('src' => get_template_directory_uri() . '/photo/bmw/voitures 23_07-454.jpg'),
                array('src' => get_template_directory_uri() . '/photo/bmw/voitures 23_07-449.jpg'),
                array('src' => get_template_directory_uri() . '/photo/bmw/voitures 23_07-450.jpg'),
                array('src' => get_template_directory_uri() . '/photo/bmw/voitures 23_07-451.jpg'),
                array('src' => get_template_directory_uri() . '/photo/bmw/voitures 23_07-452.jpg'),
                array('src' => get_template_directory_uri() . '/photo/bmw/voitures 23_07-453.jpg'),
                array('src' => get_template_directory_uri() . '/photo/bmw/voitures 23_07-448.jpg'),
                array('src' => get_template_directory_uri() . '/photo/bmw/voitures 23_07-447.jpg'),
                array('src' => get_template_directory_uri() . '/photo/bmw/voitures 23_07-439.jpg'),
                array('src' => get_template_directory_uri() . '/photo/bmw/voitures 23_07-440.jpg'),
                array('src' => get_template_directory_uri() . '/photo/bmw/voitures 23_07-441.jpg'),
                array('src' => get_template_directory_uri() . '/photo/bmw/voitures 23_07-442.jpg'),
                array('src' => get_template_directory_uri() . '/photo/bmw/voitures 23_07-443.jpg'),
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
