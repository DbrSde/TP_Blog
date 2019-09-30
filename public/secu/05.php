<html>
<form method="post" enctype="multipart/form-data">
    <input type="file" class="form-control" id="postImage" name="postImage" >
    <input type="submit" value="Envoyer" />
</form>

<?php
if( !empty($_FILES['postImage']['name']) )
{
    //https://www.r57.gen.tr/
    $tabExt = array('jpg','gif','png','jpeg','pdf');    // Extensions autorisees
    $extension  = pathinfo($_FILES['postImage']['name'], PATHINFO_EXTENSION);
    if(in_array(strtolower($extension),$tabExt)) {
        $nomImage = md5(uniqid()) . '.' . $extension;
        move_uploaded_file($_FILES['postImage']['tmp_name'], './' . $nomImage);
        $mime_type =  mime_content_type('./' . $nomImage);
        var_dump($mime_type);
        $mimeAllowed = array('application/pdf', 'image/gif', 'image/jpg', 'image/jpeg', 'image/png');
        if(!in_array(strtolower($mime_type),$mimeAllowed)){
            unlink('./' . $nomImage);
        }
    }
}
?>
</html>

