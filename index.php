<?php get_header(); ?>

<!-- Adobe Fonts -->
<link rel="stylesheet" href="https://use.typekit.net/fbb8zhm.css">

<main>

    <!-- Hero Section -->
    <section class="hero" style="position: relative; background-image: url('<?php echo get_template_directory_uri(); ?>/photo/presentation.png'); background-size: cover; background-position: center; height: 100vh; display: flex; align-items: center; justify-content: center; text-align: center; color: #FFFFFF;">
    <div class="hero-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.3);"></div>
    <div class="hero-content" style="position: relative; z-index: 1;">
        <h1 class="hero-title" style="font-family: 'Loos-extrawide', sans-serif; font-size: 6rem; color: #FFFFFF;">MATYS</h1>
        <p class="hero-subtitle" style="font-size: 1.8rem; color: #FFC300;">CRÉATEUR DIGITAL, PHOTOGRAPHE</p>
        <div class="hero-buttons" style="margin-top: 20px;">
        <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="hero-btn">Contact</a>
        <a href="https://linktr.ee/its_me_mat_" class="hero-btn" target="_blank" rel="noopener noreferrer">Mes réseaux</a>
        </div>
    </div>
</section>


    <!-- Image Sections with Overlay Text -->
    <section class="section-overlay">
        <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/photo/creations.png');">
            <p class="section-overlay-text">CRÉATION</p>
        </div>
        <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/photo/inspiration.png');">
            <p class="section-overlay-text">INSPIRATION</p>
        </div>
        <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/photo/publication.png');">
            <p class="section-overlay-text">PUBLICATION</p>
        </div>
    </section>

    <!-- Art of Surpassing Section -->
    <section class="art-surpass-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/photo/surpass.png');">
    <div class="art-surpass-overlay"></div>
    <div class="art-surpass-content">
        <h2>L'ART DE SE</h2>
        <h1>SURPASSER</h1>
    </div>
</section>


    <!-- About Section -->
    <section class="about-section">
        <h2>À propos de moi</h2>
        <p>Bonjour ! Je m'appelle Matys Ouvrard, créateur digital passionné et photographe. À travers mon travail, je cherche à capturer et à sublimer les moments, les émotions, et les histoires qui nous entourent, tout en explorant les possibilités infinies du digital. Je vous invite à découvrir une sélection de mes projets, où chaque image, chaque concept est le fruit d'une réflexion et d'une créativité poussées. J'espère que ces œuvres sauront vous toucher autant qu'elles m'ont animé lors de leur création.</p>
        <a href="<?php echo get_permalink(get_page_by_path('a-propos')); ?>" class="btn">À propos</a>

    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <h2>Me contacter</h2>
        <p>N'hésitez pas à me contacter si vous avez besoin de conseils, d'indications ou pour discuter de potentiels futurs projets. Je suis toujours ouvert aux nouvelles collaborations et serais ravi de pouvoir travailler avec vous sur des créations qui vous tiennent à cœur.</p>
        <div class="contact-buttons">
        <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="contact-btn">Contact</a>
        </div>
    </section>

    <!-- Skills Section -->
<section class="skills-section">
    <div class="skills-marquee">
        <div class="skills-wrapper">
            <span>UX/UI Design</span>
            <span>Photographie</span>
            <span>Design</span>
            <span>Communication</span>
            <span>Développement WP</span>
            <!-- Duplicate the elements to create a seamless loop -->
            <span>UX/UI Design</span>
            <span>Photographie</span>
            <span>Design</span>
            <span>Communication</span>
            <span>Développement WP</span>
            <span>UX/UI Design</span>
            <span>Photographie</span>
            <span>Design</span>
            <span>Communication</span>
            <span>Développement WP</span>
            <span>UX/UI Design</span>
            <span>Photographie</span>
            <span>Design</span>
            <span>Communication</span>
            <span>Développement WP</span>
            <span>UX/UI Design</span>
            <span>Photographie</span>
            <span>Design</span>
            <span>Communication</span>
            <span>Développement WP</span>
            <span>UX/UI Design</span>
            <span>Photographie</span>
            <span>Design</span>
            <span>Communication</span>
            <span>Développement WP</span>
            <span>UX/UI Design</span>
            <span>Photographie</span>
            <span>Design</span>
            <span>Communication</span>
            <span>Développement WP</span>
            <span>UX/UI Design</span>
            <span>Photographie</span>
            <span>Design</span>
            <span>Communication</span>
            <span>Développement WP</span>
            <span>UX/UI Design</span>
            <span>Photographie</span>
            <span>Design</span>
            <span>Communication</span>
            <span>Développement WP</span>
            <span>UX/UI Design</span>
            <span>Photographie</span>
            <span>Design</span>
            <span>Communication</span>
            <span>Développement WP</span>
            <span>UX/UI Design</span>
            <span>Photographie</span>
            <span>Design</span>
            <span>Communication</span>
            <span>Développement WP</span>
            <span>UX/UI Design</span>
            <span>Photographie</span>
            <span>Design</span>
            <span>Communication</span>
            <span>Développement WP</span>
            <span>UX/UI Design</span>
            <span>Photographie</span>
            <span>Design</span>
            <span>Communication</span>
            <span>Développement WP</span>
        </div>
    </div>
</section>


    <!-- Collaboration Section -->
    <section class="collaborate-section">
        <h2>Et pourquoi pas Collaborer</h2>
        <div class="contact-buttons">
        <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="collab-btn">Contact</a>
        <a href="https://linktr.ee/its_me_mat_" class="collab-btn" target="_blank" rel="noopener noreferrer">Mes réseaux</a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
