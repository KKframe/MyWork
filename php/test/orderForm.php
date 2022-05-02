<?php 
if(!isset($_REQUEST['O_Id'])
	||!isset($_REQUEST['OrderNo'])
	||!isset($_REQUEST['P_Id'])){?>
	<form method="post">
	OrderID: <input type="text" name="O_Id"><br>
	OrderNO.: <input type="text" name="OrderNo" maxlength='5'><br>
	PersonID: <input type="text" name="P_Id"><br>
	<input type="submit" value="save">
	<input type="reset" >
	</form>
	<?php 
	exit;
	}
	
	$O_Id=$_POST['O_Id'];
	$OrderNo=$_POST['OrderNo'];
	$P_Id=$_POST['P_Id'];
	
	include("connection.php");
	
	$sql0 = "select * from Persons where P_Id =".$P_Id;
	$result0 = mysqli_query($con,$sql0);
	if(mysqli_num_rows($result0)>0){
		$sql1="insert into Orders values(".$O_Id.",
		'".$OrderNo."',".$P_Id.")";
		$result1 = mysqli_query($con,$sql1);
		if($result1){
			echo "Saved successful.";
		}else{
			echo "Cannot insert!<br>";
			echo mysqli_error($con);
		}
	}else{
		echo "Error!! You can't save this data.";
	}
	?>
	<br><button><a href ="orderForm.php">BACK</a></button>

