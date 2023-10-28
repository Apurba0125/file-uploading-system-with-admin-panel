<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log out</title>
    <link rel="Website Icon" type="png" href="img/Swami_Vivekananda_University,_Barrackpore_Logo.png">
    <script type="text/javascript" src="jquery-3.6.3.js"></script>
    <script>
        $(document).ready(function() {
            window.alert("logout SUCCESSFULLY..!");
        })
    </script>
</head>

<body>

</body>

</html>
<?php
require 'connection.php';
session_unset();
session_destroy();
header("Location: admin.php");
?>