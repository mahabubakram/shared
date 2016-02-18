<?php

class TestController extends BaseController {


	// test
    public function index()
	{
        Mail::send('emails.test', array('key' => 'test message'), function($message)
        {
            $message->to('moinul_006@yahoo.co.uk', 'Moinul')->subject('Testing email!');
        });

	}

}
