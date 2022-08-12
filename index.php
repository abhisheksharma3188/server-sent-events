<html>
	<head>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
    <body>
		<center>
			<h1>Server Sent Events Demo</h1>
			<h1 id="response_h1"></h1>
		</center>
		<script>
			var source = new EventSource('fetch_script.php');
			source.onmessage = function(event) {
				console.log(event.data);
				document.getElementById('response_h1').innerHTML=event.data;  
			}    
		</script>
    </body>
</html>