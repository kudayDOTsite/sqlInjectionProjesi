<?php


$servername = "localhost";
$username = "kuday";
$password = "sarikamyon";
$dbname = "SQLINJECTION";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn -> connect_errno) {
    echo "Kurulumu ne yazık ki başarılı bir şekilde yapamadın. Salt SQL hatası:<br> <strong>" 
    . $conn -> connect_error
    . "</strong><br>"
    ."Lütfen github projesindeki dokümantasyonu daha dikkatli okuyunuz.";

    exit();
  }
  else
  {
      echo "Tebrikler kurulum başarılı bir şekilde gerçekleştirildi. Eğitime başlayabilirsiniz.";
  }
?>