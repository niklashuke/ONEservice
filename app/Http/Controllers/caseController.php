<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class caseController extends Controller
{
    public function about ()
    {
    	$name = 'Huke AB';
    	
    	return view('pages.about', compact('name'));
    }

}
