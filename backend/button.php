<?php 
include("config/config.php");
$sql = "SELECT * FROM filter_button";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $tombol1 = $row['button1'];
          $tombol2 = $row['button2'];
          $tombol3 = $row['button3'];
          $tombol4 = $row['button4'];
          $tombol5 = $row['button5'];
          }
?>
