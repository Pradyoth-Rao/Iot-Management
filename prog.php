<?php 

$command = escapeshellcmd('timeseries.py');
$output = shell_exec($command);
echo $output;

?>
