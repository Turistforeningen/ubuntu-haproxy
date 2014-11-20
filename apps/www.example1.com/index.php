<?php

header('Content-Type: text/plain');

echo "Hello from example 1\n\n";

echo "Hostname: ".$_SERVER['HTTP_HOST'] . "\n";
echo "Server IP: ".$_SERVER['SERVER_ADDR'] . "\n";
echo "Client IP: ".$_SERVER['REMOTE_ADDR'] . "\n";
echo "X-Forwarded-For: ".$_SERVER['HTTP_X_FORWARDED_FOR'] . "\n";
echo "X-Forwarded-Proto: ".$_SERVER['HTTP_X_FORWARDED_PROTO'] . "\n";

?>

