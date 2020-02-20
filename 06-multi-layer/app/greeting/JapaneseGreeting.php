<?php
namespace App\greeting;

class JapaneseGreeting implements Greeting
{
    public function message() {
        return 'こんにちは';
    }
}