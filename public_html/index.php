<html>
<body>
<p><h1><?php 
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	$cl_ip_addr = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$cl_ip_addr = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
			$cl_ip_addr = $_SERVER['REMOTE_ADDR'];
    }
print "Client IP address: {$cl_ip_addr}";
?> 
</h1></p>
<?php phpinfo();?>
</body>
</html>
