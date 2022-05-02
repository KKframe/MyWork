<?php 
if(!isset($_POST['x'])||
	!isset($_POST['y'])||
	!isset($_POST['opt'])||
	empty($_POST['x']) ||
	empty($_POST['y']) ||
	empty($_POST['opt'])){
?>
<form method ="post">
<label>x: </label>
<input type="text" name="x">
<br>
	<select name='opt'>
	<option value='+'>+</option>
	<option value='-'>-</option>
	<option value='*'>*</option>
	<option value='/'>/</option>
	<option value='%'>%</option>
	</select>
<br>
<label>y: </label>
<input type="text" name="y">
<br>
<input type="submit" value="send">
</form>
<?php
	exit; }
	$x=$_POST['x'];
	$opt=$_POST['opt'];
	$y=$_POST['y'];
	
	if($opt=='+'){echo ${x}." + ".${y}." = ".$x+$y;}
	else if($opt=='-'){echo ${x}." - ".${y}." = ".$x-$y;}
	else if($opt=='*'){echo ${x}." * ".${y}." = ".$x*$y;}
	else if($opt=='/'){echo ${x}." / ".${y}." = ".$x/$y;}
	else if($opt=='%'){echo ${x}." % ".${y}." = ".$x%$y;}
?>