<?php
$db = new mysqli('sql32.mcb.webhuset.no', '169664_drone_portfolio', '33driROPE', '169664_drone_portfolio');
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
?>