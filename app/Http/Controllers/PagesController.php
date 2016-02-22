<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
   public function about()
   {

   		//Compact takes the keys given and looks for variables with the same name and builds up an associative array

   		$first = "Steven";
   		$last = "Jasionowicz";
   		$cars = [
   			'Ferrari', 'Mercedes', 'Haas'
   		];


   		return view('pages.about', compact('first', 'last', 'cars'));
   }

   public function contact()
   {
   	return view('pages.contact');
   }
}
