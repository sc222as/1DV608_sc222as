<?php
$ip = "$_SERVER[REMOTE_ADDR]";
$time = date('Y-m-d H:i:s');
$session = "1";
$message = $_POST['message'];
																						#Anv�nds f�r att l�gga till data i databasen. Databasen heter test.db. Valde att anv�nda mig av SQLite3 d� jag
																						#Tycker att det �r v�ldigt smidigt.
addToDB($ip, $time, $session, $message);

   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('test.db');
      }
   }
   function addToDB($ip, $time, $session, $message){
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   $sql =<<<EOF
   INSERT INTO test (ip,time,session,message)
   VALUES('$ip', '$time', '$session', '$message');

EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }
   $db->close();
   }
