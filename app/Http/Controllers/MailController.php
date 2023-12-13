<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnalysisForm;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
	// Save new analysis form
	public function store(Request $request) {
		$data = $request->validate([
			'name' => 'required|string',
			'email' => 'required|string',
			'contact_number' => 'required|string',
		]);

		$newForm = AnalysisForm::create($data);
		$newForm->save();

		Mail::to($newForm->email)->send(new SendMail($data));

		return redirect(route('index'))->withSuccess('Form has been submitted!');
	}
}
