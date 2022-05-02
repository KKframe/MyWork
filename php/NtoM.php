<?php 
if(!isset($_REQUEST["n"]) 
	|| !isset($_REQUEST["m"]) 
	|| empty($_REQUEST["n"]) 
	|| empty($_REQUEST["m"])){
	?>
	<form method="post">
	N: <input type="text" name="n">
	M: <input type="text" name="m">
	<input type="submit" value = "submit">
	</form>
	<?php
		exit;
}
$n = $_REQUEST["n"];
$m = $_REQUEST["m"];
if( $n!=(int)$n || $m!=(int)$m){ //$num!=(int)$num เพื่อไม่ให้ใส่อักขระและให้ใส่จำนวนเต็มเท่านั้น
	echo "Error!";
}
//echo "<body style='background-color:pink;font-size:20px;'>";
$max = 0;
$min = 0;

	if($n>=$m){
		$max = $n;
		$min = $m;
	}else{
		$max = $m;
		$min = $n;
	}
$count=0;	
for($i=$max;$i>=$min;$i--){
	$count++;
	echo "$i ";
	if($count==5){
		$count =0;
		echo "<br>";
	}
}
?>