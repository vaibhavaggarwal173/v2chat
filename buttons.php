<?php
session_start();
if(!$_SESSION['auth'])
{
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Fa fa awesome icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <!-- Fa fa awesome icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- <link rel="stylesheet" type="text/css" href="profile.css" media="screen"/> -->
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>
            Buttons
        </title>
        <style>
            
            .profile{
                width: 30px;
                height: 30px;
                 border-radius:50%;
                /*display: block;
                margin: 20px; */
            }
            .check{
                padding: 20px;
                box-shadow: 0px 0px 2px #888888;
                border-radius:15px 0px 0px 15px;
                max-width: 300px;
                height: 500px;
                /* background-color:rgba(255, 228, 196, 0.367); */
                z-index:1;
                margin-left:20%;
                margin-top:4.5%;
                overflow:scroll;
            }
            .contacts_profile{
                width:30px;
                height:30px;
                border-radius:50%;
                float:left;
                /* margin-top:0px;  */
            }
            .contacts{
                font-size:20px;
                padding:5px;
                text-align:center;
            }
            #frame{
                /* right: 50px; */
                /* left:40%; */
                /* bottom: 110px; */
                position:absolute;
                top:17.9%;
                margin-left:42%;
                z-index: 1;
                height: 500px;
                width: 550px;
                border-radius:0px 15px 15px 0px;
                /* display: none;  */
                box-shadow: 0px 0px 2px #888888;
                background-color:white;
                /* border:groove 1px; */

            }
            .chat{
                text-decoration:none;
                text-transform:capitalize;
                color:black;
                cursor: pointer;
            }
            #searched1{
                position:absolute;
                top:53px;
                margin-left:30px;
                background-color:white;
                width:450px;
                z-index:1;
                border-radius:5px;
                box-shadow: 2px 5px 10px #888888;
            }
            #search{
                max-width:450px;
                margin-left:20px;
            }
            .i{
                margin-left:60%;
            }
        </style>
    </head>
    <body>
<div id="nav-placeholder">
<nav id="nav-bar" class="navbar navbar-expand-lg bg-light bg-gradient">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <input class="form-control me-2" type="input" id="search" placeholder="Search here..." value="">
          <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
          <div class="dropdown i">
          <a style="color: antiquewhite;" class="nav-link" href="buttons.php" data-bs-toggle="dropdown">
          <?php
include "database.php";
session_start();
$username=$_SESSION['userin'];
$query2="SELECT * FROM `users` WHERE username=\"$username\" ";
try{
    $db=new PDO($dns,$user,$pass);
    $statement2=$db->prepare($query2);
    $statement2->execute();
     while($users=$statement2->fetch()){
         $userimg=$users['image'];
         $_SESSION['userimg']=$userimg;
         $_SESSION['name']=$users['name'];
     }
     echo("<img class=\"card-img-top profile\" src='images/".$userimg."'>");
     $statement2->closeCursor();
}
catch(Execption $e)
{
    echo ("Kindly enter correct username and password");
}
?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
           <li><a class="dropdown-item" href="buttons.php">Home</a></li>
           <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
          </div>
      </div>
    </div>
</nav> 
</div>
<div id="searched1">
</div>

<div>
    <fieldset class="check">
        <legend style="text-transform:uppercase;text-align:center;font-size:20px;">messages</legend>
        <hr>
        <?php
        $query="SELECT DISTINCT(username),names FROM $username;";
        try{
            $db=new PDO($dns,$user,$pass);
            $statement2=$db->prepare($query);
            $statement2->execute();
             while($users=$statement2->fetch()){
                 $result=$users['username'];
                 $names=$users['names'];
                 if($result!=$username)
                 {
                 $query3="SELECT * FROM `users` WHERE username='$result';";
                 try{
                    $db=new PDO($dns,$user,$pass);
                    $statement3=$db->prepare($query3);
                    $statement3->execute();
                    $img=$statement3->fetch();
                    $image=$img['image'];
                    $name=$img['name'];
                 echo("<a href=\"chatting.php?username=$result&image=$image&userimg=$userimg&name=$name\" class=\"chat\" target=\"chatting_frame\"><div class=\"contacts\"><img class=\"contacts_profile\" src='images/".$image."'><label>$names</label></div><a><hr>");
                 $statement3->closeCursor();
                 }
                 catch(Execption $e)
                {
                    echo ("Kindly enter correct username and password");
                }
            }
            }
             $statement2->closeCursor();
        }
        catch(Execption $e)
        {
            echo ("Kindly enter correct username and password");
        }
        ?>
    </fieldset>
    <!-- <img style="height:200px;width:100%;" src="images/label.png"/> -->
    <iframe id="frame" name="chatting_frame"></iframe>
    </div>
    </body>
</html>
<script>
$(document).ready(function(){
    // $('.chat').click(function(){
    //     $('#frame').slideToggle();
    // })
    $('#search').on('keyup',function(){
        var search=$('#search').val();
        console.log(search);
        if(search=="")
        {
            $('#searched1').html("");
        }
        else
        {
        jQuery.ajax({
        url:'search.php',
        type:'POST',
        data:{'search':search},
         success:function(answer){
            // console.log(answer);
        //     var answer='<li class="message-you">'+
        //     '<span class="message-img you">'+
        //         '<img class="avatar-sm rounded-circle" src="images/chatbot.png">'+
        //     '</span>'+
        //     '<div class="message-body">'+
        //         '<div class="message-header">'+
        //             '<strong class="messages-title">You</strong>'+
        //             '<small class="text-muted">'+
        //                 '<span class="fa fa-time"></span>'+
        //                 '<span class="minutes"> '+get_time()+'</span>'+
        //             '</small>'+
        //         '</div>'+
        //         '<p class="messages-p you">'+answer+'</p>'+
        //     '</div>'+
        // '</li>';
         $('#searched1').html(answer);
         }    
    })
    }
    })
})
</script>
