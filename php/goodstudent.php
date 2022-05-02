<?php 

if(!isset($_REQUEST["msg"])){
	?>
	<form method="post">
	Message: <input type="text" name="msg">
	<input type="submit" >
	</form>
	<?php
		exit;
}
$text = $_REQUEST["msg"];
for($i=0;$i<30;$i++){
	if($i%2!=0){
		echo "<font color='#0000FF'>";
	}
	else{
		echo "<font color='#FF0000'>";
	}
	echo "${text}</font>";
	echo "<br>";
}
?>