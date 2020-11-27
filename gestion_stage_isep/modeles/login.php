<?php include ('entete.php');?>
<table width="556" border="0" cellspacing="10">
	<tr>
		<td height="300" valign="top" bgcolor="#FFFFCC"><h6>Connexion au syst&egrave;me de gestion des stages</h6>
			<form name="formulaire1" method="POST" action="connexion.php">
				<p>
					<label>Para&egrave;tres de connexion :</label>
				</p>
				<p>
					<label><input type="radio" value="1" name="categorie"  checked>Apprenant</label>
					<br>
					<label><input type="radio" value="2" name="categorie"  checked>Maitre de stage</label>
					<br>
					<label><input type="radio" value="3" name="categorie"  checked>lieu</label>
					<br>
				</p>
				<p>LOGIN
					<input type="text" name="login">
					<label></label>
				</p>
				<p>pw
					<input type="password" name="pw">
					<label></label>
				</p>
			
				<p>
					<input type="submit" name="submet" value="Connexion">
				</p>
			</form>
			<p>&nbsp;</p>
		</td>
	</tr>
	
</table>
<?php include ('pieddepage.php');?>