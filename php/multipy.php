
<?php

if(!isset($_REQUEST["n"])){
	?>
	<form method="post">
	Number: <input type="text" name="n">
	<input type="submit" >
	</form>
	<?php
		exit;
}
$num = $_REQUEST["n"];
if($num<2 || $num!=(int)$num){ //$num!=(int)$num เพื่อไม่ให้ใส่อักขระและให้ใส่จำนวนเต็มเท่านั้น
	echo "Error!";
	exit;
}
echo "<table border =1>";
echo "<th colspan='2'>".$num."</th>";
for($i=1;$i<=12;$i++){
	$ans = $num*$i;
	if($i%2===0){
		$bg_col ="grey";
		$font_col="white";
	}
	else{
		$bg_col ="pink";
		$font_col="black";
	}
	echo "<tr style='background-color:${bg_col};color:${font_col}'><td>"
	.$i."</td><td>".$ans."</td></tr>";
}
echo "</table>";
?>