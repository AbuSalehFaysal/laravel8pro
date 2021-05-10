<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index() {
        echo '<h1>FLUENT STRING</h1>';
        $slice = Str::of('Welcome to Abu Saleh Faysal')->after('Welcome to');
        echo $slice.'<br>';
        $slic2 = Str::of('Abu\Saleh\Faysal\Abu')->afterLast('\\');
        echo $slic2.'<br>';
        $string = Str::of('Hello')->append('World');
        echo $string.'<br>';
        $result = Str::of('LARAVEL')->lower();
        echo $result.'<br>';
        $replaced = Str::of('Laravel 7.0')->replace('7.0','8.0');
        echo $replaced.'<br>';
        $title = Str::of("This is a tiitle")->title();
        echo $title.'<br>';
        $slug = Str::of("Laravel 8 framework")->slug('-');
        echo $slug.'<br>';
        $substr = Str::of('Laravel Framework')->substr(7);
        echo $substr.'<br>';
        $trim = Str::of("/Laravel/")->trim('/');
        echo $trim.'<br>';
        $upper = Str::of('abu saleh faysal')->upper();
        echo $upper.'<br>';
    }
}
