<?php
    $current_page = 'portfolio';
    $page_title = "Portfolio - My Drone Photography";
    $page_css = 'portfolio';
    include('assetts/header.php');
?>

<!-- Portfolio Section -->
<div id="portfolio">
    <h2>Min Portefølje</h2>
    <div class="grid-container">
        <div class="grid-item" onclick="openModal('modal1')">
            <img src="portfolio/DJI_0007.JPG" alt="Fredrikstad Broa">
            <div class="overlay">
                <div class="text">Fredrikstad Broa</div>
            </div>
            <div id="modal1" class="modal">
                <span class="close" onclick="closeModal(this.parentElement.id)">&times;</span>
                <img class="modal-content" id="img01">
                <div id="modal1caption"></div>
            </div>
        </div>
        <div class="grid-item">
            <img src="portfolio/DJI_0010.JPG" onclick="openModal(this.id)" alt="Fredrikstad Domkirke">
            <div class="overlay">
                <div class="text">Fredrikstad Domkirke</div>
            </div>
            <div id="modal2" class="modal">
                <span class="close" onclick="closeModal(this.id)">&times;</span>
                <img class="modal-content" id="img02">
                <div id="modal2caption"></div>
            </div>
        </div>
        <div class="grid-item">
            <img src="portfolio/DJI_0012.JPG" onclick="openModal(this.id)" alt="Fredrikstad Domkirke">
            <div class="overlay">
                <div class="text">Fredrikstad Domkirke</div>
            </div>
            <div id="modal3" class="modal">
                <span class="close" onclick="closeModal(this.id)">&times;</span>
                <img class="modal-content" id="img03">
                <div id="modal3caption"></div>
            </div>
        </div>
        <div class="grid-item">
            <img src="portfolio/DJI_0021.JPG" onclick="openModal(this.id)" alt="Fredrikstad Domkirke">
            <div class="overlay">
                <div class="text">Fredrikstad Domkirke</div>
            </div>
            <div id="modal4" class="modal">
                <span class="close" onclick="closeModal(this.id)">&times;</span>
                <img class="modal-content" id="img04">
                <div id="modal4caption"></div>
            </div>
        </div>
        <div class="grid-item">
            <img src="portfolio/2023-05-12-21-19-01-641.PNG" alt="Foten Café">
            <div class="overlay">
                <div class="text">Foten Café</div>
            </div>
            <div id="modal5" class="modal">
                <span class="close" onclick="closeModal(this.id)">&times;</span>
                <img class="modal-content" id="img05">
                <div id="modal5caption"></div>
            </div>
        </div>
    </div>
</div>

<?php include('assetts/footer.php'); ?>