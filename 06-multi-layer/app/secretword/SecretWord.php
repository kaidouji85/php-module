<?php
namespace App\secretword;

use App\greeting\JapaneseGreeting;

class SecretWord
{
    private $greeting;

    public function __construct()
    {
        $this->greeting = new JapaneseGreeting();
    }

    public function message() {
        return $this->greeting->message();
    }
}
