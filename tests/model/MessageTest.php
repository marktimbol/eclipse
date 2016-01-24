<?php

use App\Events\UserSubmittedAnEnquiry;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class MessageTest extends TestCase
{
	use DatabaseMigrations;

    public function test_it_saves_a_record_of_messages()
    {
    	$this->expectsEvents(UserSubmittedAnEnquiry::class);

    	$this->visit('/contact')
    		->type('Mark Timbol', 'name')
    		->type('mark@timbol.com', 'email')
    		->type('+971 56 375 9865', 'phone')
    		->type('My message', 'message')
    		->press('Send Message')
    		->seeInDatabase('messages', [
    			'name'	=> 'Mark Timbol',
    			'email'	=> 'mark@timbol.com',
    			'phone'	=> '+971 56 375 9865',
    			'message'	=> 'My message'
    			]);
    }
}
