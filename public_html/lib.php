

<?php
function htmlHeader($title){
	echo 
"<!DOCTYPE HTML>
<html>
	<head>
		<meta charset=\"utf-8\"><title>$title</title>
		<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/mystyle.css\">
	</head>
<body>";
}
function htmlBanner(){
	echo "
<header>
<div class=\"wrap\">
    <div class=\"logo\">
        <a href=\"\"><img src=\"./images/logo.png\" alt=\"NO LOGO\"></a>
    </div>
    <div class=\"clearFloat\"></div>
 </div>
</header>";
}
function htmlFooter($value='')
{
	echo     
"<div class=\"clearFloat\"></div>
    <footer>
            <div class=\"wrap\">
                <div class=\"about\">
                    <div class=\"title\">About Us</div>
                    <p>To add something.</p>
                </div>
            </div>
    </footer>
</body>
</html>";
}
function writeMsg() {
  echo "Hello world!";
}

?>