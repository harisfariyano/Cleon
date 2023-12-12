<?php
  // Sertakan file config.php
  include("config/config.php");
  // Ambil informasi dari database
      $sql = "SELECT * FROM about";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $judul = $row['judul'];
          $dsection = $row['dsection'];
          $jkontenp1 = $row['jkontenp1'];
          $gambarp1 = $row['gambarp1'];
          $kontenp1 = $row['kontenp1'];
          $jkontenp2 = $row['jkontenp2'];
          $gambarp2 = $row['gambarp2'];
          $kontenp2 = $row['kontenp2'];
      }

?>