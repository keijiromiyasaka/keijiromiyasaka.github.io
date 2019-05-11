<?php
if (isset($_POST["check0"])) { $num[0] = $_POST["num0"]; }  
else { $num[0] = 0; } 
 
if (isset($_POST["check1"])) { $num[1] = $_POST["num1"]; }  
else { $num[1] = 0; } 

if (isset($_POST["check2"])) { $num[2] = $_POST["num2"]; }  
else { $num[2] = 0; } 
 
$sum = 0; 
$price = array(400,1000,3000);
for ($i = 0; $i < count($price); $i++) {
     $sum += $num[$i] * $price[$i]; 
 } 
$zeikomi = floor($sum * 1.08);
print "購入金額は" . $zeikomi . "円です。";

print "募金金額は".bokin($sum)."円です。"; 

function bokin($kingaku){
	$get_bokin =  $kingaku * 0.1;
	return $get_bokin; 
}
?>
<a href="report.php">トップページへ戻る</a>
