<?php 

session_start();


//user's data from index.php
if(isset($_POST['login']))
{
    $login = $_POST['login'];
}

if(isset($_POST['password']))
{
    $password = $_POST['password'];
}


//connection to database
$connect = mysqli_connect('localhost', 'root', '', 'genetic');
//checking connection
if(!$connect){
    echo "Connection error";
}
else
{
    //select values from table users
    $question = 'SELECT * FROM users WHERE login = "'.$login.'" AND password = "'.$password.'" ';
    $result = mysqli_query($connect, $question);
    
    if(!$result)
    {
        echo "Question error".mysqli_error($connect);
    }
    else
    {
        //create variable user
        $user = mysqli_fetch_row($result);
        
        if($user > 0)
        {
            //create session variable log
            $_SESSION['log'] = true;
            header('Location: main.php');
        }
        else
        {
            $_SESSION['log'] = false;
            header('Location: index.php');
        }
    }
}


?>
