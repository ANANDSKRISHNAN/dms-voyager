<?php

namespace App\Http\Controllers\NotificationController;

use TCG\Voyager\Http\Controllers\VoyagerController as BaseVoyagerController;
use Mail;

class MailController extends BaseVoyagerController
{
    public function FunctionName(Request $request) {

    	Mail::send('emails.test', ['Body' => $request->input('body'), function ($m) {
            $m->from('anandsk94@gamial.com', 'Test');
            $m->to($input('to'),'')->subject('Test');
        });
    }
}