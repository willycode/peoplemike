<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		</br>
		開團成功!!!</br>
		趕快把網址分享出去吧:
		<?php
        	$url = 'https://peoplemike-willycode-1.c9.io/index.php/news';
        	$tinyurl = file_get_contents( 'http://tinyurl.com/api-create.php?url='.urlencode($url) );
        	echo ("<a href=\"$tinyurl\"target=\"_new\">$tinyurl</a>");
		?>
		</br>
		轉貼FB</br>
		轉發LINE</br>
		</br>
	</body>
</html>