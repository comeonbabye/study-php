<?php
header("Content-Type: text/html;charset=utf-8");
$name = $_GET["name"];

function htmlcode($content) {

	return str_replace("\n", "<br>", $content);
}

$str = "hello, ".$name.". \n how are you.";

?>
<h3>欢迎你，<?php echo $name;?></h3>

<h3><?php echo htmlcode($str);?></h3>