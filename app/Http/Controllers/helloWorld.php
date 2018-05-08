<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Mail\OrderShipped;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
class helloWorld extends Controller
{
    public function show()
    {
        Mail::to('comunit@live.com')->send(new OrderShipped);
        $users = DB::select('select * from mee');
        return view('hello-world', ['users' => $users]);
    }
}