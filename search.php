<?php
include "database.php";
session_start();
$userimg=$_SESSION['userimg'];
$names=$_POST['search'];
$query="SELECT * FROM users WHERE username LIKE '$names%';";
try{
    $db=new PDO($dns,$user,$pass);
    $statement=$db->prepare($query);
    $statement->execute();
    while($users=$statement->fetch())
    {
    $result=$users['username'];
    $image=$users['image'];
    $name=$users['name'];
    if($result!=$_SESSION['userin'])
    {
    echo("<a href=\"chatting.php?username=$result&image=$image&userimg=$userimg&name=$name\" class=\"chat\" target=\"chatting_frame\"><div class=\"contacts\"><img class=\"contacts_profile\" src='images/".$image."'><label>$result</label></div><a><hr>");
    }
    }
 $statement->closeCursor();
 }
 catch(Execption $e)
{
    echo ("Kindly enter correct username and password");
}
?>