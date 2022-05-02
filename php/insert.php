<?php
if(!isset($_REQUEST['fn']) 
	|| !isset($_REQUEST['ln']) 
	|| !isset($_REQUEST['nn']) 
	|| !isset($_REQUEST['tl']) ){
		?>
	<form method="get">
	First name: <input type="text" name="fn"><br>
	Last name:<input type="text" name="ln"><br>
	Nick name:<input type="text" name="nn"><br>
	Phone Number:<input type="text" name="tl"><br>
	<input type="submit" value="บันทึก">
	<input type="reset" value="ล้างข้อมูล">
	</form>
	<?php
	exit;
}
include("connection.php");
$fn=$_REQUEST['fn'];
$ln=$_REQUEST['ln'];
$nn=$_REQUEST['nn'];
$tl=$_REQUEST['tl'];
$sql = 'insert into phonebook(first_name,last_name,nickname,Tel)
values("'.$fn.'","'.$ln.'","'.$nn.'","'.$tl.'")';
$result = mysqli_query($cid,$sql);
echo "บันทึกเรียบร้อย";
?>
<br><a href="insert.php"><button>OK</button></a>
