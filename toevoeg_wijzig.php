<!DOCTYPE html>
<head>
	<link rel= "stylesheet" href="overzicht.css">
</head>

<?php

include ('pdo.php');

$mode = $_GET['mode'];

if($mode == "Wijzigen"){
$nr = $_GET['NR'];	
	$sql= "select * From acteurs
	Where NR = $nr";
	$result= $conn->query($sql);
		while($rows = $result->fetch()) {

		$voor= $rows['VOORNAAM'];
		$achter= $rows['ACHTERNAAM'];

		$action = "update.php";
		$modes = "Wijzigen";
	}
  	}elseif($mode == "Toevoegen"){
  		$action = "toevoeg.php";
  		$voor = NULL;
  		$achter = NULL;
  		$modes = "Toevoegen";
  }
   ?>
<h2> CRUD Acteur </h2>

<p><b><?php echo $modes?></b></p>
<form action="<?=$action?>" method="post">
<input type="hidden" name="NR" value="<?=$nr?>">
Voornaam:<br> <input type="text" name="Voornaam" value="<?=$voor?>"><br><br>
Achternaam:<br><input type="text" name="Achternaam" value="<?=$achter?>"><br><br>
<input type="submit" value="Opslaan">
 <input type="reset" value="Cancel">
</form>
</br>