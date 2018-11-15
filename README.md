# Bypass_Disable_functions_Shell
一个各种方式突破Disable_functions达到命令执行的shell

### 防御
dl,exec,system,passthru,popen,proc_open,pcntl_exec,shell_exec,mail,imap_open

### 功能
##### imap_open bypass
https://antichat.com/threads/463395/#post-4254681

##### 利用环境变量LD_PRELOAD来绕过

http://drops.wooyun.org/tips/16054

##### ImageMagick绕过

http://drops.wooyun.org/papers/15589

https://www.exploit-db.com/exploits/39766/

##### imagecreatefromgd2

https://github.com/l3m0n/exploits/tree/master/CVE-2016-3074

##### test

https://github.com/l3m0n/exploits/tree/master/CVE-2016-3078

##### PHP OPcache

http://www.myhack58.com/Article/html/3/62/2016/74160.htm

http://blog.gosecure.ca/2016/04/27/binary-webshell-through-opcache-in-php-7/

##### mail函数

https://www.leavesongs.com/PHP/php-bypass-disable-functions-by-CVE-2014-6271.html

https://www.exploit-db.com/exploits/35146/

##### 利用pcntl_exec突破

http://www.cnseay.com/2632/comment-page-1/

```
#exec.php
<?php pcntl_exec(“/bin/bash”, array(“/tmp/b4dboy.sh”));?>
#/tmp/b4dboy.sh
#!/bin/bash
ls -l /
```

##### 破壳bash漏洞

##### dl

https://www.exploit-db.com/docs/38104.pdf

##### PHP 5.x - COM functions safe_mode and disable_function bypass

https://www.exploit-db.com/exploits/4553/

https://www.exploit-db.com/exploits/4517/

##### win_shell_execute

https://www.exploit-db.com/exploits/4218/

##### Bypass PHP system functions disabled via mod_cgi

http://0cx.cc/bypass_disabled_via_mod_cgi.jspx

##### mail的exim扩展bypass
http://www.cnblogs.com/iamstudy/articles/Exim_mail_bypass_disable_function.html



