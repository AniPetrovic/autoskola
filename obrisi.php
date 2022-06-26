<?php
if (!isset ($_GET["id_zap"])){
echo "Parametar Id nije prosleđen!";
} else {
$id_zap=$_GET["id_zap"];
include "konekcija.php";
$sql="DELETE FROM zaposleni WHERE id_zap='".$id_zap."'";
if ($rezultat = $mysqli->query($sql)){
echo "1";
}
$mysqli->close();
}
?>
