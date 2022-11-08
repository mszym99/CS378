<html>
<head>
</head>
<body>
<?php

        session_start(); // what tripped me up was using the sessions instead of just using post.
            if(isset($_POST['submit'])){
                if(isset($_POST['tasks'])){                    
                    $strtest = "";
                    echo "<h1>Selected Tasks</h1>";
                    foreach($_POST['tasks'] as $task){
                        echo("$task <br><br>");
                        $strtest .= $task."\n";
                    }
                    //echo $strtest;

                    $_SESSION['strnew'] = $strtest; 
                }
            }

                //check for key
            if(array_key_exists("export", $_POST)){
                export();
            }
            function export(){
                $strnew = $_SESSION['strnew'];
                //$stnew = $_POST['strnew']; 
                //implode("", $strnew);

                echo $strnew;

                $filename = "test.txt";
                $myFile = fopen($filename, 'w');


                $date = new DateTime();
                $date = $date->format("D, M d, Y");
                
                if(!$myFile){
                    die("Error file unknown");
                }
    $str = "\n";
    echo("<br>");
    fwrite($myFile, $date);
    fwrite($myFile, $str);
    echo("<br>");
    fwrite($myFile, $strnew);
    fclose($myFile);
    
}
?>
    <form method = "post">
    <input type = "submit" name = "export" value = "export"></form>
    </body>
</body>
</html>