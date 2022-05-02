<?php
if(!isset($_COOKIE['count'])){
	$count =1;
}else{
	$count=$_COOKIE['count']+1;
}
setcookie("count", $count, time() + (86400), "/"); // 1 day = 86400s
if(isset($_COOKIE['user'])){
	$user =$_COOKIE['user'];
}
if(isset($_GET['user'])){
	setcookie("user", $_GET['user'], time() + (86400), "/"); // 1 day
	$user =$_GET['user'];
}
?>
<html>
<body>

<?php
if(isset($user)) {
  echo "Hello, '" . $user . "' <br>";
}
?>
You have visited this website <?php echo $count; ?> time(s).
<?php if($count==1){
	echo "<hr>Welcom for the first time!";
}?>
</body>
</html>