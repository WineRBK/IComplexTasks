<?php

require_once ('./phpTask4/OutputText.php');

class ShowPrinter extends OutputText
{
    public function __construct(string $string)
    {
        parent::__construct($string);
    }

    public function showTextOnPrinter(): void
    {
        echo "Вывод на принтер: " . parent::getString();
    }
}

$a = new ShowPrinter('asdasd');

$a->showTextOnPrinter();