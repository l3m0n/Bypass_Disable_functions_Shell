# Bypass Disable Functions Shell

项目旧文档已迁移到[此处](https://github.com/l3m0n/Bypass_Disable_functions_Shell/blob/master/paper/readme.old.md)

禁用函数列表(希望能做最全的禁用列表,也可以用此做对比进行绕过):

```
dl,exec,system,passthru,popen,proc_open,pcntl_exec,shell_exec,mail,imap_open,imap_mail,putenv,ini_set,apache_setenv,symlink,link
```

shell绕过已实现的方式:
- 常规绕过: exec、shell_exec、system、passthru、popen、proc_open
- ld_preload绕过: mail、imap_mail、error_log、mb_send_mail
- pcntl_exec
- imap_open
- fastcgi
- com
- apache mod-cgi

目录结构:
- env - docker环境, 用于测试各类绕过exp
- papar - bypass原理
- exp - bypass脚本



