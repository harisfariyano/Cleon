<?php
// Sertakan file config.php
require_once("config/config.php");

$sql = "SELECT * FROM tos_content";
$result = $conn->query($sql);

$tos_items = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tos_items[] = array(
            'title' => $row['title'],
            'deskripsi' => $row['deskripsi'],
            'icon_class' => $row['icon_class']
        );
    }
}

?>