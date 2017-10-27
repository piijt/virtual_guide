<!DOCTYPE html>

<?php
require_once('inc/connect.php');

$id_url=$_GET['id'];

if (empty($id_url)) {
    $id_url='1';
}

$sql = "SELECT * FROM webshop_evolve";
$res = mysqli_query($conn, $sql);
?>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>History title</title>
</head>
<body>
  <h1>History title</h1>
  <img src="history/img.jpg" alt="">
  <p>The history</p>

  <a href="instascan.html">Scan another QR Code</a>

</body>
</html>
