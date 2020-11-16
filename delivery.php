<?php
if($_POST) {
    include 'database.php'; // Ctreated by Scott Smith
    $db = new Database();
    $table = ($_POST['campaign'] == 2) ? "kit_delivered_campaign_2" : "kit_delivered";
    $db->insert("INSERT INTO ".$table."(name, quantity, date) VALUES(:name, :quantity, :date) ON DUPLICATE KEY UPDATE quantity = :quantity", ['name' => $_POST['name'], 'quantity' => $_POST['quantity'], 'date' => $_POST['date']]);
    echo $_POST["campaign"];
} else {
    echo "Failed to update call data.";
}