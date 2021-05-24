<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\User;
use App\Springs;
use App\Status;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class SpringsController extends Controller
{
    public function main()
    {
        $status = DB::table('status')->get();
        $springs = DB::table('springs')->get();
        return view('main', ['status' => $status, 'springs' => $springs]);
    }

    public function map()
    {
        $status = DB::table('status')->get();
        $springs = DB::table('springs')->get();
        return view('map', ['status' => $status, 'springs' => $springs]);
    }

    public function add()
    {
        return view('add');

    }

    public function create(Request $request)
    {

        $springs = new springs();

        $springs->name = '111';
        $springs->img = '111';
        $springs->latitude = request('latitude');
        $springs->longitude = request('longitude');
        $springs->description = '111';
        $springs->status_id = request('status_id');

        $springs->user_id = auth()->user()->id;

        $springs->save();

        return redirect('/main');

    }

    public function faq()
    {
        return view('faq');
    }

    public function spring($id)
    {
        $springs = DB::table('springs')->where('id', $id)->get();
        $status = DB::table('status')->get();

//      $status_spring = DB::table('status')->where('id', $springs[0]->id)->get();
//
//          print_r($springs[0]->id);
//          die();

        return view('spring', ['status' => $status, 'springs' => $springs]);
    }

    public function profile()
    {
        $users = DB::table('users')->get();

        return view('profile', ['users' => $users]);
    }

    public function update()
    {
        return view('update');
    }
}
