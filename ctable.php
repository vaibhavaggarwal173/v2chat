        <?php
            session_start();
            $person=$_SESSION['people'];
            include "database.php";
            try{

                $db=new PDO($dns,$user,$pass);
                $query="create table `chatbox`.`{$person}` (username varchar(20), names varchar(20), messages varchar(10000), sent varchar(20), time varchar(20));";
                $statement=$db->prepare($query);
                $statement->execute();
                $statement->closeCursor();

            }catch(Exception $e){
                $error_message=$e->getMessage();
                echo "<p>Error Message: $error_message</p>";
            }
        ?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <!-- Fa fa awesome icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Resgistered</title>
        <style> 
            body{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <br><br>
        <div class="alert alert-success" role="alert">
        <h1>Thanks For Registering!!</h1>
        <h3>Account Created Successfully.</h3>
        <p><strong>You Can Chat with your loved ones.</strong></p>
         </div>
        <a class="btn btn-info" href="index.php" target="_self">Login</a>
    </body>
</html>