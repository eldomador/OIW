<?php
session_start();
try {
    $con = @new mysqli("localhost","root","","database");
        if ($con->connect_errno!=0){
            throw new Exception(mysqli_connnect_errno());
        }
        else{
            $sql = "SELECT * FROM `users` WHERE 1";
            if ($us=@$con->query($sql))
            {
                $num=$us->num_rows;
                echo $num;
                $pom= $us->fetch_assoc();
                $_SESSION["id"]=$pom["id"];
                $_SESSION["username"]=$pom["username"];
                $_SESSION["password"]=$pom["password"];
                $_SESSION["created_at"]=$pom["created_at"];
            }
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
</head>
<body>
    <div class="page-header">

        <?php
        echo $num;
        for ($i=0;$num<=$i;$i++) {
            echo'<span>'.$_SESSION['id']." ".$_SESSION['username']." ".$_SESSION['password']." ".$_SESSION['created_at']."<br/></span>";
        }
                ?>
    </div>

</body>
</html>