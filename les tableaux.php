//<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>les tableaux</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
<?php
//  Exercice 1 Créer un tableau mois et l'initialiser avec les valeurs
//  suivantes :

$mois = [
  "janvier",
  "fevrier",
  "mars",
  "avril",
  "mai",
  "juin",
  "juillet",
  "aout",
  "septembre",
  "octobre",
  "novembre",
  "decembre",
];
?>
<?php
//  Exercice 2 Avec le tableau de l'exercice 1,
// afficher la valeur de la troisième ligne de ce tableau.


echo $mois[2] ."</br>" ;
?>
<?php
   // Exercice 3
//   Avec le tableau de l'exercice , afficher la valeur de l'index 5.

echo $mois[4]."  </br>";

?>

<?php
 // Exercice 4
// Avec le tableau de l'exercice 1,
// modifier le mois de aout pour lui ajouter l'accent manquant.

echo $mois[7]="août";
 "  </br>"
?>
<?php
 // Exercice 5
 //Créer un tableau associatif avec comme index le numéro
// des départements des Hauts de France et en valeur leur nom.


$HDF = array(
  02 => "AISNE",
  59 => "NORD",
  60 => "OISE",
  80 =>"SOMME"
);
?>
</br>
<?php
// Exercice 6
//Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.

echo $HDF[59]."  </br>";
?>
<?php

 // Exercice 7
//Avec le tableau de l'exercice 5, ajouter la ligne
// correspondant au département de la ville de Reims.


$HDF[51]= "REIMS";
foreach($HDF as $key => $value){
echo 'numéro du département : '.$key.' nom : '.$value.'</br>';
}
?>
<?php

// Exercice 8
//Avec le tableau de l'exercice 1 et une boucle,
// afficher toutes les valeurs de ce tableau.

foreach ( $mois as $key => $value) {
  echo "mois de l'année : ".$value."</br>" ;
}

?>
<!-- Exercice 10
Avec le tableau de l'exercice 5, afficher
 toutes les valeurs de ce tableau ainsi que les clés associés.
Cela pourra être, par exemple, de la forme : "Le département" +
nom_departement + "a le numéro" + num_departement -->
<?php
foreach($HDF as $key => $value){
echo 'le département '.$value.' a le numero: '.$key.'</br>';
}

 ?>
</body>
</html>
