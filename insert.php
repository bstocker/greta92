<html>
<body>
<h1>Insertion du film</h1>
<?php

$ID = $_GET['id'];
$TITRE= $_GET['titre'];
$GENRE = $_GET['genre'];
$ANNEE = $_GET['annee'];

echo $ID ." ".$TITRE." ".$GENRE." ".$ANNEE; 

//1° - Connexion à la BDD
$base = new PDO('mysql:host=localhost; dbname=id20215400_cnamgreta', 'id20215400_boris', '=nq^^=vKz?FRiz7-');
$base->exec("SET CHARACTER SET utf8");
$sql = 'INSERT INTO films VALUES('.$ID.',"'.$TITRE.'","'.$GENRE.'",'.$ANNEE.')';
//2° - Préparation de requette et execution
$retour = $base->query($sql);

?>
</body>
</html>