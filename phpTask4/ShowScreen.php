<?php

require_once ('./phpTask4/OutputText.php');

class ScreenPrinter extends OutputText
{
    public function __construct(string $string)
    {
        parent::__construct($string);
    }

    public function ScreenTextOnPrinter(): void
    {
        echo "Вывод на монитор: " . parent::getString();
    }
}

$a = new ScreenPrinter('asdasd');

$a->ScreenTextOnPrinter();