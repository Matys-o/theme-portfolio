<?php
/*
Template Name: About
*/
get_header();
?>

<main class="about-me-page">
    <!-- Section principale -->
    <section class="about-me-section">
        <div class="about-me-content">
            <!-- Colonne texte -->
            <div class="about-me-text">
                <h1 class="about-me-title">Moi, <span class="about-me-highlight">Matys Ouvrard</span></h1>
                <p>
                    Passionné de création, passionné de photographie, je ne pense pas qu’un pavé vous donne envie de continuer. Alors je vais juste vous dire, bonjour, je m’appelle Matys, et je suis passionné par la création et l’art. Je crée des choses depuis l’enfance, alors je continue de créer tant que j’ai encore cette âme d’enfant.
                </p>
            </div>
            <!-- Colonne image -->
            <div class="about-me-image">
                <img src="<?php echo get_template_directory_uri(); ?>/photo/me.png" alt="Photo de Matys Ouvrard">
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
