<?php
    $current_page = 'home';
    $page_title = "Home - My Drone Photography";
    $page_css = 'index';
    $page_description = 'Velkommen til Drone Fredrikstad, hvor vi fanger skjønnheten i verden ovenfra. Utforsk arbeidet vårt, lær om oss og ta kontakt.';
    $page_keywords = 'Drone, drone med kamera, dji drone, fpv drone, drone regler, drone barn, mini drone, drone forsikring, dronefoto, dronefotografi, dronefotografering, flyfoto, foto, fly, hjem, hus, eiendom, tomt, hjemmeside';
    include('assetts/header.php');
?>

<!-- Hero Section -->
<div id="hero">
    <div class="hero-intro">
        <h1>Drone Fredrikstad</h1>
        <p>Fanger verden fra et annet perspektiv</p>
        <a href="#about">Lær Mer</a>
    </div>
    <svg id="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#e5e5e5" fill-opacity="1" d="M0,32L34.3,80C68.6,128,137,224,206,245.3C274.3,267,343,213,411,186.7C480,160,549,160,617,186.7C685.7,213,754,267,823,293.3C891.4,320,960,320,1029,304C1097.1,288,1166,256,1234,256C1302.9,256,1371,288,1406,304L1440,320L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
</div>


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