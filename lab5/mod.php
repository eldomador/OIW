<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

try {
    $con = @new mysqli("localhost","root","","database");
        if ($con->connect_errno!=0){
            throw new Exception(mysqli_connnect_errno());
        }
        else{
            $sql = "SELECT * FROM `users`";
            $us=@$con->query($sql);

            $sql = "SELECT * FROM `users` ORDER BY id DESC";
            $qs=@$con->query($sql);

            $sql = "SELECT * FROM users WHERE created_at BETWEEN '2018-11-18 14:07:06' and '2018-11-18 14:15:10' ";
            $ws=@$con->query($sql);

            $sql = "SELECT address.city,address.street,address.number,users.username FROM address
            INNER JOIN users on address.id_user=users.id";
            
            if($sql === FALSE) { 
                die(mysql_error()); // TODO: better error handling
            }
            $es=@$con->query($sql);
  
        }

    
    
}

catch (Exception $n){
    echo $n;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">

        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to SQL questions.</h1>
        <p>select all</p>
        <?php
     while($zm=mysqli_fetch_array($us)){
         echo "<div>"."ID:".$zm["id"]." Username:".$zm["username"]." password:".$zm["password"]." created at:".$zm["created_at"]."</div>.<br>";
     }
     ?>
    <p>order by id desc</p>
    <?php
     while($zm=mysqli_fetch_array($qs)){
         echo "<div>"."ID:".$zm["id"]." Username:".$zm["username"]." password:".$zm["password"]." created at:".$zm["created_at"]."</div>.<br>";
     }
     ?>
     <p>select create bettwen</p>
     <?php
     while($zm=mysqli_fetch_array($ws)){
         echo "<div>"."ID:".$zm["id"]." Username:".$zm["username"]." password:".$zm["password"]." created at:".$zm["created_at"]."</div>.<br>";
     }
     ?>

 <p>Join</p>
     <?php
     while($zm=mysqli_fetch_array($es)){
         echo "<div>"." Username:".$zm["username"]." city:".$zm["city"]." street:".$zm["street"]." number:".$zm["number"]."</div>.<br>";
     }
     ?>

     



    </div>

</body>
</html>