<?php
require_once "Instagram.php";

use MetzWeb\Instagram\Instagram;

$instagram = new Instagram('c31b0337f1414027bcd318b91a9b4d56');

echo $instagram->getLoginUrl();
echo '<a href="'.$instagram->getLoginUrl().'">ссылка на вход</a>';
echo $instagram->searchUser("cot.ton_baby")->meta->code;