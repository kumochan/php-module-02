<?php

final class FullName

{
    public $forename;

    public $surname;

    public function __construct(string $forename, string $surname)
    {
        $this->forename = $this->validateAndNormalize($forename);

        $this->surname = $this->validateAndNormalize($surname);
    }

    private function validateAndNormalize($name) : string
    {
        return ucwords($name);
    }

    public function __toString()
    {
        return $this->forename . ' ' . $this->surname;
    }
}

$o =  new FullName('aaa', 'bbb');
echo $o;
echo PHP_EOL;
$str = 'Full name is' . $o;
echo $str;