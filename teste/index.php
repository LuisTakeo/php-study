<?php

$pass = "123abc";
echo    "hello<br>";
$hashpass = md5($pass);
$hashpass2 = md5($pass);

echo "Senha via md5: 1 - $hashpass 2 - $hashpass2<br>";
if ($hashpass === $hashpass2)
    echo "Senha válida<br>";

$hashpass = hash('sha256', $pass);
$hashpass2 = hash('sha256', $pass);

echo "Senha via hash: 1 - $hashpass 2 - $hashpass2<br>";
if ($hashpass === $hashpass2)
    echo "Senha válida<br>";