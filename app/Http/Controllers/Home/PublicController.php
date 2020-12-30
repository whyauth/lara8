<?php


namespace App\Http\Controllers\Home;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PublicController extends BaseController
{
    public function login(Request $request){
        //echo $name;die;
        echo "<pre>";dump($request->all());die;
        //dd($request->all());
        //return view('Home.Public.lg');
        //return ['a' => 23, 'b' => 23, 'c' => 'd'];
        //return 'outout@@@';
    }
}
