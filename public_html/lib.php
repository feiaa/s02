

<?php
function htmlHeader($title){
	echo 
"<!DOCTYPE HTML>
<html>
	<head>
		<meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>$title</title> 
        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
		<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/mystyle.css\">
	</head>
<body>
<script src=\"js/jquery-3.2.1.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
";
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