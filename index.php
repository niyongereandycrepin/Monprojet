<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="kaze12";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){
		die("Connection failed:".mysqli_connect_error());
		}
		//apres avoir clic sur "Envoyer" envoie de donnees par post 
	if(count($_POST)>2){
		//recuperation et protection des donnees envoyes
		$nom=mysqli_real_escape_string($conn,$_POST["nom"]);
		$matricule=mysqli_real_escape_string($conn,$_POST["matricule"]);
		$faculte=mysqli_real_escape_string($conn,$_POST["faculte"]);
		$boissons=mysqli_real_escape_string($conn,$_POST["boissons"]);
		$diner=mysqli_real_escape_string($conn,$_POST["diner"]);
		$sql="INSERT INTO fete(nom,matricule,faculte,boissons,diner)
		VALUES('{$nom}','{$matricule}','{$faculte}','{$boissons}','{$diner}')";

		
		//Executer la requete d'insertion
		  if(mysqli_query($conn,$sql)){
		  $message="votre commande a ete envoye avec succes";
		} else {
			$message ="Error:".$sql."<br>".mysqli_error($conn);
	}

}
	//Les autres pages peuvent envoyer un message dans L'URL.On le recupere ici pour l'afficher
		//dans l'element "div.message"
		if(isset($_GET["message"])){
			$message=$_GET["message"];
	}
	?>
<!doctype>
<html>
<style>
	div{
			margin:auto;
			margin-bottom:20px;
		}
		.logo{
			background:url(poe.jpg) no-repeat;
			padding: 50px 50px 50px 50px;
			border-bottom-left-radius: 10px;
			border-bottom-right-radius: 10px;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
		}
body{
		background: #CCFFCC;
margin:50px;
padding:50px;
font-size:120%;
border:50px
}
.bordure{
	text-align:center;
	font-size:100%;
	border-width:2px;
	border-style:solid;
	border-color:transparent;
	border-radius:10px;
	border-width:1px;
	border-top-right-radius:500pX;
	border-top-left-radius:500px;
	border-bottom-right-radius:20px;
	border-bottom-left-radius:20px;
}
.message{
			background:#d35400;
			color:white;
			padding:5px;
			text-align: center;
		}
		label{
			font-size: 180%;
			color: black;
		}
		input{
			border: 2px solid rgba(255, 255, 255, .2);
			padding: 5px 5px 5px 5px;
			border-bottom-left-radius: 20px;
			border-bottom-right-radius: 20px;
			border-top-left-radius: 20px;
			border-top-right-radius: 20px;
		}
	.btn{
		width: %;
	height: 8%;
  font-size: 120%;
	}
	button{
		border: 2px solid blue;
		width: 200px;
		display: block;
		padding: 10px;
		text-align: center;
		margin: 0 auto;
		font-size: 22px;
		border-radius: 15px;
		background-color: #3498db;
		color: white;
		border:0;
		cursor: pointer;
	}
	a{
		color: olive;
	}
	select{
		width: 100%;
		border: 2px solid rgba(255, 255, 255, .2);
			padding: 5px 5px 5px 5px;
			border-bottom-left-radius: 20px;
			border-bottom-right-radius: 20px;
			border-top-left-radius: 20px;
			border-top-right-radius: 20px;
			box-shadow: 1px 1px 2px 1px grey;
	}
</style>
<head>
	<div class="logo">
<h1 style="color: transparent;">Commande pour la fete</h1>
</div>
<table width="1080" height="31" border="0">
  <tr>
    <th width="300"><!DOCTYPE html>
<html>
<head>
  <title>Page sécurisée</title>
  <style>
    /* Styles CSS */
  </style>
</head>
<body>
  <header>
    
</body>
</html><th></th>
    <th width="300"><h1 style="color: olive;" >Commande pour la fete</h1></th>
    <th><a href="liste.php" style="font-size: 180%;">la liste des commandes</a></th>
  </tr>
</table>

</head>
<body><?php if(isset($message)){
		echo "<div class='message'>".$message."</div>";
	}
	?>
<form action="index.php" method="POST">
<div class="bordure">
<table>
	<tr><th></th><th><h2>Identification</h2></th></tr>
	<tr>
<td><label for="nom">Nom </label></td>
<td><input type="text" id="nom" name="nom" required autofocus placeholder="saisi votre nom"></br></td>
</tr>
<tr>
	<td><label for="matricule">Matricule</label></td>
<td><input type="integer" id ="matricule" name="matricule" required  placeholder="saisi votre matricule"><br></td>
</tr>
<tr>
<td><label for="text">Faculte</label></td>
<td><select id="faculte" name="faculte">
<datalist id="faculte">
<option value="Genie Logiciel">Genie Logiciel</option>
<option value="Reseau Telcom">Reseau Telcom</option>
<option value="Genie Mecanique">Genie Mecanique</option>
<option value="Genie Civil">Genie Civil</option>
<option value="Ecopo">ecopo</option>
<option value="Gestion">Gestion</option>
<option value="UB">Universite du Burundi</option>
</datalist>
</select><br></td>
</tr>
<tr><th></th><th><h3>Commande</h3></th></tr>
<tr>
	<td><label for="boissons">Boissons</label></td>
<td><select id="boissons" name="boissons">
<datalist id="boissons">
<option value="primus">Primus</option>
<option value="amstel">Amstel</option>
<option value="Fanta">Fanta</option>
<option value="bechou">bechou</option>
<option value="bajou">bajou</option>
<option value="jus de grenadine">Jus de grenadine</option>
<option value="Mirinda">Mirinda</option>
<option value="Malti">Malti</option>
<option value="Cool up">Cool up</option>
</datalist>
</select><br></td>
</tr>
<tr>
<td><label for="diner">Votre plat </label></td>
<td><select id="diner" name="diner">
<datalist id="diner">
<option value="poulet">Poulet</option>
<option value="ragout">Ragout</option>
<option value="steck">steck</option>
<option value="poisson">poisson</option>
</datalist>
</select></td>
</tr>
<tr>
<td><button type="submit" class="btn">Envoyer</button></td>
</tr>
</table>
</form>
</body>
</div>
</html>