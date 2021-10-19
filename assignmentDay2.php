<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Day 2</title>
</head>
<body>
<?php
for($i = 1; $i <=5; $i++) {
   
   for ($j = 0; $j < $i ; $j++) {
       echo "*";
       
   }
   echo "<br>";
}
for($i = 1 ;$i <=5; $i++) {
 
   for ($j = 1; $j <= 6-$i ; $j++) {
       echo "*";
   }
   echo "<br>";
   
 
}



echo"<br>";
echo"<br>";

$k = 0;
for ($i = 0; $i <=30; $i++) {
    echo $i." ";
    $k += $i;
    
}
echo "The sum of 0 to 30 is ".$k;

echo"<br>";
echo"<br>";

$l = 0;
for ($i = 30; $i <=50; $i++) {
    echo $i." ";
    if ($i%2 == 1) {
        $l += $i;
    }
    
    
}
echo "The sum of all odd numbers between 30 to 50 is ".$l;

echo"<br>";
echo"<br>";
$count;
$sentence = "Hello there my name is Kevin.";
echo $sentence ."<br>";
$replace = preg_replace('/\s+/','%',$sentence,10,$count);
echo $replace ."<br>";
echo "The number of replace is ".$count;


?>
</body>
</html>