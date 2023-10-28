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
        <title>Document</title>
        <link rel="Website Icon" type="png" href="Swami_Vivekananda_University,_Barrackpore_Logo.png">
    </head>

    <body>
        <?php

        if (isset($_REQUEST["sub"])) {
            $id = $_REQUEST['id'];
            $fname = $_REQUEST['fname'];
            $lname = $_REQUEST['lname'];
            $rno = $_REQUEST['rno'];
            $regno = $_REQUEST['regno'];
            $email = $_REQUEST['email'];
            $stream = $_REQUEST['stream'];
            $semester = $_REQUEST['semester'];
            $amo = $_REQUEST['amo'];
            $file = $_REQUEST['file'];

            $sql_statement = "UPDATE data_table SET id=" . $_REQUEST['id'] . ",
    fname='" . $_REQUEST['fname'] . "',
    lname='" . $_REQUEST['lname'] . "',
    rno='" . $_REQUEST['rno'] . "',
    regno='" . $_REQUEST['regno'] . "',
    email='" . $_REQUEST['email'] . "',
    stream='" . $_REQUEST['stream'] . "',
    semester=" . $_REQUEST['semester'] . ",
    amo=" . $_REQUEST['amo'] . ",
    file='" . $_REQUEST['file'] . "'
    WHERE id=" . $_REQUEST['id'];
            echo $sql_statement;
            $result = db_connect($sql_statement);
            if ($result) {
                echo "<script> window.location.href='datafetch.php'</script>";
            }
        }
        if (isset($_REQUEST["id"])) {
            $sql_statement = "SELECT * FROM data_table where id=" . $_REQUEST['id'];
            $result = db_connect($sql_statement);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                print_r($row);
            }
        }
        ?>
        <form action="" method="POST">

            STUDENT ID:- <td><input name="id" type="number" value="<?php echo $row['id'] ?>"></td>
            <br>
            STUDENT FNAME:- <td><input name="fname" type="text" value="<?php echo $row['fname'] ?>"></td>
            <br>
            STUDENT LNAME:- <td><input name="lname" type="text" value="<?php echo $row['lname'] ?>"></td>
            <br>
            ROLLNO:- <td><input name="rno" type="text" value="<?php echo $row['rno'] ?>"></td>
            <br>
            REGNO :- <td><input name="regno" type="text" value="<?php echo $row['regno'] ?>"></td>
            <br>
            EMAIL:- <td><input name="email" type="email" value="<?php echo $row['email'] ?>"></td>
            <br>
            STREAM:- <td><input name="stream" type="text" value="<?php echo $row['stream'] ?>"></td>
            <br>
            SEMESTER:- <td><input name="semester" type="text" value="<?php echo $row['semester'] ?>"></td>
            <br>
            AMOUNT:- <td><input name="amo" type="number" value="<?php echo $row['amo'] ?>"></td>
            <br>
            FILE:- <td><input name="file" type="text" value="<?php echo $row['file'] ?>"></td>
            <br>
            <td><input name="sub" type="submit" value="update"></td>
        </form>

    </body>

    </html>
<?php
} else {
    echo "you have no permission to access";
}
?>