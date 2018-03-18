<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sourabh Agrawal Md5_cracker</title>
        <style media="screen">
        .button1, .button2 {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        .button1{
            background-color: #008CBA;
        }
        .button2{
            background-color: #f44336;;

        }
        </style>
    </head>
    <body>
        <h1 style="font-family:Arial; ">MD5 encoder</h1>
        <p style="color:green; font-size:130%; font-family:courier; font-weight:bold;">This application takes a digit and Calculate it's hash value</p>

        <form class="md5encoderf" action="md5encoder.php" method="get">
            <input type="text" name="digit" value="<?php
            if(!isset($_GET['submitencoder'])){
                echo "";
            }else{
                echo $_GET['digit'];
            }
            ?>" >
            <input type="submit" name="submitencoder" value="Calculate hash">
        </form>
        <?php
            if(isset($_GET['submitencoder'])){
                echo "<br>Hash value is: ".hash('md5', $_GET['digit'])."<br>";
            }
        ?>
        <br>

        <div class="button" style="text-align:center;">
            <button type="button" name="button" class="button1" onclick="window.location.href ='md5encoder.php'">Reset this page</button>
            <button type="button" name="button" class="button2" onclick="window.location.href ='index.php'">Go back to Md5 cracker</button>
        </div>

    </body>
</html>
