<?php
exec('bash -c "exec nohup setsid php /home/admin/web/zz.com/public_html/calculate/test2.php '.$val.' > /dev/null 2>&1 &"');

//$val is an option, you can send paramater with that. You dont have to use it like that

exec('bash -c "exec nohup setsid php /home/admin/web/zz.com/public_html/calculate/test2.php > /dev/null 2>&1 &"');
