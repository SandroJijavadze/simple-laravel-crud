<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\content;
//use App\user;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{
	function index(){
		$user = Auth::user();
		//$user = "randomUser1235";
		$contents=content::all();
		return view('index', compact('contents', 'user'));
	}
}