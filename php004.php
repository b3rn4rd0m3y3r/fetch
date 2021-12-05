<?php
$S = "";
$ori = "";
for($i=1;$i<20;$i++){
	$ori = "000".trim($i);
	$S .= substr($ori, strlen($ori)-3 ,3) ;
	$S .= ",";
	
	}
$S = substr($S, 0, strlen($S)-1);
echo $S;
?>