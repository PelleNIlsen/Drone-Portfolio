<?php
    $current_page = 'portfolio';
    $page_title = "Portfolio - My Drone Photography";
    $page_css = 'portfolio';
    include('assetts/header.php');
?>

<!-- Portfolio Section -->
<div id="portfolio">
    <h2>My Portfolio</h2>
    <div class="grid-container">
        <div class="grid-item">
            <img src="portfolio/DJI_0007.jpg" alt="Fredrikstad Broa">
            <div class="overlay">
                <div class="text">Fredrikstad Broa</div>
            </div>
        </div>
        <div class="grid-item">
            <img src="portfolio/DJI_0010.jpg" alt="Fredrikstad Domkirke">
            <div class="overlay">
                <div class="text">Fredrikstad Domkirke</div>
            </div>
        </div>
        <div class="grid-item">
            <img src="portfolio/DJI_0012.jpg" alt="Fredrikstad Domkirke">
            <div class="overlay">
                <div class="text">Fredrikstad Domkirke</div>
            </div>
        </div>
        <div class="grid-item">
            <img src="portfolio/DJI_0021.jpg" alt="Fredrikstad Domkirke">
            <div class="overlay">
                <div class="text">Fredrikstad Domkirke</div>
            </div>
        </div>
    </div>
</div>

<?php include('assetts/footer.php'); ?>