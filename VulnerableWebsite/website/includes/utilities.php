<?php



// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}

function is_user_logged(){
    if(!isset($_SESSION['uname'])){
        
        return FALSE;
    }    
    return TRUE;

}

function get_users_info(){
   
    



}

function redirect_login(){
    if(!is_user_logged()){
    header('Location: login.php');
    }
}


?>