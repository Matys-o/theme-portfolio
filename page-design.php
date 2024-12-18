<?php
/*
Template Name: Design
*/
get_header();
?>

<main class="design-main-page">
    <!-- Titre principal -->
    <section class="design-title-section">
        <h1>Mes <span class="highlight">designs</span></h1>
    </section>

    <!-- Section Fiches Techniques -->
    <section class="design-category-section">
        <h2>Fiches <span class="highlight">techniques</span></h2>
        <div class="design-gallery">
        <div class="design-item">
    <a href="<?php echo get_permalink(get_page_by_path('Design 4')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/design/AB6ED216-FF5A-4EF8-9505-62DBE702DA9D 1.png" alt="720S Design" />
    </a>
</div>

            <div class="design-item">
    <a href="<?php echo get_permalink(get_page_by_path('Design 3')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/design/toyota supra add 1.png" alt="Supra Design" />
    </a>
</div>

<div class="design-item">
    <a href="<?php echo get_permalink(get_page_by_path('Design 2')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/design/porsche gt3rs edit.png" alt="Design 2" />
    </a>
</div>

<div class="design-item">
    <a href="<?php echo get_permalink(get_page_by_path('Design 1')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/design/lauda revenge 1.png" alt="Design 1" />
    </a>
</div>

        </div>
    </section>

    <!-- Section Mode et Lifestyle -->
    <section class="design-category-section">
        <h2>Mode et <span class="highlight">Lifestyle</span></h2>
        <div class="design-gallery">
        <div class="design-item">
    <a href="<?php echo get_permalink(get_page_by_path('Design 6')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/design/floating.png" alt="Floating Design" />
    </a>
</div>

            <div class="design-item">
    <a href="<?php echo get_permalink(get_page_by_path('Design 7')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/design/heliot work png.png" alt="Heliot Design" />
    </a>
</div>

            <div class="design-item">
    <a href="<?php echo get_permalink(get_page_by_path('Design 5')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/design/difference png.png" alt="Same Difference Design" />
    </a>
</div>

        </div>
    </section>

    <!-- Section Musique -->
    <section class="design-category-section">
        <h2><span class="highlight">Musique</span></h2>
        <div class="design-gallery">
        <div class="design-item">
    <a href="<?php echo get_permalink(get_page_by_path('Design 8')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/design/kendrick works 1.png" alt="Kendrick Lamar Design" />
    </a>
</div>

        </div>
    </section>
</main>

<?php get_footer(); ?>
