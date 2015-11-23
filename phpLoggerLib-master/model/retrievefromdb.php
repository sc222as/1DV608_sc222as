<?php
function retrievefromdb(){
	
																												#Används för att hämta data i databasen. Databasen heter test.db. Valde att använda mig av SQLite3 då jag
																												#Tycker att det är väldigt smidigt och "lightweight".
   class MyDB extends SQLite3
   {	
      function __construct()
      {
         $this->open('../model/test.db');
      }
   }
   $db = new MyDB();
   $data = array();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      #echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      SELECT * from test;
EOF;
	
   $ret = $db->query($sql);																						# Här lägger jag all data från databasen i en array som heter $data och returnerar den. 
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      $row_array['ip'] = "ip = ". $row['ip'] . "\n";
      $row_array['time'] = "time = ". $row['time'] ."\n";
      $row_array['session'] =  "session = ". $row['session'] ."\n";
      $row_array['message'] =  "message =  ".$row['message'] ."\n\n";
	  array_push($data, $row_array);
   }
   #echo "Operation done successfully\n";
   $db->close();
   return($data);
   }
