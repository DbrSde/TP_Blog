<html>
<form method="post">
    <input type="texte" name="pseudo" maxlength="10"/>
    <input type="submit" value="Connexion" />
</form>

<?php
if(isset($_POST['pseudo'])){
    echo "Bonjour ".$_POST['pseudo']." !";
}
?>
</html>

