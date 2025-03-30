<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche</title>
</head>
<body>
    <form id="searchForm" action="rechercher.php" method="GET">
        <input type="text" name="query" placeholder="Rechercher..." required>
        <button type="submit">Rechercher</button>
    </form>
    <div id="results"></div>

    <script>
        document.getElementById('searchForm').onsubmit = function(event) {
            event.preventDefault(); // Empêche le rechargement de la page

            const query = this.query.value;
            fetch(`recherche.php?query=${encodeURIComponent(query)}`)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('results').innerHTML = data;
                });
        };
    </script>
</body>
<?php
$servername="localhost";
  $username="root";
  $password="";
  $dbname="kaze1";
// Connexion à la base de données
$conn = new mysqli($host, $user, $pass, $db);

// Vérifiez la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Récupérer la requête de recherche
$query = isset($_GET['query']) ? $conn->real_escape_string($_GET['query']) : '';

// Effectuer la requête de recherche
$sql = "SELECT * FROM fete WHERE nom LIKE '%$query%'";
$result = $conn->query($sql);

// Afficher les résultats
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div>" . htmlspecialchars($row['nom']) . "</div>";
    }
} else {
    echo "Aucun résultat trouvé.";
}

// Fermer la connexion
$conn->close();
?>