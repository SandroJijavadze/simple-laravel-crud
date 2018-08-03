<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Libraries\Trains\Trains;
class BiletebiController extends Controller
{
    
	function index(Request $request){
         	$from = $request->input('from');
		$ret = "";	
		if ($from != 'batumi' and $from != 'tbilisi'){
			$ret = '<form action=\'/biletebi\' method=\'get\'><input name=\'from\' type=\'hidden\' value=\'batumi\'><input type=\'submit\' value=\'Batumi-Tbilisi\'/></form>';
			$ret = $ret.'<form action=\'/biletebi\' method=\'get\'><input name=\'from\' type=\'hidden\' value=\'tbilisi\'><input type=\'submit\' value=\'Tbilisi-Batumi\'/></form>';
			return view('biletebi')->with('ret', $ret);
		}
		
		$train = new Trains();
	        $ret = $train->getTrains($from);	
		return view('biletebi')->with('ret', $ret);

	}	



}
