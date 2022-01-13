<?php
if(isset($_POST['submit'])){
    saveMsg();
}
if(isset($_POST['msgsend'])){
    include 'server.php';
    $umsg = $_POST['msg'];
    $id= $_POST['id'];
    usermsgsave($id,$umsg,$conn);
}
function saveMsg()
{

    if (isset($_POST['submit'])) {
        $conn = mysqli_connect("localhost", "root", "", "apro") or die("DB CONNECTION FAILED");
        $msg = mysqli_real_escape_string($conn, $_POST['msg1']);


        $randUsername = rand(10, 1004345);
        // $randUsername = 12;
        $randPassword = rand(1, 3444);

        $checkuser = "SELECT username from user where username = '{$randUsername}'";
        $useresult = mysqli_query($conn, $checkuser);
        if (mysqli_num_rows($useresult) > 0) {
            $randnewPass = rand(1, 34445);
            usercreation($randnewPass, $randPassword, $conn, $msg);


            echo "new Account created with different username";
        } else {
            usercreation($randUsername, $randPassword, $conn, $msg);
        }
    } else {
        header('location:../index.php');
    }
}
function usercreation($username, $userpassword, $conn, $msg)
{

    $createUserQuery = "INSERT INTO user (username,password)VALUES('{$username}','{$userpassword}')";
    $loginCreation = mysqli_query($conn, $createUserQuery) or die("QUERY FAILED");
    if ($loginCreation) {

        header('location: ../home.php');
        session_start();
        $_SESSION['isLoggedIn'] = 1;
        $_SESSION['uname'] = $username;
        // usermsgsave($username, $msg, $conn);
    }
}

function usermsgsave($username, $msg, $conn)
{
    $msgInsertQuery = "INSERT INTO msgs (username,msg)VALUES('{$username}','{$msg}')";
    $msgquery = mysqli_query($conn, $msgInsertQuery) or die(mysqli_error($conn));
    if($msgquery){
        echo 'Success';
    }
}
