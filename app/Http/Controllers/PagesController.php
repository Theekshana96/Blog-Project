<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	$title="Welcome to My First Blog Project....";
    	return view('pages.index')->with('title', $title);
    }

    public function about(){
    	$title="About Us...";
    	return view('pages.about')->with('title', $title);
    }

    public function services(){
    	$data = array(
    		'title'=> 'This is Our Services...' ,
    		'services' => ['Service-01' , 'Service-02' , 'Service-03']
    	);
    	return view('pages.services')->with($data);
    }
}
