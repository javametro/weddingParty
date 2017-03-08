<?php
	if($_POST["submit"] && $_POST["title"] && $_POST["content"]){
		$fp = fopen("top.inc", "r");
		$top =fread($fp);
		fclose($fp);
		
		$fp =fopen("end.inc", "r");
		$end = fread($fp);
		fclose($fp);
		
		$content = $top.$_POST["title"] . "<br>" . $_POST["content"].$end;
		$filename = date("YmjGis").".htm";
		$fp = fopen($filename, "w");
		fwrite($fp, $content);
		fclose($fp);
		echo "The text write file done.";
	}else{
		echo "Your input is not valid.";
	}
?>
