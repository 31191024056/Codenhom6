<!-- Dùng để kết nối CSDL -->
<?php
    $mysqli = new mysqli("localhost","root","","db_deerfootwear");
    // Check connection
    if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQLi" . $mysqli->connect_error;
      exit();
    }
?>