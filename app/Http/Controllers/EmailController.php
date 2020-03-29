<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailMessage;

class EmailController extends Controller
{
    public function email(Request $request) {
		if(View::exists('Main/main')) {
			if(!empty($request->input('Submit'))) {
				$data = ['email' => $request->input('Email'),
						'subject' => 'Email form webpage',
						'text' => $request->input('Text')];
				
				DB::insert('insert into emails (email, date) values(:Email, :Date)', ['Email' => $request->input('Email'),
				'Date' => date('Y-m-d h:m:s')]);
				
				Mail::to('besfor16@gmail.com', 'TeachHouse')->send(new EmailMessage ($data));
				
				if(!empty($request->input('Get_document'))) {
					$file = public_path().DIRECTORY_SEPARATOR.'Main/files/julias_document.pdf';
					$headers = [
						'Content-Type' => 'application/pdf',
					];

					return response()->download($file, 'Document.pdf', $headers);
				} else {
					return redirect()->back()->with('alert', 'Thank you for emailing us!');
				}
			}
		}
		abort(404);
	}
}
