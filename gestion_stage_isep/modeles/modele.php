<?php include ('entete.php');?>
<table width="556" border="0" cellspacing="10">
	<tr>
		<td height="300" valign="top" bgcolor="#2980b9">
			<h6>Systeme de gestion de Stages a l isep</h6>
			<?php 
				$_SESSION['categorie']=isset($_POST['categorie']);
				$_SESSION['login']=isset($_POST['login']);
				$_SESSION['pw']=isset($_POST['pw']);
				echo" <h6>Systeme de gestion de Stages</h6>";
				$c=isset($_POST['categorie']);
				if ($c==1) {$t='apprenant';}
				elseif ($c==2) {$t='maitreStage';}
				else {$t='lieu';}
				// Creating a database connection

				$connection = mysqli_connect("127.0.0.1", "root", "", "gestion_satge_isep_thes");
				if (!$connection) {
					die("Database connection failed: " . mysqli_connect_error());
				}
			
			
				// Selecting a database 
				$dbname="gestion_satge_isep_thes";
				$db_select =mysqli_select_db ($connection , $dbname );
				if (!$db_select) {
					die("Database selection failed: " . mysqli_connect_error());
				}
			
			
	
				$login=isset($_POST['login']);
				$sqlquery="select nom,prenom,login,pw from $t  where login='$login'" or die(erreur);;
				$queryresult=mysqli_query($connection ,$sqlquery);
				//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); 
				$row=mysqli_fetch_array($sqlquery);
				echo" <p>Session de  <strong>".$row['prenom']." ".$row['nom']."</strong> "."</p>";
				echo"<h1>Faite votre choix</h1> ";
				if ($c==1) {
echo"<p>Obtenir la liste des lieux et dates de vos stages <a href='stages_apprenant.php?SID'>ICI</a></p> ";
echo"<p>Savoir ou vous etier en stage a un date donne  <a href='stages_apprenant_pardate.php?SID'>ICI</a></p> ";
				echo"<p>Obtenir la liste des Maitre de stage ou Superviseur  <a href='maitre_deStage.php?SID'>ICI</a></p> ";
				echo"<p>Obtenir la liste des Apprenant present dans un meme endroid un meme jours <a href='maitre_deStage.php?SID'>ICI</a></p> ";
}
if ($c==2) {
				echo"<p>Obtenir la liste des Apprenant que vous superviser <a href='maitre_deStage.php?SID'>ICI</a></p> ";
				echo"<p>Ajouter un Apprenant <a href='ajouter_apprenant.php?SID'>ICI</a></p> ";
				echo"<p>Ajouter un stage a un Apprenant  <a href='maitre_deStage.php?SID'>ICI</a></p> ";
}
if ($c==3) {
				//je reviendrez ici plus tard dema sonouooooooooooooooooooo
}





		?>

		</td>
	</tr>
	
</table>
<?php include ('deconexion.php');

 include ('pieddepage.php');?>