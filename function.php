<?php
	$n=2;
	function add()
	{
		static $a=0;
		$a++;
		echo $a;
	}
	add();
	
?>