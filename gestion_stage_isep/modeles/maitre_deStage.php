<?php include ('entete.php');?>
<table width="556" border="0" cellspacing="10">
	<tr>
		<td height="300" valign="top" bgcolor="#FFFFCC">
			<h6 >Systeme de gestion de Stages</h6>
			<?php 
				echo" <h1>Liste des Superviseur ou maitre de Stages</h1>";
				$link=mysqli_connect('127.0.0.1','root','','gestion_satge_isep_thes');
				if (!$link) {die('<p>Imposible de se connecter a la base :'.mysql_error().'</p>');}
				$base='gestion_satge_isep_thes';
				$db=mysqli_select_db($link,$base);
				if (!$db) {
					die('<p>Imposible d\utiliser la base :'.mysql_error().'</p>');}	
				$login=isset($_POST['login']);
				$U=isset($t);
				$sqlquery="select nom,prenom,login,pw from $U where login='$login'";
				$queryresult=mysqli_query($link,$sqlquery) or die ("erreur");
				echo" <table>
				<tr><td>PRENOM</td><td>NOM</td></table>";
				while ($row= mysqli_fetch_array($queryresult)) {
				echo" <td> <tr>".$row['prenom']." </tr></td>".$row['nom']." </tr></td>";
				echo "</table>";
			}
			?>
		</td>
	</tr>
	<?php 
include ('retour_menu.php');
include ('pieddepage.php');
?>		 
</table>    
				

