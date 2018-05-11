<?php
shell_exec("cd /var/www/html");
$output = shell_exec("git pull");
echo '<pre>'. $output .'</pre>';
