<?php


namespace App\Http\Controllers\Home;


use Illuminate\Support\Facades\View;

class PublicController extends BaseController
{
    public function login(){

        return view('Home.Public.lg');
        //return ['a' => 23, 'b' => 23, 'c' => 'd'];
        //return 'outout@@@';
    }
}
