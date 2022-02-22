<?php include_once("utilities.php"); ?>

<div id="header">

    <span class="inline">
    <h1> ISEN News      <?php if(isset($title)){echo(" <br/> <small>$title</small>"); } ?>  </h1>

    <nav>
    <span class="links">
    <a href="index.php">Accueil</a>
    <a href="news.php">Newsletter</a>

    <a href="add_article.php">Ajouter un article</a>
    <a style="color:red" href="reset.php">Reinitialiser</a>

</span>

</span>

<?php if(is_user_logged()){ 

$sql_profile = "SELECT * FROM profiles WHERE user_id =".$_SESSION['id'];
$profile_result = mysqli_query($con, $sql_profile);
while($profile = mysqli_fetch_assoc($profile_result)) {
    echo("Hello ".$profile['name']. "! ");

}

?>







    
<span class="inline" id="logout_btn">
    <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
</span>
<?php }  ?>
</nav>


</div>