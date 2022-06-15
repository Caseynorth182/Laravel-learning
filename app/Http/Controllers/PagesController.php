<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\Util\Str;

class PagesController extends Controller
{


    public function helloPage()
    {
        $my_skills = ['hello', '123123', 'Sasha'];
        $name = 'Tanya';
        $res = [
            'name' => $name,
            'skills' => $my_skills
        ];

        if (1 == 1) {
            $res['test'] = 'rararara';
        }

        return view('hello', $res);
    }

    public function testPage()
    {
        return view('test');
    }
}
