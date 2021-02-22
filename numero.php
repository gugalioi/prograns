
<!DOCTYPE html>

<html>
<head>



</head>
<body>


<?php


$num1= $_GET[n1];
$num2=$_GET[n2];
$num3=$_GET[n3];


if($num1 > $num2 && $num1> $num3 ){

    echo "<p>$num1 é maior e $num3 é menor </p>";
}elseif($num2> $num1 && $num2 > $num3){

    echo "<p>$num2  maior  e $num1 e menor</p>";
    }elseif($nun3> $num1 && $num3 > $num2  ) {
echo "<p>$num3 maior  e $num2 e menor </p>";

    }else($num1 ==$num2 || $num2== $num3 || $num3==$num1)
    echo "<p>ha nuemros repetido </p>"


?>
    
</body>





</html>

