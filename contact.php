<?php
/*
Template Name: Contact
*/
get_header();

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    $to = "ouvrardmatys70@gmail.com"; 
    $subject = "Nouveau message de $name";
    $headers = "From: $email\r\nReply-To: $email";

    // Envoie l'email et affiche un message de confirmation ou d'erreur
    if (wp_mail($to, $subject, $message, $headers)) {
        $confirmation_message = "<p class='success-message'>Merci pour votre message ! Je vous répondrai dès que possible.</p>";
    } else {
        $confirmation_message = "<p class='error-message'>Une erreur est survenue. Veuillez réessayer.</p>";
    }
}
?>

<main class="contact-page">
    <!-- Section principale avec le titre -->
    <section class="contact-header">
        <h1>Et pourquoi pas <span class="highlight">Collaborer</span></h1>
        <a href="https://linktr.ee/its_me_mat_" class="btn" target="_blank">Mes réseaux</a>

    </section>

    <!-- Formulaire de contact -->
    <section class="contact-form-section">
        <?php
        // Affiche le message de confirmation ou d'erreur s'il existe
        if (isset($confirmation_message)) {
            echo $confirmation_message;
        }
        ?>
        <form class="contact-form" method="post" action="">
            <input type="text" name="name" placeholder="Prénom Nom" required>
            <input type="email" name="email" placeholder="exemple@gmail.com" required>
            <textarea name="message" placeholder="Votre message" required></textarea>
            <button type="submit" class="btn-submit">Envoyer</button>
        </form>
    </section>
</main>

<?php get_footer(); ?>
