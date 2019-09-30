<html>
<form method="post">
    <input type="texte" name="pseudo" maxlength="10"/>
    <input type="submit" value="Connexion" />
</form>

<?php
/*
// # = Délimiteur
if (preg_match("#guitare#", "J'aime jouer de la guitare.")) { echo "VRAI"; }
if (preg_match("#Guitare#", "J'aime jouer de la guitare.")) { echo "FAUX"; }
//i = insensitive
if (preg_match("#Guitare#i", "J'aime jouer de la guitare.")) { echo "VRAI"; }
// | = or
if (preg_match("#guitare|Piano#", "J'aime jouer de la guitare.")) { echo "VRAI"; }
//^ = commence par, $ = se termine par
if (preg_match("#^Bonjour#", "Bonjour jeune padawan")) { echo "VRAI"; }
if (preg_match("#padawan$#", "Bonjour jeune padawan")) { echo "VRAI"; }
if (preg_match("#Bonjour$#", "Bonjour jeune padawan")) { echo "FAUX"; }
if (preg_match("#^padawan#", "Bonjour jeune padawan")) { echo "FAUX"; }
//[] = une des lettres lettres est présente
if (preg_match("#[onwz]#", "Bonjour jeune padawan")) { echo "VRAI"; }
if (preg_match("#^[onwz]#", "Bonjour jeune padawan")) { echo "FAUX"; }
// - = étendue
if (preg_match("#^[a-zA-Z0-9]#", "Bonjour jeune padawan")) { echo "VRAI"; }
//[^ = on ne veut pas de
if (preg_match("#[^0-9]#", "Bonjour jeune padawan")) { echo "VRAI"; }
// quantifieur : ? = 0 ou 1, + = 1 ou N, * = 0 ou N, {3} = strictement 3 fois, {3,5} de 3 à 5 fois, {3,} = minimum 3 fois
if (preg_match("#[efg]{4,}#", "eeeeee")) { echo "VRAI"; }
if (preg_match("#[efg]{4,}#", "eeffgg")) { echo "VRAI"; }
if (preg_match("#[efg]{4,}#", "efghijklm")) { echo "FAUX"; }
// () pour enchainer les regex
if (preg_match("#^Bla(bla)*$#", "Blablablablabla")) { echo "VRAI"; }

// caractères spéciaux : # ! ^ $ ( ) [ ] { } ? + * . \ |
// \ = échapement
if (preg_match("#\(très\) fatigué#", "Je suis (très) fatigué")) { echo "VRAI"; }
*/
$date1 = '05/12/2014';
$date2 = '05-12-2014';
$date3 = '2014-05-12';
if (preg_match("#([0-9]{2}[\/-]){2}[0-9]{4}#", $date2)) { echo "VRAI"; }


?>

</html>

