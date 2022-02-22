<?php

include ("config.php");

echo ("<h3>Derniers articles</h3>");

if (isset($_SESSION['id']))
{
    $id = $_SESSION['id'];
}
else
{
    $id = - 1;
}

$sql_article = "SELECT * FROM news WHERE is_private=FALSE or author_id =" . $id;
$article_result = mysqli_query($con, $sql_article);

while ($article = mysqli_fetch_assoc($article_result))
{

    $sql = "SELECT * FROM users WHERE id=?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $article['author_id']);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    echo ("<span style='");
    if ($article["is_private"] == True)
    {
        echo ("color:red");
    }
    else
    {
        echo ("color:black");
    }
    echo ("'>");

    echo ($article['title'] . " (" . $user['username'] . ") <a style='text-decoration:none' href=/news.php?id=" . $article['id'] . "> - Lire </a> <br/>");

}
echo ("</span>");

?>
