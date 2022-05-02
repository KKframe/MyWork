<?php
if(!isset($_POST['std']) 
	|| !isset($_POST['yr']) 
	|| !isset($_POST['tm']) 
	|| !isset($_POST['sub'])
	|| !isset($_POST['grd'])){
		?>
	<form method="post" >
	StudentID: <input type="text" name="std"><br>
	Year:<input type="text" maxLenght="4" name="yr"><br>
	Term:<input type="number" max="2" name="tm"><br>
	SubjectID:<input type="text" maxLenght="6" name="sub"><br>
	Grade:<input type="text" name="grd"><br>
	<input type="submit" value="บันทึก">
	<input type="reset" value="ล้างข้อมูล">
	</form>
	<?php
	exit;
}
include("connection.php");
$std=$_POST['std'];
$year=$_POST['yr'];
$term=$_POST['tm'];
$subID=$_POST['sub'];
$grade=$_POST['grd'];


$sql = "select subjectID from subject_tbl where subjectID = '$subID'";
$result = mysqli_query($cid,$sql);
if(mysqli_num_rows($result)>0){
	$sql = "INSERT INTO `grade_tbl` (`studentID`, `year`, `term`, `subjectID`, `grade`) VALUES ('".$std."', '".$year."', '".$term."', '".$subID."', '".$grade."')";
	$result = mysqli_query($cid,$sql);
	echo "บันทึกเกรดสำเร็จ";
}else{
	echo "บันทึกไม่สำเร็จ เนื่องจากไม่มีรายวิชานี้";
}


?>
<br><a href="formStd.php"><button>OK</button></a>