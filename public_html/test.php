
<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>php02</title>
    </head>
<body>
<p>
<?php
if (isset($_COOKIE['user'])){
	echo "hello, ".$_COOKIE['user']."<br />";
	setcookie("user", $_COOKIE['user'] + 1);
	// $_COOKIE['user'] += 1;
	echo $_COOKIE['user']."<br />";
}
else {
	setcookie("user", "0", time()+100);
	echo "Set cookie"."<br />";
}
setcookie("user", "", time() - 10);
?></p>
</body>
</html>
