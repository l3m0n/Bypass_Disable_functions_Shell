
<?php
  
msg("php enable_functions  enumeration script");
   $func_arr=array('dl','exec','system','passthru','popen','proc_open','pcntl_exec','shell_exec','mail','symlink','putenv')
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