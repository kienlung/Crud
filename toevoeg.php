<?php
include ('pdo.php');

include ('functies.php');
?>

<?php
if (isset($_POST)) {
$voor = $_POST['Voornaam'];
$achter = $_POST['Achternaam'];
$max = BepMaxNr();

$sql = "INSERT INTO acteurs (NR, VOORNAAM, ACHTERNAAM) 
 VALUES (:nrmax, :vn, :an)";

 $stmt = $conn->prepare($sql);
 $stmt->bindParam(':nrmax', $max);
 $stmt->bindParam(':vn', $voor);
 $stmt->bindParam(':an', $achter);
 $stmt->execute();

header("Location:overzicht.php");
}
?>

