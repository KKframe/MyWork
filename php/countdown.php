<?php 

if(!isset($_REQUEST["n"])){
	?>
	<form method="post">
	Number: <input type="text" name="n">
	<input type="submit" value = "submit">
	</form>
	<?php
		exit;
}

$num = $_REQUEST["n"];
$count =0;
echo "<body style='background-color:pink;font-size:20px;'>";
for($i=$num;$i>=0;$i--){
	$count++;
	echo "$i ";
	if($count==5){
		$count =0;
		echo "<br>";
	}
}
?>