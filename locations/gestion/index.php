<?php

// c'est un comentaire

/*
c'est un comentaire sur plusieurs lignes
*/

/*echo "Bonjour c'est la D-WEB";
echo 'Bonjour c\'est la D-WEB'; // altgr+8
echo"<p>Bonjour c'est la D-WEB</p>";
?>
<h1>mon titre</h1>
*/
//phpinfo();


//une variable est un espace de mémoire


//comment decmarer une varible en php
$nom_variable ="";
$_nomVariable =""; //camelCase
$nomVariable ="";
$NomVariable =""; //je ne le vous conseille pas
$nomVariable;

/*$nomFiliere = "D-WEB";
//comment afficher la variable

echo "bonjour la $nomFiliere";
echo 'Bonjor la $nomFiliere'; // A NE PAS FAIRE!!
echo "Bonjour la ".$nomFiliere;
echo 'bonjour la'.$nomFiliere."c'est l'heure de manger";
*/

// variables et les chffres / nombres / additions

/*
$a = 1;
$b = 100;
$c = $a + $b;
echo $c;
echo"le résultat est :$c";

$c += $a;
echo $c;

echo$c += $c;


// les comparaisons

if ($a <=> $b)
{
    echo 1;
    echo'true';
}else{
    echo 0;
    echo 'false';
}
*/

// affichier contenu d'une variable
/*
var_dump($nomFiliere);
var_dump($e);

//affichier information d'une variable lisible

print_r($nomFiliere);
print_r($e);
*/

//tableaux
$tab = array();
$tab = [];

// donnes dans un tableau

$tab = array("d-web", "pmspa");
//var_dump($tab);
//br colonne // index /: valeur correspondant index + longueurde chaine

$tab2 = array($tab, $c, $e);
//var_dump($tab2);
//tableau d e3 elements = array(3) qui sont
/*
-index 0 = un tableau
-index 1 = une variable
-index 2 = une variable
*/

// pour afficher un tableau
//echo $tab2[0][0];

// afficher toutes les valeurs d'un tableau

//compter le nombre elements dans un tableau
$nbrElement = count($tab);

//boucle for
for($i=0;$i < $nbrElement;$i++)
{
    //echo $i;
    //comment afficher tout les tableaux
    //echo $tab[$i];
}

//bouche foreach
// deuxieme methode d'afficher tout les tableaux
foreach($tab as $filiere)
{
    //afficher valeur tableau
    echo $filiere;
}

// afficher valeur avec index
foreach($tab as $index => $filiere)
{
    echo "L'index : $index, correspond à la filière : $filiere.";
}

// afficher contenu de $tab2
foreach($tab2 as $value)
{
    
}



//autre type de boucle
$tab3 = ["un", "deux", "trois", "cinq", "stop"];

foreach($tab3 as $value)
{
    //afficher l'un des éléments du tableau
    // echo $tab3[2]; //trois
    if($value == "trois")
    {
        echo $value;
    }
}

//



// Afficher le contenu du tableau $tabMois
$tabMois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];

foreach($tabMois as $index => $value)
{
    echo "$index - $value";
}

// choisir/parametrer/personnaliser index de tableau
$tabVS = ["id-850" => "VERROUX", "id-851" => "RENAY", "id-852" => "VITULIN", "id-853" => "TERRINE"];

foreach($tabVS as $ID => $nomVS)
{
    // afficher id et nom VS
    echo "<pre>";
    echo "L'identifiant : $ID est attribué au $nomVS";
    echo "</pre>";
}

// une variable constante

// declarer une variable constante
define("JOURNEE", "24h");
// echo JOURNEE;

echo "A la fin de cette journée, nous aurons JOURNEE de plus <br>";
echo "A la fin de cette journée, nous aurons ".JOURNEE." de plus";
echo "A la fin de cette journée, nous aurons ".JOURNEE." de plus";

// addition de variable constante
define("NBR1", 50);
define("NBR2", 150);

$resultat = NBR1 + NBR2;
echo $resultat;

define("INFO", NBR1);
echo INFO;

define("URL", "https://www.nomdedomaine.com");
echo URL."/css/fichierStyle.css";

// structure de controle
$a = 10;
$b = -15;
$c = 0.50;
$e = $a + $c;

//IF
if ($a == $e) {
    // si c'est vrai, affiche une reponse
    echo "La réponse est vraie";
    
    // et mettre d'autres actions
    $e = $a;

    // si c'est faux, il ne se passe rien

}

// ELSE
if ($a == $e) {
    // si c'est vrai affiche quelque chose

} else {
    // si c'est faux affiche autre chose
    echo " La réponse est fausse.";

    // mettre des actions
    $e = 0;

    // si c'est faux ile ne se passe rien

}

if ($a > $b) {
    // si c'est vrai
    echo "a est plus grand que b";

} elseif ($a == $b) {
    echo "a est égal à b";
} else {
    echo "a est plus petit que b.";
}


// syntaxe alternative

?>

<?php if($a == 5) : ?>
<p>A est égal a 5</p>
<?php endif; ?>
<?php
$a = 5;
$b = 6;


if($a == 5): // c'est faux
    echo "a égal 5";
    echo "...";

elseif ($a == 6) : // c'est faux
    echo "a égal 6";
    echo "!!!";

else:   // c'est vrai
    echo "a ne vaut ni 5 ni 6";
endif;
?>

<?php
// operateur ternaire

// resultat ? si c'est  vrai : si c'est faux
echo $result ? $a == $b : "c'est faux";

// c'est égal à
if ($a == $b) {

    // affiche rien
} else {
    // affiche
    echo $result = "c'est faux";
}

// exercice
/* 
- Mettre en place un script pour autoriser les hommes d'un âge supérieur à 35 ans à écrire un livre.

- Mettre en place un script permettant de lister les personnes ayant réussi l'examen du code de la route. Voici les notes.

35,37,25,4,40,36,40,12,34,22,20,10,10
*/

$a = 40;




if ($a > 35) {
    // si c'est vrai
    echo "Il est autorisé a écrire un livre";
} else {
    echo "Il n'est pas autorisé à écrire un livre";
}



$codes = [35,37,25,4,40,12,34,22,20,10,10];

foreach($codes as $value)
{
    if($value > 34){

        echo $value;
    }
}