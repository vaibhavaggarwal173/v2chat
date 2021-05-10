<?php
include "database.php";
$username=$_POST['user'];
$message=$_POST['message'];
$name=$_POST['name'];
session_start();
$sender=$_SESSION['userin'];
$sender_name=$_SESSION['name'];
$query="INSERT INTO `chatbox`.`{$username}`(`username`, `names`, `messages`) VALUES(\"$sender\",\"$sender_name\",\"$message\");";
$query2="INSERT INTO `chatbox`.`{$sender}`(`username`, `names`, `messages`, `sent`)VALUES(\"$username\",\"$name\",\"$message\",\"$username\")";
try{
    $db=new PDO($dns,$user,$pass);
    $statement=$db->prepare($query);
    $statement->execute();
    $statement2=$db->prepare($query2);
    $statement2->execute();
}
catch(Execption $e)
{
     echo "Connection failed: " . $e->getMessage();
}
// echo("
// <html>
//     <head>
//         <title>
//             Message Sent
//         </title>
//         <style>
//             body{
//                 text-align:center;
//                 background-image: url(\"https://st3.depositphotos.com/1145675/17400/i/1600/depositphotos_174007186-stock-photo-group-friends-mobile-phones-chatting.jpg\");
//             }
//         </style>
//     </head>
//     <body>
//         <h1>Message Sent Successfully!!</h1>
//     </body>
// </html>");
?>