<?php 
if($_POST) {
    include 'database.php'; // Ctreated by Scott Smith
    $db = new Database();
    $table = ($_POST['campaign'] == 2) ? "kit_requests_campaign_2" : "kit_requests";
    $db->insert("INSERT INTO ".$table."(name, request, date) VALUES(:name, :request, :date) ON DUPLICATE KEY UPDATE request = :request", ['name' => $_POST['name'], 'request' => $_POST['request'], 'date' => $_POST['date']]);
    echo $_POST["campaign"];
} else {
    echo "Failed to update call data.";
}
