<html>
<head>

</head>
<body>
<?php
    if(isset($_GET['num'])){
        $num = $_GET['num'];
        $_GET['num'] = $num;

        if(is_numeric($num)){
            $prime = 0;
        for($i = 2; $i < $num; $i++){
            
            if($num % $i == 0){
                $prime ++;
            }
            else{
                break;
            }
        }
        isPrime($prime);
        }

    }
    function isPrime($prime){
        if($prime == 0){
            echo("This is a prime number");
        }
        else{
            echo("This is not a prime number");
        }
    }
    
    
    
?>

<form action="" method="GET">
    <p>Please enter a whole number: <p> <br>
    <input type="number" name="num">
    <input type="submit" name="sub" value="Go!">
    <br>
    <br>
    <br>
    
</form>
</body>
</html>