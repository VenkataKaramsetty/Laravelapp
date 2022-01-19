<?php

namespace App\Http\Controllers;

class TagParser
{
    public function parse(string $tags)
    {
        return preg_split('/ ?[,|!] ?/', $tags);

    }
}
