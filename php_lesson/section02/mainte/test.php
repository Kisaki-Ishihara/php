<?php

// パスワードを記録したファイルの場所
echo __FILE__;
// C:\xampp\htdocs\php\php_lesson\section02\mainte\test.php

echo '<br>';
// パスワード(暗号化)
echo(password_hash('password123', PASSWORD_BCRYPT));

?>