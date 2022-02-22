<?php
include "config.php";
include ("includes/utilities.php");

$title = "Ajout d'article";

redirect_login();

?>

<html>
   <?php include ("includes/head.php") ?>
   <?php include ("includes/header.php"); ?>
    <body>
        <article>
<form  method="post" action="" enctype="multipart/form-data">     
    <label for="article_name">Nom de l'article :</label>
    <input type="text" id="article_name" name="article_name" required
       minlength="1" maxlength="100" size="50"><br/><br/>
       <textarea name="article_text" id="article_text" cols="50" rows="10"></textarea><br/><br/>
    <label for="article_image">Choisir une image d'illustration:</label>

<input type="file"
       id="article_image" name="article_image"
       accept="image/png, image/jpeg">
       <br/><br/>
       <label for="article_private">Article privé : </label>

       <input type="checkbox"  name="article_private" id="article_private"/>
       <br/><br/>
       <input type="submit" name="article_submit" value="Soumettre" />

</form>
</article>

<aside>

<?php
if (isset($_POST['article_submit']))
{

    //Gestion du fichier
    if (isset($_FILES["article_image"]))
    {
        $target_dir = "uploads/";
        $newfilename = date('dmYHis') . str_replace(" ", "", basename($_FILES["article_image"]["name"]));
        $target_file = $target_dir . $newfilename;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (move_uploaded_file($_FILES["article_image"]["tmp_name"], $target_file))
        {

        }
        else
        {
            echo "Il y a eu un problème avec l'import du fichier";
        }
    }

    $private = false;
    if (isset($_POST["article_private"]))
    {
        $private = true;
    }

    $sql = "INSERT INTO news (title, content, filename, is_private, author_id) VALUES (?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssii", $_POST["article_name"], $_POST["article_text"], $newfilename, $private, $_SESSION["id"]);
    $stmt->execute();
    $stmt->close();
    $con->close();
    echo ("<strong> Article ajouté !</strong>");
}

?>


</aside>
    </body>
</html>
