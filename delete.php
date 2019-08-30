<?php
include ('pdo.php');
?>

<?php
if (isset($_POST)) {

$nummer = $_GET['NR'];

$sql = "DELETE FROM acteurs Where NR =:nr";

$stmt = $conn->prepare($sql);	
	$stmt->bindParam(':nr', $nummer);
	$stmt->execute();
	header("Location: {$_SERVER['HTTP_REFERER']}");
}
?>

