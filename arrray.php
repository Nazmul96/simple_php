<?php

	$nazmul=array("rebeka"=>5,"shovon"=>11.20,"mitu"=>'ashol');
	$keys=array_keys($nazmul);
	
	for($i=0;$i<=count($keys); $i++){
		echo $nazmul[$keys[$i]] ."<br>";
	}
?>