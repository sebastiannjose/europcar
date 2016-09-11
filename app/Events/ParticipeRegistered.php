<?php namespace App\Events;

use App\Events\Event;

use Illuminate\Queue\SerializesModels;

class ParticipeRegistered extends Event {

	use SerializesModels;

	public $participe;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct($participe)
	{
		$this->participe = $participe;
	}

}
