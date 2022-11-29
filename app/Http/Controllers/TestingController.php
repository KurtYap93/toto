<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
	public function totoView() {
        $result = '';
		return view('toto', compact('result'));
	}
    public function toto(Request $request) {
        $input = $request->all();

        $c = explode(',',$input['c']);
        $ms = explode(',',$input['ms']);
        $db = explode(',',$input['db']);
        $of = explode(',',$input['of']);
        $h = explode(',',$input['h']);

        // $number = explode('', $input['numberSet']);
        // dd(strlen($input['numberSet']));
        $pattern = [];
        for ($i=0; $i < strlen($input['numberSet']); $i++) { 
            if(in_array($input['numberSet'][$i], $c))
                array_push($pattern, 'c');
            else if(in_array($input['numberSet'][$i], $ms))
                array_push($pattern, 'ms');
            else if(in_array($input['numberSet'][$i], $db))
                array_push($pattern, 'db');
            else if(in_array($input['numberSet'][$i], $of))
                array_push($pattern, 'of');
           	else if(in_array($input['numberSet'][$i], $h))
                array_push($pattern, 'of');
        }
        
    	$numbers = [];

    	$pattern1 = 8;
    	$pattern2 = 4;
    	$pattern3 = 2;
    	$pattern4 = 1;

    	for ($p1=0; $p1 < sizeof(${$pattern[0]}); $p1++) { 
    		$number = '';
    		for ($i=$pattern1; $i>0; $i--) { 
    			$number = ${$pattern[0]}[$p1];
    			
    			$numbers[] = $number;
    		}	
    	}

    	$p2count = 0;
    	$p2choice = 0;
    	foreach ($numbers as &$oneNumber) {
    		$p2count++;

    		$oneNumber .= ${$pattern[1]}[$p2choice];
    		if($p2count == $pattern2) {
    			$p2count = 0;
    			if($p2choice == 0)
    				$p2choice = 1;
    			else
    				$p2choice = 0;
    		}
    	}

    	$p3count = 0;
    	$p3choice = 0;
    	foreach ($numbers as &$oneNumber) {
    		$p3count++;

    		$oneNumber .= ${$pattern[2]}[$p3choice];
    		if($p3count == $pattern3) {
    			$p3count = 0;
    			if($p3choice == 0)
    				$p3choice = 1;
    			else
    				$p3choice = 0;
    		}
    	}

    	$p4count = 0;
    	$p4choice = 0;
    	foreach ($numbers as &$oneNumber) {
    		$p4count++;

    		$oneNumber .= ${$pattern[3]}[$p4choice];
    		if($p4count == $pattern4) {
    			$p4count = 0;
    			if($p4choice == 0)
    				$p4choice = 1;
    			else
    				$p4choice = 0;
    		}
    	}
    	
        $result = implode(', ', $numbers);
    	return view('toto', compact('result'));
    }
}
