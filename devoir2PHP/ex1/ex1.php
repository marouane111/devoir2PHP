<?php 

	function fun($string,$car){
		$res=explode($car, $string);
		print_r($res);
	}

	$s="Hello World";
	$c="l";
	fun($s,$c);
 ?>