<html>
<body>
<h1>Formulaire de recherche</h1>
<form action="recherche1.php" method="GET">

<p>ANNEE ? <SELECT name="annee">

<?php

//1° - Connexion à la BDD
$base = new PDO('mysql:host=localhost; dbname=id20215400_cnamgreta', 'id20215400_boris', '=nq^^=vKz?FRiz7-');
$base->exec("SET CHARACTER SET utf8");

//2° - Préparation de requette et execution
$retour = $base->query('SELECT DISTINCT annee FROM movies;');

//3° - Lecture du resultat de la requette
while ($data = $retour->fetch()){
echo "<option>".$data['annee']."</option>";
}

?>
</SELECT>
</p>

<p><input type="submit"/></p>
</form>
</body>
</html>