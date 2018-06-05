<?php

namespace app\controllers;

class Error404
{
    public function __construct($error)
    {
        print_r("
            <div class='wrong-page'>
                <b>".$error."</b>
                <a href='index.php'><button>Go Home</button></a>
            </div>
        ");
    }
}
