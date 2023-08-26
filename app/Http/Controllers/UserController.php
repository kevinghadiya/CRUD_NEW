<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function userpage()
    {
        return view('user');
    }

    function addUser(Request $req)
    {
        $addUser = DB::table('user')
            ->insert([
                'name' => $req->userName,
                'email' => $req->userEmail,
                'age' => $req->userAge,
                'city' => $req->userCity,
            ]);
        if ($addUser) {
            return redirect()->route('allUser');
        }
    }

    function allUSer()
    {
        $allUser = DB::table('user')->get();
        return view('welcome', ['data' => $allUser]);
    }


    function singleUSer(string $id)
    {
        $singleUser = DB::table('user')->get()
            ->where('id', $id);
        return view('singleUSer', ['data' => $singleUser]);
    }

    function deleteUSer(string $id)
    {
        $deleteUser = DB::table('user')
            ->where('id', $id)
            ->delete();
        if ($deleteUser) {
            return redirect()->route('allUser');
        }
    }

    function updetpage(string $id)
    {
        $updetpage = DB::table('user')
        ->where('id', $id)
        ->get();
        return view('updetUser',['data'=>$updetpage ]);
    }

    function updetUser(Request $req, $id)
    {
        $updetUser = DB::table('user')
            ->where('id', $id)
            ->update([
                'name' => $req->name,
                'email' => $req->email,
                'age' => $req->age,
                'city' => $req->city,
            ]);
            
        if ($updetUser) {
            return redirect()->route('singleUser',$id);
        }
    }


}