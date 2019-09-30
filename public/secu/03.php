<html>
<form method="post">
    <input type="texte" name="pseudo" maxlength="10"/>
    <input type="submit" value="Connexion" />
</form>

<?php
if(isset($_POST['pseudo'])){
    echo "Bonjour ".$_POST['pseudo']." !";
}

//Controler la présence
if(isset($_POST['variable']) and !empty($_POST['variable'])) {

}else{
    $err = ['Il manque la donnée xxxxx'];
}

// Mettre les champs dans des variables pour traitement
$pass = stip_tag($_POST['password']);
$confirmPass = stip_tag($_POST['confirmPassword']);

if($pass <> $confirmPass){
    $err = ['Les mots de passe ne coincident pas'];
}

//Utiliser les fonctions PHP fournies
if(filter_var($mail, FILTER_VALIDATE_EMAIL) == false){
    $err = ['Mail invalide'];
}




?>
</html>

