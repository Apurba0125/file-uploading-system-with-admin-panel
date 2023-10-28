<?php
require("connection.php");
if (isset($_SESSION['login'])) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>datatable</title>
        <link rel="Website Icon" type="png" href="Swami_Vivekananda_University,_Barrackpore_Logo.png">
        <style>
            table,
            tr,
            td {
                border: 2px solid black;
            }
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
    <br>
    <p>HERE'S THE DATASET:- </p>
        <?php
        $sql_statement = "SELECT * FROM data_table";
        $result = db_connect($sql_statement);
        if (mysqli_num_rows($result) > 0) {
        ?>
            <table>
                <tr>
                    <td>STUDENT_ID</td>
                    <td>STUDENT_FNAME</td>
                    <td>STUDENT_LNAME</td>
                    <td>STUDENT_ROLLNO</td>
                    <td>STUDENT_RESNO</td>
                    <td>STUDENT_EMAIL</td>
                    <td>STREAM</td>
                    <td>SEMESTER</td>
                    <td>AMOUNT</td>
                    <td>FILE NAME</td>
                    <td>ACTION</td>

                </tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td> <?php echo $row['id'] ?> </td>
                        <td> <?php echo $row['fname'] ?> </td>
                        <td> <?php echo $row['lname'] ?> </td>
                        <td> <?php echo $row['rno'] ?> </td>
                        <td> <?php echo $row['regno'] ?> </td>
                        <td> <?php echo $row['email'] ?> </td>
                        <td> <?php echo $row['stream'] ?> </td>
                        <td> <?php echo $row['semester'] ?> </td>
                        <td> <?php echo $row['amo'] ?> </td>
                        <td> <?php echo $row['file'] ?> </td>
                        <td><a href="dataedit.php?id=<?php echo $row['id'] ?> ">edit</a></td>
                    </tr>
            <?php
                }
            }
            ?>
            </table>
    </body>

    </html>
<?php
} else {
    echo "you have no permission to access";
}
?>