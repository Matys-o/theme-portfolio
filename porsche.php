<?php
/*
Template Name: porsche
*/
get_header();
?>

<main class="gallery-page">
    <!-- Titre principal -->
    <section class="gallery-title">
        <h1>Pors<span class="highlight">che</span></h1>
    </section>

    <!-- Galerie d'images -->
    <section class="gallery-section">
        <div class="gallery-grid">
            <?php
            // Tableau des images avec leurs chemins
            $images = array(
                array('src' => get_template_directory_uri() . '/photo/porsche/voitures 23_07-438.jpg'),
                array('src' => get_template_directory_uri() . '/photo/porsche/voitures 23_07-432.jpg'),
                array('src' => get_template_directory_uri() . '/photo/porsche/voitures 23_07-435.jpg'),
                array('src' => get_template_directory_uri() . '/photo/porsche/voitures 23_07-431.jpg'),
                array('src' => get_template_directory_uri() . '/photo/porsche/voitures 23_07-429.jpg'),
                array('src' => get_template_directory_uri() . '/photo/porsche/voitures 23_07-430.jpg'),
                array('src' => get_template_directory_uri() . '/photo/porsche/voitures 23_07-427.jpg'),
                array('src' => get_template_directory_uri() . '/photo/porsche/voitures 23_07-426.jpg'),
                array('src' => get_template_directory_uri() . '/photo/porsche/voitures 23_07-428.jpg'),
                array('src' => get_template_directory_uri() . '/photo/porsche/voitures 23_07-421.jpg'),
                array('src' => get_template_directory_uri() . '/photo/porsche/voitures 23_07-416.jpg'),
                array('src' => get_template_directory_uri() . '/photo/porsche/voitures 23_07-413.jpg'),
                array('src' => get_template_directory_uri() . '/photo/porsche/voitures 23_07-414.jpg'),
                array('src' => get_template_directory_uri() . '/photo/porsche/voitures 23_07-410.jpg'),
                array('src' => get_template_directory_uri() . '/photo/porsche/voitures 23_07-411.jpg'),
                array('src' => get_template_directory_uri() . '/photo/porsche/voitures 23_07-409.jpg'),
                array('src' => get_template_directory_uri() . '/photo/porsche/voitures 23_07-415.jpg'),
                array('src' => get_template_directory_uri() . '/photo/porsche/voitures 23_07-412.jpg'),
                array('src' => get_template_directory_uri() . '/photo/porsche/voitures 23_07-424.jpg'),
                
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
