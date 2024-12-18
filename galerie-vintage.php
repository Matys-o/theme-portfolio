<?php
/*
Template Name: Galerie Vintage
*/
get_header();
?>

<main class="gallery-page">
    <!-- Titre principal -->
    <section class="gallery-title">
        <h1>Style <span class="highlight">Vintage</span></h1>
    </section>

    <!-- Galerie d'images -->
    <section class="gallery-section">
        <div class="gallery-grid">
            <?php
            // Tableau des images avec leurs chemins
            $images = array(
                array('src' => get_template_directory_uri() . '/photo/style vintage/voitures 23_07-349.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style vintage/voitures 23_07-348.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style vintage/voitures 23_07-347.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style vintage/voitures 23_07-346.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style vintage/voitures 23_07-345.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style vintage/voitures 23_07-344.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style vintage/voitures 23_07-343.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style vintage/voitures 23_07-342.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style vintage/voitures 23_07-341.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style vintage/voitures 23_07-340.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style vintage/voitures 23_07-339.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style vintage/voitures 23_07-338.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style vintage/voitures 23_07-337.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style vintage/voitures 23_07-336.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style vintage/voitures 23_07-335.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style vintage/voitures 23_07-334.jpg'),
                array('src' => get_template_directory_uri() . '/photo/style vintage/voitures 23_07-333.jpg'),
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
