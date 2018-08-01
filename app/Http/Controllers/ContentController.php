<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\content;
//use App\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

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
		content::find($id)->delete();
        	return redirect('/');
	}
	function edit($id){
		$user = Auth::user();
		$contents = content::where('id', $id)->first();
		return view('contentedit', compact('contents', 'user'))->with('content', $contents); 
	}


	function update($id){
		$cont = content::find($id);
		$cont-> text = Input::get('text');
		$cont->save();
		return redirect('/');
	}

}
