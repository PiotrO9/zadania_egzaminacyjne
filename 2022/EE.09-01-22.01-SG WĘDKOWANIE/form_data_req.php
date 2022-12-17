<?php
require("connect.php");

$name = $_POST['imie'];
$srname = $_POST['nazwisko'];
$descr = $_POST['tekst'];

$qrr = "INSERT INTO `karty_wedkarskie` (`imie`, `nazwisko`, `adres`, `data_zezwolenia`, `punkty`) VALUES ('$name', '$srname', '$descr', NULL, NULL)";
$result = $conn->query($qrr);

mysqli_close($conn);
header("Location: index.php"); 
exit();
?>


























































































<!-- Jan Kupczyk -->