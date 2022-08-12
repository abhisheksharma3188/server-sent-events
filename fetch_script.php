<?php
	header('Content-Type:text/event-stream');
	header('Cache-Control:no-cache');
	
	$response=rand(1,100);
	
	echo "data:".$response."\n\n";

	flush();
	//sleep(5);// SSE has default firing in 3 seconds. If we give sleep 1 seconds it will reduce firing speed to 4 seconds
?>