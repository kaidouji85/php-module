<?php
require_once("greeting.php");
require_once("secret-word.php");

use function \SecretWord\message;

print(message());