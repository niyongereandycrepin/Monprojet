<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="kaze12";
// Connexion à la base de données
$conn = new mysqli($host, $user, $pass, $db);

// Vérifiez la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Récupérer la requête de recherche
$query = isset($_GET['query']) ? $conn->real_escape_string($_GET['query']) : '';

// Effectuer la requête de recherche
$sql = "SELECT * FROM fete WHERE  matricule LIKE '%$query%' OR faculte LIKE '%$query%' OR boissons LIKE '%$query%' OR diner LIKE '%$query%'";
$result = $conn->query($sql);

// Afficher les résultats
if ($result->num_rows > 0) {
   echo "<table>";
    echo "<tr><th>Nom</th><th>Matricule</th><th>faculte</th><th>Boissons</th><th>Diner</th></tr>"; // En-tête du tableau
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['nom']) . "</td>";
        echo "<td>" . htmlspecialchars($row['matricule']) . "</td>";
        echo "<td>" . htmlspecialchars($row['faculte']) . "</td>";
        echo "<td>" . htmlspecialchars($row['boissons']) . "</td>";
        echo "<td>" . htmlspecialchars($row['diner']) . "</td>";
    }
    echo "</table>";
} else {
    echo "Aucun résultat trouvé.";
}

// Fermer la connexion
$conn->close();
?>