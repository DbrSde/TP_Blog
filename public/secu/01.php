<html>
<form method="post">
    <input type="texte" name="pseudo" />
    <input type="submit" value="Connexion" />
</form>

<?php
if(isset($_POST['pseudo'])){
    echo strip_tags("Bonjour ".$_POST['pseudo']." !");
}
?>
</html>

