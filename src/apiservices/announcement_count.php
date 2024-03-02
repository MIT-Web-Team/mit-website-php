<?php
require 'dbconnect.php';

$sql = "SELECT * FROM announcement WHERE DATE(announcementDate) > DATE_SUB(CURDATE(), INTERVAL 7 DAY)";
$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode(count($data));
?>