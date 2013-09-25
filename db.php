<?php

   $hostName = '127.0.0.1';
  // $hostName = '79.98.65.34';
   $port='5432';
   $databaseName = 'HM1';
   $username_db = 'poses';
   $password_db = 'ma07';
   $u_folder = 'uploads_csv';
   function showerror()
   {
      die("Error " . mysql_errno() . " : " . mysql_error());
   }

 
?>
