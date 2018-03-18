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
        <h1 style="font-family:Arial; ">MD5 cracker</h1>
        <p style="color:green; font-size:130%; font-family:courier; font-weight:bold;">This application takes an MD5 hash of a four digit pin and check all 10,000 possible four digit PINs to determine the PIN.</p>
        <div class="output">
            <p style="font-family:courier; font-size:120%; color:red;">Debug Output:</p>
            <?php
                $answer = "Not Found";
                if(isset($_GET['submit'])){
                    $md5 = $_GET['md5'];

                    $count = 0;
                    $n = 0;
                    echo "<table>";
                    $pre_time = microtime(true);
                    echo "<tr><th>Hash</th><th>Value</th></tr>";
                    while ($count <= 10000) {
                        $holder = str_pad( "$count", 4, "0", STR_PAD_LEFT );
                        $copymd5 = hash('md5',"$holder");
                        if($md5 === $copymd5){
                            $answer = $holder;
                            if ($n <= 15) {
                                echo "<tr><td>$copymd5</td><td>$holder</td></tr>";
                            }
                        break;
                        }
                        if ($n <= 15) {
                            echo "<tr><td>$copymd5</td><td>$holder</td></tr>";
                        }
                        $n++;
                        $count++;
                    }
                    $post_time = microtime(true);

                    echo "</table>";
                    echo "Total checks: $count<br>";
                    echo "Ellapsed time: ";
                    echo $post_time-$pre_time."<br>";
                }
                echo "<p><b>PIN: $answer</b></p>";
            ?>
        </div>
        <form class="md5f" action="index.php" method="get">
            <input type="text" name="md5" size="40" value="<?php
            if(!isset($_GET['submit'])){
                echo "";
            }else{
                echo $_GET['md5'];
            }
            ?>" >
            <input type="submit" name="submit" value="Crack MD5">
        </form>

        <div class="button" style="text-align:center;">
            <button type="button" name="button" class="button1" onclick="window.location.href ='index.php'" >Reset this page</button>
            <button type="button" name="button" class="button2" onclick="window.location.href ='md5encoder.php'" >Calculate the md5 value of a digit</button>
        </div>

    </body>
</html>
