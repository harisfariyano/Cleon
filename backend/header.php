<?php
  // Sertakan file config.php
  include("config/config.php");
  // Ambil informasi dari database
      $sql = "SELECT * FROM kontak";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $icon = $row['icon'];
          $email = $row['email'];
          $kontak = $row['kontak'];
          $alamat = $row['alamat'];
          $twitter = $row['twitter'];
          $facebook = $row['facebook'];
          $instagram = $row['instagram'];
      }

      $sql = "SELECT * FROM navbar";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $logo = $row['logo'];
          $home = $row['home'];
          $product = $row['product'];
          $my_cleon = $row['my_cleon'];
          $login = $row['login'];
      }

      $sql = "SELECT * FROM hero_content";
      $result = $conn->query($sql);
      $hero_data = $result->fetch_assoc();

?>