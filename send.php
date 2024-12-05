<?php

function exec_print($path){
	$command = "/home/klab/print.sh ";
	$command .= $path;
	$ret = shell_exec($command);
	echo $ret;
}

$file = $_FILES['file']['tmp_name'];
exec_print($file);
//echo($file);



