<?php
    $current_page = 'portfolio';
    $page_title = "Portfolio - My Drone Photography";
    $page_css = 'portfolio';
    include('assetts/header.php');
    include('functions/connect.php');
?>

<!-- Portfolio Section -->
<div id="portfolio">
    <h2>Min Portefølje</h2>
    <div class="grid-container">
        <?php
            $sql = "SELECT filename, description FROM portfolio_images";
            $result = $db->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="grid-item">';
                    echo '<img src="portfolioImg/' . $row["filename"] . '" alt="' . $row["description"] . '">';
                    echo '<div class="overlay">';
                    echo '<div class="text">' . $row["description"] . '</div>';
                    echo '</div></div>';
                }
            } else {
                echo "0 results";
            }
            $db->close();
            ?>
    </div>
</div>

<?php include('assetts/footer.php'); ?>