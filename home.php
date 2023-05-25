<?php
    $current_page = 'home';
    $page_title = "Home - My Drone Photography";
    $page_css = 'index';
    $page_description = 'Velkommen til Drone Fredrikstad, hvor vi fanger skjønnheten i verden ovenfra. Utforsk arbeidet vårt, lær om oss og ta kontakt.';
    $page_keywords = 'Drone, drone med kamera, dji drone, fpv drone, drone regler, drone barn, mini drone, drone forsikring, dronefoto, dronefotografi, dronefotografering, flyfoto, foto, fly, hjem, hus, eiendom, tomt, hjemmeside';
    include('assetts/header.php');
?>

<!-- Hero Section -->
<section>
    <div id="hero">
        <!-- <img src="images\DJI_0010.JPG" alt="Fredrikstad Sentrum"> -->
        <h1>Drone Fredrikstad</h1>
        <p>Fanger verden fra et annet perspektiv</p>
        <a href="#about">Lær Mer</a>
    </div>
</section>

<!-- About Section -->
<div id="about">
    <h2>Om Meg</h2>
    <p>Kort introduksjon om meg og mine tjenester.</p>
    <a href="about">Les Mer</a>
</div>

<!-- Portfolio Section -->
<div id="portfolio">
    <h2>Min Portefølje</h2>
    <p>Et utvalg av mine beste bilder.</p>
    <a href="showcase">Se Mer</a>
</div>

<!-- Testimonials Section -->
<div id="testimonials">
    <h2>Attester</h2>
    <!-- Insert testimonials here -->
</div>

<!-- Contact CTA -->
<div id="contact-cta">
    <h2>La oss samarbeide!</h2>
    <p>Hvis du liker det jeg gjør, og vil jobbe sammen, ta kontakt!</p>
    <a href="contact">Kontakt Meg</a>
</div>

<?php include('assetts/footer.php'); ?>