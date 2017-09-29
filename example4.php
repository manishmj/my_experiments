<?php 
	if(!$fp = fopen("http://www.zappos.com/nike-free-run-black-victory-green-anthracite-white?zlfid=111" ,"r" )) 
	{ 
		echo "Some issue in connecting the webpage.";
		return false; 
	} //our fopen is right, so let’s go 
	$content = ""; 
	while(!feof($fp)) 
	{ 
		//while it is not the last line, we will add the current line to our $content 
		$content .= fgets($fp, 1024); 
	} 
	fclose($fp); 
	echo $content;
	//we are done here, don’t need the main source anymore 
?>