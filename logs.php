<?php
/**
		   Simple Anonymous Chat v1.2
		Core created by: Kenrick Beckett
		   Modified by: Akito Iwakura
		      http://sekkyoku.org
		  Modified by: Klyubin Timofey
		   http://hammer_dance.vk.com
**/

/*
	This is the log reader. Just log reader, no more functions.
*/
if ( $_GET['room'] ) { $cr = $_GET['room']; }else{ $cr = 'error.txt' ; }

if (file_exists('./rooms/'.$cr)) {
    $logs = file_get_contents('./rooms/'.$cr);
} else {
    file_put_contents('./rooms/'.$cr, '');
	$logs = file_get_contents('./rooms/'.$cr);
}
?>
<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Logs</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <div id="page-wrap" class="page-wrap">
		<div id="chat-wrap" class="chatd">
			<div id="chat-area"><?=$logs;?></div>
		</div>
		<div class="info">
			<a href="index.php?room=<?=$cr?>" >&larr; return</a>
		</div>
    </div>
</body>
</html>