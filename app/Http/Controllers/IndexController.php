<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class IndexController extends Controller
{
    public function index()
    {
    	$data = DB::table('users')->get();
    	/*echo '<pre>';
    	var_dump($data);*/
    	return view('user')->with("data", $data);
    }
}
