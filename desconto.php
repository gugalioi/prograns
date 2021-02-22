<!DOCTYPE html>
<html char set = 'utf-8'>
<heand> 
<title>Desconto</title>


</heand>
<body> 
<?php

$compra =$_GET['produto'];
$valor = $_GET['bruto'];
$desc = $_GET['desconto'];
$percent = $compra * $desc/100;
$total = $compra - $percent;



echo "<p>Seu protudo é $compra no valor de R$: $valor com desconto de $desc % totalizando um valor de<b> $total</b> </p>"</br>;

if ($total<100 ){
    echo "<p> o desconto é <font color="green">bom</font> </p>";

}elseif ($total< 10 && $total >99.99 ){
echo "<p>O desconto é <font color="yellow">razoavel </font>.</p>";

}else {

    echo "<p> o desconto é <font color="red">ruim </font></p>";
}

?>

</body>

</html>