<?php
if(!isset($_POST['std']) 
	|| !isset($_POST['yr']) 
	|| !isset($_POST['tm']) ){
		?>
	<form method="post" >
	รหัสนักศึกษา: <input type="text" name="std"><br>
	ปีการศึกษา/ภาคการศึกษา:<input type="text" 
	maxLenght="4" name="yr" size="4"><br>
	<select name="tm" >
	<option  value="1">ต้น</option>
	<option  value="2">ปลาย</option>
	<option  value="3">ฤดูร้อน</option>
	</select><br>

	<input type="submit" value="ยืนยัน">
	<input type="reset" value="เคลียร์ข้อมูลในฟอร์ม">
	</form>
	<?php
	exit;
}
include("connection.php");
$std=$_POST['std'];
$year=$_POST['yr'];
$term=$_POST['tm'];


$sql = "select * from grade_tbl where studentID ='".$std."' and term ='1'and year ='".$year."'";
$result = mysqli_query($cid,$sql);
if(mysqli_num_rows($result)>0){
	echo "<strong>Student ID:</strong> ".$std."<br>";
	echo "<strong>Term:</strong> ".$term."/".$year."<br><hr>";
	$sql = "SELECT * FROM grade_tbl g JOIN subject_tbl s ON g.subjectID = s.subjectID where g.studentID ='".$std. "'";
	$result = mysqli_query($cid,$sql);
	$sumW=0.0;
	while($row = mysqli_fetch_assoc($result)){
		$g=0.0;
		echo "Subject: ".$row['subjectID']." (".$row['credit']." Credit)"
			." Grade: ".$row['grade']."<br>";
		$totalCR+=$row['credit'];
		if($row['grade']=='A'){$g=4;}
		else if($row['grade']=='B+'){$g=3.5;}
		else if($row['grade']=='B'){$g=3;}
		else if($row['grade']=='C+'){$g=2.5;}
		else if($row['grade']=='C'){$g=2;}
		else if($row['grade']=='D+'){$g=1.5;}
		else if($row['grade']=='D'){$g=1;}
		else if($row['grade']=='F'){$g=0;}
		//echo $g."<br>";
		$sumW+= $row['credit']*$g;
		//echo $row['credit']."<br>";
		//echo $sumW."<br>";
	}
	echo "<hr>Total Credit: ".$totalCR;
	echo "<br>GPA: ".($sumW/$totalCR)."<hr>";
	
}else{
	echo "ไม่พบข้อมูล";
}
?>
<br><a href="GPA.php"><button>ตกลง</button></a>