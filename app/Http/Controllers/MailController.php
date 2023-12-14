<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\AnalysisForm;
use App\Models\UserSubscription;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
	// Save new analysis form
	public function addAnalysisFormInquiry(Request $request) {

		$data = $request->validate([
			'name' => 'required|string',
			'email' => 'required|email:rfc,dns',
			'contact_number' => 'required|string',
		]);

		// Add additional value to the $data array
		$data['actionType'] = 'analysisForm';

		$newForm = AnalysisForm::create([
			'name'=> $data['name'],
			'email'=> $data['email'],
			'contact_number'=> $data['contact_number'],
		]);
		$newForm->save();

		Mail::to($newForm->email)->send(new SendMail($data));

		return redirect(route('index'))->withSuccess('Form has been submitted!');
	}

	// Save new user subscription
	public function addUserSubscription(Request $request): RedirectResponse {

		// Only execute create when user checks the policy checkbox
		if ($request->has('checkReadAgree') && $request->input('checkReadAgree') == true) {

			$data = $request->validate([
				'email' => 'required|email:rfc,dns',

			]);

			// Add additional value to the $data array
			$data['actionType'] = 'userSubscription';
	
			$newUserSubscription = UserSubscription::create([
				'email'=> $data['email'],
				'status'=> 'Active',
			]);
			$newUserSubscription->save();
	
			Mail::to($newUserSubscription->email)->send(new SendMail($data));
	
			return redirect(route('index'))->withSuccess('You have successfully subscribed!');
		} else {

			return redirect(route('index'))->with('error', 'Error subscribing.');
		}
	}
}
