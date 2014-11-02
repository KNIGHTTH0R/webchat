<?php

header('content-type: application/json; charset=utf-8');
 //header('Content-Type: text/javascript; charset=UTF-8');
 
//$myurl = 'http://localhost/chat/chat/index.php?room=';
$myurl = 'http://www.portal-pt.com/chat/index.php?room=';


$con = mysql_connect ('localhost', 'chat', 'chat#01') or die("Unable to connect to MySQL");

$selected = mysql_select_db("chat",$con) or die("Could not select DB");

//execute the SQL query and return records
$result = mysql_query("SELECT id, title, url FROM rooms");

while ($row = mysql_fetch_assoc ($result)) {
  //$arr .= "{id:".$row{'id'}.", title:'".$row{'title'}."', url:'".$row{'url'}."'},";
 
  $row['url'] = $myurl.$row['url'];  // Server URL
  
  $arr [] =  $row ;
}

echo $_GET['callback'] . '('.json_encode($arr).')';

 //close the connection
//mysql_close($con);

?>