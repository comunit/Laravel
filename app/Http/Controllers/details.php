<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\User;
use App\Http\Controllers\Controller;

class details extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    public function show($id)
    {
      $users = DB::select('select * from mee where id = ?', [$id]);
        return view('details', ['users' => $users]);
    }
}