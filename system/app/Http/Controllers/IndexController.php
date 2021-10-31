<?php 

namespace App\Http\Controllers;


class indexController extends Controller
{
	function showabout(){
	
	    return view('about');
	}

	function showwhy(){

		return view('why');

	}


	function showproduct(){

		return view('product');

	}

	function showtestimonial(){

		return view('testimonial');

	}

}