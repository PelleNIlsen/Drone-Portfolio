<?php
    $current_page = 'contact';
    $page_title = "Contact - My Drone Photography";
    $page_css = 'contact';
    $page_description = 'Klar til å fange fantastiske flyfoto for prosjektet ditt? Kontakt Drone Fredrikstad i dag for bestilling og spørsmål.';
    $page_keywords = 'Drone, dronefoto, dronefotografi, dronefotografering, flyfoto, foto, fly, hjem, hus, eiendom, tomt, kontakt, kontakt oss, book';
    include('assetts/header.php');
?>

<!-- Contact Section -->
<div id="contact">
    <h2>Kontakt Meg</h2>
    <p>Interessert i å jobbe sammen? Fyll ut skjemaet nedenfor med litt info om prosjektet ditt, så kommer jeg tilbake ti deg så snart jeg kan.</p>
    <form action="send_mail.php" method="post">
        <input type="text" name="name" placeholder="Ditt Navn" required>
        <input type="email" name="email" placeholder="Din Epost" required>
        <input type="text" name="subject" placeholder="Emne" required>
        <textarea name="message" placeholder="Melding" required></textarea>
        <button type="submit">Send inn!</button>
    </form>
</div>

<?php include('assetts/footer.php');