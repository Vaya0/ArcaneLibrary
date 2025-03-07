<?php

namespace App\Http\Controllers;

class TestController
{
    function test()
    {
        $users = \App\Models\User::all();
        return response()->json($users);
    }
}
