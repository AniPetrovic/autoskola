<?php
if (!isset ($_GET["unos"])){
echo "Parametar Unos nije prosleđen!";
} else {
$pomocna=$_GET["unos"];
include "konekcija.php";
$sql="SELECT id_zap,ime,prezime,posao FROM zaposleni WHERE ime LIKE '$pomocna%'ORDER BY ime";
$rezultat = $mysqli->query($sql);
if ($rezultat->num_rows==0){
echo "U bazi ne postoji ime koja počinje na " . $pomocna;
} else {
while($red = $rezultat->fetch_object()){
?>
<a href="#" onclick="place(this)"><?php  echo $red->ime." "; echo $red->prezime." "; echo $red->posao;?></a>
<br/>
<?php
}
}
$mysqli->close();
}
?>
