<?php
include "config.php";
include ("includes/utilities.php");

redirect_login();
$title = "Newsletter";

?>

<html>
   <?php include ("includes/head.php") ?>
   <?php include ("includes/header.php"); ?>
    <body>
     
    <article>

  Rechercher un article par identifiant: <br/><br/>
        <form method="get" action="">
            <input type="number" value="1" name="id" placeholder="1"  >
            <input type="hidden" name="research"/>
            <input type="submit" value="Rechercher"  id="id" />
        </form>
       
       <?php
if (empty($_GET['id']))
{
    $_GET["id"] = 1;
}
if (!empty($_GET['id']))
{

    if (isset($_GET["research"]))
    {
        echo ("Résultats pour <strong>" . $_GET['id'] . "</strong>");
    }

    $articleID = mysqli_real_escape_string($con, $_GET['id']);
    $sql_article = "SELECT * FROM news WHERE Id = " . $articleID;
    $article_result = mysqli_query($con, $sql_article);
    $article = mysqli_fetch_assoc($article_result);

    if (count($article) > 0)
    {
        echo ("<h3>" . $article["title"]);
        if ($article['is_private'])
        {
            echo ("- <span style='color:red'> Article Privé </span>");
        }
        echo ("</h3>");
        echo ($article["datetime"] . "</br><br/>" . $article["content"] . "</br>");

        if ($article["filename"] != NULL)
        {
?>


<?php
            echo ("<img src='preview_image.php?src=" . $article["filename"] . "' />");
        }
    }
    else
    {
        echo ("<br/> <br/> Article inconnu ou supprimé");
    }
}
?>

</article>
<aside>
        <?php include ("get_articles.php"); ?>
</aside>
    </body>
</html>
