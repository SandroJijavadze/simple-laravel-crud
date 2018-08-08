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
		$contents=content::orderBy('created_at', 'desc')->paginate(5);
		return view('index', compact('contents', 'user'));
	}
	function create(){
		return view('content.create');		
	}
	function destroy($id){
		content::find($id)->delete();
        	return redirect('/');
	}
	function edit($id){
		$contents = content::where('id', $id)->first();
		return view('content.edit')->with('content', $contents); 
	}


	function update($id){
		$cont = content::find($id);
		$cont-> text = Input::get('text');
		$cont->save();
		return redirect('/');
	}
	function store(){
		$content = new content;
		$content->text = Input::post('text');
		$content->username = Auth::user()->name;	
		$content->save();
		return redirect('/');
	}

}
