<?php
include ('pdo.php');
?>

<?php
if (isset($_POST)) {
$nr = $_POST['NR'];
$voor= $_POST['Voornaam'];
$achter= $_POST['Achternaam'];


$sql = "UPDATE acteurs SET VOORNAAM = '$voor', ACHTERNAAM = '$achter'
Where NR = '$nr'";
  header( "Refresh:3; url=overzicht.php");
       	
}
if ($conn->query($sql) == TRUE) {
    echo "De gewenste product is gewijzigd";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

