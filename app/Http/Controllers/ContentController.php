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
	function create(){
			
	}
	public function destroy($id){
		return("delete id = $id"); 
		content::find($id)->delete();
        	return redirect('/');
	}
	function edit($id){
		$content = content::where('id', $id)->first();
		return("edit id = $id");	
	}


}
