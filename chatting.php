<?php
include "database.php";
session_start();
$username=$_SESSION['userin'];
$chatter=$_GET['username'];
$image=$_GET['image'];
$_SESSION['username']=$chatter;
$_SESSION['image']=$image;
$profile=$_SESSION['userimg'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Chat</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <!-- Fa fa awesome icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="chat.css">
    </head>
    <body>
                <div class="header bg-light">
                    <h5 style="text-transform:uppercase;"><?php echo($chatter); ?></h5>
                </div>
                <div class="chatbody">
                        <ul class="list-unstyled messages-list" id="cha">
                        <!-- <?php 
                    //     $query="SELECT * FROM `$username` WHERE username=\"$chatter\" OR sent=\"$chatter\";";
                    // try{
                    //     $db=new PDO($dns,$user,$pass);
                    //     $statement2=$db->prepare($query);
                    //     $statement2->execute();
                    //      while($users=$statement2->fetch()){
                    //          $sent=$users['sent'];
                    //          $name=$users['names'];
                    //          $message=$users['messages'];
                    //          if($sent==$chatter)
                    //          {
                    //              echo("<li class=\"message-me\">
                    //              <span class=\"message-img me\">
                    //                  <img class=\"avatar-sm rounded-circle\" src='images/".$profile."'>
                    //              </span>
                    //              <div class=\"message-body\">
                    //                  <div class=\"message-header\">
                    //                      <small class=\"text-muted\">
                    //                          <span class=\"fa fa-time\"></span>
                    //                          <span class=\"minutes\">10:30 AM</span>
                    //                      </small>
                    //                      <strong class=\"messages-title\">You</strong>
                    //                  </div>
                    //                  <p class=\"messages-p me\">$message</p>
                    //              </div>
                    //          </li>");
                    //          }
                    //          else{
                    //              echo("<li class=\"message-you\">
                    //              <span class=\"message-img you\">
                    //                  <img class=\"avatar-sm rounded-circle\" src='images/".$image."'>
                    //              </span>
                    //              <div class=\"message-body\">
                    //                  <div class=\"message-header\">
                    //                      <strong class=\"messages-title\">$name</strong>
                    //                      <small class=\"text-muted\">
                    //                          <span class=\"fa fa-time\"></span>
                    //                          <span class=\"minutes\" id=\"start\"></span>
                    //                      </small>
                    //                  </div>
                    //                  <p class=\"messages-p you\">$message</p>
                    //              </div>
                    //          </li>");
                    //          }
                    //      }
                    //      $statement2->closeCursor();
                    // }
                    // catch(Execption $e)
                    // {
                    //     echo ("Kindly enter correct username and password");
                    // }
                       ?>    -->
                            
                            <!--<li class="message-you">
                                <span class="message-img you">
                                    <img class="avatar-sm rounded-circle" src="images/pic.png">
                                </span>
                                <div class="message-body">
                                    <div class="message-header">
                                        <strong class="messages-title">You</strong>
                                        <small class="text-muted">
                                            <span class="fa fa-time"></span>
                                            <span class="minutes">10:30 AM</span>
                                        </small>
                                    </div>
                                    <p class="messages-p">Hi</p>
                                </div>
                            </li> -->
                        </ul>
                </div>
                <div class="footer bg-light">
                    <!-- <input type="file" id="file"> -->
                    <input type="text" style="width: 280px;height: 35px;border-radius: 2%;border: none;" id="question" placeholder="Type here.....">
                    <button id="send" onclick="send()"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </div>   
    </body>
</html>
<script src="chatting.js"></script>
<script>
var scrolled=$('.chatbody')[0].scrollHeight;
function loadXMLDoc() { 
    if($('.chatbody')[0].scrollHeight>scrolled)
    {
     $('.chatbody').scrollTop($('.chatbody')[0].scrollHeight);
     scrolled=$('.chatbody')[0].scrollHeight;
    }
document.getElementById('question').addEventListener('keyup', function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        document.getElementById("send").click();
    }
});
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("cha").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "myphpfile.php", true);
  xhttp.send();
}
setInterval(() => {
    loadXMLDoc();
},100);
window.onload=loadXMLDoc;
</script>