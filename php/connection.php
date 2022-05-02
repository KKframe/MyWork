<?php
	$host ="localhost";
	$user ="db620710038";
	$password ="D-3080b";
	$db = "std_u620710038";
	$cid = mysqli_connect($host,$user,$password,$db)or
			die("Connection failed");
			//echo "Successful connected .";
			/*$sql="select* from phonebook where first_name='Kanyaphat'";
			$result=mysqli_query($cid,$sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){
					
					echo"Name : ".$row["first_name"]." ".$row["last_name"]."<br>";
				}
			}else{
				echo "Not found.";
			}*/
			
	?>