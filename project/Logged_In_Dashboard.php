

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crowodfunding</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            box-sizing: border-box;
        }

        .row {
            display: flex;
        }

        .column {
            flex: 50%;
            padding: 10px;
            height: 50%;
        }
    </style>
</head>

<body>

    <?php
    session_start();

    include 'Header.php'; 
    //include 'home.php';

    
    
    ?>



        <?php

        if (isset($_SESSION['userName'])) {
            echo '<div class="row">';
            echo '<span style = "display:inline-block; width:36%; height:100%; text-align:left">';
            echo '<div class="column" >';
            include 'Account.php';
            echo '</div>';
            echo '</span>';
            echo '<div class="column" >';
            echo "<h2> Welcome " . $_SESSION['name'] . "</h2>";
            echo '</div>';
            echo '</div>';
        } else {
            $msg = "Error";
            header("location:Login.php");
        }

        ?>
    </span>
   
  
    

</body>

<br>
<br>
<br>
<br>
<br>
<br>

<?php include 'Footer.php'; ?>

</html>