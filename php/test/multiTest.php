<?php 
if(!isset($_POST['x'])){?>
	<form method="post">
	n: <input type="text" name="x">
	<input type="submit" value="ส่งค่า">
	</form>
<?php exit; 
}

$x = $_POST['x'];
echo "<table border=1><th colspan='2'>${x}</th>";
for($i=1;$i<=12;$i++){
	echo "<tr>
	<td>${i} x ${x}</td>
	<td>".$i*$x."</td>
	</tr>";
}
	echo "<table>";
?>

