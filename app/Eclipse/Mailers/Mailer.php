<?php

namespace Eclipse\Mailers;

use Illuminate\Support\Facades\Mail;

abstract class Mailer {

	public function sendTo($email, $subject, $view, $userData = [], $data = []) {

		Mail::send($view, ['user' => $userData, 'data' => $data], function($message) use($email, $subject) {
			$message->to($email)
					->subject($subject);
					
		});

	}

}