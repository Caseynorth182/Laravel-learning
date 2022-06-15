<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelController extends Controller
{
    public function Laravel()
    {
        return view('laravel', [
            'data' => [
                "Laravel Jetstream",
                "Models Directory",
                "Model Factory Classes"
            ]
        ]);
    }
}
