<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index(){

        $values = Test::all();
        // データが取れているか確認　dd(確認したい変数);

        return view('tests.test', compact('values'));
    }
}
