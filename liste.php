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
		  $message="Le client a ete ajoute avec succes";
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
	<style>
body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f9fa; /* Couleur de fond douce */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Ombre pour le tableau */
        }
        th, td {
            border: 1px solid #ddd; /* Couleur de la bordure */
            padding: 12px; /* Espacement intérieur */
            text-align: left;
        }
        th {
            background-color: #007bff; /* Couleur d'arrière-plan de l'en-tête */
            color: white; /* Couleur du texte de l'en-tête */
        }
        tr:nth-child(even) {
            background-color: #f2f2f2; /* Couleur de fond pour les lignes paires */
        }
        tr:hover {
            background-color: #d1e7fd; /* Couleur au survol */
        }
        h1 {
            color: #343a40; /* Couleur du titre */
        }
        input[type="text"] {
            padding: 10px;
            width: 70%;
            margin-right: 10px;
            border: 1px solid #ccc; /* Bordure du champ de texte */
            border-radius: 4px; /* Coins arrondis */
        }
        button {
            padding: 10px 15px;
            background-color: #007bff; /* Couleur de fond du bouton */
            color: white; /* Couleur du texte du bouton */
            border: none;
            border-radius: 4px; /* Coins arrondis */
            cursor: pointer; /* Changement de curseur au survol */
        }
        button:hover {
            background-color: #0056b3; /* Couleur du bouton au survol */
        }
		</style>
		kaze
		
<h2>LA LISTE DES CANDIDATS OFFICIERS ENREGISTRES</h2>

<!-- HTML -->
<button onclick="window.location.href='index2.html';">Rechercher</button>
<style>
	table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Ombre pour le tableau */
        }
form {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

input[type=text] {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  width: 200px;
}

button[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 10px;
}
</style>
<div class="grid">
					<p id="demo">
					<table cellspacing="0">
						<thead>
							<tr>
							<th>nom</th>
							<th>matricule</th>
							<th>faculte</th>
							<th>boissons</th>
							<th>diner</th>
							
						</tr>
					</thead>
						<tbody>
							<!--Recuperation de la liste des exercices -->
							<?php
								$sql ="SELECT * FROM fete";
								$result=mysqli_query($conn,$sql);
								if(mysqli_num_rows($result)> 0) {
								//Parcourir les lignes de resultat
								while($row=mysqli_fetch_assoc($result)) {
								echo "<tr><td>".$row["nom"]."</td><td>".$row["matricule"]."</td><td>".$row["faculte"]."</td><td>".$row["boissons"]."</td><td>".$row["diner"]."</td></tr>";
								}
							}
						

							?>
						</tbody>
					</table>
				</p>
</div>
<script>
	const rows = Array.
	from(document.querySelectorAll('tr'));
	
	function slideOut(row) {
		row.classList.add('slide-out');
		}
		
	function slideIn(row, index) {
	setTimeout(function() {
		row.classList.remove('slide-out');
		},(index +5)*80);
		}
	rows.forEach(slideOut);
	rows.forEach(slideIn);
	
</script>
<button type="button" onclick="document.getElementById('demo').style.display='none '">Masquer</button>
<button type="button" onclick="document.getElementById('demo').style.display='block'">Afficher</button>
<br>
<h2>Pour S'inscrire cliquer<a href="index.php">ici</a></h2>