<?php
namespace App\greeting;

class EnglishGreeting implements Greeting
{
    public function message() {
        return 'hello';
    }
}