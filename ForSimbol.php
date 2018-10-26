<html>
<head>
    <title></title>
</head>
<body>
<?php 


for ($i=0; $i<10 ; $i++) { 
    for ($j=0; $j<$i; $j++) { 
        echo " * ";
    }
    echo "<br />";
}

 ?>
 <p>
 <?php
echo "<pre>";
$space = 10;
for ($i = 0; $i <= 10; $i++) {
     
    for ($k = 0; $k < $space; $k++) {
        echo "&nbsp;";
    }
    for ($j = 0; $j < 2 * $i - 1; $j++) {
        echo "*";
    }
     
    $space--;
    echo "<br/>";
}
echo "</pre>";
?>
<p>
<?php

for( $a=10;$a>0;$a--){
for($i=1; $i<=$a; $i++){
echo "_";

}
for($a1=10;$a1>$a;$a1--){
echo"*";
}
for($a2=10;$a2>$a;$a2--){
echo"*";
}
echo"<br>";
}
for($b=0; $b<=10;$b++){
for($j=1;$j<=$b;$j++){
echo "_";
}
for($b1=10; $b1>$b;$b1--){
echo"*";
}
for($b2=10; $b2>$b;$b2--){
echo"*";
}
echo"<br>";
}
?>
<p>
<?php

for( $a=10;$a>0;$a--){
for($i=1; $i<=$a; $i++){
echo "_";

}
for($a1=10;$a1>$a;$a1--){
echo"*";
}
for($a2=10;$a2>$a;$a2--){
echo"*";
}
echo"<br>";
}
?>
<p>
<?php

for( $a=10;$a>0;$a--){

for($b=10;$b>$a;$b--){
echo"*";
}

echo"<br>";
}



?>


</body>
</html>