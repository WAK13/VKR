<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function main()
    {
        $status = DB::table('status')->get();
        return view('main', ['status' => $status]);
    }
}
