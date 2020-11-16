<?php
    include 'database.php'; // Ctreated by Scott Smith
    $db = new Database();
    $days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'];

    function get_total_request_by($person, $campaign) {
        $db = new Database();
        $table = ($campaign == 2) ? "kit_requests_campaign_2" : "kit_requests";
        $starting_date  = date("Y-m-d", strtotime("last week monday"));
        $ending_date    = date("Y-m-d", strtotime("last week friday"));
        $data = $db->select("SELECT SUM(request) AS total FROM ".$table." where name = '".$person."' and date BETWEEN '".$starting_date."' AND '".$ending_date."'");
        return empty($data) ? 0 : intval($data[0]['total']);
    }

    function get_request_qty($person, $date, $campaign) {
        $db = new Database();
        $table = ($campaign == 2) ? "kit_requests_campaign_2" : "kit_requests";
        $data = $db->select("SELECT * FROM ".$table." WHERE name = '".$person."' AND date = '".$date."'");
        return empty($data) ? 0 : intval($data[0]['request']);
    }

    function get_delivered_qty($person, $campaign) {
        $db = new Database();
        $table = ($campaign == 2) ? "kit_delivered_campaign_2" : "kit_delivered";
        $data = $db->select("SELECT * FROM ".$table." WHERE name = '".$person."'");
        return empty($data) ? 0 : intval($data[0]['quantity']);
    }

    function get_total_request($date, $campaign) {
        $db = new Database();
        $table = ($campaign == 2) ? "kit_requests_campaign_2" : "kit_requests";
        $data = $db->select("SELECT SUM(request) AS total FROM ".$table." WHERE date = '".$date."'");
        return empty($data) ? 0 : intval($data[0]['total']);
    }

    function get_total_delivered($campaign) {
        $db = new Database();
        $table = ($campaign == 2) ? "kit_delivered_campaign_2" : "kit_delivered";
        $data = $db->select("SELECT SUM(quantity) AS total FROM ".$table."");
        return empty($data) ? 0 : intval($data[0]['total']);
    }
?>
