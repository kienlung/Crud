<!DOCTYPE html>
<head>
<link rel= "stylesheet" href="Overzicht.css">
</head>
<?php 
    include ('pdo.php');
   ?>     
<h2> CRUD Acteur </h2>

<br></br>
<a href="toevoeg_wijzig.php?mode=Toevoegen"><button>Nieuwe acteur</a></button><br>	
<table class="tabel">
<tr>
		<th>Nr</th>
		<th>Voornaam</th>
		<th>Achternaam</th>
		<th>Wijzigen</th>
		<th>Verwijderen</th>
	</tr>
	</br>
		
	<?php	
	$sql= "select * From acteurs";
	$result= $conn->query($sql);
		while($rows = $result->fetch()) {
?>
		 <tr>	  
				 <td> <?php echo $rows['NR'] ?> </td>
				 <td> <?php echo $rows['VOORNAAM']; ?> </td>
				 <td> <?php echo $rows['ACHTERNAAM'] ?> </td>
	        		  <td><a href="toevoeg_wijzig.php?mode=Wijzigen&&NR=<?=$rows['NR']?>" value="<?$rows['NR']?>" ><button>Wijzigen</a></button></td>
		         	<td><form action="delete.php?NR=<?=$rows['NR']?>" method ="post">
 			 <input type="hidden" name="Naam" value="<?=$nummer?>">
   			 <input type="submit" name="submit" value="Delete">
		</form></td>
				 </tr>

 <?php
 }
 ?>
</table>
</body>
</html>