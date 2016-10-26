
<?php
  
msg("php enable_functions  enumeration script");
   $func_arr=array('disk_total_space','disk_free_space','exec','passthru','shell_exec','system','popen','show_source','pclose','proc_open','dl','chmod','php_real_logo_guid','php_egg_logo_guid','php_ini_scanned_files','php_ini_loaded_file','readlink','linkinfo','symlink','link','set_file_buffer','exec','system','escapeshellcmd','escapeshellarg','passthru','proc_close','proc_terminate','proc_get_status','proc_nice','getmyuid','getmygid','getmyinode','putenv','getopt','sys_getloadavg','get_current_user','magic_quotes_runtime','set_magic_quotes_runtime','import_request_variables','debug_zval_dump','ini_alter','dl','pclose','popen','stream_socket_client','stream_socket_server','stream_socket_accept','stream_socket_pair','stream_get_transports','stream_wrapper_restore','get_headers','mail','mb_send_mail','openlog','syslog','closelog','flock','pfsockopen','posix_kill','apache_child_terminate','apache_get_modules','apache_get_version','apache_lookup_uri','apache_reset_timeout','apache_response_headers','virtual');
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
     
   
   


?>