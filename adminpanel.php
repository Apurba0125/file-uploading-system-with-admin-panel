<?php
require("connection.php");
if(isset($_SESSION['login'])){

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>admin panel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="Website Icon" type="png" href="Swami_Vivekananda_University,_Barrackpore_Logo.png">
        <style>
            body{
                margin:0px;
            }
            .header{
                font-family: poppins;
                justify-content: space-between;
                display: flex;
                align-items: center;
                padding: 0px 60px;
               background-color: #204969;
            }
            .header a{
                background-color: aliceblue;
                text-decoration: none;
                border-radius: 5px;
                padding: 5px;
            }
        </style>
    </head>
    <body>
    <div class="header">
        
        <h1>WELCOME TO ADMIN PANEL <?php echo $_SESSION['id']?></h1>
        <a href="adminlogout.php">LOGOUT</a>
    </div>
    <p>NOW WE CAN FETCH THE DATASET<a href="datafetch.php">CLICK HERE</a></p>
    </body>
</html>
<?php
}
else{
    echo "you have no permission to access";
}
?>