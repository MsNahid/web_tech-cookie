<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + 40, "/");
?>

<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])){
	echo "Cookie name ".$cookie_name. " is not set.";
	
}else {
	echo "cookie ".$cookie_name. " is set<br>";
	echo "Value is: ".$_COOKIE[$cookie_name];
}
?>

</body>
</html>

