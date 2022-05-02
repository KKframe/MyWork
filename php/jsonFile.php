<?php
	if(isset($_GET['txt'])){
		$json = $_GET['txt'];
		$data = json_decode($json,true);
		if($data['op']=='plus')
			echo $data['x']."+".$data['y']."=".($data['x']+$data['y']);
		else if($data['op']=='minus')
			echo $data['x']."-".$data['y']."=".($data['x']-$data['y']);
		else if($data['op']=='multiply')
			echo $data['x']."x".$data['y']."=".($data['x']*$data['y']);
		else if($data['op']=='divide')
			echo $data['x']."/".$data['y']."="
			.($data['x']/$data['y']);
	}else{
		echo "please submit your json data!";
	}
	//ตอนจะrun บน browser-->jsonFile.php?txt={"x":"5","y":"5","op":"divide"}
?>
