<?php
include "database.php";
session_start();
$username=$_SESSION['userin'];
$chatter=$_SESSION['username'];
$image=$_SESSION['image'];
$profile=$_SESSION['userimg'];
                        $query="SELECT * FROM `$username` WHERE username=\"$chatter\" OR sent=\"$chatter\";";
                    try{
                        $db=new PDO($dns,$user,$pass);
                        $statement2=$db->prepare($query);
                        $statement2->execute();
                         while($users=$statement2->fetch()){
                             $sent=$users['sent'];
                             $name=$users['names'];
                             $message=$users['messages'];
                             if($sent==$chatter)
                             {
                                 echo("<li class=\"message-me\">
                                 <span class=\"message-img me\">
                                     <img class=\"avatar-sm rounded-circle\" src='images/".$profile."'>
                                 </span>
                                 <div class=\"message-body\">
                                     <div class=\"message-header\">
                                         <small class=\"text-muted\">
                                             <span class=\"fa fa-time\"></span>
                                             <span class=\"minutes\"></span>
                                         </small>
                                         <strong class=\"messages-title\">You</strong>
                                     </div>
                                     <p class=\"messages-p me\">$message</p>
                                 </div>
                             </li>");
                             }
                             else{
                                 echo("<li class=\"message-you\">
                                 <span class=\"message-img you\">
                                     <img class=\"avatar-sm rounded-circle\" src='images/".$image."'>
                                 </span>
                                 <div class=\"message-body\">
                                     <div class=\"message-header\">
                                         <strong class=\"messages-title\">$name</strong>
                                         <small class=\"text-muted\">
                                             <span class=\"fa fa-time\"></span>
                                             <span class=\"minutes\" id=\"start\"></span>
                                         </small>
                                     </div>
                                     <p class=\"messages-p you\">$message</p>
                                 </div>
                             </li>");
                             }
                         }
                         $statement2->closeCursor();
                    }
                    catch(Execption $e)
                    {
                        echo ("Kindly enter correct username and password");
                    }
?>   