<?php
/*
Template Name: Videos
*/
get_header();
?>

<main class="videos-page">
    <!-- Titre principal -->
    <section class="videos-title">
        <h1>Mes <span class="highlight">Vidéos</span></h1>
    </section>

    <!-- Section Vidéos Longues -->
    <section class="video-category">
        <h2>Vidéos <span class="highlight">longues</span></h2>

        <!-- Première vidéo longue -->
        <div class="video-item">
            <div class="video-container">
                <video controls>
                    <source src="<?php echo get_template_directory_uri(); ?>/videos/Le passage - projet 2 (720p60, h264).mp4" type="video/mp4">
                    Votre navigateur ne supporte pas la lecture de vidéos.
                </video>
            </div>
            <h3>Le <span class="highlight">Passage</span></h3>
            <p>
                Le Passage est le deuxième projet que j'ai réalisé. Ce projet explore l’enfance et son inévitable fin, tout en suivant une direction similaire à mes autres travaux. Il met en lumière la sensation de voir le temps s'écouler sans qu’on s’en aperçoive pleinement. Malgré la fin de cette période, il révèle que notre âme d’enfant, elle, perdure toujours, marquant nos souvenirs et influençant notre regard sur le monde.
            </p>
        </div>

        <!-- Deuxième vidéo longue -->
        <div class="video-item">
            <div class="video-container">
                <video controls>
                    <source src="<?php echo get_template_directory_uri(); ?>/videos/Projet temps rythme- Matys Ouvrard (720p60, h264).mp4" type="video/mp4">
                    Votre navigateur ne supporte pas la lecture de vidéos.
                </video>
            </div>
            <h3>Temps <span class="highlight">Rythme</span></h3>
            <p>
                Temps Rythme est un projet impliqué et ralenti, et Le Passage est son second. Ces deux œuvres explorent des thèmes profonds liés à la temporalité. "Temps Rythme" symbolise la rapidité du monde moderne, tout en montrant qu’il est toujours possible de ralentir et de prendre le temps de savourer des moments simples, comme lire un livre. Ce projet crée une rupture, une séparation entre l’agitation extérieure et notre propre rythme intérieur.
            </p>
        </div>
    </section>

    <!-- Section Vidéos Courtes -->
    <section class="video-category">
        <h2>Vidéos <span class="highlight">courtes</span></h2>
        <h3>Vidéos automobiles</h3>
        <div class="short-videos-gallery">
            <div class="short-video-item">
                <div class="video-container">
                    <video controls>
                        <source src="<?php echo get_template_directory_uri(); ?>/videos/ssstik.io_1726934426848.mp4" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture de vidéos.
                    </video>
                </div>
                <span class="views-count">661 vues</span>
            </div>
            <div class="short-video-item">
                <div class="video-container">
                    <video controls>
                        <source src="<?php echo get_template_directory_uri(); ?>/videos/ssstik.io_1726934327569.mp4" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture de vidéos.
                    </video>
                </div>
                <span class="views-count">387 vues</span>
            </div>
            <div class="short-video-item">
                <div class="video-container">
                    <video controls>
                        <source src="<?php echo get_template_directory_uri(); ?>/videos/ssstik.io_1726934275599.mp4" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture de vidéos.
                    </video>
                </div>
                <span class="views-count">121 vues</span>
            </div>
            <div class="short-video-item">
                <div class="video-container">
                    <video controls>
                        <source src="<?php echo get_template_directory_uri(); ?>/videos/ssstik.io_@xvd_mat_1726934394113.mp4" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture de vidéos.
                    </video>
                </div>
                <span class="views-count">1241 vues</span>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
