<?php 
session_start();
include ('entete.php');?>
<table width="5556"  border="0" cellpadding="2" cellspacing="10"  >
		<tr>
			<td height="300" valign="top" bgcolor="#FFFFCC">
				<?php 
				$_SESSION['categorie']=isset($_POST['categorie']);
				$_SESSION['login']=isset($_POST['login']);
				$_SESSION['pw']=isset($_POST['pw']);
				echo" <h6>Systeme de gestion de Stages</h6>";
				$c=isset($_POST['categorie']);
				if ($c==1) {$t='apprenant';}
				elseif ($c==2) {$t='maitrestage';}
				else {$t='lieu';}
				$link=mysqli_connect('127.0.0.1','root','','gestion_satge_isep_thes') or die(erreur);
				
			
			if (!$link) {
				die('<p>Imposible de se connecter a la base :'.mysqli_error($link).'</p>');
				die('<p>Imposible d\utiliser la base :'.mysqli_error($link).'</p>');
			}	
				$Login=$_POST['login'];
				$sqlquery="select nom,prenom,login,pw from $t where login='' ";
				
				if (isset($queryresult)==1) {
					echo "<p>Login ou mots de pass Incorect</p>";
					echo "<p><a href='login.php'>login.php</a></p>";
				}
				else {
					
					echo "<p>Bienvenu <strong>".$row['prenom']." ".$row['nom']."</strong> "."</p>";
					echo "<p><a href='menu.php?'.SID'>Continuer</a></p>";
 						include ('deconexion.php');
					
				}
		?>
	</td>
</tr>
		
	</table>
	<?php 
 		include ('pieddepage.php');
 		?>



