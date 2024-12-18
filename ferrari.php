<?php
/*
Template Name: Ferrari
*/
get_header();
?>

<main class="gallery-page">
    <!-- Titre principal -->
    <section class="gallery-title">
        <h1>Fer<span class="highlight">rari</span></h1>
    </section>

    <!-- Galerie d'images -->
    <section class="gallery-section">
        <div class="gallery-grid">
            <?php
            // Tableau des images avec leurs chemins
            $images = array(
                array('src' => get_template_directory_uri() . '/photo/ferrari/voitures 23_07-408-2.jpg'),
                array('src' => get_template_directory_uri() . '/photo/ferrari/voitures 23_07-407-2.jpg'),
                array('src' => get_template_directory_uri() . '/photo/ferrari/voitures 23_07-406-2.jpg'),
                array('src' => get_template_directory_uri() . '/photo/ferrari/voitures 23_07-395-2.jpg'),
                array('src' => get_template_directory_uri() . '/photo/ferrari/voitures 23_07-397-2.jpg'),
                array('src' => get_template_directory_uri() . '/photo/ferrari/voitures 23_07-387-2.jpg'),
                array('src' => get_template_directory_uri() . '/photo/ferrari/voitures 23_07-388-2.jpg'),
                array('src' => get_template_directory_uri() . '/photo/ferrari/voitures 23_07-396-2.jpg'),
                array('src' => get_template_directory_uri() . '/photo/ferrari/voitures 23_07-393-2.jpg'),
                array('src' => get_template_directory_uri() . '/photo/ferrari/voitures 23_07-390-2.jpg'),
                array('src' => get_template_directory_uri() . '/photo/ferrari/voitures 23_07-389-2.jpg'),
                array('src' => get_template_directory_uri() . '/photo/ferrari/voitures 23_07-398-2.jpg'),
                
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
