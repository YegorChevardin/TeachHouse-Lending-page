<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SingupController extends Controller
{
	public function singup(Request $request) {
		if(View::exists('Main/main')) {
			
			if(!empty($request->input('Submit'))) {
				DB::insert('insert into next_class_humans (Name, Surname, Telephone, Age, Date, Time, Place) values(:Name, :Surname, :Telephone, :Age, :Date, :Time, :Place)', ['Name' => $request->input('Name'),
				'Surname' => $request->input('Surname'),
				'Telephone' => $request->input('Telephone'),
				'Age' => $request->input('Age'),
				'Date' => $request->input('Date'),
				'Time' => $request->input('Time'),
				'Place' => $request->input('Place')]);
				
				return redirect()->back()->with('alert', 'We will call you as fast as it possible!');
			}
		}
		abort(404);
	}
}
