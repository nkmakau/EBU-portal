<?php
Set $eConn = Server.CreateObject("ADODB.Connection");
$eConnString="Provider=mysql.1;Password=sfcintranet;Persist Security Info=True;User ID=sfcintranet;Initial Catalog=EBUDatabase;Data Source=localhost";
$eConn.$Open $eConnString; 
?>