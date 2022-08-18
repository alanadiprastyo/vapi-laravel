<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Flags;
use Illuminate\Http\Request;

class DuplicateController extends Controller
{
    public function verify(Request $request)
    {
        $challengeid="select * from user";
        $manual="select * from user";

        return $challengeid;
        return $manual;
    }
}
