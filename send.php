<?php

function exec_print($path){
	$command = "/home/klab/print.sh ";
	$command .= $path;
	//exec($command, $output, $status);
	echo $output;
}

$file = $_FILES['file']['tmp_name'];
exec_print($file);
//echo($file);



