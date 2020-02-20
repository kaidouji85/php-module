<?php
require_once("vendor/autoload.php");

use App\secretword\SecretWord;

$secretWord = new SecretWord();
print($secretWord->message());