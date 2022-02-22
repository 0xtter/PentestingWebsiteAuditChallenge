<?php
include "config.php";

if (isset($_POST['but_submit']))
{

    $uname = mysqli_real_escape_string($con, $_POST['txt_uname']);
    $password = mysqli_real_escape_string($con, $_POST['txt_pwd']);

    if ($uname != "" && $password != "")
    {

        $sql_query = "select * from users where username='" . $uname . "' and password='" . $password . "'";
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);

        $user = $row['id'];

        if (count($user) != 0)
        {
            session_start();
            $_SESSION['uname'] = $uname;
            $_SESSION["id"] = $user;
            header("Location: index.php");
        }
        else
        {
            header("Location: login.php");
        }
    }
    else
    {
        header("Location: login.php");
    }
}
?>
