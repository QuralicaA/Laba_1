<?php
$sum = 0;
$N = $_POST["N"];
$x = $_POST["x"];
if((abs($x))>1){
for($n = 0; $n <= $N; $n++){
$sum = $sum + (1/(2*$n + 1)*$x**(2*$n + 1));
}
echo $sum;
} else{
echo 'Введённое значение X не соответствует условию ';
}
?>
