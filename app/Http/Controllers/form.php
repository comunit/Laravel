<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class form extends Controller
{
    public function form() {
    return view('form');
    }

    public function submit(Request $request) {
        $name = $request->input('name');
        $age = $request->input('age');
        $like = $request->input('likes');
    
        DB::insert('insert into mee (name, age, likes) values (?, ?, ?)', [$name, $age, $like]);
        return view('form');
    }
}
