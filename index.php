<?php
include "log.php";
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <!-- Fa fa awesome icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>
            Blogging
        </title>
        <link href="navbar.css" rel="stylesheet">
        <!-- <link href="homepage.css" rel="stylesheet"> -->
        <style>
            #nav-placeholder{
                margin-bottom: 20px;
            }
            .label{
                background-image:url("images/homeimg.png");
                background-repeat:no-repeat;
                height:200px;
                background-size:100% 100%;
                background-attachment:fixed;
            }
            .guide{
                padding:30px;
            }
            .img-card{
                box-shadow: 2px 3px 5px #888888;
                width:1000px;
                height:500px;
            }
            .card{
                padding:10px;
            }
            .swipe:hover{
                background-color:rgba(0, 0, 0, 0.397);
            }
        </style>
    </head>
    <body>
    <div id="nav-placeholder">

    </div>

<script>
$(function(){
  $("#nav-placeholder").load("navbar.html");
});
</script>
    <br><br>
    <div style="background-image: linear-gradient(to right, white,white,skyblue);height:700px;padding:100px;">
      <div style="display: inline-block;" >
      <img id="head-img" src="images/home.jpg" height="400">
      </div>
      <div class="header" style="display: inline-block;">
      <h1 style="color: darkblue;">V2 Chat</h1>
      <p style="color: darkblue;">connect with your loved ones!</p>
      <a class="btn btn-primary" href="#learn">Take a tour</a>
      </div>
    </div>
    <div class="label">
    </div>
<div id="learn" class="guide">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active card" data-bs-interval="5000">
        <table>
            <tr>
                <td><img class="img-card" src="images/friends.jpg"></td>
                <td style="padding:40px;">
                <h4>Connect with your friends!</h4>
                <p>Tell your friends to join our community.</p>
                </td>
            </tr>
        </table>  
    </div>
    <div class="carousel-item card" data-bs-interval="5000">
    <table>
            <tr>
                <td><img class="img-card" src="images/stay.png"></td>
                <td style="padding:40px;">
                <h4>Stay connected!</h4>
                <p>Always be in touch with each other with our live chatting system.</p>
                </td>
            </tr>
    </table> 
    </div>
  </div>
  <button class="carousel-control-prev swipe" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next swipe" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<hr>
<div id="contact" class="card">
    <h3>Contact Us:</h3>
    <p class="text-muted">Email:aggarwalvaibhav173@gmail.com</p>
    <p class="text-muted">Phone:9988914426</p>
    <p class="text-muted">Address:#181, Type-3 SLIET CAMPUS, Longowal.</p>
    <p></p>
</div>
</div>
    </body>
</html>
<script src="navbar.js"></script>
<script>      
            window.onload = function(){
                var not=<?php echo($not);?>;
                console.log(not);
                if(not==1)
                {
                    // document.getElementById("log").style.display="block";
                    document.getElementById("error").innerHTML="Invalid Password!";
                }
                if(not==2)
                {
                    // document.getElementById("sign").style.display="block";
                document.getElementById("msg2").innerHTML="Username Already Exists! Please try another one.";
                }
            }
</script>