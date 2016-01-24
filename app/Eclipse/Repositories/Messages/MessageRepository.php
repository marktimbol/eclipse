<?php

namespace Eclipse\Repositories\Messages;

use App\Message;

class MessageRepository implements MessageRepositoryInterface {

	public function store($data)
	{
		return Message::create($data);
	}
}