<?php
namespace App\Controllers;

use  App\Models\Foo;
use App\Models\SubModels\User;

class HomeController
{
    public function index()
    {
        $foo = new Foo();
        $foo->setName('Fanta');
        echo $foo->getName();

        echo "<br />";
        $user = new User();
        $user->setName('User');
        echo $user->getName();
    }
}