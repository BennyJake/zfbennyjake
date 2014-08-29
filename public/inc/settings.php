<?php

/******** TEXT CONSTANTS ********/
$name = "Ben Chrisman";
$phoneNumber = "+13093403554";
$email = "me@bennyjake.com";

define("NAME", $name);
define("PHONE", $phoneNumber);
define("EMAIL", $email);
/******** END TEXT CONSTANTS *******/

/******** GRAVATAR RELATED **********/
include 'gravatarlib-master/Gravatar.php';
$gravatar = new \emberlabs\GravatarLib\Gravatar();
$gravatar->setAvatarSize(400);
$gravatar->setMaxRating('pg')
/******** END GRAVATAR RELATED *******/

?>