<?php
$not=0;
require "database.php";
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from users where username='$username';";
    try{
        $db=new PDO($dns,$user,$pass);
        $statement=$db->prepare($query);
        $statement->execute();
        $result=$statement->fetch();
        if($password==$result['password'])
        {
            session_start();
            $_SESSION['userin']=$username;
            $_SESSION['auth']=true;
            header("location:buttons.php");
        }
        else
        {
            $not=1;
        }
     }
    catch(Execption $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
}
if(isset($_POST['signup']))
{
    $filename=$_FILES["profile"]["name"];
    $folder="images/".$filename;
    $tempname=$_FILES["profile"]["tmp_name"];
    move_uploaded_file($tempname,$folder);
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $profile=$_FILES["profile"]["name"];
    $query="insert into users values(\"$name\",\"$email\",\"$username\",\"$password\",\"$profile\");";
    $query2="select username from users where username=\"$username\";";
    try{
        $db=new PDO($dns,$user,$pass);
        $statement=$db->prepare($query2);
        $statement->execute();
        $result=$statement->fetch();
        if($result==0)
        {
            try{
                $db=new PDO($dns,$user,$pass);
                $statement=$db->prepare($query);
                $statement->execute();
                session_start();
                $_SESSION['people']=$username;      
                header("location:ctable.php");
                }
            catch(Execption $e)
                {
                    echo "Connection failed: " . $e->getMessage();
                }
        }
        else
        {
            $not=2;
        }
    }
    catch(Exception $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
}
?>