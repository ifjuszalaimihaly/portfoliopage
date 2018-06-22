<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {
	public function sendMessage( Request $request ) {
		$data = [
			'name'        => $request->name,
			'subject'     => $request->subject,
			'email'       => $request->email,
			'messageBody' => $request->message
		];
		Mail::send( 'emails.contact', $data, function ( $mesage ) use ( $data ) {
			$mesage->from( $data['email'] );
			$mesage->to( 'ifjuszalaimihaly@gmail.com' );
			$mesage->subject( 'Üzenete megérkezett' );
		} );
		Mail::send( 'emails.contact-answer', $data, function ( $mesage ) use ( $data ) {
			$mesage->from( 'ifjuszalaimihaly@gmail.com' );
			$mesage->to( $data['email'] );
			$mesage->subject( $data['subject'] );
		} );
		return redirect()->back();
	}
}
