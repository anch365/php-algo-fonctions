<?php
// EXERCICE 1 
function isValide()
{
    return true;
}

// EXERCICE 2
function giveString(string $uneChaineRandom): string
{
    return $uneChaineRandom;
}

// EXERCICE 3
function giveConcat(string $firstString, string $secondString): string
{
    return "$firstString $secondString";
}

// EXERCICE 4
function giveNumber(string $reponseOne, string $reponseTwo): string
{
   if ($reponseOne > $reponseTwo) {
    return "Le premier nombre est plus grand";
   } elseif ($reponseOne < $reponseTwo) {
    return "Le premier nombre est plus petit";
   } else {
    return "Les deux nombres sont identiques";
   }
   
}

// EXERCICE 5
function nbrString(int $nbr, string $lettre): string
{
return "$nbr $lettre";
}

// EXERCICE 6
function phrasePresentation(string $nom, string $prenom, int $age): string
{
    return "bonjour $nom $prenom, tu as $age ans";
}

// EXERCICE 7
function phrasePersonnalité(int $old, string $genre): string
{
   if ($old >= 18) {
    $ageStatut = "majeur";
   } else {
   $ageStatut = "mineur";
   }

   if ($genre === "homme") {
    return "Vous êtes un homme et vous êtes $ageStatut";
   } elseif ($genre === "femme") {
    return "Vous êtes une femme et vous êtes $ageStatut";
   } {
    return "Genre non reconnu et vous êtes $ageStatut";
   }
   
}

// EXERCICE 8
function sommeNumber(int $nbrOne = 0, int $nbrTwo = 0, int $nbrThree = 0): int
{
return $nbrOne + $nbrTwo + $nbrThree ;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Exercice 1</h2>
    <?php
    if (isValide()) { ?>
        <p><?= "True" ?></p>
    <?php } ?>

    <h2>Exercice 2</h2>
    <p>Résultat de la fonction giveString : <?= giveString("Hello World !") ?></p>

    <h2>Exercice 3</h2>
    <p>Résultat de la fonction giveConcat : <?= giveConcat("Bonjour", "Anchoura") ?></p>

    <h2>Exercice 4</h2>
    <p>Les trois résultats possible : <?= giveNumber(54, 54) ?></p>

    <h2>Exercice 5</h2>
    <p>La concaténation d'un nombre et d'une châine de caractère : <?= nbrString(23, "Bananes") ?></p>

    <h2>Exercice 6</h2>
    <p>Phrase courte de présentation : <?= phrasePresentation("Anchoura", "Abdou", 24) ?></p>

    <h2>Exercice 7</h2>
    <p>Fonction qui prend l'âge et le genre d'une fonction : <?= phrasePersonnalité(25, "homosexuel") ?></p>

    <h2>Exercice 8</h2>
    <p>Une fonction qui fait la somme de 3 nombres : <?= sommeNumber(12, 5) ?></p>
</body>

</html>