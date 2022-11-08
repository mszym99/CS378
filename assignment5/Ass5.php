<html>
<head>
</head>

<body>
<?php
    if(isset($_POST['sub'])){
        $seq = $_POST['textbox'];
        $seq = strtoupper($seq);
       // echo($seq);
        $seq = str_replace(['.',',','!','?','/','(',')','[',']','1','2','3','4','5','6','7','8','9'], ' ', $seq);
        //echo($seq);
        $seq = str_replace(['  ', '   ', '         '], '', $seq);
       // echo($seq);
        $explodeWord = explode(" ", $seq); // works
       // $array = explode('', $seq, PHP_INT_MAX): array; // Up to this point works with array
       // print_r($explodeWord);
       sort($explodeWord); //works for sorting the array that has been exploded
       //print_r($explodeWord);
       $totCount = str_word_count($seq);
      // echo($totCount); //works on getting count of total words
       

       $counter = 0;
       $x = 0;
       $cur;

       if(!($explodeWord['0'] == "") || $totCount >= 2) {
           if($explodeWord['0'] == ""){
               $x++;
           };
           
           while($x < ($totCount)){
               $cur = $explodeWord[$x];
               $x++;
               $counter++;
               if($x < ($totCount - 1)){
                   while($explodeWord[$x] == $cur)
                   {
                       $x++;
                       $counter++;
                   }
               }

               echo "<br>";
               echo $cur.": ".$counter."\n";
               echo "<br>";
               
               $counter = 0;
               if($x == ($totCount)) {
                   $x++;
               }
           }
       }
    }
?>

<form action="" method="POST">
<textarea rows="40" cols="40" name="textbox" value="">
</textarea>
<input type="submit" name="sub" value="submit">
</form>
</body>

</html>