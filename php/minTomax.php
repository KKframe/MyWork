<?php
if(!isset($_REQUEST['x']) || !isset($_REQUEST['y'])){?>
<form method = "post">
x: <input type="text" name='x'><br>
y: <input type="text" name='y'><br>
<input type="submit" value="send">
</form>
<?php 
exit;
}

$x = $_POST['x'];
$y = $_POST['y'];
$count = 0;
if($y < $x){
	$temp = $x;
	$x = $y;
	$y = $temp;
}
for($i=$x;$i<=$y;$i++){
	if($count%10!=0){
		$count++;
		echo $i." ";
	}else{
		echo "<br>".$i." ";
		$count=1;
	}
}

?>