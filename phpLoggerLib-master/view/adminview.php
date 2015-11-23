<?php
require_once("../model/retrievefromdb.php");

$data = retrievefromdb();
#var_dump($data[0]['ip']);


echo "<ul>";
for ($i = 0; $i < count($data); $i++) {
    echo "<li>".$data[$i]['ip'],$data[$i]['time'],$data[$i]['session'],$data[$i]['message']."</li>"; 
	
		
}

echo "</ul>";



